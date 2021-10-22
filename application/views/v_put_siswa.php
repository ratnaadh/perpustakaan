<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<form action="<?php echo site_url('siswa/EditSiswa') ?>" method="POST">
	<h1>UBAH DATA SISWA</h1>
	<input type="hidden" name="txt_id_siswa" value="<?php echo $detail['id_siswa'] ?>">
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">NISN</span>
  <input type="text" name="txt_nisn" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $detail['nisn'] ?>">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">NIS</span>
  <input type="text" name="txt_nis" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $detail['nis'] ?>">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">NAMA</span>
  <input type="text" name="txt_nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $detail['nama'] ?>">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">KELAS</span>
  <input type="text" name="txt_kelas" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $detail['kelas'] ?>">
</div>

	<div class="row">
    		<button type="submit" class="btn btn-success">UBAH</button>
  		</div>
  			<div class="row">
    		<a href="<?php echo site_url('siswa') ?>"><button type="submit" class="btn btn-warning">KEMBALI</button></a>
  		</div>
</form>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>