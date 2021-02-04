<!DOCTYPE html>
<html>
<head>
	<title>	Informasi Pasar Kerja</title>
</head>
<body style="background-image:url(<?php echo base_url('assets/gambar/background.jpg') ?>)">
<div class="container">
<div class="row">	
<div class="col-md-12 mt-2" style="background-color:#006699;">	
<div class="row">	
<div class="col-md-3"><input type="text" name="kata_kunci" placeholder="Kata Kunci" class="form-control-lg mt-3">	</div>
<div class="col-md-3"><input type="text" class="form-control-lg mt-3" value="Lowongan Kerja" readonly="" name=""></div>
<div class="col-md-3"><select name="provinsi" id="provinsi" class="form-control mt-3"><option>Provinsi</option>
<?php foreach ($provinsi as $tampil) {
	
 ?>
<option value="<?=$tampil->id?>"><?=$tampil->name?></option>
<?php }?>
</select></div>

<div class="col-md-3"><select name="kabupaten" id="kabupaten" class="form-control mt-3"><option>Kabupaten</option>

</select>	</div>
<div class="col-md-3"><button name="cari" class="btn btn-info btn-lg mt-3 mb-4"><i class="fas fa-search"></i>Cari Kerja</button>	</div>
</div>
</div>

	</div>
	
	<div class="row">
	<div class="col-md-12 mt-2" style="background-color:white;">
	<h4>Data Lowongan Pekerjaan</h4>
	<table class="table table-bordered">	
<thead>	
<tr>	
<th>Nomor</th>
<th>Lowongan</th>
<th>Perusahaan</th>
<th>Lokasi</th>
<th>Tanggal Berlaku</th>

</tr>


</thead>
<tbody>	
<?php $no=1; foreach ($pencari as $tampil) {
	
 ?>
<tr>	
<td><?=$no++?></td>
<td><?=$tampil->judul_loker?></td>
<td><?=$tampil->nama_perusahaan?></td>
<td><?=$tampil->alamat?></td>
<td><?=$tampil->berlaku?></td>

</tr>
<?php }?>

</tbody>
</table>	</div>	</div>
	</div>
</body>
</html>
<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
<script type="text/javascript">
    
    $(document).ready(function(){
$('#provinsi').change(function(){

var provinsi=$('#provinsi').val();

$.ajax({
url:"<?=base_url()?>Welcome/kabupaten",
                    type:"POST",
                    data:"provinsi="+ provinsi,
success:function(data){
                        
                   //alert(data);     
                        $("#kabupaten").html(data);
                        
                    }

});

});

    });
</script>
