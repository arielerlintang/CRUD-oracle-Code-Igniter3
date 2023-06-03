<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tampil Data</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
</head>
<body>

	<div class="container">
		<h1>Tampil Data</h1>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nis</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Jenis kelamin</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($siswa as $key => $value): ?>	
				<tr>
					<td><?php echo $key+1; ?></td>
					<td><?php echo ucwords($value['NAMA_SISWA']); ?></td>
					<td><?php echo $value['ALAMAT_SISWA']->load(); ?></td>
					<td><?php echo $value['JK_SISWA']; ?></td>
					<td><img src="<?php echo base_url('assets/img/foto_siswa/'.$value['FOTO_SISWA']); ?>" width="100" class="rounded"></td>
					<td>
						<a href="<?php echo base_url("index.php/siswa/detail/".$value['NIS']); ?>" class="btn btn-info btn-sm">Detail</a>
						<a href="<?php echo base_url("index.php/siswa/ubah/".$value['NIS']); ?>" class="btn btn-warning btn-sm">Ubah</a>
						<a href="<?php echo base_url("index.php/siswa/hapus/".$value['NIS']); ?>" class="btn btn-danger btn-sm">Hapus</a>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
		<a href="<?php echo base_url('index.php/siswa/tambah') ?>" class="btn btn-primary">Tambah</a>
	</div>
</body>
</html>