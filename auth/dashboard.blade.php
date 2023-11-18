<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0">
	<title>Aplikasi KUPI</title>
	<link rel="stylesheet"
		href="dashboard.css">
	<link rel="stylesheet"
		href="responsive.css">
</head>

<body>

	<!-- for header part -->
	<header>

		<div class="logosec">
			<div class="logo">Keuangan Pintar</div>
			<img src= "images/imageslogokupi.png"
				class="icn menuicn"
				id="menuicn"
				alt="menu-icon">
                
		</div>

		<div class="message">
		<a href="{{route('profile')}}">
			<div class="circle"></div>
			<img src="images/profile.png"
				class="icn"
				alt="">
		</a>		
			<div class="dp">
			<img src="images/notifikasi.png"
					class="dpicn"
					alt="dp">
			</div>
		</div>

	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<div class="nav-option option1">
						
						<h3> Dashboard</h3>
					</div>

					<div class="option2 nav-option">
						
						<h3> Stok Produk</h3>
					</div>

					<div class="nav-option option3">
						
						<h3> Laba Rugi</h3>
					</div>

					<div class="nav-option option4">
						
						<h3> Arus Kas</h3>
					</div>

					<div class="nav-option option5">
						
						<h3> Riwayat</h3>
					</div>

					<div class="nav-option logout">
						
						<h3>Logout</h3>
					</div>

				</div>
			</nav>
		</div>
		<div class="main">
			<div class="tanggal">
				<p id="tanggal"></p>
			</div>
			<div class="box-container">

			
			</div>
		</div>

	<script src="script.js"></script>
</body>
</html>