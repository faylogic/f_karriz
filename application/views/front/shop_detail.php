<!DOCTYPE html>
<html lang="en">
    <head>
        <?php  
            $this->load->view('front_partial/title-meta');
            $this->load->view('front_partial/open-graph');
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
                        <h3 class="color-light text-uppercase animated" data-animation="fadeInUp" data-animation-delay="100"><?php  echo $title_bar ?><small class="color-light alpha7"><?php echo $cek_data[0]['nm_kat_product'] ?></small></h3>
                    </div>                   
                </div>
            </div>

        </header>
        
        
        <!-- Shop Area
        ===================================== -->
        <?php  
            foreach ($cek_data as $s) 
            {
        ?>
            <div id="shop" class="bg-light pt75 pb75">            
                <div id="shop-item-details" class="container">
                    <div class="row">

                        <!-- Item Photo
                        ===================================== -->
                        <div class="col-md-4 col-sm-6 col-xs-12">                    
                            <img class="shop-item-detail-photo-active img-responsive" style="width: 300px;" alt="photo item active" src="<?php echo base_url() ?>file/product/<?php echo $s['file_gambar'] ?>" data-zoom-image="<?php echo base_url() ?>file/product/<?php echo $s['file_gambar'] ?>"/>                  
                        </div>

                        <!-- Products Summary
                        ===================================== -->
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <div class="shop-item-detail-description">
                                <h3><?php echo $s['nm_product'] ?></h3>

                                <div class="shop-item-sku mt20 pt10 bt-dotted-1">
                                    Kategori Product: <span class="color-black strong"><?php echo $s['nm_kat_product'] ?></span>
                                </div>

                                <div class="shop-item-sku mt20 pt10 bt-dotted-1">
                                    Kategori Layanan: <span class="color-black strong"><?php echo $s['nm_service'] ?></span>
                                </div>

                                

                                <div class="row shop-item-detail-price mt10 bt-dotted-1">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <ins><span class="amount"> <?php echo "Rp ".$s['harga_satuan'] ?></span></ins>
                                        <!-- <del><span class="amount">$150.00</span></del> -->
                                    </div>
                                    <!-- <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="alert alert-info mt15">
                                            <strong>FREE SHIPPING</strong> To more than 100 Countries. <a href="#">More info</a>
                                        </div>
                                    </div> -->
                                </div>

                               <!--  <div class="shop-item-review mt10 pt10 bt-dotted-1">
                                    Customer Reviews:
                                    <a href="#" class="mr10">
                                        <i class="fa fa-star color-yellow"></i>
                                        <i class="fa fa-star color-yellow"></i>
                                        <i class="fa fa-star color-yellow"></i>
                                        <i class="fa fa-star color-yellow"></i>
                                        <i class="fa fa-star-half-o color-yellow"></i>
                                    </a>
                                    275 Reviews <a href="#" class="ml10"><i class="fa fa-pencil mr5"></i>Add your review</a>
                                </div>       -->          

                                <div class="shop-item-detail-desc mt10 pt10 bt-dotted-1">
                                    <?php echo $s['deskripsi'] ?>
                                </div>
                                
                                
                                <form class="ml15">                                    
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 xol-xs-12 mt10 pt10 bt-dotted-1">
                                            <?php   
                                                if ($this->agent->is_mobile()) 
                                                {
                                            ?>
                                            <a class="button button-md button-pasific hover-icon-wobble-horizontal ml-20" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $contact[0]['no_hp'] ?>&text=Hai Admin Saya Bertanya Pesan : <?php echo $s['nm_product'] ?>">Pesan Sekarang<i class="fa fa-whatsapp"></i></a>
                                            <?php
                                                }
                                                else if ($this->agent->is_browser()) 
                                                {
                                            ?>
                                            <a class="button button-md button-pasific hover-icon-wobble-horizontal ml-20" target="_blank" href="https://web.whatsapp.com/send?phone=<?php echo $contact[0]['no_hp'] ?>&text=Hai Admin Saya Bertanya Pesan : <?php echo $s['nm_product'] ?>">Pesan Sekarang<i class="fa fa-whatsapp"></i></a>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                    </div>

                                </form>                            

                                <div class="shop-item-detail-cat mt10 pt10 bt-dotted-1">
                                    Shares: 
                                    <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo base_url('').$this->uri->uri_string(); ?>"><i class="fa fa-facebook-official mr5"></i></a>
                                    <a href="<?php echo base_url('').$this->uri->uri_string(); ?>&text=<?php 
                            $searh_array = array('<p>','</p>',' ');
                            $replace_array = array ('','','%20');
                            echo str_replace($searh_array, $replace_array, $s['nm_product'])
                            ?>"><i class="fa fa-twitter mr5"></i></a>
                                   
                                </div>

                            </div>                    
                        </div>

                    </div><!-- row end -->                   

                    <!-- Related Products
                    ===================================== -->
                    <div class="row">
                        <div class="col-md-10">
                            <h4 class="strong">Related Products</h4>
                        </div>
                        <div class="col-md-2 text-center">                    
                            <i class="fa fa-angle-left shop-control-prev"></i>
                            <i class="fa fa-angle-right shop-control-next"></i>                    
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-md-12">                    
                            <div id="owlShop">
                                <?php  
                                    foreach ($related_product as $s) 
                                    {
                                ?>
                                    <!-- shop item start -->
                                    <div class="shop-item-container-out">
                                        <div class="shop-item-container-in">
                                            <img   style="width: 250px;"src="<?php echo base_url() ?>file/product/<?php echo $s['file_gambar'] ?>" alt="<?php echo $s['nm_product'] ?>" class="img-responsive center-block">
                                            <h4 class="shop-item-title"><?php echo $s['nm_product'] ?></h4>
                                            <span class="shop-item-price"><?php echo "Rp ".$s['harga_satuan'] ?></span>
                                        </div>
                                        <div class="row">                                        
                                            <!-- <div class="col-sm-6 col-xs-6">
                                                <a href="#" class="add-to-cart">
                                                    <i class="fa fa-link"></i>
                                                </a>
                                            </div> -->
                                            <div class="col-sm-6 col-xs-12">
                                                <a href="<?php echo base_url() ?>produk-detail/<?php echo $s['slug'] ?>" class="button button-md button-rounded button-pasific hover-icon-down button-block" data-toggle="tooltip" title="Detail Product">
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
                                    <!-- shop item end -->  
                                <?php
                                    }
                                ?>
                                                              

                            </div><!-- #owlShop end -->
                        </div><!-- col-md end -->
                    </div><!-- row end -->
                    
                </div>
            </div><!-- shop details end -->
        <?php
            }
        ?>
        
        
        
        <!-- footer Area
        ===================================== -->
        <?php $this->load->view('front_partial/footer') ?>
        <!-- footer end -->
        
        
        <!-- Vendor Scripts -->
        <?php $this->load->view('front_partial/vendor-scripts') ?>
        
    </body>
</html>