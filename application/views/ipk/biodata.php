<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<style type="text/css">
    

    .biodata{

   background-image:url(<?php echo base_url('assets/gambar/parallax.jpg') ?>);

}
  </style>
</head>
<body class="biodata">
<div class="container jumbotron mt-5" >	
<div class="row">	
<div class="col-md-12" >	
<form action="" method="post" enctype="multipart/form-data">	
<div class="form-row">
<div class="form-group col-md-9" >
<ul class="list-group">
  <li class="list-group-item active">Akun Pencari Kerja</li>
  <label>User Id</label>
  <p style="font-size:10px;">Masukkan User id Anda Sebagai Akun Masuk</p>
  <input type="text" name="user_id" value="<?=$biodata['username']?>" class="form-control">
  <label>Kata Sandi</label>
  <input type="password" name="password" class="form-control" required="">
  <label>Ulangi Kata Sandi</label>
  <input type="password" name="validasi" class="form-control" required="">
  <label>Email</label>
  <input type="email" name="email" value="<?=$biodata['email']?>" class="form-control">
</ul>
<ul class="list-group  mt-3">
  <li class="list-group-item active">Data Pencari Kerja</li>
  <label>NIK/No KTP</label>
  <input type="text" name="nik" class="form-control" value="<?=$biodata['no_nik']?>" required="">
  <label>Nama Lengkap</label>
  <input type="text" name="nama" class="form-control" value="<?=$biodata['nama_lengkap']?>" required="">
  <div class="form-row">	
 <div class="form-group col-md-4">
   <label>Gelar Depan</label>
  <input type="text" name="gelar" class="form-control " required="">
</div>
<div class="form-group col-md-4">
   <label>Gelar Belakang</label>
  <input type="text" name="gelar" class="form-control " required="">
</div>

</div>
<label>Tempat  Lahir</label>
<input type="text" name="tempat_lahir" value="<?=$biodata['tempat_lahir']?>" class="form-control">
<label>	Tanggal lahir</label>
<input type="date" name="tanggal_lahir" value="<?=$biodata['tanggal_lahir']?>" class="form-control">
<div class="form-row">
<div class="col-md-4">	
<label>Jenis Kelamin</label>
<select class="form-control">
	<option value="laki-laki">Laki-laki</option>
	<option value="perempuan">Perempuan</option>
</select>
</div>
<div class="col-md-3"><label>Agama</label> <select class="form-control">
		<option>--Pilih--</option>
		<?php foreach ($agama as $tampil) {
			
		 ?>
	<option value="<?=$tampil->id?>" <?php if ($tampil->id == $biodata['agama']) {
    echo "selected";
  }else{ echo "";} ?>><?=$tampil->nama_agama?></option>
<?php }?>
	</select>	</div>

	</div>
	<label>	Status Perkawinan</label>
	<select name="status" class="form-control">
		<option>--Pilih--</option>
		<?php foreach ($status as $tampil) {
			
		 ?>
		<option value="<?=$tampil->id?>" <?php if ($tampil->id== $biodata['status_perkawinan']) {
      echo "selected";
    }else{ echo ""; } ?>><?=$tampil->status?></option>
		<?php }?>
	</select>
	<label>	Kewarganegaraan</label>
	<select class="form-control">
		<option>--Pilih--</option>
		<option value="Warga Negara Indonesia(WNI)" >WNI(Warga Negara Indonesia)</option>
		<option>WNA(Warga Negara Asing)</option>
	</select>
	<label>	Nomor Hp</label>
	<input type="text" name="nomor_hp" value="<?=$biodata['phone']?>" class="form-control">
	<label>Provinsi</label>
	<select class="form-control" id="provinsi">
	<option>--Pilih--</option>
		<?php foreach ($provinsi as $tampil) {
			
		 ?>

		<option value="<?=$tampil->id?>" <?php if ($tampil->id == $biodata['provinsi']) {
      echo "selected";
    } ?>><?=$tampil->name?></option>
		<?php }?>
	</select>
	 <label>Kabupaten</label>
                            <select class="form-control" id="kabupaten" name="kabupaten"> </select>
                            <div class="form-row">
                            <div class="col-md-3">	
                            <label>Kecamatan</label>
                            <select class="form-control" id="kecamatan" name="kecamatan">
                                <option>--Pilih Kecamatan--</option>

                            </select>
                            	</div>
                            		<div class="col-md-2"><label>Kode Pos</label> <input type="text" name="kode_Pos" class="form-control" required="">	</div>

                            	</div>

	</select>
  </ul>
  <ul class="list-group  mt-3">
  <li class="list-group-item active">Data Pendidikan Terkahir</li>
<label>	Tingkat Pendidikan</label>
<select class="form-control" name="pendidikan">	
<option>--Pilih Pendidikan--</option>
<?php foreach ($pendidikan as $tampil) {
	
 ?>
<option><?=$tampil->jenjang?></option>
<?php }?>

</select>
<label>Jurusan</label>
<select class="form-control" name="jurusan">
<option>--Pilih--</option>
<?php foreach ($jurusan as $tampil) {
	
 ?>	
<option><?=$tampil->jenjang?></option>
<?php }?>

</select>
<label>	Tahun Lulus</label>
<input type="text" name="tahun_lulus" value="<?=$biodata['tahun_lulus_pendidikan']?>" class="form-control">
<label>	Nilai Ijazah/IPK</label>
<input type="text" name="ipk" value="<?=$biodata['nilai_ijazah']?>" class="form-control">
  </ul>
  <ul class="list-group  mt-3">
  <li class="list-group-item active">Pengalaman Kerja</li>
  <label>Nama Perusahaan</label>
  <input type="	text" name="nama_perusahaan" class="form-control">
  <label>Jabatan</label>
  <input type="	text" name="jabatan" class="form-control">
  <label>Deskripsi Pekerjaan</label>
  <textarea class="form-control" name="deskripsi">	</textarea>
  <div class="form-row">	
  		<div class="col-md-2">
  			
  			<label>Lama Kerja</label>
  			<input type="date" name="lama_kerja" class="form-control">
  		</div>
  		<div class="col-md-2"><label>S/d</label><input type="date" name="sd" class="form-control"></div>

  </div>
<label>	Gaji</label>
<input type="text" name="gaji" class="form-control">
  </ul>
</div>
</div>
<button class="btn btn-info">Simpan</button>
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
url:"<?=base_url()?>Ipk/kabupaten",
                    type:"POST",
                    data:"provinsi="+ provinsi,
success:function(data){
                        
                        
                        $("#kabupaten").html(data);
                        
                    }

});

});

    });
</script>


<script type="text/javascript">
    
    $(document).ready(function(){
$('#kabupaten').change(function(){

var kabupaten=$('#kabupaten').val();

$.ajax({
url:"<?=base_url()?>Ipk/kecamatan",
                    type:"POST",
                    data:"kabupaten="+ kabupaten,
success:function(data){
                        
                        
                        $("#kecamatan").html(data);
                       
                        
                    }

});

});
});
</script>