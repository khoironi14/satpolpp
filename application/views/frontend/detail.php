<!DOCTYPE html>
<html>
<head>
	<title>Kementerian tenaga Republik Indonesia|Berita|Berita Kemenaker</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
  <style type="text/css">
    a:link {
    text-decoration: none;
}

a:visited {
    text-decoration: none;
}
a:hover {
    color: hotpink;
}
  </style>
</head>
<body style="background-image:url(<?php echo base_url('assets/gambar/background.jpg') ?>)">

<div class="container">
<div class="menu_foto"><marquee><?php foreach ($berita as $tampil) {
 echo "<a href=''>".$tampil->judul."</a>";//$tampil->judul;
} ?></marquee> </div>
<div class="row">
<div class="col-md-8 col-xs-12">
	<?php
	$tanggal=date('Y-m-d',strtotime($detail['tgl_terbit']));
	 $hari=date('D',strtotime($tanggal));
	 $dayList = array(
	'Sun' => 'Minggu',
	'Mon' => 'Senin',
	'Tue' => 'Selasa',
	'Wed' => 'Rabu',
	'Thu' => 'Kamis',
	'Fri' => 'Jumat',
	'Sat' => 'Sabtu'
); ?>
<div class="list-group-item list-group-item-action flex-column align-items-start">
<div class="full_meta "><h6 style="padding-left:8px;"><i class="fas fa-calendar-alt"></i>  <?php echo $dayList[$hari],',',date('d-m-Y',strtotime($detail['tgl_terbit']));?> 0 <i class="fas fa-comment"></i> Komentar 0 Dilihat</h6></div>

	<img class="img-responsive" style="max-width:100%;" src="<?php echo base_url('assets/gambar_berita/'.$detail['foto'].'') ?>">
	<h2 style="margin-top:15px;"><?php echo $detail['judul'] ?></h2>
	<p><?=$detail['isi']?></p>
<div class="fb-share-button" data-href="http://disnakerin.cilacapkab.go.id" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fdisnakerin.cilacapkab.go.id%2F&amp;src=sdkpreparse">Bagikan</a></div>
</div>

<div class="fb-comments" data-href="http://disnakerin.cilacapkab.go.id/" data-numposts="5"></div>
	<!--End Md -->
</div>	

<!--cari berita-->
<div class=" col-md-4 col-xs-6">
<h6 class="alert alert-warning"><i class="fas fa-search"></i>Cari Berita</h6>
<div class="list-group">
 
  <form class="form-inline">
    <input class="form-control" type="search" placeholder="Search Berita" aria-label="Search">
    <button class="btn btn-success " type="submit"><i class="fas fa-search"></i></button>
  </form>
  
</div>
<!--end berita-->
<!-- Berita Terbaru -->
<div class="list-group" style="margin-top:10px;">
<h6 class="alert alert-warning">Berita Terbaru</h6>
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

<!--End Berita-->
<!-- Pengumuman -->
<h6 class="alert alert-primary" id="widget">Pengumuman</h6>
<?php foreach ($pengumuman as $tampil) {
   
   ?>

 
  <a href="<?php echo $tampil->link ?>" >
   <img style="width:230px; margin-bottom:7px;" src="<?php echo base_url('assets/gambar/pengumuman')?>/<?php echo $tampil->foto ?>">
  </a>
  
  

<?php }?>

<!--End Pengumuman -->
</div>	
</div>
</div>
</body>
</html>
<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>