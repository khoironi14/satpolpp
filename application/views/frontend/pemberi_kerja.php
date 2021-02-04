<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body  style="background-image:url(<?php echo base_url('assets/gambar/background.jpg') ?>)">
<div class="container" style="background-color:white;">
<div class="row">	
<div class="col-md-8 mt-3" >
<form action="" method="post">	
<div class="breadcrumb"><h4>Akun Perusahaan</h4></div>	
<label>User Id</label>
<input type="text" name="user_id" class="form-control" required="">
<label>Kata Sandi</label>
<input type="password" name="password" class="form-control" required="">
<label>Ulang Kata sandi</label>
<input type="text" name="konfirmasi" class="form-control" required="">
<label>Email</label>
<input type="email" name="email" class="form-control" required="">
<div class="breadcrumb"><h4>Data Perusahaan</h4></div>
<label>	Nama Perusahaan</label>	
<input type="text" name="nama_perusahaan" class="form-control" required="">
<label>	Jenis Perusahaan</label>	
<select class="	form-control" name="jenis_perusahaan">	<option>Jenis Perusahaan</option>
<?php foreach ($jenis as $tampil) {
	
 ?>
<option value="<?=$tampil->id?>"><?=$tampil->jenis?></option>
<?php }?>
</select>
<h4 class="mt-2" >Alamat Perusahaan</h4>
<label>	Provinsi</label>
<select name="provinsi" id="provinsi" class="form-control" required="">	
<option>Provinsi</option>
<?php foreach ($provinsi as $tampil) {
	
 ?>
<option value="<?=$tampil->id?>"><?=$tampil->name?></option>
<?php }?>
</select>
<label>	Kabupaten/Kota *</label>
<select name="kabupaten" id="kabupaten" class="form-control" required="">
<option>Kabupaten/Kota </option>


	</select>
	<label>Kecamatan *</label>
	<select name="kecamatan" id="kecamatan" class="form-control"><option>Kecamatan</option>


	</select>
	<label>	Alamat</label>
	<textarea name="alamat" class="form-control">	</textarea>
	<label>	Telpon Perusahaan</label>
	<input type="text" name="telpon_perusahaan" class="form-control">
	<div class="breadcrumb"><h4>Kontak Pribadi</h4></div>
	<label>	Nama Kontak</label>
	<input type="text" name="nama_kontak" class="form-control">
	<label>	Nomor Hp</label>
	<input type="text" name="hp" class="form-control">
	<label>	Email</label>
	<input type="email" name="email_pribadi" class="form-control">
	<label>	Deskripsi Perusahaan</label>
	<textarea name=deskripsi class="form-control"> </textarea>
	<button name="simpan" class="btn btn-info">Simpan</button>
</form>
	</div>

</div>
	</div>
</body>
</html>
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

}),
$('#kabupaten').change(function(){

var kabupaten=$('#kabupaten').val();

$.ajax({
url:"<?=base_url()?>Registrasi/kecamatan",
                    type:"POST",
                    data:"kabupaten="+ kabupaten,
success:function(data){
                        
                        
                        $("#kecamatan").html(data);
                       
                        
                    }

});

});

    });
</script>