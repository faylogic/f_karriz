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
		<!-- <div id="pageloader" class="bg-grad-mojito">
            <div class="loader-item">
                <img src="<?php echo base_url() ?>file/other/oval.svg" alt="page loader">
            </div>
        </div> -->
        
        <a href="#page-top" class="go-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </a>
        
        
        <!-- Navigation Area
        ===================================== -->
        <?php $this->load->view('front_partial/head-menu') ?>
        
        
            
        
        <!-- Intro Area
        ===================================== -->
        <header class="bg-blue2 mt70">

            <div class="container">
                <div class="row mt20 mb30">
                    <div class="col-md-6 text-left">
                        <h3 class="color-light text-uppercase animated" data-animation="fadeInUp" data-animation-delay="100"><?php  echo $title_bar ?>
                    </div>                   
                </div>
            </div>

        </header>
        
        
        


        <!-- Layanan Area
        ===================================== -->
        <div id="layanan" class="mt-20 pb20 bg-gray ">
            <div class="container">
                <div class="row pt50">
                    <div class="col-md-12 text-center">
                        <h1 class="font-size-normal">
                            Layanan Kami
                            <small class="heading heading-solid color-cyan center-block"></small>
                        </h1>
                    </div>
                    <div class="row">              
                        <?php  
                            foreach ($layanan as $s) 
                            {
                        ?>
                            <!-- content box -->
                            <div class="col-md-4 col-sm-12 col-xs-12 mb35 hover-wobble-vertical">
                                <div class="content-box content-box-o content-box-center bg-light content-box-icon">
                                    <div class="col-md-12">
                                        <img class="img-responsive" src="<?php echo base_url() ?>file/service/<?php echo $s['file_thumbnail'] ?>">                                      
                                    </div>
                                    <h4><a href="<?php echo base_url() ?>layanan/<?php echo $s['slug'] ?>"><?php echo $s['nm_service'] ?></a></h4>                                           
                                </div>
                            </div>
                            <!-- end of content box 1-->
                        <?php
                            }
                        ?>          
                                                                               
                        
                    </div><!-- row end -->

                </div>                                            
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