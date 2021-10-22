<html>
<head>
	<title>SISWA</title>



</head>
<body>

	<?php include 'navbar.php'; ?>

	<h1>MANAJEMEN DATA SISWA</h1>

<h3><a href="<?php echo site_url('siswa/Add') ?>">TAMBAH DATA</a></h3>

<table class="table table-primary table-hover">
  <thead>
    <tr>
		<th scope="col">No</th>
		<th scope="col">Id Siswa</th>
		<th scope="col">NISN</th>
		<th scope="col">NIS</th>
		<th scope="col">NAMA</th>
		<th scope="col">KELAS</th>
		<th scope="col">TINDAKAN</th>
	</tr>
  </thead>
  <tbody>
    <?php $no = 1;?>
		<?php foreach ($GetSiswa as $Get) : ?>
		<tr>
			<td scope="row"><?php echo $no++; ?></td>
			<td><?php echo $Get->id_siswa; ?></td>
			<td><?php echo $Get->nisn; ?></td>
			<td><?php echo $Get->nis; ?></td>
			<td><?php echo $Get->nama; ?></td>
			<td><?php echo $Get->kelas; ?></td>
			<td><a href="<?php echo site_url('siswa/Detail/') . $Get->id_siswa . '/view' ?>">UBAH</a>
				|| <a href="<?php echo site_url('siswa/DeleteSiswa/') . $Get->id_siswa; ?>" onclick="return confirm('apakah data ini ingin dihapus??')">HAPUS</a></td>
		</tr>
	<?php endforeach; ?>
  </tbody>
</table>


</body>
</html>