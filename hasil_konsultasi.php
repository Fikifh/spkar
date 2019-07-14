<?php require_once("config/auth.php"); ?>
<?php

// require_once("config/konek.php");

// if(isset($_POST['analisa'])){
//     $mbPost = $_POST['mb'];
//     $id = $_POST['id'];
//     $n = count($mbPost); 
//     $daftarMb = array();
//     $daftarMd = array(); 
//     $daftarPertanyaan = array();
//     for($i=0; $i<$n; $i++){
//         // menyiapkan query
        
//         //kemudian di select ulang
//         $sql = "SELECT * FROM gejala WHERE kode_gejala=:kode_gejala";
//         $stmt = $db->prepare($sql);
//         // bind parameter ke query
//         $params = array(
//             ":kode_gejala" => $mbPost[$i]
//         );

//         $stmt->execute($params);
//         $gejala = $stmt->fetch(PDO::FETCH_ASSOC);
        
//         $_SESSION["analisa"] = $gejala;
//         $xmb = $_SESSION["analisa"]["mb"];
//         $xmd = $_SESSION["analisa"]["md"];
//         $xpertanyaan = $_SESSION["analisa"]["pertanyaan"];

//         array_push($daftarMb, $xmb);
//         array_push($daftarMd, $xmd);
//         array_push($daftarPertanyaan, $xpertanyaan);        
//     }      

//     for($i=0; $i<$n; $i++){
//         // menyiapkan query
//         $sql2 = "INSERT INTO hasil_diagnosa (id_user, kode_gejala, pertanyaan, mb, md) 
//                 VALUES (:id, :kode_gejala, :pertanyaan, :mb, :md)";
//         $stmt2 = $db->prepare($sql2);
//         $params2 = array(
//             ":id" => $id,
//             ":kode_gejala" => $mbPost[$i],
//             ":pertanyaan" => $daftarPertanyaan[$i],
//             ":mb" => $daftarMb[$i],
//             ":md"=>$daftarMd[$i]
//         );
//         // eksekusi query untuk menyimpan ke database
//         $simpan = $stmt->execute($params2);    
//     }
        
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sistem Pakar Gangguan Kepribadian Narsistik</title>

    <!-- core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assest/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/icomoon.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="assets/assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/assets/images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                
            </div>
            <!--/.container-->
        </div>
        <!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><i class="fa fa-user-md"></i> Sistem Pakar</a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="index_awal.php">Beranda</a></li>
                        <li class="active"><a href="konsultasi.php">Konsultasi</a></li>
                        <li class=""><a href="loginpakar.php">Login as Pakar</a></li>
                        
                        
                    </ul>
                </div>
                
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

   

    
    <!--/#feature-->

    
    <!--/#recent-works-->

    
    <!--/#services-->

    

    


    <section id="bottom">
        <div class="container fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
            <div class="col-md-12">
                <div class="mu-contact-area">
                    <div class="mu-title">
                        <h1 style="text-align: center;"> HASIL KONSULTASI</h1>
                        <p style="text-align: center;"></p>
                    </div>
                    <div class="mu-contact-content">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 panel panel-default">
                                <div class="table-responsive">

                <?php
                    require_once './konsultasi/analisa.php'; // tambahkan file analisa.php                 
                    // $sql3 = "UPDATE user WHERE id = :id SET diagnosa = :kesimpulan, cf=:nilaicf";
                    // $stmt3 = $db->prepare($sql3);
                    // $params3 = array(
                    // ":id" => $id,
                    // ":kesimpulan" => $kesimpulan,
                    // "nilaicf"=> $hasil                  
                    // );
                    // // eksekusi query untuk menyimpan ke database
                    // $simpandiagnosa = $stmt3->execute($params3); 
                ?>

              <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Gejala yang dipilih</th>
                    <th>Nilai MB</th>
                    <th>Nilai MD</th>                                       
                  </tr>
                </thead>
                <tbody> 
                  <?php
                  //  for($i=0; $i<count($mb); $i++) {
                        # code...                

                  ?>
                  <tr>
                    <td>1</td>
                    <td>                       
                    </td>
                    <td></td>
                    <td></td>                    
                  </tr> 
                                    
                </tbody>
              </table> -->
              <h3><?php 
                    if($cek == 0){
                        echo "Silahkan Pilih Pertanyaan dan Kriteria !";
                    }else
                        if($dipilih != $jumlahMd){
                            echo "Kriteria yang diisi harus sesuai dengan Pertanyaan yang dipilih !";
                        }else
                            {
                                print_r($kesimpulan);                    

                         ?> %</h3>
                      <h3>Dengan Persentase Kemungkinan Sebesar : <?php print_r($hasil); } ?> %</h3>
            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            </div>
        </div>
    </section>
    <!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" style="text-align: center;">
                    &copy; 2019 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Mujiburrahman</a>. 
                </div>
                <div class="col-sm-6">
                    
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.isotope.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
