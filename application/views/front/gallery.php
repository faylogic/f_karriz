<!DOCTYPE html>
<html lang="en">
    <head>
        <?php  
            $this->load->view('front_partial/title-meta');
            $this->load->view('front_partial/head-css');

        ?>    
    </head>
    <body  id="topPage" data-spy="scroll" data-target=".navbar" data-offset="100">
        
        
        <!-- Page Loader
        ===================================== -->
		<div id="pageloader" class="bg-grad-mojito">
            <div class="loader-item">
                <img src="<?php echo base_url() ?>file/other/oval.svg" alt="page loader">
                <!-- <img src="<?php echo base_url() ?>file/logo/overlay.png" alt="page loader"> -->
            </div>
        </div>
        
        <a href="#page-top" class="go-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </a>
        
        
        <!-- Navigation Area
        ===================================== -->
        <?php $this->load->view('front_partial/head-menu') ?>
        
        
              
        
        <!-- Intro Area
        ===================================== -->
        <header class="pt100 pb100 parallax-window-2" data-parallax="scroll" data-speed="0.5" data-image-src="<?php echo base_url() ?>file/bg/header-bg.jpg" data-positionY="1000">
            <div class="intro-body text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 pt50">
                            <h1 class="brand-heading font-montserrat text-uppercase color-light" data-in-effect="fadeInDown">
                                <?php echo $title_bar ?>
                                <!-- <small class="color-light alpha7">Wordpress. Joomla. eCommerce.</small> -->
                            </h1>                            
                        </div>
                    </div>
                </div>
                
            </div>
        </header> 
               
        <!-- Gallery Area
        ===================================== -->    
        <div class="pt75 pb75">
            <div class="container">
                <div class="row">
                    <div class="portfolio center-block">

                        <?php  
                            foreach ($gallery as $s) 
                            {
                        ?>
                            <div class="portfolio-item col-md-4 col-sm-4 col-xs-4 wordpress woocommerce pb30" data-category="">
                                <a href="<?php echo base_url() ?>file/gallery/<?php echo $s['file_thumbnail'] ?>" class="magnific-popup">
                                    <!-- <span class="glyphicon glyphicon-search hover-bounce-out"></span> -->
                                    <img src="<?php echo base_url() ?>file/gallery/<?php echo $s['file_thumbnail'] ?>" alt="portfolio woocommerce" class="img-responsive animated" data-animation="zoomIn" data-animation-delay="100"> 
                                </a>
                                                               
                            </div>
                            
                        <?php
                            }
                        ?>    
                      
                                                                    
                    </div>
                                                                                                
                </div>
            </div>
        </div>

        <div class="row mb25 animated" data-animation="fadeInUp" data-animation-delay="700">
            <div class="col-md-12 text-center">
                <?php echo $this->pagination->create_links(); ?>                         
            </div>
        </div>    
    
        <!-- footer Area
        ===================================== -->
        <?php $this->load->view('front_partial/footer') ?>
        <!-- footer end -->
                
        <!-- Vendor Scripts -->
        <?php $this->load->view('front_partial/vendor-scripts') ?>

        
    </body>
</html>