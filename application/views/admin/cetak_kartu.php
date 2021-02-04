<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
</head>
<body>
<div class="container">
<div class="row">

<div class="col-md-12">
	
	<table class="table table-konseded mt-4">
<tr>
<td width="30" align="center"><img src="<?php echo base_url('assets/gambar/Logo-Cilacap.png')?>" width="60%"></td>
<td width="50" align="center"><h6>PEMERINTAH KABUPATEN CILACAP</h6><br><h6>DINAS KETENAGAKERJAAN DAN PERINDUSTRIAN</h6><br><p style="font-size:20px;">Jl. Perwira No.30, Sidanegara, Cilacap Tengah, Kabupaten Cilacap Jawa Tengah Telp: 0282534005</p>
</td>

</tr>

</table>

<table class="table table-konseded"><tr><td><center>KARTU TANDA BUKTI PENDAFTARAN PENCARI KERJA </center></td></tr>
<tr>
	<td>No Pendaftaran</td><td>:</td>
</tr>
<tr>
	<td>No Induk Kependudukan <span class="pt-2">: <?=$cetak['no_nik']?></span></td>
</tr>


<tr>
	<td>Nama Lengkap : <?=$cetak['nama_lengkap']?> </td>                                                                                                                                                          
</tr>
<tr>
	<td>Jenis Kelamin : <?php if ($cetak['jenis_kelamin']==1) {
		echo "Laki-laki";
	}else{
		echo "Perempuan";
		} ?></td>
</tr>
<tr>
	<td>Status : <?php if ($cetak['status_perkawinan']==1){
		echo "Belum Menikah";
		}else if($cetak['status_perkawinan']==2){


			echo "Dudha";
			}else if($cetak['status_perkawinan']==3){
				echo "Janda";

				}else{
					echo "Kawin";

					}?></td>
</tr>
<tr>
	<td>Agama :<?php if ($cetak['agama']==1){
		echo "Islam";
		}else if($cetak['agama']==2){


			echo "Kristen";
			}else if($cetak['agama']==3){
				echo "Katholik";

				}else if($cetak['agama']==4){
					echo "Hindu";

					}else if($cetak['agama']==5){
					echo "Budha";

					}else{
						echo "Konghucu";

						}?></td>
</tr>
<tr>
	<td>Alamat <?=$cetak['alamat']?>,<?=$cetak['kabupaten']?></td>
</tr>

</table>
<hr>

</div>
<div class="col-md-12">
	<table class="table table-bordered mt-6">
	<tr>
<td><h5>Ketentuan</h5>
<br>
<p>1. Berlaku Nasional</p><p> 2. Bila ada perubahan data keterangan lainnya<br> atau telah mendapat pekerjaan harap segera melapor</p><p>3.Apabila Pencari Kerja yang bersangkutan telah diterima bekerja maka <br> Instansi Perusahaan yang menerima agar mengembalikan AK/I Pada Dinas Tenaga Kerja</p><p>4. Kartu ini berlaku selama 2 Tahun dengan keharusan melapor setiap 6bulan sekali,bagi pekerja yang belum mendapat kerja</p></td>
</tr>
</table>
<center><a href="<?php echo base_url('Pdf/kartu'.$tampil->id.''); ?>" class="btn btn-danger">Print</a></center>
</div>

</div>
</body>
</html>