<style>
.containerku {
  position: relative;
 
}



.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #E74C3C ;
}

.containerku:hover .overlay {
  opacity: 0.5;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>
<body style="background-image: url('<?=base_url("assets/gambar/bg-luwu.png")?>');">
<div class="container">
	
	<div class="row mt-3">
	<div class="col-md-12">
		<div class="card bg-info"> <div class="card-body">
	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" ><a href="<?php echo base_url('home/index') ?>" style="color:blue;">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
  </ol>
</nav>

		
<div class="row mt-1">
	<?php foreach ($gallery as $tampil) {
		# code...
	 ?>
<div class="col-md-4 ">
	
<div class="card border-primary mb-2" style="width: 18rem;">
	<a href="#" onclick="foto(<?=$tampil->id?>)">
  
  <img src="<?php echo base_url('assets/slider/'.$tampil->foto.'') ?>" class="card-img-top" alt="satpolpp"></a>

  <div class="card-body">
    <p class="card-text"><?=$tampil->judul?></p>
  </div>
</div>


</div>	

<?php }?>
<!--col-->

</div>


	

</div></div>
	</div>	
<!--col-->
	</div>
</div>
</body>
<!-- Modal -->
<div class="modal fade" id="zoomfoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white" id="exampleModalLabel">Foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="containerku">
 <div id="gambar"></div>
  <div class="overlay">
    <div class="text" id="judul"></div>
  </div>
</div>
      </div>
      
    </div>
  </div>
</div>
<script type="text/javascript">
	function foto(id){

	var id_foto=id;
$.ajax({
url:"<?=base_url('home/zoom_foto')?>",
type:"POST",
data:{id_foto:id_foto},
dataType:"JSON",
success:function(data){
var html='';
html='<img src="<?php echo base_url('assets/slider/') ?>'+ data.foto +'" class="card-img-top">';
document.getElementById('gambar').innerHTML=html;
document.getElementById('judul').innerHTML='<h4>'+ data.judul +'</h4>';
	$("#zoomfoto").modal();
}



})
	
	
}

</script>