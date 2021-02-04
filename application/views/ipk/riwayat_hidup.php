<!DOCTYPE html>
<html>
<head>
	<title>Riwayat Hidup</title>
</head>
<body style="background-image:url(<?php echo base_url('assets/gambar/parallax.jpg') ?>);">
<div class="container jumbotron mt-5">
<center><h3>Riwayat Hidup</h3></center>
<div class="row ">

<div class="col-md-6">

<h4>Data Pribadi</h4><hr>	
<table class="table table-konseded">	
<tr><td>Email</td><td><?=$riwayat['email']?></td></tr>
<tr><td>Tempat Lahir</td><td><?=$riwayat['tempat_lahir']?></td></tr>
<tr><td>Jenis Kelamin</td><td><?php $jk=$riwayat['jenis_kelamin']; if ($jk==1) {
	echo "Laki-Laki";
}else{ "Perempuan";} ?></td></tr>
<tr><td>Tanggal Lahir</td><td><?=date('d-m-Y',strtotime($riwayat['tanggal_lahir']))?></td></tr>
<tr><td>Agama</td></tr>
<tr><td>Alamat</td><td><?=$riwayat['alamat']?></td></tr>




</table>




	</div>

<div class="col-md-6">
	<h4>Pendidikan</h4><hr>
	<table class="table table-konseded">
		<tr><td>Nama Instansi</td><td><?=$riwayat['nama_instansi']?></td></tr>
		<tr><td>Tahun Lulus</td><td><?=$riwayat['tahun_lulus_pendidikan']?></td></tr>
	</table>
</div>
<div class="col-md-6"><h4>Keterampilan Pelatihan</h4>
<table class="table table-konseded">
<tr><td>Nama Pelatihan</td><td><?=$riwayat['nama_pelatihan']?></td></tr>
<tr><td>Lembaga Pelatihan</td><td><?=$riwayat['lembaga_pelatihan']?></td></tr>	<tr><td>Nilai Sertifikat</td><td><?=$riwayat['nilia_sertifikat']?></td></tr>


</table>


</div>
<div class="col-md-6"><h4>Pengalaman Kerja</h4>

<table class="table table-konseded">
	
<tr><td>Nama Perusahaan</td><td><?=$riwayat['nama_perusahaan']?></td></tr>
<tr><td>Jabatan</td><td><?=$riwayat['jabatan']?></td></tr>
<tr><td>Deskripsi Pekerjaan</td><td><?=$riwayat['deskripsi_pekerjaan']?></td></tr>
<tr><td>Gaji</td><td><?=$riwayat['gaji']?></td></tr>
</table>

</div>

	</div>
<center><a href="<?php echo base_url('Pdf/riwayat') ?>" class="btn btn-info">Cetak</a></center>

	</div>
</body>
</html>