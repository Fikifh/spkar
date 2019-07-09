<?php
	include("config/koneksi.php");

	$id = $_GET['kode_relasi'];
	$koneksi->query("delete from relasi where kode_relasi = '$id'");
	?>

<script type="text/javascript">
	alert("Data berhasil dihapus !");
	window.location.href="?halaman=data_relasi&action=data_relasi"
</script>