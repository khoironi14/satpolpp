<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
</head>
<body style="background-image:url(<?php echo base_url('assets/gambar/background.jpg') ?>)">
<div class="container menu_foto"><marquee><?php foreach ($berita as $tampil) {
 echo "<a href=''>".$tampil->judul."</a>";//$tampil->judul;
} ?></marquee> </div>
<div class="container main-content">

<div class="col-md-12">

<h4><img style="width:80px;" src="<?php echo base_url('assets/gambar/Logo-Cilacap.png')?>"><center>	
 <?php echo $profil['judul_profil'] ?></center></h4><hr>
<center>

<h4><?php echo $profil['alamat'] ?></h4><hr>
<h5>Kode Pos:53223</h5><hr>

</center>
<h4>Pejabat Dinas:Kosasih,S.os., M.si</h4><hr>
<p><?=$profil['profil']?></p>
</div>

</div>
</body>
</html>