<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Siswa</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
</head>
<body>

	<div class="container">
		<h1>Tambah Siswa</h1>
		<form method="post" enctype="multipart/form-data">
			
			<div class="mb-3">
				<label>Nama Siswa</label>
				<input type="text" name="NAMA_SISWA" class="form-control">
			</div>
			<div class="mb-3">
				<label>Alamat Siswa</label>
				<textarea class="form-control" name="ALAMAT_SISWA"></textarea>
			</div>
			<div class="mb-3">
				<label>jenis kelamin</label>
				<select name="JK_SISWA" class="form-control">
					<option class="text-muted">pilih jenis kelamin</option>
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>
			<div class="mb-3">
				<label>Foto Siswa</label>
				<input type="file" name="FOTO_SISWA" class="form-control">
			</div>
			<div class="mb-3">
				<label>NIS</label>
				<input type="number" name="NIS" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	</div>

</body>
</html>