<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<form action="<?php echo base_url('Admin/upload_struktur') ?>" method="post" enctype="mutlipart/form-data" >
						<div class="form-group">
							<label>Foto</label>
							<input type="file" name="foto" class="form-control" required="">
						</div>
						<div class="form-group">
							<button class="btn btn-success" name="simpan">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>