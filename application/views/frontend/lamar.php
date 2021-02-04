<!DOCTYPE html>
<html>
<head>
	<title>Detail Registrasi</title>
</head>
<body style="background-image:url(<?php echo base_url('assets/gambar/background.jpg') ?>)">
<div class="container">

<div class="row">
<div class="col-md-10 mt-3" style="background-color:white;">
<div class="breadcrumb">	<h4>Lamar Pekerjaan</h4></div>
  <ul id="tabs" class="breadcrumb nav nav-tabs" data-tabs="tabs">
            <li class="nav-item"><a class="nav-link active" href="#tab-1" data-toggle="tab">Akun</a></li>
            <li class="nav-item"><a class="nav-link" href="#tab-2" data-toggle="tab">Data Diri</a></li>
            <li class="nav-item" ><a class="nav-link" href="#tab-3" data-toggle="tab">Pekerjaan</a></li>
            <li class="nav-item" ><a class="nav-link" href="#keterampilan" data-toggle="tab">Keterampilan</a></li>
             <li class="nav-item" ><a class="nav-link" href="#pendidikan" data-toggle="tab">Pendidikan</a></li>
        </ul>
        
        <div id="my-tab-content" class="tab-content">
      
            <div class="tab-pane active" id="tab-1">
         <form class="form-user" method="post"> 

		<label>User ID</label>
<input type="text" name="userid" class=" form-control" >
<label>	Kata Sandi</label>
<input type="password" name="sandi" class=" form-control"  >
<label>	Ulang Kata Sandi</label>
<input type="password" name="ulang" id="validasi"  class="form-control" required="">
<label>Alamat</label>
<input type="text" name="alamat"  class="form-control">
<label>Email</label>
<input type="email" name="email"   class="form-control">

	
            </div>
            <div class="tab-pane" id="tab-2">
                
                		<label>Nomor KTP/NIK <small style="color:red;">*</small></label>
                		<input type="text" name="ktp"  placeholder="NO KTP/NIK Anda" class="form-control" required="">
                		<label>Nama Lengkap<small style="color:red;">*</small></label>
                		<input type="text" name="nama" id="nama" placeholder="Nama Lengkap Anda" class="form-control" required="">
                		<label>Tempat lahir<small style="color:red;">*</small></label>
                		<input type="text" name="tempat" id="tempat" placeholder="Tempat Lahir Anda" class="form-control" required="">
                		<label>Tanggal lahir<small style="color:red;">*</small></label>
                		<input type="date" placeholder="Tanggal lahir ANda" name="tgl_lahir" id="tanggal" class="form-control">
                		<label>Jenis Kelamin<small style="color:red;">*</small></label>
                		<select class="form-control" name="jenis_kelamin" required="" id="jenis_kelamin">
                				<option>--Pilih--</option>
                				<option value="1">Laki-Laki</option>
                				<option value="2">Perempuan</option>

                			</select >
                			<label>Agama<small style="color:red;">*</small></label>
                			<select name="agama" id="agama" class="form-control" required="">
                			<option>--Pilih--</option>
                      <?php foreach ($agama as $tampil) {
                       
                       ?>
                				<option value="<?=$tampil->id?>"><?=$tampil->nama_agama?></option>
                				<?php } ?>
                			</select>
                			<label>Status Perkawinan</label>
                			<select class="form-control" name="status" id="status" required="">
                				<option>--Pilih--</option>
                        <?php foreach ($status as $tampil) {
                          
                         ?>
                				<option value="<?=$tampil->id?>"><?=$tampil->status?></option>
                				
                        <?php }?>
                			</select>
                			<label>	Kewarganegaraan</label>
                			<select class="form-control" name="kewarganegaraan" id="kewarganegaraan">
                				<option>--Pilih--</option>
                				<option value="Warga Negara Indonesia(WNI)">Warga Negara Indonesia(WNI)</option>
                				<option value="Warga Negara Asing(WNA)">Warga Negara Asing(WNA)</option>

                			</select>
                			<label>TInggi/Berat Badan</label>
                			<input type="text" name="tinggi_badan" id="tinggi_badan" class="form-control" >
                            <label>Provinsi</label>
                            <select class="form-control" name="provinsi" id="provinsi">
                            <option>--Provinsi--</option>
                            <?php foreach ($provinsi as $tampil) {
                                
                             ?>
                            <option value="<?=$tampil->id?>"><?=$tampil->name?></option>
                            <?php }?>
                                
                            </select>
                            <label>Kabupaten</label>
                            <select class="form-control" name="kab" id="kabupaten" > </select>
                            <label>Kecamatan</label>
                            <select class="form-control" name="kecamatan" id="kecamatan" name="kecamatan">
                                <option>--Pilih Kecamatan--</option>

                            </select>
                            <label> Kode Pos</label>
                            <input type="number" name="kode_pos" id="kode_pos" class="form-control">
                            <div class="breadcrumb" style="margin-top:10px;"><h3> Berkas</h3></div>
                            <label>Nama Berkas</label>
                            <input type="text" name="nama_berkas" class="form-control">
                            <label>Berkas</label>
                            <input type="file" name="berkas" class="form-control">
                	
            </div>
            <div class="tab-pane" id="tab-3">
               <div class="breadcrumb" style="margin-top:10px;"><h3> Pengalaman Kerja</h3></div>
               <label>Nama Perusahaan</label>
               <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control" placeholder="Masukkan Nama Perusahaan">
               <label>Jabatan</label>
               <input type="text" name="jabatan_kerja"  placeholder="Masukkan Nama Jabatan" class="form-control">
               <label>Deskripsi Pekerjaan</label>
               <textarea class="form-control" name="deskripsi_pekerjaan"></textarea>

               <label>Gaji</label>
               <select name="gaji"  class="form-control"> <option>--Pilih--</option>
               <option value="<1juta"><span> < 1 juta</span></option>
                 <option value=">1juta-2juta"><span> > 1 juta-2juta</span></option>
                  <option value=">2juta-3juta"><span> >2juta-3juta</span></option>
                   <option value=">3juta-4juta"><span> >3juta-4juta</span></option>
                    <option value=">4juta-5juta"><span> >4juta-5juta</span></option>
                     <option value=">5juta-keatas"><span> >5juta-keatas</span></option>

               </select>
                <div class="breadcrumb" style="margin-top:10px;"><h3>DATA PEKERJAAN YANG DIINGINKAN </h3></div>
                <label>Wilayah Yang diinginkan</label>
                <ul id="tabs" class="breadcrumb nav nav-tabs" data-tabs="tabs">
            <li class="nav-item"><a class="nav-link active" href="#dalam-negeri" data-toggle="tab">Dalam Negeri</a></li>
             <li class="nav-item"><a class="nav-link" href="#luar-negeri" data-toggle="tab">Luar Negeri</a></li>
            </ul>
            <!--Tap Wilayah Kerja -->

<div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="dalam-negeri">
                    <label>Wilayah</label>
                    <select name="lokasi_kerja" id="provinsi1" class="form-control">
                        
                          <option>--Provinsi--</option>
                            <?php foreach ($provinsi as $tampil) {
                                
                             ?>
                            <option value="<?=$tampil->id?>"><?=$tampil->name?></option>
                            <?php }?>
                    </select>
                    <label>Kabupaten</label>
                     <select class="form-control" id="kabupaten1" name="kabupaten_kerja"> <option>--Pilih--</option></select>
            </div>
             <div class="tab-pane" id="luar-negeri">
             <label>Negara</label>
             <select class="form-control" id="negara" name="negara"> <option>--Pilih--</option>
             <?php foreach ($negara as $view) {
                
              ?>
                    <option value="<?=$view->id?>"><?=$view->nama_negara?></option>
                    <?php }?>
             </select>
            </div>
            <!--End  -->
            </div>
            <label>Jabatan yang diinginkan</label>
           <select name="jabatan" id="golongan" class="form-control"> <option>--Pilih --</option>
           <?php foreach ($golongan as $tampil) {
             
            ?>
           <option value="<?=$tampil->id?>"><?=$tampil->golongan_jabatan?></option>
           <?php }?>
           </select>
           <label>Jenis Gol. Jabatan yang Diminati</label>
            
           <select name="golongan" id="jenis_golongan" class="form-control"> <option>--Pilih --</option></select>
           <label>Harapan Gaji Minimum</label>
           <select id="gajiminimum" name="gaji" class="form-control"> <option>--Pilih--</option><option value="<1juta"><span> < 1 juta</span></option>
                 <option value=">1juta-2juta"><span> > 1 juta-2juta</span></option>
                  <option value=">2juta-3juta"><span> >2juta-3juta</span></option>
                   <option value=">3juta-4juta"><span> >3juta-4juta</span></option>
                    <option value=">4juta-5juta"><span> >4juta-5juta</span></option>
                     <option value=">5juta-keatas"><span> >5juta-keatas</span></option></select>
        </div>
        <!--Keterampilan -->
 <div class="tab-pane" id="keterampilan">
 <label>Nama Pelatihan/Keterampilan</label>
 <input type="text" name="pelatihan" class="form-control">
 <label>Nama Lembaga Pelatihan / Keterampilan</label>
 <input type="text" name="lembaga" id="lembaga" class="form-control">
 <label>Tahun Lulus</label>
 <input type="text" name="tahun_lulus_pelatihan" class="form-control">
  <label>Nilai Sertifikat</label>
  <input type="text" name="nilai_setifikat" id="sertifikat" class="form-control">
    <!-- -->
</div>
<!--Pendidikan -->
<div class="tab-pane" id="pendidikan">
<label>Tingkat Pendidikan<small style="color:red;">*</small></label>
<select class="form-control" name="tingkatpendidikan" id="tingkatpendidikan">    

<option>--Pilih Pendidikan--</option>
<?php foreach ($pendidikan as  $tampil) {
  
?>
<option value="<?=$tampil->id?>"><?=$tampil->jenjang?></option>
<?php } ?>
</select>
<label>Jenis Jurusan<small style="color:red;">*</small></label>
<select class="form-control" name="jurusan" id="jurusan">
<option>--Pilih--</option>
    </select>
    <label>Nama Instansi<small style="color:red;">*</small></label>
    <input type="text" name="instansi" id="instansi" class="form-control">
    <label>Tahun Lulus<small style="color:red;">*</small></label>
    <input type="text" name="tahun_lulus_pendidikan" class="form-control">
    <label>Nilai ijazah/IPK<small style="color:red;">*</small></label>
    <input type="text" name="ijazah" id="nilai" class="form-control">
</div>

<!--End-->
    </div>

<div class="col-md-8 breadcrumb"><button class="btn btn-info" id="simpan">Simpan</button>    </div>
</form>

</div>

</div>	

</div>
<!--Modal Reg -->
<div class="modal fade" id="registrasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Terimakasih Sudah Mendaftar</h5>
       
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id=" roni">
        Silahkan Datang ke Dinas Ketenagakerjaan Dikota Anda untuk Melakukan percetakan kartu kuning
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
        
      </div>
    </div>
  </div>
</div>

<!--End-->
</body>
</html>

<script type="text/javascript">

	

	JQuery(document).ready(function($){

$('#tabs').tab();
	});
</script>
<script type="text/javascript">
    
    $(document).ready(function(){
$('#provinsi').change(function(){

var provinsi=$('#provinsi').val();

$.ajax({
url:"<?=base_url()?>Registrasi/kabupaten",
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
url:"<?=base_url()?>Registrasi/kecamatan",
                    type:"POST",
                    data:"kabupaten="+ kabupaten,
success:function(data){
                        
                        
                        $("#kecamatan").html(data);
                       
                        
                    }

});

}),
$('#tingkatpendidikan').change(function(){
  var tingkatpendidikan=$('#tingkatpendidikan').val();
  //alert(tingkatpendidikan);
  $.ajax({
url:"<?=base_url()?>Registrasi/tingkat_pendidikan",
                    type:"POST",
                    data:"tingkatpendidikan="+ tingkatpendidikan,
success:function(data){
                        
                        
                        $("#jurusan").html(data);
                       
                        
                    }

});


  });

    });
</script>

<!--<script type="text/javascript">
$(document).ready(function() {
  $('#formulir').validate();
 
});
</script> -->
<!--Kabupaten Penempatan Kerja -->

<script type="text/javascript">
    
    $(document).ready(function(){
$('#provinsi1').change(function(){

var provinsi=$('#provinsi1').val();

$.ajax({
url:"<?=base_url()?>Registrasi/kabupaten",
                    type:"POST",
                    data:"provinsi="+ provinsi,
success:function(data){
                        
                        
                        $("#kabupaten1").html(data);
                        
                    }

});

});

    });
</script>


<!-- End-->
<!--Golongan Jab -->
<script type="text/javascript">
  
$(document).ready(function(){
$('#golongan').change(function(){
var golongan=$('#golongan').val();
$.ajax({

url:"<?=base_url()?>Registrasi/jenis_golongan",
                    type:"POST",
                    data:"golongan="+ golongan,
success:function(data){
                      
                        
                        $("#jenis_golongan").html(data);
                        
                    }


});

});
});

</script>

<!--Simpan Kedatabase -->
<script type="text/javascript">
 $(document).ready(function(){

$('#simpan').click(function(){

var data = $('.form-user').serialize();

 $.ajax({
url:"<?=base_url()?>Registrasi/saveku",
                    type:"POST",
                    data:data,
success:function(resp){
                        
                        
                   $("#roni").html(resp);
                          $("#registrasi").modal('show');
                       
                        
                    },
        error:function(data){
          console.error(data);
          alert(data);
        }

});





});




 });

</script>