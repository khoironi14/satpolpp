<!DOCTYPE html>
<html>
<head>
	<title>Tentang Kemenaker</title>
</head>
<body style="background-image:url(<?php echo base_url('assets/gambar/background.jpg') ?>)">
<div class="container" style="background-color:white;">
<div class="menu_foto"><marquee><?php foreach ($berita as $tampil) {
 echo "<a href=''>".$tampil->judul."</a>";//$tampil->judul;
} ?></marquee> </div>
<div class="row">
<div class="col-md-8">
<h2>Tentang Satuan Polisi Pamong Praja</h2>	<hr b style="background-color:salmon; size: 100px;">
<ul>	
<li><a href="#">Organisasi</a></li>

<li><a href="">Sejarah</a></li>
<li><a href="">Rencana Strategis</a></li>
<li><a href="">Profil</a></li>


</ul>
</div>	
<div class="col-md-3"><h6 class="alert alert-primary" id="widget">Pengumuman</h6>
<?php foreach ($pengumuman as $tampil) {
   
   ?>

 
  <a href="<?php echo $tampil->link ?>" >
   <img style="width:230px; margin-bottom:7px;" src="<?php echo base_url('assets/gambar/pengumuman')?>/<?php echo $tampil->foto ?>">
  </a>
  
  

<?php }?>


  <h6 class="alert alert-primary"><img style="width:30px;" src="<?php echo base_url('assets/gambar/kemenaker.png')?>">Berita Terkini</h6>
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

</div>
</div>
</body>
</html>