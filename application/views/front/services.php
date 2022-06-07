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
                                Layanan
                                <!-- <small class="color-light alpha7">Wordpress. Joomla. eCommerce.</small> -->
                            </h1>                            
                        </div>
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
        
        <!-- Why Area
        ===================================== -->
        <div id="why" class="pt75 mb75">
            <div class="container">                
                <!-- title and short description start -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="font-size-normal">
                            <small>Anda Pasti Menyukai Ini</small>
                            Mengapa Harus Karriz.id
                            <small class="heading heading-solid color-cyan center-block"></small>
                        </h1>
                    </div>

                    <div class="col-md-12">
                        <div class="row mt50">
                                            
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content-box content-box-icon-o content-box-left-icon mb30">                        
                                    <span class="icon-clock color-cyan"></span>
                                    <h5>Cepat</h5>               
                                    <p>Pelayanan, respon, produksi dilakukan secepat mungkin.</p>
                              
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content-box content-box-icon-o content-box-left-icon mb30">                        
                                    <span class="icon-target color-cyan"></span>
                                    <h5>Tepat</h5>               
                                    <p>Kami memastikan pesanan anda sesuai dengan apa yang anda inginkan</p>
                              
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content-box content-box-icon-o content-box-left-icon mb30">                        
                                    <span class="icon-heart color-cyan"></span>
                                    <h5>Bersahabat</h5>               
                                    <p>Pelayanan layaknya sahabat, harga bersahabat, kualitas paling diutamakan.</p>
                              
                                </div>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                </div>
                <!-- title and short description end -->
                
            </div>                                         
        </div><!-- section team end -->
    
        <!-- footer Area
        ===================================== -->
        <?php $this->load->view('front_partial/footer') ?>
        <!-- footer end -->
        
        
        <!-- Vendor Scripts -->
        <?php $this->load->view('front_partial/vendor-scripts') ?>
        
    </body>
</html>