<!DOCTYPE html>
<html>
<head>
	<title>	Info Loker Kerja</title>
</head>
<body>
<div class="container">
<div class="col-md-9">
<form action="<?php echo base_url('Admin/info_loker') ?>" method="post">	
<label>Judul loker</label>
<input type="text" name="judul" class="form-control" required="">
<label>Jabatan</label>
<input type="text" name="jabatan" class="form-control">
<label>Golongan Jabatan</label>
<select class="form-control" name="golongan" id="golongan">

<option>Pilih</option>
<?php foreach ($golongan as $tampil) {

 ?>
<option value="<?=$tampil->id?>"><?=$tampil->golongan_jabatan?></option>
<?php }?>
 </select>
 <label>Jenis Golongan</label>
 <select name="jenis" id="jenis" class="form-control"><option>--Pilih--</option></select>
 <label>Nama Perusahaan</label>
 <input type="teext" name="nama_perusahaan" class="form-control" required="">
 <label>Minimal Pendidikan</label>
 <input type="text" name="pendidikan" class="form-control">
 <label>Penempatan</label>
 <select name="penempatan" class="form-control"><option>--Pilih-- </option>
<?php foreach ($penempatan as $tampil) {
	
 ?>
<option value="<?=$tampil->id?>"><?=$tampil->kategori_kerja?></option>
</select>
 <h4>Alamat Perusahaan</h4>
 <label>Provinsi</label>
 <select class="form-control" name="provinsi" id="provinsi"><option>Pilih</option>
 <?php foreach ($provinsi as $tampil) {
 	?>
<option value="<?=$tampil->id?>"><?=$tampil->name?></option>
<?php } ?>

 </select>
 <label>Kabupaten</label>
 <select id="kabupaten" name="kabupaten" class="form-control"><option>Pilih</option></select>
 <label>Kecamatan</label>

 <select name="kecamatan" id="kecamatan" class="form-control"><option></option></select>
  <label>Alamat/Nama Jalan/Kelurahan</label>
 <textarea name="alamat" class="form-control"></textarea>
 <label>No Telpon Perusahaan</label>
 <input type="text" name="telpon" class="form-control">
 <label>Sektor Usaha</label>
 <textarea name="sektor_usaha" class="form-control"></textarea>
 <label>Deskripsi Pekerjaan</label>
 <textarea name="deskripsi" class="form-control"></textarea>
<label>Berlaku S/d</label>
<input type="date" name="berlaku" class="form-control">
<label>Persyaratan Umum</label>
<textarea class="form-control" name="keterangan"></textarea>
<label>Persyaratan Khusus</label>
<textarea name="khusus" class="form-control"></textarea>
<label>Kebutuhan</label>
<textarea name="kebutuhan" class="form-control"></textarea>
<button type="submit" name="simpan" class="btn btn-info">Simpan</button>
<button class="btn btn-danger">Kembali</button>

</form>

</div>
	</div>
</body>
</html>
<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js') ?>"></script>
<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'keterangan' );
            </script>
            <script>
               
                CKEDITOR.replace( 'deskripsi' );
            </script>
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

}),
$('#golongan').change(function(){

var golongan=$('#golongan').val();

$.ajax({
url:"<?=base_url()?>Admin/jabatan",
                    type:"POST",
                    data:"golongan="+ golongan,
success:function(data){
                        
                        
                        $("#jenis").html(data);
                       
                        
                    }

});

})

    });
</script>