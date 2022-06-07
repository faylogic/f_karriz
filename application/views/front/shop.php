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
        
        
        <!-- Shop Area
        ===================================== -->
        <section id="shop" class="bg-light pt25">
            <div class="container">
                <div class="row">                        
                    <div class="col-md-12 text-center">   
                        <div class="row"> 

                            <?php  
                                foreach ($product as $s) 
                                {
                            ?>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="shop-item-container-in">
                                        <!-- <div class="shop-label bg-pasific">-50%</div> -->
                                        <img src="<?php echo base_url()?>file/product/<?php echo $s['file_gambar'] ?>" alt="shop item" class="img-responsive center-block" style="width: 250px;">
                                        <h4 class="shop-item-title"><?php echo $s['nm_product'] ?></h4>
                                        <span class="shop-item-price">Rp <?php echo $s['harga_satuan'] ?></span>
                                    </div>
                                    <div class="row">                                        
                                        <!-- <div class="col-sm-6 col-xs-6">
                                            <a href="#" class="add-to-cart">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </div> -->
                                        <div class="col-sm-6 col-xs-12">
                                            <a href="<?php echo base_url() ?>store-detail/<?php echo $s['slug'] ?>" class="button button-md button-rounded button-pasific hover-icon-down button-block" data-toggle="tooltip" title="Detail Product">
                                                Detail <i class="fa fa-link"></i>
                                            </a>
                                        </div>

                                        <div class="col-sm-6 col-xs-12">
                                            <?php   
                                                if ($this->agent->is_mobile()) 
                                                {
                                            ?>
                                                <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $contact[0]['no_hp'] ?>&text=Hai Admin Saya Bertanya Pesan : <?php echo $s['nm_product'] ?>" class="button button-md button-rounded button-success hover-icon-down button-block" data-toggle="tooltip" title="Whatsapp">
                                                     Order <i class="fa fa-whatsapp"></i>
                                                </a>
                                            <?php
                                                }
                                                else if ($this->agent->is_browser()) 
                                                {
                                            ?>
                                                <a target="_blank" href="https://web.whatsapp.com/send?phone=<?php echo $contact[0]['no_hp'] ?>&text=Hai Admin Saya Bertanya Pesan : <?php echo $s['nm_product'] ?>" class="button button-md button-rounded button-success hover-icon-down button-block" data-toggle="tooltip" title="Whatsapp">
                                                     Order <i class="fa fa-whatsapp"></i>
                                                </a>  
                                            <?php
                                                }
                                            ?>
                                           
                                        </div>
                                    </div>
                                </div> 
                            <?php
                                }
                            ?>                           
                                                
                        </div>
                        
                        <div class="row mb25 animated" data-animation="fadeInUp" data-animation-delay="700">
                            <div class="col-md-12 text-center">
                                <?php echo $this->pagination->create_links(); ?>                         
                            </div>
                        </div>
                        
                    </div>                    
                             
                </div> 
                
            </div>
        </section>
    
    
        <!-- footer Area
        ===================================== -->
        <?php $this->load->view('front_partial/footer') ?>
        <!-- footer end -->
        
        
        <!-- Vendor Scripts -->
        <?php $this->load->view('front_partial/vendor-scripts') ?>
        
    </body>
</html>