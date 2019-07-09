<?php
  require_once './proses-algoritma-cf.php'; // tambahkan file Cari_cf.php
  $array_mb = array('0.4','0.2','0.5'); // nilai mb
  $array_md = array('0.2','0.1','0.3'); // nilai md

  $mb = $_POST['mb'];
  $md = $_POST['md'];

  $cari  = new Cari_cf(); // nama class dari file Cari_cf.php
  $hasil = $cari->hitung($mb, $md); // menghitung nilai CF dengan fungsi hitung
  print_r($hasil); // munculkan hasil
?>