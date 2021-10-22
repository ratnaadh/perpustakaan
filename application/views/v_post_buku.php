<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH DATA BUKU</title>

</head>
<body>

	<?php include 'navbar.php'; ?>
	
<form action="<?php echo site_url('buku/AddBuku'); ?>" method="POST">
	<h1>TAMBAH DATA BUKU</h1>
	
	<div class="input-group mb-3">
  		<span class="input-group-text" id="inputGroup-sizing-default">ISBN</span>
  		<input type="text" name="txt_isbn" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	</div>

	<div class="input-group mb-3">
  		<span class="input-group-text" id="inputGroup-sizing-default">JUDUL</span>
  		<input type="text" name="txt_judul" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	</div>

	<div class="input-group mb-3">
  		<span class="input-group-text" id="inputGroup-sizing-default">PENULIS</span>
  		<input type="text" name="txt_penulis" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary">TAMBAH</button>
  </div>
</form>

</body>
</html>