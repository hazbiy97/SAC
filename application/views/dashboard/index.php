<!DOCTYPE html>
<html class="no-js" lang="en"> 
  <head>

     <!--- basic page needs
     ================================================== -->
    <meta charset="utf-8">
    <title>ERICSSON | TOOLS</title>
    <meta name="description" content="">  
    <meta name="author" content="">

     <!-- mobile specific metas
     ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
     ================================================== -->
     <link rel="stylesheet" href="<?php echo base_url();?>assets/coroowicaksono/homepage/css/base.css">  
     <link rel="stylesheet" href="<?php echo base_url();?>assets/coroowicaksono/homepage/css/main.css">
     <link rel="stylesheet" href="<?php echo base_url();?>assets/coroowicaksono/homepage/css/vendor.css">   
     <link rel="stylesheet" href="<?php echo base_url();?>assets/coroowicaksono/homepage/fonts/_ericssonfonts.css">    

     <style type="text/css">
          <?php
            $ekunbarbg = range(1, 11);
            shuffle($ekunbarbg);
            foreach ($ekunbarbg as $ekunbarbg) {
                echo "
        #intro {
          background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.2)), #090909 url(".base_url()."assets/coroowicaksono/homepage/images/bg/".$ekunbarbg.".jpg) no-repeat center;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          background-size: cover;
          width: 100%;
          height: 100%;
          min-height: 720px;
          display: table;
          position: relative;
        }";
            }
          ?>
          <?php
            $ekunbarfeatbg = range(1, 4);
            shuffle($ekunbarfeatbg);
            foreach ($ekunbarfeatbg as $ekunbarfeatbg) {
                echo "
        #features {
          background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), #14181E url(".base_url()."assets/coroowicaksono/homepage/images/bg/".$ekunbarfeatbg.".jpg) no-repeat center;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          background-size: cover;
          background-opacity: 0.7;
        }";
            }
          ?>
        h1, h2, h3, h4, h5, .widget, .x-navigation, .breadcrumb, .mb-title, .ericssonfont {
          font-family: 'ericsson_capital', Arial !important;
          font-weight: 400;
        }
        .treeview-menu, .copyright, .footer-main p {
          font-family: arial,helvetica,clean,sans-serif !important;
        }
        .main-navigation {
          font-family: arial,helvetica,clean,sans-serif !important;
          font-size: 18px;
          font-weight: 400;
          font-style: none;
        }
     </style>

     <!-- script
     ================================================== -->
    <script src="<?php echo base_url();?>assets/coroowicaksono/homepage/js/modernizr.js"></script>

     <!-- favicons
    ================================================== -->
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/coroowicaksono/img/ericsson_logo.ico">

  </head>

  <body id="top">

    <!-- header 
     ================================================== -->
    <header>

      <div class="row">

        <div class="logo">
          <a href="<?php echo base_url();?>">ERICSSON TOOL</a>
        </div>

        <nav id="main-nav-wrap">
          <ul class="main-navigation">
            <li class="current"><a class="smoothscroll desktop"  href="#intro" title="">Home</a></li>
            <li><a class="smoothscroll desktop"  href="#process" title="">Terms & Condition</a></li>
            <li><a href="http://www.ericsson.com/thinkingahead/networked_society/stories/#/film" target="_blank" title="" >Network Society</a></li>
            <!--<li><a class="smoothscroll"  href="#features" title="">Features</a></li>
            
            <li><a class="smoothscroll"  href="#faq" title="">FAQ</a></li>          -->
            <!--<li><a  href="http://eidwhd.com/index.php/training/" title="">Register Training</a></li>-->
            <li class="highlight with-sep"><a class="smoothscroll" href="#ekunbarloginform" title="Login">Sign In </a></li>          
          </ul>
        </nav>

        <a class="menu-toggle" href="#"><span>Menu</span></a>
        
      </div>    
      
    </header> <!-- /header -->

    <!-- intro section
     ================================================== -->
    <section id="intro" class="desktop">

      <div class="shadow-overlay"></div>

      <div class="intro-content">
        <div class="row">

          <div class="col-twelve">

            <div class='video-link'>
              <a href="#video-popup"><img src="<?php echo base_url();?>assets/coroowicaksono/homepage/images/play-button.png" alt=""></a>
            </div>

            <h5>welcome to Ericsson Apps</h5>
            <h2>Think smart, Work Smart<br/>Make your life a lot easier</h2>

          </div>  
          
        </div>          
      </div> 

      <!-- Modal Popup
       ========================================================= -->

      <div id="video-popup" class="popup-modal mfp-hide desktop">

       <div class="fluid-video-wrapper desktop">
            <iframe src="https://www.youtube.com/embed/L5Pxenw7UFA?title=0&amp;byline=0&amp;portrait=0&amp;color=faec09" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
         </div>        

         <a class="close-popup">Close</a>         

       </div> <!-- /video-popup -->     

    </section> <!-- /intro -->

    <div class="line-ericsson"></div>

     <!-- Process Section
     ================================================== -->
    <section id="process" class="desktop">  

      <div class="row section-intro">
        <div class="col-twelve with-bottom-line">

          
 <h5>ERICSSON APPS</h5>
          <h1>Terms & Condition</h1>
        </div>      
      </div>

      <div class="row process-content">

       

          <p class="lead" style="margin-bottom: 2px;color:#777">If you are not an authorized user, please exit immediately. In accordance with requirements of data protection laws, we hereby inform you that personally identifiable information will be handled in log files for legal, security and costs reasons.<br/><br/>Log-in is only allowed for authorized users.</p>
<!--
        <a class="smoothscroll" href="#ekunbarloginform" title="Responsive"><div class="image-part"></div></a>      
-->
      </div> <!-- /process-content --> 

     </section> <!-- /process-->    


     <!-- features Section
     ================================================== -->
    <section id="features" class="desktop">

      <div class="row features-content">

        <div class="features-list block-1-3 block-s-1-2 block-tab-full group">

            <div class="bgrid feature"> 

              <span class="icon"><i class="icon-window"></i></span>            

                <div class="service-content"> 

                  <h3 class="h03" style="color:#FFF">Any Device View</h3>

                  <p>Responsive web design allows <b>EIDWHD</b> site’s layout to change as the screen size being used to view this site changes. EIDWHD on wide screen display can receive a site design with multiple columns of content while a small screen can have that same content presented in a single column with text and links that are appropriately sized to be read and used on that smaller device.
                  </p>
                
              </div>             

          </div> <!-- /bgrid -->

          <div class="bgrid feature"> 
            <br/><br/><br/>
            <span class="icon"><i class="icon-layers"></i></span>                          

                <div class="service-content">
                  <h3 class="h03" style="color:#FFF">All in one Connection</h3>  

                  <!--<p>Warehouse & Distribution has a lot of tools. Eidwhd.com help you to quickly find the data that you are find on those tools and stay up to date with the helicopter visualization display. Helicopter visualization enhance your reading experience for data, for instance, by helping you to take a look performance for vendor distribution on weekly based.
                </p>-->

                
                </div>                            

           </div> <!-- /bgrid -->

           <div class="bgrid feature">

            <span class="icon"><i class="icon-paint-brush"></i></span>                

                <div class="service-content">
                  <h3 class="h03" style="color:#FFF">Stylish Design</h3>

                  <p>As a market leader, we, Ericsson, strives to lead industry transformation through mobility. Telling the story of our growing product portfolio and our latest projects is one way of communicating who we are and what we do.
                   This tool also using Ericsson identity in scope of logotype, graphics, images and words.
                  </p>

                  
                </div>                               

           </div> <!-- /bgrid -->

          </div> <!-- features-list -->
        
      </div> <!-- features-content -->
      
    </section> <!-- /features -->
    

    <!-- pricing
     ================================================== -->

    <section class="content" id="ekunbarloginform">
        <?php                    
        if(isset($_view) && $_view)
            $this->load->view($_view);
        ?>                    
    </section>
        
     <!-- cta
     ================================================== -->
     <section id="cta">

      <div class="row cta-content">

        <div class="col-twelve">

          <h2 style='color:#FFF'>Still don't have account ?</h2>

          <p class="lead" style="font-size:12px">Request by Mail :</p>

          <ul class="stores">
            <li class="app-store">
              <a href="mailto:muhamad.farid.wadji@ericsson.com" class="button stroke smoothscroll ericssonfont" style="line-height: 12px;" title="">
                <i class="icon ion-paper-airplane"></i>M. Farid Wajdi <br/><span style='font-size:10px;margin-top:-20px'>Implementation Manager</span>
              </a>
            </li>
            <br/>
            <li class="app-store">
            <a href="mailto:kuncoro.wicaksono.adi.baroto@ericsson.com" class="button stroke smoothscroll ericssonfont" style="line-height: 12px;" title="">
              <i class="icon ion-paper-airplane"></i>Kuncoro Wicaksono <br/><span style='font-size:10px'>Web Developer</span></a>
            </li>
            <li class="windows-store">
            <a href="mailto:hanna.izma.azizah@ericsson.com" class="button stroke smoothscroll ericssonfont" style="line-height: 12px;" title="">
              <i class="icon ion-paper-airplane"></i>Hanna Izma Azizah <br/><span style='font-size:10px'>Android Developer</span></a>
            </li>
          </ul>

        </div>

      </div> <!-- /cta-content -->

    </section> <!-- /cta -->


     <!-- footer
     ================================================== -->
    <footer>

      <div class="footer-main">

        <div class="row">  

            <div class="col-four tab-full mob-full footer-info">            

                <div class="footer-logo"></div>

                <p>
                ERICSSON INDONESIA,<br>
                PT Wismah Pondok Indah 2nd floor<br>
                Jakarta 12310<br>
                Indonesia &nbsp; +62 21 769 2222
                </p>

            </div> <!-- /footer-info -->

            <div class="col-four tab-1-2 mob-1-6 site-links">

              <h4>Ericsson Links</h4>

              <ul>
                <li><a href="http://www.ericsson.com/id/thecompany/company_facts" target="_blank">Company Facts</a></li>
                <li><a href="http://www.ericsson.com/id/thecompany/corporate_governance" target="_blank">Corporate Governance</a></li>
                <li><a href="http://www.ericsson.com/id/thecompany/investors" target="_blank">Investors</a></li>
                <li><a href="http://www.ericsson.com/id/thecompany/press" target="_blank">Press</a></li>
                <li><a href="http://www.ericsson.com/id/thecompany/our_publications" target="_blank">Publication</a></li>
              </ul>

            </div> <!-- /site-links -->  

            <div class="col-four tab-1-2 mob-1-6 social-links">

              <h4>Thinking a Head</h4>

              <ul>
                <li><a href="http://www.ericsson.com/id/thinkingahead/networked_society" target="_blank">Network Society</a></li>
                <li><a href="http://www.ericsson.com/id/thinkingahead/innovation" target="_blank">Innovation</a></li>
                <li><a href="http://www.ericsson.com/id/thinkingahead/innovation/technology-research-insights" target="_blank">Ericsson Technology</a></li>
                <li><a href="http://www.ericsson.com/id/thinkingahead/consumerlab" target="_blank">Ericsson Consumer Lab</a></li>
                <li><a href="http://www.ericsson.com/id/thinkingahead/innovation/visionary-ideas" target="_blank">Ericsson Vision</a></li>
              </ul>
                        
            </div> <!-- /social -->        

          </div> <!-- /row -->

      </div> <!-- /footer-main -->


        <div class="footer-bottom">

          <div class="row">

            <div class="col-twelve">
              <div class="copyright">
                <span>© Copyright Ericsson 1994-<?php echo date("Y");?>.</span> 
                <span>Design by <a href="http://www.coroowicaksono.com/">Kuncoro Wicaksono</a></span>              
               </div>

               <div id="go-top" style="display: block;">
                  <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon ion-android-arrow-up"></i></a>
               </div>         
            </div>

          </div> <!-- /footer-bottom -->      

        </div>

    </footer>  

     <!--<div id="preloader"> 
        <div id="loader"></div>
     </div> -->

     <!-- Java Script
     ================================================== --> 
    <script src="<?php echo base_url();?>assets/coroowicaksono/homepage/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo base_url();?>assets/coroowicaksono/homepage/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/coroowicaksono/homepage/js/plugins.js"></script>
    <script src="<?php echo base_url();?>assets/coroowicaksono/homepage/js/main.js"></script>

  </body>

</html>