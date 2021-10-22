<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH DATA PEMINJAM</title>


</head>
<body>

	<?php include 'navbar.php'; ?>
	<form action="<?php echo site_url('peminjaman/AddPeminjaman'); ?>" method="POST">
		<h1>TAMBAH DATA PEMINJAMAN</h1>
		
		<div class="input-group mb-3">
  			<span class="input-group-text" id="inputGroup-sizing-default">JUDUL BUKU</span>
		<select class="form-select" name="txt_id_buku" aria-label="Default select example">
 			<?php foreach ($GetBuku as $Get) : ?>
				<option value="<?php echo $Get->id_buku ?>"><?php echo $Get->judul; ?></option>
			<?php endforeach; ?>
		</select>
		</div>

		<div class="input-group mb-3">
  			<span class="input-group-text" id="inputGroup-sizing-default">NAMA PEMINJAM</span>
		<select class="form-select" name="txt_id_siswa" aria-label="Default select example">
  			<?php foreach ($GetSiswa as $Get) : ?>
				<option value="<?php echo $Get->id_siswa ?>"><?php echo $Get->nama; ?></option>
			<?php endforeach; ?>
		</select>
		</div>


		<div class="input-group mb-3">
  			<span class="input-group-text" id="inputGroup-sizing-default">TANGGAL PINJAM</span>
  			<input type="date" name="txt_tanggal_pinjam" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
		</div>

		<div class="input-group mb-3">
  			<span class="input-group-text" id="inputGroup-sizing-default">TANGGAL PENGEMBALIAN</span>
  			<input type="date" name="txt_tanggal_pengembalian" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
		</div>
		
		</div>
		<div class="col-12">
    		<button type="submit" class="btn btn-primary">TAMBAH</button>
  		</div>
	</form>

</body>
</html>