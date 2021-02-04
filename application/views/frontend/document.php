<!DOCTYPE html>
<html>
<head>
	<title>Informasi Pasar Kerja</title>
</head>
<body style="background-image:url(<?php echo base_url('assets/gambar/background.jpg') ?>)">
<div class="container">
<div class="menu_foto"><marquee><?php foreach ($berita as $tampil) {
 echo "<a href=''>".$tampil->judul."</a>";//$tampil->judul;
} ?></marquee> </div>
<div class="row">

<div class="col-md-9">

 
	<?php foreach ($dokument as $tampil) {
		
	 ?>
<ul class="list-group" style="margin-top:5px;">
  <li class="list-group-item">Judul: <?=$tampil->judul_document?></li>
  <li class="list-group-item">Keterangan: <?=$tampil->keterangan?> </li>
  <li class="list-group-item">Field: <a href='<?php echo base_url('assets/file_pdf/'.$tampil->file.'') ?>' class='btn btn-info'>Lihat File</a></li>
  
</ul>

<?php }?>
</div>	

</div>	


</div>
</body>
</html>