<!DOCTYPE html>
<html>
<head>
	<title>Login | Kelompok 4</title>
  <style type="text/css">
    body {
  margin: 0;
  padding:0;
  font-family: montserrat;
  background: #2E8BC0;
  height: 50hv;
  overflow: hidden;
}
.login-card {
    position: absolute;
    top: 50%;
    left: 50%;
    padding: 100px;
    transform: translate(-50%,-50%);
    width: 300px;
    background: white;
    border-radius: 10px;
}
.login-card h1 {
    position: relative;
    text-align: center;
    width: 105%;
    padding: 0 0 20px 0;
    margin:50px 0;
    border-bottom: 2px solid silver;
}
.login-card input[type=submit] {
    width: 100%;
    height: 50px;
    border: 1px solid;
    margin: 20px 0;
    background: #2E8BC0;
    border-radius: 25px;
    font-size: 18px;
    color: #fff;
 }
.login-card input[type=text], input[type=password] {
    width: 100%;
    padding: 0 5px;
    margin: 20px 0;
    height: 40px;
    color:  black;
    font-size: 16px;
    border: none;
    border-bottom: 2px solid #adadad;
    background: none;
    outline: none;
}
.login-card input[type=text]:hover, input[type=password]:hover {
    position: relative;
    top: 50%;
    left: 5px;
    color: black;
    font-size: 16px;
} 
  </style>

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<body>
	 <div class="login-card">
		<h1>Log-in</h1>
		<form action="cek_login.php" method="POST">
			<input type="text" name="nickname" placeholder="Username" class="input-control">
			<input type="password" name="katasandi" placeholder="Password" class="input-control">
			<div class="g-recaptcha" data-sitekey="6Le7enkgAAAAAJpfz84vwklsYTsYpMrvexDWyFHM"></div>
			<input type="submit" name="login" value="Login" class="btn">
		</form>
	</div>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo '<script>alert("Username atau password Anda salah!")</script>';
		}else if($_GET['pesan'] == "logout"){
			echo '<script>alert("Anda telah berhasil logout")</script>';
		}else if($_GET['pesan'] == "belum_login"){
			echo '<script>alert("Anda harus login untuk mengakses halaman admin")</script>';
		}
	}
	?>

</body>
</html>
