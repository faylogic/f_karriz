<!doctype html>
<html lang="en">

    <head>
        <!-- DataTables -->
        <link href="<?php echo base_url();?>assets_back/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets_back/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets_back/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <?php 
            $this->load->view('back_partial/title-meta'); 
            $this->load->view('back_partial/head-css');
        ?>
        <!-- Plugins css -->
        
    </head>


    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php  
                $this->load->view('back_partial/topbar');
                $this->load->view('back_partial/sidebar');

            ?>           

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        <?php 
                            $this->load->view('back_partial/page-title.php');
                        ?>

                        <div class="row">
                            <div class="col-12">                              
                                <div class="card">       
                                <?php  
                                    if ($stat == 'edit') 
                                    {
                                        foreach ($cek_data as $k) 
                                        {
                                            $id_product        = $k['id_product'];
                                            $tanggal       = $k['tanggal'];
                                            $nm_product     = $k['nm_product'];
                                            $id_kat_product    = $k['id_kat_product'];
                                            $id_service    = $k['id_service'];       
                                            $deskripsi          = $k['deskripsi'];
                                            $harga_satuan       = $k['harga_satuan'];
                                            $harga_discount       = $k['harga_discount'];
                                        }
                                    }
                                ?>       
                                    <form id="form-data"  method="POST" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div hidden="">
                                            <input type="text" name="id_product" id="id_product" value="<?php echo $id_product ?>">
                                            <input type="text" name="tanggal" id="tanggal" value="<?php echo $tanggal; ?>">
                                            <input type="text" name="stat" id="stat" value="<?php echo $stat; ?>">
                                        </div>   
                                        <div class="form-group col-lg-12">
                                            <label>Nama Product</label>
                                            <input type="text" class="form-control" name="nm_product" value="<?php echo $nm_product ?>">
                                        </div>                                                          

                                        <div class="form-group col-lg-12">
                                            <label>Kategori Product</label>
                                            <select class="form-control select2" style="width:100%;" name="id_kat_product" id="id_kat_product">
                                                <option value="">Pilih Kategori Product</option>
                                                <?php  
                                                    foreach ($data_kat_product as $s)                            
                                                    {
                                              
                                                        $selected = "";
                                                        if ($s['id_kat_product'] == $id_kat_product) 
                                                        {
                                                            $selected = "selected";
                                                        }
                                                    ?>

                                                    <option value="<?php echo $s['id_kat_product'] ?>" <?php echo $selected; ?>><?php echo $s['nm_kat_product'] ?>
                                                    </option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Kategori Service</label>
                                            <select class="form-control select2" style="width:100%;" name="id_service" id="id_service">
                                                <option value="">Pilih Service</option>
                                                <?php  
                                                    foreach ($data_service as $s)                            
                                                    {
                                              
                                                        $selected = "";
                                                        if ($s['id_service'] == $id_service) 
                                                        {
                                                            $selected = "selected";
                                                        }
                                                    ?>

                                                    <option value="<?php echo $s['id_service'] ?>" <?php echo $selected; ?>><?php echo $s['nm_service'] ?>
                                                    </option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label>Harga Satuan</label>
                                            <input name="harga_satuan" value="<?php echo $harga_satuan ?>" id="input-currency" class="form-control input-mask text-left" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'placeholder': '0'">
                                            <span class="text-muted">e.g "Rp 0.00"</span>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Harga Discount</label>
                                            <input name="harga_discount" value="<?php echo $harga_discount ?>" id="input-currency" class="form-control input-mask text-left" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'placeholder': '0'">
                                            <span class="text-muted">e.g "Rp 0.00"</span>
                                        </div>
                                        
                                        <div class="form-group col-lg-12">
                                            <label>Deskripsi</label>
                                            <textarea id="elm1" name="deskripsi"><?php echo $deskripsi ?></textarea>                
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>File</label>
                                            <?php  
                                                $required = "required";
                                                if ($stat == 'edit') 
                                                {
                                                    $required = "";
                                                }
                                            ?>
                                            <input type="file" <?php echo $required; ?> class="form-control" name="file">
                                        </div>

                                    </div>

                                     <!-- end row -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button> 
                                    </div>
                                    </form>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>

                <!-- End Page-content -->   
                <?php  
                    $this->load->view('back_partial/footer');
                ?>             
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
        <?php  
            $this->load->view('back_partial/right-sidebar');
        ?>
        
        <!-- JAVASCRIPT  -->
        <?php $this->load->view('back_partial/vendor-scripts') ?>
        <!-- Required datatable js -->
        <script src="<?php echo base_url()?>assets_back/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url() ?>assets_back/libs/node-waves/waves.min.js"></script>        
        <!-- Plugins js -->
        <script src="<?php echo base_url() ?>assets_back/libs/dropzone/min/dropzone.min.js"></script>
        <script src="<?php echo base_url() ?>assets_back/js/app.js"></script>

        <!-- JS Page -->
        <?php $this->load->view('back/product_js') ?>    
        <!-- form mask -->
        <script src="<?php echo base_url() ?>assets_back/libs/inputmask/jquery.inputmask.min.js"></script>
        <script type="text/javascript">
            $(".input-mask").inputmask();
        </script>  
    </body>
</html>
