<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Siswa Detail</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
</head>
<body>

	<div class="container">
		<h1>Nama : <?php echo $siswa['NAMA_SISWA']; ?></h1>
		<p>Alamat : <?php echo $siswa['ALAMAT_SISWA']->load(); ?></p>
		<p>Jenis kelamin : <?php echo $siswa['JK_SISWA']; ?></p>
		<p>Nis : <?php echo $siswa['NIS']; ?></p>
		<img src="<?php echo base_url('assets/img/foto_siswa/'.$siswa['FOTO_SISWA']); ?>" width="300">
	</div>

</body>
</html>