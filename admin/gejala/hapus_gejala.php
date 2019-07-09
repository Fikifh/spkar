<?php
	include("config/koneksi.php");

	$id = $_GET['kode_gejala'];
	$koneksi->query("delete from gejala where kode_gejala = '$id'");
	?>

<script type="text/javascript">
	alert("Data berhasil dihapus !");
	window.location.href="?halaman=data_gejala&action=data_gejala"
</script>