<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$nickname = $_POST['nickname'];
$katasandi = $_POST['katasandi'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"select * from user where nickname='$nickname' and katasandi='$katasandi'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['nickname'] = $nickname;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>

<?php
$response_key = $_POST["g-recaptcha-response"];
$secret_key = "6Le7enkgAAAAAIJZXbv5Kw5TYKqXdMda7kuK8X8P";
$url_verify = "https://www.google.com/recaptcha/api/siteverify?secret=";
$response = file_get_contents($url_verify."?secret=".$secret_key."&response=".$response_key);
$fire = json_decode($response);
if($fire->success == 1){
	echo '<script>alert("Success!")</script>';
}
else {
	echo '<script>alert("Please Fill Recaptcha!")</script>';
}
?>