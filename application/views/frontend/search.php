<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-image:url(<?php echo base_url('assets/gambar/background.jpg') ?>)">

<div class="container">
<div class="menu_foto"><marquee><?php foreach ($berita as $tampil) {
 echo "<a href=''>".$tampil->judul."</a>";//$tampil->judul;
} ?></marquee> </div>


<div class="row">
<div class="col-md-9">
<div class="menu_foto"><button class="btn btn-info">Pencarian </button> </div>	
<div class="list-group">
  <?php foreach ($search as $tampil) {
  	$isi=$tampil->isi;
   $limit=character_limiter($isi,400);
   ?>
  <div class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
    <img class="rounded-left" style="width:230px; height:200px;" src="<?php echo base_url('assets/gambar_berita') ?>/<?php echo $tampil->foto ?>" >
    <a href=""><h6 class="mb-1" style=" padding-left:5px;"><?=$tampil->judul?></h6></a>
     <p><?=$limit?></p>
   
      
    </div>
   
     <small><?=$tampil->tgl_terbit?></small>
  </div>
  <?php } ?>
  
  
</div>




</div>
<!--cari -->	
<div class="col col-md-3">
<h6 class="alert alert-warning"><i class="fas fa-search"></i>Cari Berita</h6>
<div class="list-group">
 
  <form class="form-inline" action="<?php echo base_url('Search/index') ?>" method="post">
    <input class="form-control" type="search" name="search" placeholder="Search Berita" aria-label="Search">
    <button class=" btn-success btn-xs " type="submit"><i class="fas fa-search"></i></button>
  </form>
  
</div>
</div>
<!--end-->
</div>

</div>
</body>
</html>