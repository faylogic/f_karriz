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
        <!-- <div id="blog" class="mt50 pb70"> -->
        <div id="blogs" class="bg-gray pt75 pb75">
            <div class="container">
                
                <!-- <nav class="navbar navbar-default mb50">
                    <ul class="nav navbar-nav"> 
                      <li class="active"><a href="#">All Posts</a></li>
                      <li><a href="#">HTML</a></li>
                      <li><a href="#">Wordpress</a></li>
                      <li><a href="#">Javascript</a></li>
                      <li><a href="#">PHP</a></li>
                      <li><a href="#">Design &amp; UX</a></li>
                      <li><a href="#">Mobile</a></li>
                    </ul>
                    
                    <form name="blog-search" action="#" class="blog-form-search pull-right">
                        <input type="text" name="search" class="" placeholder="e.g. Javascript">
                        <button type="submit" name="submit" class=""><i class="fa fa-search"></i></button>
                    </form>
                </nav> -->
               
                <div class="row">
                    
                    <?php  
                        foreach ($blog as $s) 
                        {
                    ?>
                        <!-- blog post start -->
                        <div class="col-md-4 col-sm-6 col-xs-12 mb50">
                            <div class="blog-one">
                                <div class="blog-one-header">
                                    <img src="<?php echo base_url() ?>file/blog/<?php echo $s['file_thumbnail'] ?>" alt="image blog" class="img-responsive">
                                </div>
                                <div class="blog-one-attrib">                                
                                    <span class="blog-author-name"><i class="icon-pencil"></i> <?php echo $s['author'] ?></span>
                                    <span class="blog-date"><i class="icon-calendar"></i> <?php echo date('d-m-Y',strtotime($s['tgl_blog'])) ?></span>                                                           
                                </div>
                                <div class="blog-one-body" style="height: 200px;">
                                    <h4 class="blog-title"><a href="<?php echo base_url() ?>blog-detail/<?php echo $s['slug'] ?>"><?php echo $s['judul_blog'] ?></a></h4>
                                    <?php echo substr($s['deskripsi'], 0,100)."..."; ?>
                                </div>
                                <div class="blog-one-footer">
                                    <a href="<?php echo base_url() ?>blog-detail/<?php echo $s['slug'] ?>">Read More</a>
                                    <i class="fa fa-facebook"></i><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo base_url('').$this->uri->uri_string(); ?>">Facebook</a>
                                    <i class="fa fa-twitter"></i><a target="_blank" href="<?php echo base_url('').$this->uri->uri_string(); ?>&text=<?php 
                            $searh_array = array('<p>','</p>',' ');
                            $replace_array = array ('','','%20');
                            echo str_replace($searh_array, $replace_array, $s['judul_blog'])
                            ?>">Twitter</a>
                                </div>
                            </div>
                        </div>
                        <!-- blog post end -->  
                                 
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
        
        <!-- footer Area
        ===================================== -->
        <?php $this->load->view('front_partial/footer') ?>
        <!-- footer end -->
        
        
        <!-- Vendor Scripts -->
        <?php $this->load->view('front_partial/vendor-scripts') ?>
        
    </body>
</html>