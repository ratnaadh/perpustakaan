<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH DATA SISWA</title>

</head>
<body>

	<?php include 'navbar.php'; ?>
	
<form action="<?php echo site_url('siswa/AddSiswa'); ?>" method="POST">
	<h1>TAMBAH DATA SISWA</h1>

	<div class="input-group mb-3">
  		<span class="input-group-text" id="inputGroup-sizing-default">NISN</span>
  		<input type="text" name="txt_nisn" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	</div>

	<div class="input-group mb-3">
  		<span class="input-group-text" id="inputGroup-sizing-default">NIS</span>
  		<input type="text" name="txt_nis" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	</div>

	<div class="input-group mb-3">
  		<span class="input-group-text" id="inputGroup-sizing-default">NAMA SISWA</span>
  		<input type="text" name="txt_nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	</div>

	<div class="input-group mb-3">
  		<span class="input-group-text" id="inputGroup-sizing-default">KELAS</span>
  		<input type="text" name="txt_kelas" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary">TAMBAH</button>
  </div>
</form>

</body>
</html>