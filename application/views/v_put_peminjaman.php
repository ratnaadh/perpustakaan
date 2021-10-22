<!DOCTYPE html>
<html>
<head>
	<title>UPDATE</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<body>
<form action="<?php echo site_url('peminjaman/EditPeminjaman') ?>" method="POST">
	<h1>UBAH DATA PEMINJAMAN</h1>
	<input type="hidden" name="id_peminjaman" value="<?php echo $detail['id_peminjaman'] ?>">
	
	<div class="input-group mb-3">
  		<span class="input-group-text" id="inputGroup-sizing-default">JUDUL BUKU</span>
  		<select class="form-select" name="txt_id_buku" aria-label="Default select example">
				<option value="<?php echo $detail['id_buku'] ?>"><?php echo $detail['judul'] ?></option>
				<?php foreach ($GetBuku as $Get): ?>
				<?php if ($Get->id_buku != $detail['id_buku']): ?>
				
				<option value="<?php echo $Get->id_buku ?>"><?php echo $Get->judul ?></option>
				<?php endif ?>
				<?php endforeach ?>
			
		</select>
	</div>

	<div class="input-group mb-3">
  		<span class="input-group-text" id="inputGroup-sizing-default">NAMA PEMINJAM</span>
  		<select class="form-select" name="txt_id_siswa" aria-label="Default select example">
				<option value="<?php echo $detail['id_siswa'] ?>"><?php echo $detail['nama'] ?></option>
				<?php foreach ($GetSiswa as $Get): ?>
				<?php if ($Get->id_siswa != $detail['id_siswa']): ?>
					
				<option value="<?php echo $Get->id_siswa ?>"><?php echo $Get->nama ?></option>
				<?php endif ?>
				<?php endforeach ?>
			
		</select>
	</div>

	<div class="input-group mb-3">
  		<span class="input-group-text" id="inputGroup-sizing-default">TANGGAL PINJAM</span>
  		<input type="date" name="txt_tanggal_pinjam" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $detail['tanggal_pinjam'] ?>">
	</div>

	<div class="input-group mb-3">
  		<span class="input-group-text" id="inputGroup-sizing-default">TANGGAL PENGEMBALIAN</span>
  		<input type="date" name="txt_tanggal_pengembalian" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $detail['tanggal_pengembalian'] ?>">
	</div>

	<div class="row">
    		<button type="submit" class="btn btn-success">UBAH</button>
  		</div>
  			<div class="row">
    		<a href="<?php echo site_url('peminjaman') ?>"><button type="submit" class="btn btn-warning">KEMBALI</button></a>
  		</div>
</form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>