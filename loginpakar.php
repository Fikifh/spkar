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
                        <li class=""><a href="konsultasi.php">Konsultasi</a></li>
                        <li class="active"><a href="loginpakar.php">Login as Pakar</a></li>
                        
                        
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

   
    

    


    <section id="bottom">
        <div class="container fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
            <div class="col-md-12">
                <div class="mu-contact-area">
                    <div class="mu-title">
                        <h1 style="text-align: center;">Login Pakar</h1>
                        <p style="text-align: center;">isi terlebih dahulu untuk masuk sebagai Pakar</p>
                    </div>
                    <div class="mu-contact-content">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 panel panel-default">
                                <div class="mu-contact-left">
                                    <form action="ceklogin.php" method="POST">
                                    <div class="contactform"></div>
                                    <br>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">
                                    </div>
                                    <div class="form-group" style="text-align: center;">
                                        <input type="submit" name="simpan" id="simpan" value="Login" style="width: 30%" class="btn btn-primary btn-small">
                                    </div>
                                    <span></span>
                                    <span></span>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                


            </div>
        </div>
       <div class="form-group" style="margin-bottom: 50px">
          
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
                    <h1></h1>
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
