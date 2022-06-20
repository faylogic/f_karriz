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
        <!-- <header class="pt100 pb100 parallax-window-2 " data-parallax="scroll" data-speed="0.5" data-image-src="<?php echo base_url() ?>file/bg/header-bg.jpg" data-positionY="1000"> -->
        <!-- <header class="pt100 pb100 parallax-window-2 bg-blue2">
            <div class="intro-body text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 pt50">
                            <h1 class="brand-heading font-montserrat text-uppercase color-light" data-in-effect="fadeInDown">
                                <?php echo $title_bar ?>
                            </h1>                            
                        </div>
                    </div>
                </div>
                
            </div>
        </header>  -->
        <header class="bg-blue2 mt70">

            <div class="container">
                <div class="row mt20 mb30">
                    <div class="col-md-6 text-left">
                        <h3 class="color-light text-uppercase animated" data-animation="fadeInUp" data-animation-delay="100"><?php  echo $title_bar ?>
                    </div>                   
                </div>
            </div>

        </header>
       


        <!-- Contact Us Area
        =====================================-->
        <div id="contact" class="pt50 pb100">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <div class="row">

                            <!-- title start -->
                            <div class="col-md-12 mb50">
                                <h2 class="font-size-normal color-black">
                                    <small class="color-blue">Kontak Kami</small>
                                    Kami Akan Senang Dapat Melayani Anda
                                </h2>
                                <h5 class="color-dark">Kami Akan Memastikan Kepuasan Anda</h5>
                            </div>
                            <!-- title end -->

                            <!-- contact info start -->
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <span class="icon-map color-blue el-icon2x"></span>
                                <h5 class="color-black"><strong>Lokasi Kami</strong></h5>
                                <p class="color-black"><?php echo $contact[0]['alamat'] ?></p>
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <span class="icon-megaphone color-blue el-icon2x"></span>
                                <h5 class="color-black"><strong>Phone</strong></h5>
                                <p class="color-black"><i class="fa fa-phone"></i> <?php echo $contact[0]['no_hp'] ?></p>
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <span class="icon-envelope color-blue el-icon2x"></span>
                                <h5 class="color-black"><strong>Email</strong></h5>
                                <p class="color-black"><?php echo $contact[0]['email'] ?></p>
                            </div>
                            <!-- contact info end -->

                        </div><!-- row left end -->
                    </div><!-- col left end -->

                    <div class="col-md-6">
                        <div class="contact contact-us-two border-primary">

                            <div class="col-sm-12 col-xs-12 text-center mb20">
                                <h4 class="pb25 bb-solid-1">
                                    Jika Ada Pertanyaan Silahkan Isi Disini
                                    <!-- <small class="text-lowercase">Please complete the form and we will get back to you.</small> -->
                                </h4>
                            </div>
                            <div class="col-xs-12">
                                <?php echo $this->session->flashdata('result');?>                                
                            </div>
                            <form  method="post" action="<?php echo base_url() ?>contact/send">                                
                                <!-- fullname start -->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="input-md input-rounded form-control" placeholder="Nama Lengkap" maxlength="100" required>
                                </div>
                                <!-- fullname end -->

                                <!-- email start -->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" id="email" class="input-md input-rounded form-control" placeholder="alamat email" maxlength="100" required>
                                </div>
                                 <!-- email end -->

                                <!-- textarea start -->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="message" id="message" rows="7" required></textarea>
                                </div>
                                <!-- textarea end -->


                                <!-- security start -->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                   <div class="form-group">
                                     <?php echo $cap_img ?>
                                     <p></p>
                                     <input type="text" name="kode_captcha" id="kode_captcha" class="input-md input-rounded form-control" placeholder="Kode Captcha" autocomplete="off" maxlength="4" required>
                                   </div>  
                                </div>
                                  <!-- security end -->




                                <!-- button start -->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" name="sendMessage" id="sendMessage" class="button button-md button-block button-grad-stellar">Send Message</button>
                                </div>
                                <!-- button end -->

                            </form>
                        </div><!-- div contact end -->
                    </div><!-- col end -->

                </div><!-- row end -->
            </div><!-- container end -->
        </div>


        <!-- Google Map Area
        ===================================== -->
        <div class="col-md-12">
            <?php echo $contact[0]['link_map'] ?>
        </div>
    
    
        <!-- footer Area
        ===================================== -->
        <?php $this->load->view('front_partial/footer') ?>
        <!-- footer end -->
        
        <!-- Vendor Scripts -->
        <?php $this->load->view('front_partial/vendor-scripts') ?>
               
    </body>
</html>