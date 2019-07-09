<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "sistempakar";

$koneksi = new mysqli($localhost, $username, $password, $database);

if($koneksi -> connect_error){
		echo "Koneksi Database Gagal";
}
?>