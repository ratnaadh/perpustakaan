<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<h1>UBAH DATA BUKU</h1>
<form action="<?php echo site_url('buku/EditBuku') ?>" method="POST">
	<input type="hidden" name="txt_id_buku" value="<?php echo $detail['id_buku'] ?>">
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">ISBN</span>
  <input type="text" name="txt_isbn" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $detail['isbn'] ?>">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">JUDUL</span>
  <input type="text" name="txt_judul" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $detail['judul'] ?>">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">PENULIS</span>
  <input type="text" name="txt_penulis" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $detail['penulis'] ?>">
</div>

	<div class="row">
    		<button type="submit" class="btn btn-success">UBAH</button>
  		</div>
  			<div class="row">
    		<a href="<?php echo site_url('buku') ?>"><button type="submit" class="btn btn-warning">KEMBALI</button></a>
  		</div>

	</form>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>