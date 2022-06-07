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
        
        
      
        
        
        <!-- Subheader Area
        ===================================== -->
        <header class="bg-grad-mojito mt70">

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
                <?php  
                    foreach ($data as $s) 
                    {
                ?>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">                        
                            <div class="blog-three-mini">
                                <h2 class="color-dark"><a href="#"><?php echo $s['nm_kegiatan'] ?></a></h2>
                                <div class="blog-three-attrib">
                                    <div><i class="fa fa-calendar"></i><?php echo date('d M Y') ?></div> | 
                                     
                                    <div>
                                        Share:  <a href="http://www.facebook.com/sharer.php?u=<?php echo base_url('').$this->uri->uri_string(); ?>"><i class="fa fa-facebook-official"></i></a>
                                                <a href="<?php echo base_url('').$this->uri->uri_string(); ?>&text=<?php 
                            $searh_array = array('<p>','</p>',' ');
                            $replace_array = array ('','','%20');
                            echo str_replace($searh_array, $replace_array, $s['nm_kegiatan'])
                            ?>"><i class="fa fa-twitter"></i></a>                                                
                                    </div>
                                </div>

                                <img src="<?php echo base_url() ?>file/kegiatan/<?php echo $s['file_thumbnail'] ?>" alt="Image Carousel" class="img-responsive">
                                <p class="lead mt25">
                                    <?php echo str_replace(array('<p>','</p>'), array('',''), $s['deskripsi']) ?>
                                    <div class="col-md-12 col-sm-12 xol-xs-12 mt10 pt10 bt-dotted-1">
                                        <?php   
                                            if ($this->agent->is_mobile()) 
                                            {
                                        ?>
                                        <a class="button button-md button-block button-success hover-icon-wobble-horizontal ml-20" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $s['kontak_wa'] ?>&text=Hai Admin Saya Bertanya Tentang : <?php echo $s['nm_kegiatan'] ?>">Daftar<i class="fa fa-whatsapp"></i></a>
                                        <?php
                                            }
                                            else if ($this->agent->is_browser()) 
                                            {
                                        ?>
                                        <a class="button button-md button-block button-success hover-icon-wobble-horizontal ml-20" target="_blank" href="https://web.whatsapp.com/send?phone=<?php echo $s['kontak_wa'] ?>&text=Hai Admin Saya Bertanya Tentang : <?php echo $s['nm_kegiatan'] ?>">Daftar<i class="fa fa-whatsapp"></i></a>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                    <br>
                                </p>
                                
                                <!--                                 
                                <div class="blog-post-read-tag mt50">
                                    <i class="fa fa-tags"></i> Tags:
                                    <a href="#"> Javascript</a>,
                                    <a href="#"> HTML</a>,
                                    <a href="#"> Wordpress</a>,
                                    <a href="#"> Tutorial </a>
                                </div> -->
                                
                            </div>
                        </div>                    
                    </div>
                    
                <?php
                    }
                ?>
                
                                                
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