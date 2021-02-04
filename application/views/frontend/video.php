<!DOCTYPE html>
<html>
<head>
	<title>Video</title>
</head>
<body style="background-image:url(<?php echo base_url('assets/gambar/background.jpg') ?>)">
<div class="container">
<div class="menu_foto"><marquee><?php foreach ($berita as $tampil) {
 echo "<a href=''>".$tampil->judul."</a>";//$tampil->judul;
} ?></marquee> </div>
<div class="row">
	<div class="col-md-8">
	<div class="list-group-item list-group-item-action flex-column align-items-start">
<div class="full_meta ">
		
		
		</div>

		<iframe width="100%" height="400"   src="<?php echo $video['link'] ?>"></iframe>
		<h2><?=$video['judul']?></h2>
		</div>
	</div>
	<!-- cari-->

<div class="col col-md-4">
<h6 class="alert alert-warning"><i class="fas fa-search"></i>Cari Berita</h6>
<div class="list-group">
 
  <form class="form-inline" action="<?php echo base_url('Search/index') ?>" method="post">
    <input class="form-control" type="search" name="search" placeholder="Search Berita" aria-label="Search">
    <button class=" btn-success  " type="submit"><i class="fas fa-search"></i></button>
  </form>
  
</div>

<div class="list-group" style="margin-top:10px;">
<h6 class="alert alert-warning"><i><img style="width:25px; padding-right:2px;" src="<?php echo base_url('assets/gambar/kemenaker.png') ?>"></i>Berita Terbaru</h6>
<?php foreach ($terkini as $tampil) {
	
 ?>
<div class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
    	<img class="rounded-left" style="width:75px; height:75px;" src="<?php echo base_url('assets/gambar_berita') ?>/<?php echo $tampil->foto ?>" >
    <a href="<?php echo base_url('Welcome/detail/'.$tampil->judul.'/'.$tampil->id.'') ?>"><p class="mb-1" style="font-size:12px; padding-left:5px;"><?=$tampil->judul?></p></a><br>
   


    </div>
    <small class='right' ><?php echo date('d-m-Y',strtotime($tampil->tgl_terbit)) ?></small>
    </div>
 
<?php }?>
</div>
	<!--end-->	
</div>
</div>
</body>
</html>
<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>