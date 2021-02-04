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
<body class="mw-100" style="background-image:url(<?php echo base_url('assets/gambar/background.jpg') ?>)">

  


<div class="container" style="background-color:white;">
<div class="menu_foto"><marquee><?php foreach ($berita as $tampil) {
 echo "<a href=''>".$tampil->judul."</a>";//$tampil->judul;
} ?></marquee> </div>
<div class="row">
<div class="col-md-12 col-sm-6">
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


<div class="col-md-12 mt-3">
<h4 class="alert alert-primary"><i class="fas fa-archive fa-1x mr-3" style="color:white;"></i>Berita</h4>
<div class="card-group">
<?php foreach ($berita as $tampil) {
  $isi=$tampil->isi;
     $limit=character_limiter($isi,200);
 ?>
  <div class="col-md-4 mt-2">
  <div class="card">
   <div class="zoom-effect">
    <div class="kotak">
    <img class="card-img-top" src="<?php echo base_url('assets/gambar_berita/'.$tampil->foto.'') ?>" alt="<?=$tampil->judul?>"></div></div>
    <div class="card-body">
      <h5 class="card-title"><a href='<?php echo base_url('Welcome/detail/'.$tampil->judul.'/'.$tampil->id.'') ?>'><?=$tampil->judul?></a></h5>
      <p class="card-text"><?=$limit?></p>
      <p class="card-text"><small class="text-muted">Tanggal Rilis:<?=date('d-m-Y',strtotime($tampil->tgl_terbit))?></small></p>
    </div>
  </div>
 </div>
 <?php }?>
</div>


</div>


<!--Video-->
<div class="col-md-12 mt-3">

<h5 class="alert alert-success"><i class="fas fa-video fa-2x"></i>Gallery Video</h5>
<div class="col-md-6 mt-3"> 

<div id="video" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#video" data-slide-to="0" class="active"></li>
    <li data-target="#video" data-slide-to="1"></li>
    <li data-target="#video" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
   <?php $x=0;  foreach ($video as $x => $tampil) {
   
if ($x==0) 
  $aktif="active";
else
$aktif="";

   ?>
    <div class="carousel-item <?php echo  $aktif; ?>">
   <a href=''>   <img class="d-block w-100" src="<?php echo base_url('assets/gambar/gambar_video/'.$tampil->gambar.'') ?>" alt="First slide"></a>
       <div class="carousel-caption d-none d-md-block">
    <h5><?=$tampil->judul?></h5>
    
  </div>
    </div>
 <?php }?>   
    
  <a class="carousel-control-prev" href="#video" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#video" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>

 </div>

<!--EndVideo-->

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
