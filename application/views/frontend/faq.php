<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body style="background-image:url(<?php echo base_url('assets/gambar/background.jpg') ?>)">
<div class="container mt-3" style="background-color:white;">
<div class="row">	
<div class="col-md-9">
<h4 class="alert alert-primary">FAQ</h4>
<?php foreach ($faq as $tampil) {
	
 ?>
<p><?=$tampil->faq?></p>

 <?php }?>

	
	
</div>
<div class="col-md-3">

	<h6 class="alert alert-primary">Berita Terbaru</h6>
<?php foreach ($terkini as $tampil) {
	
 ?>
<div class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
    	<img class="rounded-left" style="width:75px; height:75px;" src="<?php echo base_url('assets/gambar_berita') ?>/<?php echo $tampil->foto ?>" >
    <a href="<?php echo base_url('Welcome/detail/'.$tampil->judul.'/'.$tampil->id.'') ?>"><p class="mb-1" style="font-size:12px; padding-left:5px;"><?=$tampil->judul?></p></a><br>
   


    </div>
    <small class='right' ><?php echo date('d-m-Y',strtotime($tampil->tgl_terbit)) ?></small>
    </div>
 
<?php }?>	</div>
	</div>
	</div>
</body>
</html>