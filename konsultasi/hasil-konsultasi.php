<?php	
	$g1 = $_POST["G1"];
	$g2 = $_POST["G2"];
	$g3 = $_POST["G3"];
	$g4 = $_POST["G4"];
	$g5 = $_POST["G5"];
	$g6 = $_POST["G6"];
	$g7 = $_POST["G7"];
	$g8 = $_POST["G8"];
	$g9 = $_POST["G9"];	
	$md1 = $_POST["WG1"];
	$md2 = $_POST["WG2"];
	$md3 = $_POST["WG3"];
	$md4 = $_POST["WG4"];
	$md5 = $_POST["WG5"];
	$md6 = $_POST["WG6"];
	$md7 = $_POST["WG7"];
	$md8 = $_POST["WG8"];
	$md9 = $_POST["WG9"];	
	$mb1 = 0.2;
	$mb2 = 0.2;
	$mb3 = 0.4;
	$mb4 = 0.6;
	$mb5 = 0.6;
	$mb6 = 0.8;
	$mb7 = 0.9;
	$mb8 = 0.9;
	$mb9 = 0.4;
	$cfPenyakit = 0;
    $HasilDiagnosa = "";
    require_once '../proses-algoritma-cf.php'; // tambahkan file Cari_cf.php
    $mb = $_POST['mb'];
    $md = $_POST['md'];

    $cari  = new Cari_cf(); // nama class dari file Cari_cf.php
     
    if($g1=="G1"){
        $nialimd = array($md1);
        $nialimb = array($mb1);
        $hasil = $cari->hitungCf($nialimb, $nialimd); // menghitung nilai CF dengan fungsi hitung    
        $cfPenyakit = $hasil;
        $HasilDiagnosa = "Narsisme anda rendah !";
    }else if($g1 == "G1" && $g == "G2"){
        $nialimd = array($md1, $md2);
        $nialimb = array($mb1, $mb2);
        $hasil = $cari->hitungCf($nialimb, $nialimd); // menghitung nilai CF dengan fungsi hitung    
        $cfPenyakit = $hasil;
        $HasilDiagnosa = "Narsisme anda rendah !";
    }
	echo "Hasil ";
	echo $HasilDiagnosa."<br>";
    echo "Nilai Persentase : ".$cfPenyakit;	    
?>