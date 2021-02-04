<!DOCTYPE html>
<html>
<head>
  <title><?=$title?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/css/all.css') ?>">
 <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style type="text/css">
    

.navbar-light .navbar-brand {
    color: #FFFFFF;
}

.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
   background-color: red;
}

.navbar-light .navbar-nav .nav-link {
    color: #FFFFFF;
}

.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
   background-color: #85E73C  !important;
}
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#16625F;">
  <div class="container">
  <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/gambar/satpol.png') ?>" class="rounded-lg" width="50" height="60"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link j" href="<?php echo base_url('home/index') ?>" style="color:white;">Home <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
          Profil
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('home/sejarah') ?>">Profil dan Sejarah</a>
          <a class="dropdown-item" href="<?php echo base_url('home/visi') ?>">Visi</a>
            <a class="dropdown-item" href="<?php echo base_url('home/misi') ?>">Misi</a>

           
             <a class="dropdown-item" href="<?php echo base_url('home/organisasi') ?>">Struktur Organisasi</a>
              <a class="dropdown-item" href="<?php echo base_url('home/profil_pejabat') ?>">Profil Pejabat</a>
          
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('home/berita') ?>" style="color:white;">Berita dan Kegiatan</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('home/gallery') ?>" style="color:white;">Gallery Foto</a>
      </li>
       </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('home/kontak_kami') ?>" style="color:white;">Kontak</a>
      </li>
      
    </ul>
    
  </div>
</nav>
</div>
</body>
</html>
<script>
    $('#.nav-link').click(function(){
    $('a').parent().removeClass('active');
    $(this).parent().addClass('active');
    });​  
</script>