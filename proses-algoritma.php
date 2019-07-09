

<?php
	error_reporting(0);
	$g1 = $_POST["G1"];
	$g2 = $_POST["G2"];
	$g3 = $_POST["G3"];
	$g4 = $_POST["G4"];
	$g5 = $_POST["G5"];
	$g6 = $_POST["G6"];
	$g7 = $_POST["G7"];
	$g8 = $_POST["G8"];
	$g9 = $_POST["G9"];	
	$wg1 = $_POST["WG1"];
	$wg2 = $_POST["WG2"];
	$wg3 = $_POST["WG3"];
	$wg4 = $_POST["WG4"];
	$wg5 = $_POST["WG5"];
	$wg6 = $_POST["WG6"];
	$wg7 = $_POST["WG7"];
	$wg8 = $_POST["WG8"];
	$wg9 = $_POST["WG9"];	
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

	if($g1=="G1" && $g2=="G2" && $g4=="G4"){
		$cfg1 = $wg1 * $mb1;
		$cfg2 = $wg2 * $mb2;
		$cfg3 = $wg4 * $mb4;

		$cfcombine1 = $cfg1 + $cfg2 * (1-$cfg1);
		$cfcombine2 = $cfcombine1 + $cfg3 * (1-$cfcombine1);
		
		$cfPenyakit = $cfcombine2;
		$HasilDiagnosa = "Anda Masuk Kedalam Kategori Normal !";
	}else
	if($g1=="G1" && $g2=="G2" && $g3=="G3" && $g8=="G8"){
		$cfg1 = $wg1 * $mb1;
		$cfg2 = $wg2 * $mb2;
		$cfg3 = $wg3 * $mb3;
		$cfg8 = $wg8 * $mb8;

		$cfcombine1 = $cfg1 + $cfg2 * (1-$cfg1);
		$cfcombine2 = $cfcombine1 + $cfg3 * (1-$cfcombine1);
		$cfCombine3 = $cfcombine2 + $cfg8 * (1-$cfcombine2);

		$cfPenyakit = $cfCombine3;
		$HasilDiagnosa = "Anda Masuk Kedalam Kategori Sedang !";
	}else
	if($g5=="G5" && $g6=="G6" && $g7=="G7" && $g8=="G8" && $g9=="G9"){
			$cfg1 = $wg5 * $mb5;
			$cfg2 = $wg6 * $mb6;
			$cfg3 = $wg7 * $mb7;
			$cfg4 = $wg8 * $mb8;
			$cfg5 = $wg9 * $mb9;

			$cfcombine1 = $cfg1 + $cfg2 * 1-$cfg1;
			$cfcombine2 = $cfcombine1 + $cfg3 * 1-$cfcombine1;
			$cfCombine3 = $cfcombine2 + $cfg4 * 1-$cfcombine2;
			$cfCombine4 = $cfcombine3 + $cfg5 * 1-$cfcombine3;

			$cfPenyakit = $cfCombine4;

			$HasilDiagnosa = "Anda Masuk Kedalam Kategori Berat !";			
	}else{
		echo "";
	}

	echo "Hasil ";
	echo $HasilDiagnosa."<br>";
	echo "Nilai : ".$cfPenyakit;	
?>