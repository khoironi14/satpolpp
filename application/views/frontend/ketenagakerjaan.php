<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="row">
		
		<div class="col-md-10">
			
<?php foreach ($ketenagakerjaan as $tampil) {
	
 ?>
			<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><?=$tampil->judul?></h1>
    <p class="lead"><?=$tampil->isi?></p>
  </div>
</div>
<?php }?>
		</div>
	</div>
</div>
</body>
</html>