<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet">
	
</head>
<body>
<div class="container">
	
<table id="example" class="table table-bordered table-striped display nowrap" >
        <thead id="">
       <tr><th colspan="8"><center>Data Diri</center></th><th colspan="2">Pengalaman Kerja</th><th colspan="3">Pendidikan</th></tr>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>NIK</th>
                <th>Alamat</th>
                <th>Hp</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Nama Perusahaan</th>
                <th>Jabatan</th>
                <th>Nama Instansi</th>
               <th>Jurusan</th>
                <th>Tahun Lulus</th>
                <th>Action</th>
               
              
                

                
            </tr>
        </thead>
        <tbody>
        	<?php $no=1; foreach ($ipk as $tampil) {




        	
        		
        	 ?>
<tr>

<td><?=$no++?></td>
<td><?=$tampil->nama_lengkap?></td>
<td><?=$tampil->no_nik?></td>
<td><?=$tampil->alamat?></td>
<td><?=$tampil->phone?></td>
<td><?=$tampil->tempat_lahir?></td>
<td><?=$tampil->tanggal_lahir?></td>
<td><?php $jk=$tampil->jenis_kelamin; if ($jk==1) {
   echo "Laki-Laki";
}else{ echo "Perempuan" ;}?></td>
<td><?=$tampil->nama_perusahaan?></td>
<td><?=$tampil->jabatan?></td>
<td><?=$tampil->nama_instansi?></td>
<td>Informatika</td>
<td><?=$tampil->tahun_lulus_pendidikan?></td>

<td><a href='<?php echo base_url('Admin/cetak_kartu/'.$tampil->no_nik.'') ?>' class='btn btn-info'>Cetak Kartu</a></td>


</tr>
<?php }?>

        </tbody>
    </table>



</div>
</body>
</html>

<script type="text/javascript" src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js') ?>"></script>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable( {
        "scrollY": 200,
        "scrollX": true,

    } );
} );
</script>
<script type="text/javascript">
    

</script>