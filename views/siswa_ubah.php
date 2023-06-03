<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ubah Siswa</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
</head>
<body>

	<div class="container">
		<h1>Ubah Siswa</h1>
		<form method="post" enctype="multipart/form-data">
			
			<div class="mb-3">
				<label>Nama Siswa</label>
				<input type="text" name="NAMA_SISWA" class="form-control" value="<?php echo $detail['NAMA_SISWA'] ?>">
			</div>
			<div class="mb-3">
				<label>Alamat Siswa</label>
				<textarea class="form-control" name="ALAMAT_SISWA"><?php echo $detail['ALAMAT_SISWA']->load(); ?></textarea>
			</div>
			<div class="mb-3">
				<label>jenis kelamin</label>
				<select name="JK_SISWA" class="form-control">
					<option class="text-muted">pilih jenis kelamin</option>
					<option value="Laki-laki" <?php if ($detail['JK_SISWA']=="Laki-laki") {
						echo "selected";
					} ?>>Laki-laki</option>
					<option value="Perempuan" <?php if ($detail['JK_SISWA']=="Perempuan") {
						echo "selected";
					} ?>>Perempuan</option>
				</select>
			</div>
			<div class="mb-3">
				<img src="<?php echo base_url("assets/img/foto_siswa/".$detail['FOTO_SISWA']); ?>" width="100">
				<br>
				<label>Ganti Foto</label>
				<input type="file" name="FOTO_SISWA" class="form-control">
			</div>
			<div class="mb-3">
				<label>NIS</label>
				<input type="number" name="NIS" class="form-control" value="<?php echo $detail['NIS'] ?>">
			</div>
			<button type="submit" class="btn btn-primary">Ubah</button>
		</form>
	</div>

</body>
</html>