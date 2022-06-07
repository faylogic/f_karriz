<div id="footer" class="footer-two pt50">
    <div class="container-fluid bb-solid-1">
        <div class="container pb35">
            <div class="row">
                
                <!-- footer about start -->
                <div class="col-md-2 col-sm-12 col-xs-12">
                    <h6 class="font-montserrat text-uppercase color-black">Karriz.id</h6>
                    <p>Melayani segala kebutuhan anda dibidang digital printing, konveksi, Aqiqah - Qurban, umroh, dll. Dikerjakan dengan cepat, tepat dan bersahabat</p>
                </div>
                <!-- footer about end -->
                
                <!-- footer menu one start -->
                <div class="col-md-2 col-md-offset-1 col-sm-6 col-xs-6">
                    <h6 class="font-montserrat text-uppercase color-black">Menu</h6>
                    <ul class="no-icon-list">
                        <li><a href="<?php echo base_url() ?>layanan">Layanan</a></li>
                        <li><a href="<?php echo base_url() ?>gallery">Gallery</a></li>
                        <li><a href="<?php echo base_url() ?>shop">Store</a></li>
                        <li><a href="<?php echo base_url() ?>blog">Blog</a></li>
                        <li><a href="<?php echo base_url() ?>kontak">Kontak</a></li>


                    </ul>
                </div>
                <!-- footer menu one end -->
                
                <!-- footer menu two start -->
                <div class="col-md-2 col-sm-6 col-xs-6">
                    <h6 class="font-montserrat text-uppercase color-black">Kontak Kami</h6>
                    <p><i class="fa fa-phone"></i> <?php echo $contact[0]['no_hp'] ?></p>
                    <p><i class="fa fa-envelope"></i> <?php echo $contact[0]['email'] ?></p>                                        
                </div>
                <!-- footer menu two end -->
                
                <!-- footer menu three start -->
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <h6 class="font-montserrat text-uppercase color-black">Lokasi Kami</h6>
                    <p><?php echo $contact[0]['alamat'] ?></p>
                    <p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d507643.52054718405!2d107.301681!3d-6.268333!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x39c71bc30384cff9!2sKarriz%20Store!5e0!3m2!1sid!2sid!4v1635460142906!5m2!1sid!2sid" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </p>                   
                    
                </div>
                <!-- footer menu three end -->
                
                <!-- footer social icons start -->
                <div class="col-md-2 col-sm-12 col-xs-12">
                    <h6 class="font-montserrat text-uppercase color-black">Social Media</h6>
                    <div class="social social-two">
                        <a target="_blank" href="<?php echo $contact[0]['ig'] ?>"><i class="fa fa-instagram color-brown"></i></a>
                        <a target="_blank" href="<?php echo $contact[0]['fb'] ?>"><i class="fa fa-facebook color-primary"></i></a>                    
                    </div>
                </div>
                <!-- footer social icons end -->

            </div><!-- row end -->
        </div><!-- container end -->
    </div><!-- container-fluid end -->
    
    <div class="container-fluid pt20">
        <div class="container">
            <div class="row">

                <!-- copyright start -->
                <div class="col-md-6 col-sm-6 col-xs-6 pull-left">
                    <p><?php echo date('Y') ?> <a href="#">Karriz.id</a></p>
                </div>
                <!-- copyright end -->

              

            </div><!-- row end -->
        </div><!-- container end -->
    </div><!-- container-fluid end -->
</div>