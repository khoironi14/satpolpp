<!DOCTYPE html>
<html>
<head>
  <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
  
</head>
<body  class="biodata" >

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Informasi Pasar Kerja</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Ipk/index') ?>">Beranda</a>
      </li>
      <?php $cek=$this->session->userdata('hak_akses'); if ($cek==1) {
  
 ?>
 <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Ipk/biodata') ?>">Profil Perusahaan</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Pemberi_kerja/add_loker') ?>">Tambah Loker</a>
      </li>
<?php }else{ ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Ipk/biodata') ?>">Biodata</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Ipk/info_loker') ?>">Informasi Lowongan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Ipk/riwayat_hidup') ?>">Riwayat Hidup</a>
      </li>
     <?php }?>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Ipk/log_out') ?>">Log out</a></li>
      
      
    </ul>
    
  </div>
</nav>

</body>
</html>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.2.1.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>