<!doctype html>
<html lang="en">
<head>
    <?php  
        $this->load->view('front_partial/title-meta');
        $this->load->view('front_partial/head-css');
    ?>
</head>
    <body  id="page-top" data-spy="scroll" data-target=".navbar" data-offset="100">
        
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
                                        
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1649859397268-251f729c4e09?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1649859397268-251f729c4e09?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1649859397268-251f729c4e09?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Third slide">
            </div>
            </div>


            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Intro Area
        ===================================== -->
        <header class="pt100 pb100 bg-grad-stellar" style="background-image: url(<?php echo base_url() ?>file/home/bg-banner.png); background-repeat: no-repeat; background-color: #fff; background-size: cover;">
            
                <div class="container mt100 mb70">
                    
                    <div class="row">
                        
                        <div class="col-md-12 text-center">
                            <h1 class="fs-75 font-source-sans-pro font-size-light color-light animated" data-animation="fadeInUp" data-animation-delay="100">
                                <b>KARRIZ.ID</b>
                            </h1>
                            <h4 class="color-gray">Pelayanan Cepat, Tepat, Bersahabat, Hanya Untuk Anda</h4>
                            <p class="lead color-gray animated" data-animation="fadeInUp" data-animation-delay="200">
                                Rencanakan Kebutuhan Anda Bersama Kami
                            </p>                           
                            <?php   
                                if ($this->agent->is_mobile()) 
                                {
                            ?>
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $contact[0]['no_hp'] ?>&text=Hai Admin Saya Bertanya Tentang Karriz ID" class="button button-circle button-grad-orange hover-icon-pop button-lg mt20">
                                    Hubungi
                                </a>
                            <?php
                                }
                                else if ($this->agent->is_browser()) 
                                {
                            ?>
                                <a target="_blank" href="https://web.whatsapp.com/send?phone=<?php echo $contact[0]['no_hp'] ?>&text=Hai Admin Saya Bertanya Tentang Karriz ID" class="button button-circle button-grad-orange hover-icon-pop button-lg mt20">
                                    Hubungi
                                </a>  
                            <?php
                                }
                            ?>
                            <a href="<?php echo base_url() ?>kontak" class="button button-circle button-grad-blood-mary button-lg mt20">Kontak</a>
                            
                        </div>
                        
                    </div>
                </div>
                
        </header>
        
        

        
        <!-- New Block Area
        ===================================== -->
        <div id="service">
            <div class="container">
                
                <!-- title and short description start -->
                <div class="row mt50">
                    <div class="col-md-4">
                        <img src="<?php echo base_url() ?>file/home/about-man.png">
                    </div>
                    <div class="col-md-6 text-left">
                        <h1 class="font-size-normal">
                            <small>Selamat Datang Di Karriz.id</small>
                            Apa Kabar Hari Ini ?                     
                        </h1>
                        <p class="lead">
                         Kami sangat mengerti bahwa membangun sebuah brand bukanlah hal yang mudah. Sebuah brand akan menjadi pengalaman nyata bagi customernya, ketika produk yang mereka pesan dapat dilihat, disentuh, dan dirasakan.
                                              
                        </p>
                        <p class="lead">                           
                            Untuk itulah, kami mengambil peran sebagai jembatan yang dapat mewujudkan brand Anda ke dalam bentuk yang nyata, seperti packaging, souvenir, serta media cetak lainnya.  
                        </p>
                        <div class="row col-md-6 mb50">
                            <a href="<?php echo base_url() ?>kontak" class="button button-circle button-grad-blood-mary button-lg mt20">Kontak</a>
                            
                        </div>
                    </div>                                        
                </div>
                <!-- title and short description end -->           
                
            </div><!-- container end -->                   
        </div><!-- New Block end -->
        
        
        <!-- Number Area
        ===================================== -->
        <div id="info-1" class="pb20 bg-grad-mojito ">
            <div class="container">
                <div class="row pt50">
                    <div class="col-md-12 text-center">
                        <h1 class="font-size-normal  color-light">
                            Layanan Kami
                            <small class="heading heading-solid color-light center-block"></small>
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
        <div id="why" class="pt75">
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
        
                                           
        
        <!-- Shop Area
        ===================================== -->
        <div id="shop" class="bg-light pt25 pb50">
            <div class="container">
                
                <div class="row">
                    
                    <div class="col-md-12 text-center">
                        <h1 class="font-size-normal">
                            <small>KARRIZ STORE</small>
                            Product Terbaru Kami
                            <small class="heading heading-solid color-cyan center-block"></small>
                        </h1>
                    </div>                                              
                    <div class="col-md-12 text-center">                                
                        <div class="row">
                            <div id="owlSectionFourItem" class="owl-carousel">                   
                                <?php  
                                    foreach ($product as $s) 
                                    {
                                ?>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
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
                        </div>
                        
                       
                        
                    </div>                    
                             
                </div> 
                
            </div>
        </div>
        
        <!-- Info / Event -->
    
        <div id="general-content-1" class="pt50 pb50 bg-grad-mojito">
            <div class="container">

                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="font-size-normal  color-light">
                            Info & Event
                            <small class="heading heading-solid color-light center-block"></small>
                        </h1>
                    </div>
                    <div id="owlSectionThreeItem2" class="owl-carousel2">
                        <?php  
                            foreach ($kegiatan as $s) 
                            {
                        ?>

                        <div class="col-md-12 col-sm-6 col-xs-12">                            
                            <div class="price price-three">                                
                                <div class="price-header">
                                    <div class="col-md-12 mb25">
                                        <img src="<?php echo base_url() ?>file/kegiatan/<?php echo $s['file_thumbnail'] ?>" alt="<?php echo $s['nm_kegiatan'] ?>" class="img-responsive">
                                    </div>                             
                                </div>
                                <div class="price-body">
                                    <div class="col-md-12" style="height: 100px;">
                                        <h5 class="mb20">
                                            <small class="color-red"><?php echo $s['nm_kat_kegiatan'] ?></small>
                                            <?php echo $s['nm_kegiatan'] ?>
                                        </h5>
                                    </div>
                                   
                                </div>
                                <div class="price-footer">  
                                    <div class="row">
                                        <div class="col-md-12">
                                           <div class="col-lg-6">
                                               <a href="<?php echo base_url() ?>info-event/<?php echo $s['slug'] ?>" class="button button-md button-rounded button-pasific hover-icon-down button-block">Detail <i class="fa fa-link"></i> </a>
                                           </div>
                                           <div class="col-lg-6">
                                                <?php   
                                                    if ($this->agent->is_mobile()) 
                                                    {
                                                ?>
                                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $contact[0]['no_hp'] ?>&text=Hai Admin Saya Ingi Bertanya Soal : <?php echo $s['nm_kegiatan'] ?>" class="button button-md button-rounded button-success hover-icon-down button-block"> Kontak<i class="fa fa-whatsapp"></i> </a>

                                                    
                                                <?php
                                                    }
                                                    else if ($this->agent->is_browser()) 
                                                    {
                                                ?>
                                                    <a target="_blank" href="https://web.whatsapp.com/send?phone=<?php echo $contact[0]['no_hp'] ?>&text=Hai Admin Saya Ingi Bertanya Soal : <?php echo $s['nm_kegiatan'] ?>" class="button button-md button-rounded button-success hover-icon-down button-block"> Daftar<i class="fa fa-whatsapp"></i> </a>

                                                    
                                                <?php
                                                    }
                                                ?>
                                                
                                               
                                           </div> 
                                        </div>                                    
                                    </div>                                  
                                </div>
                            </div>                                
                        </div>
                                                 
                        <?php
                            }
                        ?>                    
                    </div>                                        
                </div>
            </div>
        </div>


        <!-- Blog Area
        ===================================== -->
        <div id="blogs" class="bg-gray pt50 pb50 ">
            <div class="container">
                
                <!-- title start -->
                <div class="row text-center mb25">
                    <h1 class="font-size-normal">
                        <!-- <small>Blog</small> -->
                        Blog
                        <small class="heading heading-solid color-cyan center-block"></small>

                        <!-- <small class="heading heading-solid center-block"></small> -->
                    </h1>
                </div>
                <!-- title end -->
                
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
                                <span class="blog-author-name"><?php echo $s['author'] ?></span>
                                <span class="blog-date"><?php echo date('d-m-Y',strtotime($s['tgl_blog'])) ?></span>                                                           
                            </div>
                            <div class="blog-one-body"  style="height: 200px;">
                                <h4 class="blog-title"><a href="<?php echo base_url() ?>blog-detail/<?php echo $s['slug'] ?>"><?php echo $s['judul_blog'] ?></a></h4>
                                <?php echo substr($s['deskripsi'], 0,100)."..."; ?>
                            </div>
                            <div class="blog-one-footer">
                                <a href="<?php echo base_url() ?>blog-detail/<?php echo $s['slug'] ?>">Read More</a>
                                <i class="fa fa-facebook"></i><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo base_url('').$this->uri->uri_string(); ?>">Facebook</a>
                                <i class="fa fa-twitter"></i><a target="_blank" href="<?php echo base_url('').$this->uri->uri_string(); ?>">Twitter</a>
                            </div>
                        </div>
                    </div>
                    <!-- blog post end -->  
                    <?php
                        }
                    ?>
                                                                            
                </div><!-- row end -->                
            </div><!-- container end -->
        </div><!-- section blog end -->
        
        <!-- Gallery Area
        ===================================== -->    
        <div class="pt50 pb50">
            <div class="container">
                <!-- title start -->
                <div class="row text-center mb25">
                    <h1 class="font-size-normal">
                        Gallery
                        <small class="heading heading-solid color-cyan center-block"></small>                        
                    </h1>
                </div>
                <!-- title end -->
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

        <!-- Testimonial Area
        ===================================== -->
        <div id="testimonial" class="bg-gray pt50 pb50 ">
            <div class="container">
                
                <!-- title start -->
                <div class="row text-center mb25">
                    <h1 class="font-size-normal">
                        <small>Testimonials</small>
                        Apa Kata Mereka ?
                        <small class="heading heading-solid color-cyan center-block"></small>
                        
                    </h1>
                </div>
                <!-- title end -->
                
                <div class="row">
                    
                    <div class="col-sm-12">                        
                        <div class="row">
                            
                            <div id="owlSectionThreeItem3" class="owl-carousel">
                                <?php  
                                    foreach ($testimoni as $s) 
                                    {
                                ?>
                                    <div class="col-md-12 col-sm-6 col-xs-12">                            
                                        <div class="col-md-12 mb25">
                                            <img src="<?php echo base_url() ?>file/testimoni/<?php echo $s['file_thumbnail'] ?>" alt="<?php echo $s['nm_testimoni'] ?>" class="img-responsive">
                                        </div>                                
                                    </div>

                                   
                                    
                                <?php
                                    }
                                ?>                                                                

                            </div><!-- owlSectionTwoItem end -->
                        </div><!-- row end -->
                    </div><!-- col end -->
                    
                </div><!-- row end -->
            </div><!-- container end -->
        </div><!-- section testimonial end -->
        
        <!-- Clients Area
        ===================================== -->
        <div id="client" class="bg-light pt50 pb20">
            <div class="container">
                <!-- title start -->
                <div class="row text-center mb25">
                    <h1 class="font-size-normal">
                        <!-- <small>Client</small> -->
                        Client Kami
                            <small class="heading heading-solid color-cyan center-block"></small>
                        
                    </h1>
                </div>
                <!-- title end -->

                <div class="row">
                    <div id="owlSectionFiveItem" class="owl-carousel">
                        <?php  
                            foreach ($client as $s) 
                            {
                        ?>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <img src="<?php echo base_url() ?>file/client/<?php echo $s['logo_client'] ?>" alt="<?php echo $s['nm_client'] ?>" class="img-responsive center-block">
                            </div>
                        <?php
                            }
                        ?>                                                                

                    </div><!-- owlSectionTwoItem end -->                   

                </div>

            </div>
        </div>    
          
        <!-- Contact Us Area
        =====================================-->
        <div id="contact" class="pt100 pb100 bg-grad-mojito">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="row">

                            <!-- title start -->
                            <div class="col-md-12 mb50">
                                <h2 class="font-size-normal color-light">
                                    <small class="color-light">Kontak Kami</small>
                                    Kami Akan Senang Dapat Melayani Anda
                                </h2>
                                <h5 class="color-light">Kami Akan Memastikan Kepuasan Anda</h5>
                            </div>
                            <!-- title end -->

                            <!-- contact info start -->
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <span class="icon-map color-light el-icon2x"></span>
                                <h5 class="color-light"><strong>Lokasi Kami</strong></h5>
                                <p class="color-light"><?php echo $contact[0]['alamat'] ?></p>
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <span class="icon-megaphone color-light el-icon2x"></span>
                                <h5 class="color-light"><strong>Phone</strong></h5>
                                <p class="color-light"><i class="fa fa-phone"></i> <?php echo $contact[0]['no_hp'] ?></p>
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <span class="icon-envelope color-light el-icon2x"></span>
                                <h5 class="color-light"><strong>Email</strong></h5>
                                <p class="color-light"><?php echo $contact[0]['email'] ?></p>
                            </div>
                            <!-- contact info end -->

                        </div><!-- row left end -->
                    </div><!-- col left end -->
                    
                    <div class="col-md-6">
                        <div class="contact contact-us-one">
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
        </div><!-- section contact end -->
        
        
        <!-- footer Area
        ===================================== -->
        <?php $this->load->view('front_partial/footer') ?>
        <!-- footer end -->
        
        
        <!-- Vendor Scripts -->
        <?php $this->load->view('front_partial/vendor-scripts') ?>

    </body>
</html>