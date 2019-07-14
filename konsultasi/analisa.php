<?php
    require_once './proses-algoritma-cf.php'; // tambahkan file algoritma cf      
    $cari  = new Cari_cf(); // nama class dari proses-algoritma-cf.php            
    $mb = $_POST['mb']; //mengambil nilai mb dari form
    $mdx = $_POST['md']; //mengmbil nilai md dari form
    
    //untuk menghilangkan nilai 0 pada array mdx dan disimpan pada variable md
    $remove = array(0);
    $md = array_diff($mdx, $remove);  

    $kesimpulan = "";
    $cek = 1;
     
    $dipilih = count($mb);  // menghitung jumlah array mb
    $jumlahMd = count($md); // menghitung jumlah array md

    if($dipilih == 0){  // jika checkbox yang dipilih tidak sesuai dengan kriteria yang dipilih maka set nilai cek = 0
        $cek = 0;          
    } else    
        if($dipilih == 9){
            $kesimpulan = "Anda Mengalami Narsist Berat !";
            $hasil = $cari->hitungCf($mb, $md) * 100; // menghitung nilai CF dengan fungsi hitung     
        }else{
            $hasil = $cari->hitungCf($mb, $md) * 100; // menghitung nilai CF dengan fungsi hitung     
            if($hasil <= 30){
                $kesimpulan = "Anda Mengalami Narsist Ringan !";
            }else
                if($hasil > 30 && $hasil <=65){
                    $kesimpulan = "Anda Mengalami Narsist Sedang !";
                }else
                    if($hasil > 66)
                        $kesimpulan = "Anda Mengalami Narsist Berat !";                
        }
        
    
?>