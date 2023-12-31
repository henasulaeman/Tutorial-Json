<?php
	$data = file_get_contents("data-donat.json");

	// Merubah Json menjadi array menggunakan json_dcode
	$menu = json_decode($data,true);

	$menu = $menu['menu'];
	// Contoh memanggil berdasarkan index
	//var_dump($menu["menu"][0]["nama"]);


?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Hello, world!</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="gambar/new_jco_logo.png" width="50"> 
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link active" href="#">All Menu <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="#">Features</a>
					<a class="nav-item nav-link" href="#">Pricing</a>
					<a class="nav-item nav-link disabled" href="#">Disabled</a>
				</div>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="row mt-3">
			<div class="col">
				<h1>All Menu</h1>
			</div>
		</div>

		<div class="row">

		<?php foreach ($menu as $row) {
			
		?>
			<div class="col-md-4">
				<div class="card mb-3" >
					<img class="card-img-top" src="gambar/<?php echo $row["gambar"] ?>" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title"><?php echo $row["nama"] ?></h5>
						<p class="card-text"><?php echo $row["deskripsi"] ?></p>
						<p class="card-text"><?php echo "Rp".number_format($row["harga"])  ?></p>
						<a href="#" class="btn btn-primary">Pesan</a>
					</div>
				</div>
			</div>
			<!-- End col-md-4 -->
	     <?php }?>
		</div> 
		<!-- End Row -->
	</div>
	

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>