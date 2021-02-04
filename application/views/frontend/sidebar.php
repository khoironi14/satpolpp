<div class="col-md-5 mt-2">
	<div class="card  bg-info">
		<div class="card-body">
	<form action="<?php echo base_url('home/cari_berita'); ?>" method="post">
  <div class="form-row">
    <div class="col-7">
      <input type="text" class="form-control" name="berita" placeholder="Cari Berita">
    </div>
    <div class="col">
      <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
    </div>
   
  </div>
</form>
</div>
</div>
<!--widget-->
<div class="card mt-2">
  <div class="card-body">
    <script type="text/javascript" src=https://widget.kominfo.go.id/gpr-widget-kominfo.min.js></script>
<div id="gpr-kominfo-widget-container"></div>
  </div>
</div>
<!--Card-->
<div class="card mt-2">
  <div class="card-header" style="background-color:#F3A127;color:white;"><i class="far fa-file-word"></i>
    Arsip Berita
  </div>
  <div class="card-body">
  	<?php $query=$this->db->query("select tgl_terbit,count(tgl_terbit) as jumlah from berita group by month(tgl_terbit),year(tgl_terbit)")->result();


  	foreach ($query as $view) {
  	  	# code...
  	   ?>

  	   <ul class="list-group list-group-flush">
    <li class="list-group-item"><a href="<?php echo base_url('') ?>"><?=date('M-Y',strtotime($view->tgl_terbit))?></a> <span class="badge badge-success ml-5"><?=$view->jumlah?></span></li>
   
  </ul>
   
<?php }?>
  </div>
</div>
</div>