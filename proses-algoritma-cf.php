<?php
error_reporting(0);
class Cari_cf {
  /**
   * function utama algoritma certain factor
   */
  function hitungCf($array_mb, $array_md){
    $cari = new Cari_cf();
    $gejala = $cari->kalikanPremis($array_mb, $array_md);
    if(count($array_md) == 1){
      $hasil = $cari->satuPremis($gejala);
      return $hasil;      
    }else{
      $hasil = $cari->banyakPremis($gejala);
      return $hasil;      
    }
  }

  /**
   * function untuk mengalikan mb dengan md dan menyimpannya pada arrayGejala
   */
  function kalikanPremis($array_mb, $array_md){
    $arrayGejala = array();    
    $n = count($array_md);
    for($i=0; $i<$n; $i++){
      $hasilMbxMd = $array_mb[$i] * $array_md[$i];
      array_push($arrayGejala, $hasilMbxMd);
    }
    return $arrayGejala;
  }

  /**
   * function jika hanya satu gejala saja
   */
  function satuPremis($arrayGejala){
    return $arrayGejala[0];
  } 
  /**
   * function jika premis/gejala yang dipilih lebih dari satu
   */
  function banyakPremis($arrayGejala){
    $cari = new Cari_cf();    
    $cfIJ = null;
    $n = count($arrayGejala);    
    for($i = 0; $i < $n - 1; $i++) {
      $j = $i + 1;
        if($cfIJ == null)
        $cfIJ = $arrayGejala[$i];

        $cfIJ = $cari->hitungMbMd($cfIJ, $arrayGejala[$j]);
    }
    return $cfIJ;
  }

  /**
   * function untuk menghitung nilai oldcf
   */
  function hitungMbMd($x, $y) {
    $hasil = $x + $y * (1 - $x);
    return $hasil;
  }
  
////////////////////////////////////////////////////// 
}
//  $md = array(0.4, 0.4);
//  $mb = array(0.6, 0.8);
//  $cari  = new Cari_cf(); // nama class dari file Cari_cf.php
// //  $hasil = $cari->hitungCf($mb, $md); // menghitung nilai CF dengan fungsi hitung    
// $hasil = $cari->hitungCf($mb, $md); // menghitung nilai CF dengan fungsi hitung    
// echo("hasilnya : ".$hasil);

?>