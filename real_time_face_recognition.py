# -----------------------------------------------------------------------------------------
# Code taken from https://github.com/davidsandberg/facenet with modifications
# -----------------------------------------------------------------------------------------

# coding=utf-8
"""Performs face detection in realtime.

Based on code from https://github.com/shanren7/real_time_face_recognition
"""
# MIT License
#
# Copyright (c) 2017 François Gervais
#
# Permission is hereby granted, free of charge, to any person obtaining a copy
# of this software and associated documentation files (the "Software"), to deal
# in the Software without restriction, including without limitation the rights
# to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
# copies of the Software, and to permit persons to whom the Software is
# furnished to do so, subject to the following conditions:
#
# The above copyright notice and this permission notice shall be included in all
# copies or substantial portions of the Software.
#
# THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
# IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
# FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
# AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
# LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
# OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
# SOFTWARE.

import argparse
import sys
import time
import mysql.connector as my
import cv2

import packages.face as face

'''
function write_db
    function for writing mysql database from python
    version 0.0
    mydb = mysql database connection
    sql = query function
    multival:
     True = write multiple rows
     False = write single row
    val= query values:
     multival = True => val => Lists
     multival = False => val => Tuples
'''
def write_db(mydb, sql, val, multival):
    mycursor = mydb.cursor()
    if not multival:
        mycursor.execute(sql, val)
    else:
        mycursor.executemany(sql, val)
    mydb.commit()

'''
function read_db
    function for reading mysql database from python
    version 0.0
    mydb = mysql database connection
    sql = query function
    val= query values:
'''
def read_db(mydb, sql, val):
    mycursor = mydb.cursor()
    mycursor.execute(sql, val)
    return mycursor.fetchall()

def add_overlays(frame, faces, frame_rate):
    if faces is not None:
        for face in faces:
            face_bb = face.bounding_box.astype(int)
            cv2.rectangle(frame,
                          (face_bb[0], face_bb[1]), (face_bb[2], face_bb[3]),
                          (0, 255, 0), 2)
            if face.name is not None:
                cv2.putText(frame, face.name, (face_bb[0], face_bb[3]),
                            cv2.FONT_HERSHEY_SIMPLEX, 1, (0, 255, 0),
                            thickness=2, lineType=2)

    cv2.putText(frame, str(frame_rate) + " fps", (10, 30),
                cv2.FONT_HERSHEY_SIMPLEX, 1, (0, 255, 0),
                thickness=2, lineType=2)

def main(args):
    frame_interval = 3  # Number of frames after which to run face detection
    fps_display_interval = 5  # seconds
    frame_rate = 0
    frame_count = 0

    video_capture = cv2.VideoCapture(0)
    face_recognition = face.Recognition()
    start_date = time.strftime("%Y-%m-%d",time.localtime())
    start_time = time.time()

    if args.debug:
        print("Debug enabled")
        face.debug = True

    # connect to class database
    mydb = my.connect(
        host="localhost",
        user="root",
        passwd="",
        database="sac"
    )

    # add column for today's class 
    sql = "select column_name from information_schema.columns where table_name = 'RPL_att' and column_name = %s"
    val = (start_date,)
    x = read_db(mydb, sql, val)
    if not x:
        sql = "alter table RPL_att add `" + start_date + "` time"
        val = ()
        write_db(mydb, sql, val, False)
    
    # read class attendance
    sql = "select Name, `2018-12-27` from RPL_att"
    val = ()
    read_att = read_db(mydb, sql, val)

    class_att = {}
    for i in range(len(read_att)):
        class_att[read_att[i][0]]=read_att[i][1]

    play = True
    while play:
        # Capture frame-by-frame
        ret, frame = video_capture.read()

        if (frame_count % frame_interval) == 0:
            faces = face_recognition.identify(frame, 0.5)
            
            # Check our current fps
            end_time = time.time()
            if (end_time - start_time) > fps_display_interval:
                frame_rate = int(frame_count / (end_time - start_time))
                start_time = time.time()
                frame_count = 0
        
        add_overlays(frame, faces, frame_rate)

        frame_count += 1
        cv2.imshow('Attendance', frame)
        cv2.moveWindow('Attendance', 405, 180)

        # Update attendance
        for fc in faces:
            if fc.name is not "Unknown":
                class_att[fc.name] = time.strftime("%H:%M:%S",time.localtime())
                '''
                # realtime db update
                sql = "update RPL_att set `" + start_date + "` = %s where Name = %s" 
                val = (time.strftime("%H:%M:%S",time.localtime()), fc.name)
                write_db(mydb, sql, val)
                '''
        
        if cv2.waitKey(100) & 0xFF == ord('q'):
            break
        play = cv2.getWindowProperty('Attendance', 0) >= 0 # check if 'Attendance' window is closed

    # When everything is done, release the capture
    video_capture.release()
    cv2.destroyAllWindows()

    # update database
    write_att = []
    for key in class_att.keys():
        write_att.append((class_att[key],key))
    
    sql = "update RPL_att set `" + start_date + "` = %s where Name = %s" 
    write_db(mydb, sql, write_att, True)

def parse_arguments(argv):
    parser = argparse.ArgumentParser()

    parser.add_argument('--debug', action='store_true',
                        help='Enable some debug outputs.')
    return parser.parse_args(argv)


if __name__ == '__main__':
    main(parse_arguments(sys.argv[1:]))
