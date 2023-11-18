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
        <style>
        body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f4f4f4;
        color: #333;
        margin: 20px;
        text-align: center;
        }
        .message {
        gap: 5px;
        position: relative;
        cursor: pointer;
        }
        .circle {
        height: 5px;
        width: 5px;
        position: absolute;
        border-radius: 50%;
        left: 19px;
        top: 8px;
        }
        .dp {
        height: 45px;
        width: 45px;
        border-radius: 40%;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        }
        .main-container {
        display: flex;
        width: 100vw;
        position: relative;
        top: 70px;
        z-index: 1;
        }
        .dpicn {
        height: 40px;
        }     

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }


        </style>
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
		</div>

	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
                    <a href="/dashboard">
                        <div class="nav-option option1">
                            <h3> Dashboard</h3>
                        </div>
                    </a>

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
                    
					<a href="{{route('profile')}}">
						<div class="nav-option option6">
							<h3>Profile</h3>
						</div>
					</a>


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
            <div class="profile-wrap">
                <div class="profile">
                    <form action="{{route('editProfile')}}" method="POST">
                        @method('put')
                        @csrf
                        <input type="text" value="{{ $nama }}" placeholder="Nama" name="nama">
                        <input type="text" value="{{ $namaUsaha }}" placeholder="Nama Usaha" name="nama_usaha">
                        <input type="text" value="{{ $email }}" placeholder="Email" name="email">
                        <button type="submit">Edit</button>
                    </form>
                </div>
            </div>
        </div>

	<script src="script.js"></script>
</body>
</html>
    