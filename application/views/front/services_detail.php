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
        
        
        
        
        
        <!-- Subheader Area
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
        
        
        <!-- Blog Area
        ===================================== -->       
        <section id="blog" class="pt75 pb50">
            <div class="container">                
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo base_url() ?>file/service/<?php echo $cek_data[0]['file_thumbnail'] ?>" alt="<?php echo $cek_data[0]['slug'] ?>-image" class="img-responsive">      
                    </div>
                    <div class="col-md-8">
                        
                        <div class="blog-three-mini">
                            <h2 class="color-dark"><a href="#">
                                <?php  echo $cek_data[0]['nm_service'] ?>
                            </a></h2>
                                                    
                            <p class="lead mt25">
                                <?php  echo $cek_data[0]['deskripsi'] ?>
                            </p>                                                        
                        </div>
                        
                                      
                </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h5 class="bg-gray pt5 bp10 pl10">Product Layanan</h5>

                            <?php  
                                foreach ($product as $s) 
                                {
                            ?>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="shop-item-container-in">
                                        <!-- <div class="shop-label bg-pasific">-50%</div> -->
                                        <img src="<?php echo base_url()?>file/product/<?php echo $s['file_gambar'] ?>" alt="shop item" class="img-responsive center-block" style="width: 250px;">
                                        <h3 class="shop-item-title"><?php echo $s['nm_product'] ?></h3>
                                        <span class="shop-item-price">Rp <?php echo $s['harga_satuan'] ?></span>
                                        <div class="row" style="padding:10px;">                                        
                                            <!-- <div class="col-sm-6 col-xs-6">
                                                <a href="#" class="add-to-cart">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div> -->
                                            <div class="col-md-6 col-xs-12">
                                                <a href="<?php echo base_url() ?>produk-detail/<?php echo $s['slug'] ?>" class="button button-md button-rounded button-pasific hover-icon-down button-block" data-toggle="tooltip" title="Detail Product">
                                                    Detail <i class="fa fa-link"></i>
                                                </a>
                                            </div>

                                            <div class="col-md-6 col-xs-12">
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
                                </div>
                            <?php
                                }
                            ?>                                                        
                            <!-- <div id="owlSectionThreeItem" class="owl-carousel">           
                            </div> -->
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