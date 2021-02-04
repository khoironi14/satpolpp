<body style="background-image: url('<?=base_url("assets/gambar/bg-luwu.png")?>');">
<div class="container">
	
	<div class="row">
		
		<div class="col-md-12 mt-2">
			<div class="card">
				<div class="card-body">
					<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" ><a href="<?php echo base_url('home/index') ?>" style="color:blue;">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page">Profil Pejabat</li>
  </ol>
</nav>
					<table class="table table-konseded table-striped">
						
						<thead>
							<tr>
								<th>Nama Jabatan</th>
								<th>Nama PNS</th>
								<th>Gol</th>
								<th>NIP</th>
								<th>Kelas Jabatan</th>
								<th>Foto</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($profil as $tampil) {
								# code...
							 ?>
							<tr>
								
								<td><?=$tampil->nama_jabatan?></td>
								<td><?=$tampil->nama_pns?></td>
								<td><?=$tampil->gol?></td>
								<td><?=$tampil->nip?></td>
								<td><?=$tampil->kelas_jabatan?></td>
								<td><?php if ($tampil->foto !=="") {
									# code...
								 ?> <img src="<?php echo base_url('assets/gambar/'.$tampil->foto.'') ?>" class="card-img-top" alt="satpol" style="width:200px;"> <?php }else{?> <img src="<?php echo base_url('assets/gambar/user.png') ?>" class="card-img-top" style="width:200px;">  <?php }?></td>
							</tr>


						<?php }?>
						</tbody>
					</table>





				</div>
			</div>
		</div>
	</div>
</div>
</body>