<!DOCTYPE html>
<html>
<head>
	<title>BUKU</title>



</head>
<body>

	<?php include 'navbar.php'; ?>

	<h1>MANAJEMEN DATA BUKU</h1>
	
<h3><a href="<?php echo site_url('buku/add') ?>">TAMBAH DATA</a></h3>

<table class="table table-primary table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
	  <th scope="col">Id Buku</th>
	  <th scope="col">ISBN</th>
	  <th scope="col">JUDUL</th>
	  <th scope="col">PENULIS</th>
	  <th scope="col">TINDAKAN</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php $no = 1;?>
		<?php foreach ($GetBuku as $Get) : ?>
		<tr>
			<td scope="row"><?php echo $no++; ?></td>
			<td><?php echo $Get->id_buku; ?></td>
			<td><?php echo $Get->isbn; ?></td>
			<td><?php echo $Get->judul; ?></td>
			<td><?php echo $Get->penulis; ?></td>
			<td><a href="<?php echo site_url('buku/Detail/') . $Get->id_buku . '/view' ?>">UBAH</a>
				|| <a href="<?php echo site_url('buku/DeleteBuku/') . $Get->id_buku; ?>" onclick="return confirm('apakah data ini ingin dihapus??')">HAPUS</a></td>
		</tr>
	<?php endforeach; ?>
    </tr>
  </tbody>
</table>


</body>
</html>