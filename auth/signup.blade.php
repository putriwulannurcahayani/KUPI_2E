<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up form</title> 
    <link rel="stylesheet" href="signup.css">
    <!-- Add Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  </head>
  <body>
    <div class="wrapper">
      <form action="{{ route('signup') }}" class="signup-form" method="POST">
        @csrf
        <h2>Sign Up</h2>
        <h6>Selamat Datang Di KUPI</h6>
        <div class="input-box"> 
          <input type="text" placeholder="Nama" required name="nama">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Nama Usaha" required name="nama_usaha">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Email" required name="email">
        </div>
        <div class="input-box">
          <input type="password" placeholder="Password" required name="password">
        </div> 
        <div class="input-box button">
          <input type="submit" value="Create an Account">
        </div>
        <div class="text">
          <h3>Sudah Punya Akun? <a href="/login">Login Sekarang</a></h3>
        </div>
      </form>
    </div>
    <p> 
        <img src="images/imageslogokupi.png"style="width:300px;height:300px;"/>
    </p>
  </body>
</html>
