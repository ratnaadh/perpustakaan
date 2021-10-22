<!DOCTYPE html>
<html>
<head>
	<title>PEMINJAMAN</title>


</head>
<body>

	<?php include 'navbar.php'; ?>

	<h1>MANAJEMEN DATA PEMINJAMAN</h1>

	<h3><a href="<?php echo site_url('peminjaman/add') ?>">TAMBAH DATA</a></h3>

	<table class="table table-primary table-hover">
  <thead>
    <tr>
		<th scope="col">NO</th>
		<th scope="col">ID</th>
		<th scope="col">Judul</th>
		<th scope="col">Nama Siswa</th>
		<th scope="col">Tanggal Dipinjam</th>
		<th scope="col">Tanggal Dikembalikan</th>
		<th scope="col">TINDAKAN</th>
	</tr>
  </thead>
  <tbody>
    <?php $no = 1; ?>
		<?php foreach ($GetPeminjaman as $Get) :?>
		<tr>
			<td scope="row"><?php echo $no++; ?></td>
			<td><?php echo $Get->id_peminjaman; ?></td>
			<td><?php echo $Get->judul; ?></td>
			<td><?php echo $Get->nama; ?></td>
			<td><?php echo $Get->tanggal_pinjam; ?></td>
			<td><?php echo $Get->tanggal_pengembalian; ?></td>
			<td><a href="<?php echo site_url('peminjaman/Detail/') . $Get->id_peminjaman . '/view' ?>">UBAH</a>
				 || <a href="<?php echo site_url('peminjaman/DeletePeminjaman/') . $Get->id_peminjaman; ?>" onclick="return confirm('apakah data ini ingin dihapus??')">HAPUS</a></td>
		</tr>
	<?php endforeach; ?>
  </tbody>
</table>
	

</body>
</html>