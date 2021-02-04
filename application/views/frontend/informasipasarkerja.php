<!DOCTYPE html>
<html>
<head>
  <title>Informasi Pasar Kerja</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
  <style type="text/css">
    a:link {
    text-decoration: none;
}

a:visited {
    text-decoration: none;
}
a:hover {
    color: hotpink;
}
  </style>
</head>
<body class="img-responsive" style="background-image:url(<?php echo base_url('assets/gambar/background.jpg') ?>)">

  


<div class="container" style="background-color:white;">
<div class="menu_foto"><marquee><?php foreach ($berita as $tampil) {
 echo "<a href=''>".$tampil->judul."</a>";//$tampil->judul;
} ?></marquee> </div>
<div class="row">
<div class="col-md-9 col-sm-6">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
  <?php $x=0;  foreach ($berita as $x => $tampil) {
   
if ($x==0) 
  $aktif="active";
else
$aktif="";

   ?>
    <div class="carousel-item <?php echo $aktif?>">
      <img class="d-block w-100" src="<?php echo base_url('assets/gambar_berita') ?>/<?php echo $tampil->foto ?>" alt="First slide">
      
      <div class="carousel-caption d-none d-md-block">
 <a style="text-decoration:none; color:white;" href="">   <h5><?=$tampil->judul?></h5></a>
    
  </div>
    </div>
   
    <?php }  ?>
  </div>
</div>


 </div>
 <div class="col-md-3 col-sm-3" style="color:white;  background-image:url(<?php echo base_url('assets/gambar/box.png') ?>)">
<center><h3> Cari Lowongan </h3></center>
<form action="<?php echo base_url('Pencarian/pencarikerja') ?>" method="post">  
<input type="text" class=" form-control " name="kata_kunci" placeholder="Masukkan Kata Kunci">
<select class="form-control mt-3" readonly>  
<option>Lowongan</option>
</select>
<select name="provinsi" id="provinsi" class=" form-control mt-3">
<option>Wilayah:Nasional,Prov</option>
<?php foreach ($provinsi as $tampil) {
  
?>
<option value="<?=$tampil->id?>"><?=$tampil->name?></option>
<?php } ?>
 </select>
<select name="kabupaten" id="kabupaten" class="form-control mt-3">  
<option>Nama Kabupaten/Kota </option>

</select>
<button class="btn btn-success btn-block mt-3">Simpan</button>
</form>
 </div>

<!--Kategori-->
 <div class="col-md-3 mt-3" style="background-color:white;"> 
<table class="table table-bordered"> 
<tr>  
<th style="background-color:blue; color:white;"><h4>Kategori Lowongan Pekerjaan</h4></th></tr>
<?php foreach ($lowongan as $tampil) {
 
?>
<tr><td><a href='<?php echo base_url('Pencarian/info_kerja/'.$tampil->id.'') ?>'><?=$tampil->golongan?> </a> </td>  </tr>

<?php }?>


</table>

<table class=" table table-konseded">
  <tr><td>Pencari Kerja Saat ini:0</td></tr>
  <tr><td>Penempatan Kerja Saat ini:0</td></tr>
    <tr><td>Lowongan Kerja Saat ini:0</td></tr>

</table>

  </div>

 <!--End Kategori-->

<div class=" col-md-9 mt-2 col-sm-6 col-xs-12"> 
<div style="background-color:white;">  
  <div class="row ">
<div class="col-md-3 ml-3 "><i style="color:orange;" class="fas fa-address-card fa-8x"></i><a class="btn btn-info mt-1" href="<?php echo base_url('Welcome/lamar_kerja') ?> " >Pencari Kerja</a><p>Kirim CV/Resume</p> </div>

<div class="col-md-3  "><i style="color:orange;" class="fas fa-file-alt fa-8x"></i><a href="<?php echo base_url('Pemberi_kerja/index') ?> " class="btn btn-info mt-1">Pemberi Kerja</a><p>Kirim Iklan/Lowongan Kerja</p> </div>
<div class="col-md-3 "><i style="color:orange;"class="fas fa-tasks fa-8x"></i><a href=" " class="btn btn-info mt-1" >Perluasan Kerja</a><p>Kirim Iklan/Lowongan Kerja</p> </div>
<div class="col-md-3 ml-3 "><i style="color:orange;" class="fas fa-user-plus fa-8x"></i><a href=" " class="btn btn-info mt-1" >Pelatihan Kerja</a><p>Kirim Iklan/Lowongan Kerja</p> </div>
<div class="col-md-3 "><i style="color:orange;" class="fas fa-file fa-9x"></i><a href=" " class="btn btn-info mt-1" >Job Fair</a><p>Pameran Kesempatan Kerja</p> </div>
<div class="col-md-3 "><i style="color:orange;" class="fas fa-newspaper fa-8x"></i><a href=" " class="btn btn-info" >Pengumuman</a><p>Pengumuman</p> </div>
</div>

<ul id="tabs" class="breadcrumb nav nav-tabs mt-3" data-tabs="tabs">
            
            <li class="nav-item"><a class="nav-link active" href="#tab-1" data-toggle="tab">Dalam Negeri</a></li>
            <li class="nav-item" ><a class="nav-link" href="#tab-2" data-toggle="tab">Luar Negeri</a></li>
            <li class="nav-item" ><a class="nav-link" href="#tab-3" data-toggle="tab">Disabilitas</a></li>
            
        </ul>
        <!--Tab -->

           <div id="my-tab-content" class="tab-content">
      
            <div class="tab-pane active" id="tab-1">
            <div class="table-responsive-sm">
                <table class="table ">
                    <thead style="background-color:blue; color:white;"> 
                        <tr>  
                            <th>Tanggal</th>
                               <th>Jabatan</th>
                                <th>Perusahaan</th>
                                <th>Min Pendidikan</th>

                        </tr>


                    </thead>
                      <tbody> 
                       <?php foreach ($lokerdalam as $tampil) {
                               
                               ?>
                          <tr> 
                             
                              <td> <?=$tampil->tgl_publikasi?></td>
                               <td><a href='<?php echo base_url('Welcome/detail_loker/'.$tampil->id.'') ?>'> <?=$tampil->Jabatan?></a></td>
                                 <td> <?=$tampil->nama_perusahaan?></td>
                                   <td> <?=$tampil->min_pendidikan?></td>
                           </tr>

                            <?php }?>

                      </tbody>


                 </table>

</div>

            </div>



              <div class="tab-pane " id="tab-2">
              <div class="table-responsive-sm">
                <table class="table table-bordered">
                    <thead style="background-color:blue; color:white;"> 
                        <tr>  
                            <th>Tanggal</th>
                               <th>Jabatan</th>
                                <th>Perusahaan</th>
                                <th>Min Pendidikan</th>

                        </tr>


                    </thead>
                      <tbody> 
                       <?php foreach ($lokerluar as $tampil) {
                               
                               ?>
                          <tr> 
                             
                              <td> <?=$tampil->tgl_publikasi?></td>
                               <td> <?=$tampil->Jabatan?></td>
                                 <td> <?=$tampil->nama_perusahaan?></td>
                                   <td> <?=$tampil->min_pendidikan?></td>
                           </tr>

                            <?php }?>

                      </tbody>


                 </table>

</div>

            </div>




             <div class="tab-pane " id="tab-3">
             <div class="table-responsive-sm">
                <table class="table table-striped table-bordered">
                    <thead style="background-color:blue; color:white;"> 
                        <tr>  
                            <th>Tanggal</th>
                               <th>Jabatan</th>
                                <th>Perusahaan</th>
                                <th>Min Pendidikan</th>

                        </tr>


                    </thead>
                      <tbody> 
                       <?php foreach ($dis as $tampil) {
                               
                               ?>
                          <tr> 
                             
                              <td> <?=$tampil->tgl_publikasi?></td>
                               <td> <?=$tampil->Jabatan?></td>
                                 <td> <?=$tampil->nama_perusahaan?></td>
                                   <td> <?=$tampil->min_pendidikan?></td>
                           </tr>

                            <?php }?>

                      </tbody>


                 </table>

</div>

            </div>
            </div>
            </div>
        <!--End Tab-->
</div>
 <!--End IPK-->

<div class="col-md-12" style="background-color:white;">

 <h3 style="color:blue;"><i class="fas fa-archive" style="color:blue;"></i>Berita Pelatihan Kerja<hr style="background-color:green;"></h3> 
 <?php foreach ($pelatihan as $tampil) {
   
  ?>
<h4><?=$tampil->judul?></h4><hr>
<span><?=$tampil->tgl_terbit?></span>
<p><?=$tampil->isi?></p>
<?php }?>
</div>



</div>
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
