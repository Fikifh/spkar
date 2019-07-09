<?php
session_start(); //menyimpan data di session
$koneksi	= new mysqli("localhost","root","","sistempakar"); //koneksi ke database

//mengambil data Post di login.php
$username = $_POST['username'];
$password = md5($_POST['password']);

//query untuk login admin
$query2 = mysqli_query($koneksi, "SELECT * FROM admin_pakar WHERE username = '$username' AND password = '$password'");
$x = mysqli_fetch_array($query2);

//query untuk login santri


//jika kondisi adalah username admin dan password admin, masuk ke halaman admin
if($x['username'] == $username AND $x['password'] == $password){
	$_SESSION['username'] = $x['username'];
	$_SESSION['password'] = $x['password'];

	header("location:index.php");

}else{
	echo "<script>alert('maaf username/password salah cek kembali'); window.location = 'loginpakar.php'; </script>";
}
?>