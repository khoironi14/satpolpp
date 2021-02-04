<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header"><h5 class="card-title">Form Visi Misi</h5> <?php if ($this->session->flashdata('success')){ echo $this->session->flashdata('success');  }?></div>
				<div class="card-body">
					<form action="<?php echo base_url('Visi/index') ?>" method="post">
						<div class="form-group">
							<label>Visi</label>
							<textarea name="visi" class="form-control" value="<?=$visi['visi']?>"><?=$visi['visi']?></textarea>
						</div>
						<div class="form-group">
							<label>Misi</label>
							<textarea name="misi" class="form-control" value="<?=$visi['misi']?>"><?=$visi['misi']?></textarea>
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
<script type="text/javascript" src="<?php echo base_url('assets/ckeditor/ckeditor.js') ?>"></script>
<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'visi' );
                  CKEDITOR.replace( 'misi' );
            </script>