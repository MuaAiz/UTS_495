<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

	<div class="container" style="margin-top: 80px">
		<div class="col-md-12">
			<?php echo form_open('buku/update') ?>
			  
			  <div class="form-group">
			    <label for="text">Nim</label>
			    <input type="text" name="nim" value="<?php echo $dahboard->nim ?>" class="form-control" placeholder="Masukkan nim">
			    <input type="hidden" value="<?php echo $dahboard->nim ?>" name="nim">
			  </div>

			  <div class="form-group">
			    <label for="text">Nama</label>
			    <input type="text" name="nama" value="<?php echo $dahboard->nama ?>" class="form-control" placeholder="Masukkan Nama">
			  </div>

			  <div class="form-group">
			    <label for="text">Jenis Kelamin</label>
			    <input type="text" name="jk" value="<?php echo $dahboard->jk ?>" class="form-control" placeholder="Masukkan Jenis Kelamin">
			  </div>

			  <div class="form-group">
			    <label for="text">alamat</label>
			    <input type="text" name="alamat" value="<?php echo $dahboard->alamat ?>" class="form-control" >
			  </div>

			  <div class="form-group">
			    <label for="text">hp</label>
			    <input type="text" name="hp" value="<?php echo $dahboard->hp ?>" class="form-control" >
			  </div>
			  
			  <button type="submit" class="btn btn-md btn-success">Update</button>
			  <button type="reset" class="btn btn-md btn-warning">reset</button>
			<?php echo form_close() ?>
		</div>
	</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
	$('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>