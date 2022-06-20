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
                        <h3 class="color-light text-uppercase animated" data-animation="fadeInUp" data-animation-delay="100">Blog
                    </div>                   
                </div>
            </div>

        </header>
        
        
        <!-- Blog Area
        ===================================== -->
        <section id="blog" class="pt75 pb50">
            <div class="container">
                <div class="row">

                <?php  
                    foreach ($data as $s) 
                    {
                ?>
                    <div class="col-md-8">                        
                        <div class="blog-three-mini">
                            <h2 class="color-dark"><a href="<?php echo base_url() ?>blog-detail/<?php echo $s['slug'] ?>"><?php echo $s['judul_blog'] ?></a></h2>
                            <div class="blog-three-attrib">
                                <div><i class="fa fa-calendar"></i><?php echo date('d M Y',strtotime($s['tgl_blog'])) ?></div> | 
                                <div><i class="fa fa-pencil"></i><a href="#"><?php echo $s['author'] ?></a></div> | 
                                <div>
                                    Share:  <a href="http://www.facebook.com/sharer.php?u=<?php echo base_url('').$this->uri->uri_string(); ?>"><i class="fa fa-facebook-official"></i></a>
                                            <a href="<?php echo base_url('').$this->uri->uri_string(); ?>&text=<?php 
                        $searh_array = array('<p>','</p>',' ');
                        $replace_array = array ('','','%20');
                        echo str_replace($searh_array, $replace_array, $s['judul_blog'])
                        ?>"><i class="fa fa-twitter"></i></a>                                                
                                </div>
                            </div>

                            <img style="width: 70%;" src="<?php echo base_url() ?>file/blog/<?php echo $s['file_thumbnail'] ?>" alt="judul_blog" class="img-responsive">
                            <p class="lead mt25">
                                <!-- <?php echo str_replace(array('<p>','</p>'), array('',''), $s['deskripsi']) ?> -->
                                <?php   
                                    echo $s['deskripsi'];
                                ?>
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
                <?php
                    }
                ?>

                    <div class="col-md-4">
                        <div class="mt25 pr25 pl25 clearfix">
                          <h5 class="mt25">
                              Latest Post
                              <span class="heading-divider mt10"></span>
                          </h5>
                          <?php  
                              foreach ($blog as $s) 
                              {
                          ?>
                              <div class="blog-sidebar-popular-post-container">
                                  <img src="<?php echo base_url() ?>file/blog/<?php echo $s['file_thumbnail'] ?>" alt="" class="img-responsive pull-left">
                                  <h6><a href="<?php echo base_url() ?>blog-detail/<?php echo $s['slug'] ?>"><?php echo $s['judul_blog'] ?></a></h6>
                                  <span class="text-gray"><?php echo date('d M Y',strtotime($s['tgl_blog'])) ?></span>
                              </div>
                          <?php
                              }
                          ?>                                  
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