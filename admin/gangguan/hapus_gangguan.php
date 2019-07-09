<?php
	include("config/koneksi.php");

	$id = $_GET['kode_gangguan'];
	$koneksi->query("delete from diagnosa where kode_gangguan = '$id'");
	?>

<script type="text/javascript">
	alert("Data berhasil dihapus !");
	window.location.href="?halaman=data_gangguan&action=data_gangguan"
</script>