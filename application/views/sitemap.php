<?php 
header('Content-type: application/xml; charset="ISO-8859-1"',true);  
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
     <loc><?php echo base_url('');?></loc>
     <priority>1.0</priority>
  </url>
  

  <?php foreach($kegiatan as $s) { ?>
  <url>
     <loc><?php echo base_url().'info-event/'.$s['slug']?></loc>
     <priority>0.9</priority>
   </url>
  <?php } ?>

  <?php foreach($blog as $s) { ?>
  <url>
     <loc><?php echo base_url().'blog-detail/'.$s['slug']?>"></loc>
     <priority>0.9</priority>
   </url>
  <?php } ?>

  <?php foreach($product as $s) { ?>
  <url>
     <loc><?php echo base_url().'shop-detail/'.$s['slug'] ?>"></loc>
     <priority>0.9</priority>
   </url>
  <?php } ?>

  <url>
   <loc><?php echo base_url('').'layanan';?></loc>
   <priority>0.7  </priority>
  </url>

  <url>
   <loc><?php echo base_url('').'shop';?></loc>
   <priority>0.6  </priority>
  </url>

  <url>
   <loc><?php echo base_url('').'kontak';?></loc>
   <priority>0.5 </priority>
  </url>

  

</urlset>