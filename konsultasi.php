<?php

require_once("config/konek.php");

if(isset($_POST['konsultasi'])){

    // filter data yang diinputkan
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_STRING);     
    $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);

    // menyiapkan query
    $sql = "INSERT INTO user (email, umur, jk) 
            VALUES (:email, :age, :gender)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":email" => $email,
        ":age" => $age,
        ":gender" => $gender        
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params); 

    //kemudian di select ulang
    $sql2 = "SELECT * FROM user WHERE email=:email";
    $stmt2 = $db->prepare($sql2);
    // bind parameter ke query
    $params2 = array(
        ":email" => $email
    );

    $stmt2->execute($params2);
    $user = $stmt2->fetch(PDO::FETCH_ASSOC);
    session_start();
    $_SESSION["user"] = $user;

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: form.php");
}

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
                        <h1 style="text-align: center;">KONSULTASI</h1>
                        <p style="text-align: center;">Isi terlebih dahulu untuk melakukan konsultasi</p>
                    </div>
                    <div class="mu-contact-content">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 panel panel-default">
                                <div class="mu-contact-left">
                                    <div class="contactform"></div>
                                    <br>
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" id="nama" class="form-control" placeholder="Email" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Umur</label>
                                            <input type="text" name="age" id="password" class="form-control" placeholder="Umur" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select name="gender" class="form-control" required="">
                                                <option value="pria">Pria</option>
                                                <option value="wanita">Wanita</option>
                                            </select>
                                        </div>
                                        <div class="form-group" style="text-align: center;">
                                        <input type="submit" class="btn btn-success btn-block" name="konsultasi" value="Konsultasi" />
                                        </div>
                                    </form>
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
