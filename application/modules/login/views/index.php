<!DOCTYPE html>
<html class="no-js" lang="en"> 
  <head>

     <!--- basic page needs
     ================================================== -->
    <meta charset="utf-8">
    <title><?php echo base_url();?></title>
    <meta name="description" content="">  
    <meta name="author" content="">

     <!-- mobile specific metas
     ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
     ================================================== -->
     <link rel="stylesheet" href="<?php echo base_url();?>assets/Welcome/css/base.css">  
     <link rel="stylesheet" href="<?php echo base_url();?>assets/Welcome/css/main.css">
     <link rel="stylesheet" href="<?php echo base_url();?>assets/Welcome/css/vendor.css">   
     <link rel="stylesheet" href="<?php echo base_url();?>assets/Welcome/fonts/_ericssonfonts.css">    

     <style type="text/css">
          <?php
            $ekunbarbg = range(1, 11);
            shuffle($ekunbarbg);
            foreach ($ekunbarbg as $ekunbarbg) {
                echo "
        #intro {
          background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.2)), #090909 url(".base_url()."assets/Welcome/images/bg/".$ekunbarbg.".jpg) no-repeat center;
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
          background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), #14181E url(".base_url()."assets/Welcome/images/bg/".$ekunbarfeatbg.".jpg) no-repeat center;
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
    <script src="<?php echo base_url();?>assets/Welcome/js/modernizr.js"></script>

     <!-- favicons
    ================================================== -->
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/ericsson_logo.ico">

  </head>

  <body id="top">

    <!-- header 
     ================================================== -->
    <header>

      <div class="row">

        <div class="s">
          <img alt="Logo">
          <a href="<?php echo base_url();?>"></a>
        </div>

        <nav id="main-nav-wrap">
          <ul class="main-navigation">
            <li class="current"><a class="smoothscroll desktop"  href="#intro" title="">Home</a></li>
            <li><a class="smoothscroll desktop"  href="#process" title="">Terms & Condition</a></li>
            <li><a target="_blank" title="">Network Society</a></li>
            <!--<li><a class="smoothscroll"  href="#features" title="">Features</a></li>
            
            <li><a class="smoothscroll"  href="#faq" title="">FAQ</a></li>          -->
            <!--<li><a  href="http://eidwhd.com/index.php/training/" title="">Register Training</a></li>-->
            <li class="highlight with-sep"><a href="<?php echo base_url();?>homepage" title="Login">Products</a></li>          
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
              <a href="#video-popup"><img src="<?php echo base_url();?>assets/Welcome/images/play-button.png" alt=""></a>
            </div>

            <h5>welcome to (WEB NAME)</h5>
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

          
 <h5>(WEB NAME)</h5>
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

                  <p>(FEATURE)</p>
                
              </div>             

          </div> <!-- /bgrid -->

          <div class="bgrid feature"> 
            <br/><br/><br/>
            <span class="icon"><i class="icon-layers"></i></span>                          

                <div class="service-content">
                  <h3 class="h03" style="color:#FFF">All in one Connection</h3>  

                  <p>(FEATURE)</p>


                
                </div>                            

           </div> <!-- /bgrid -->

           <div class="bgrid feature">

            <span class="icon"><i class="icon-paint-brush"></i></span>                

                <div class="service-content">
                  <h3 class="h03" style="color:#FFF">Stylish Design</h3>

                  <p>(FEATURE)</p>


                  
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

          <h2 style='color:#FFF'>Contact Person</h2>

          <p class="lead" style="font-size:12px">Request by Mail :</p>

          <ul class="stores">
            <li class="app-store">
              <a href="mailto:" class="button stroke smoothscroll ericssonfont" style="line-height: 12px;" title="">
                <i class="icon ion-paper-airplane"></i>(NAME)<br/><span style='font-size:10px;margin-top:-20px'>(POSITION)</span>
              </a>
            </li>
            <br/>
            <li class="app-store">
            <a href="mailto:" class="button stroke smoothscroll ericssonfont" style="line-height: 12px;" title="">
              <i class="icon ion-paper-airplane"></i>(NAME)<br/><span style='font-size:10px'>(POSITION)</span></a>
            </li>
            <li class="windows-store">
            <a href="mailto:" class="button stroke smoothscroll ericssonfont" style="line-height: 12px;" title="">
              <i class="icon ion-paper-airplane"></i>(NAME)<br/><span style='font-size:10px'>(POSITION)</span></a>
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

                <!--
                <div class="footer-logo"></div>
                -->
                <img alt="Footer logo">
                <p>
                (SATC),<br>
                (Address)<br>
                Jakarta 12310<br>
                Indonesia &nbsp; (+phone)
                </p>

            </div> <!-- /footer-info -->

            <div class="col-four tab-1-2 mob-1-6 site-links">

              <h4>(SATC) Links</h4>

              <ul>
                <li><a href="" target="_blank">Company Facts</a></li>
                <li><a href="" target="_blank">Corporate Governance</a></li>
                <li><a href="" target="_blank">Investors</a></li>
                <li><a href="" target="_blank">Press</a></li>
                <li><a href="" target="_blank">Publication</a></li>
              </ul>

            </div> <!-- /site-links -->  

            <div class="col-four tab-1-2 mob-1-6 social-links">

              <h4>Thinking a Head</h4>

              <ul>
                <li><a href="" target="_blank">Network Society</a></li>
                <li><a href="" target="_blank">Innovation</a></li>
                <li><a href="" target="_blank">(SATC) Technology</a></li>
                <li><a href="" target="_blank">(SATC) Consumer Lab</a></li>
                <li><a href="" target="_blank">(SATC) Vision</a></li>
              </ul>
                        
            </div> <!-- /social -->        

          </div> <!-- /row -->

      </div> <!-- /footer-main -->


        <div class="footer-bottom">

          <div class="row">

            <div class="col-twelve">
              <div class="copyright">
                <span>© Copyright -<?php echo date("Y");?>.</span> 
                <span>Design by <a href="https://www.linkedin.com/in/nur-hazbiy-7b6621157/">Nur Hazbiy</a></span>              
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
    <script src="<?php echo base_url();?>assets/Welcome/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo base_url();?>assets/Welcome/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/Welcome/js/plugins.js"></script>
    <script src="<?php echo base_url();?>assets/Welcome/js/main.js"></script>

  </body>

</html>