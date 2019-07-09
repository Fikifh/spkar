<?php require_once("config/auth.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Form Sistem Pakar Gangguan Kepribadian Narsistik</title>

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
                            <li class=""><a><?php echo  $_SESSION["user"]["email"] ?></a></li>                                            
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
                            <p style="text-align: center;">Jawab Pertanyaan Berikut ini !</p>
                        </div>
                        <div class="mu-contact-content">
                            <div class="row">
                                <div class="col-md-7 col-md-offset-3 panel panel-default">
                                    <div class="mu-contact-left">
                                        <div class="contactform"></div>
                                        <br>
                                        <form action="./hasil_konsultasi.php" method="POST">
                                        <table>
                                            <tr>
                                                <td>No</td>
                                                <td>Pilih</td>
                                                <td style="text-align:center;">Pertanyaan</td>
                                                <td style="text-align:center;">Kriteria</td>                                            
                                            </tr>
                                            
                                            
                                        <?php
                                            include("config/koneksi.php");
                                            $sql = $koneksi->query("select * from gejala");
                                            $i =0;
                                            while ($data= $sql->fetch_assoc()){ 
                                            $i=$i+1;
                                        ?>       
                                            <tr>
                                                <td>
                                                    <div class="form-group" id="formgroup" >    
                                                        <?php echo($i); ?></td> 
                                                    </div>
                                                <td>                                                                                                                       
                                                    <div class="form-group" id="formgroup" >
                                                        <!-- <input id="q" onclick="tambahKriteria()" type="checkbox" name="mb[]" value=<?php //echo($data['mb']); ?>>                                                     -->
                                                        <input id="q" onclick="tambahKriteria()" type="checkbox" name="mb[]" value=<?php echo($data['mb']); ?>>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group" id="formgroup" >
                                                        <p><?php echo($data['pertanyaan']); ?></p>
                                                    </div>                                                 
                                                </td> 
                                                <td>                               
                                                    <div class="form-group" id="formgroup" >       
                                                        <select id="kriteria" name="md[]">
                                                            <option value="0">Silahkan Pilih</option>                                                                                
                                                            <option value="0.2">Kurang Tahu</option>            
                                                            <option value="0.4">Mungkin</option>            
                                                            <option value="0.6">Kemungkinan Besar</option>            
                                                            <option value="0.8">Hampir Pasti</option>            
                                                            <option value="1">Pasti</option>                                                                                               
                                                        </select>
                                                    </div>
                                                </td>                                            
                                            <?php
                                            }?>
                                            </table>
                                            <div class="form-group" style="text-align: center;">
                                                <input type="text" name="id" hidden="true" value="<?php echo  $_SESSION["user"]["id"] ?>">
                                                <button onclick="validasi()" type="submit" name="analisa" id="simpan" value="Analisa" style="width: 30%" class="btn btn-primary btn-small">Analisa</button>
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
        <script>
            function validasi() {
                var chbx = document.getElementById("q").checked;            
                var opslct = document.getElementById("kriteria").selected; 
                if(chbx === false){
                    aler("anda harus menceklis salah satunya !");
                }else
                    if(chbk == true){
                        if(opslct != 0){
                            return true;
                        }else{
                            alert("anda harus mengisi kriteria yang diceklis !!!");
                            document.getElementById("q").required = true;
                            return false;
                        }
                    }
            }
            function lert(){
                alert("anda berhasil !");
            }
            function tambahKriteria(){
                var btn = document.createElement("OPTION");   // Create a <button> element
                //btn.innerHTML = "CLICK ME";                   // Insert text                
                var option = document.createElement("option");
                option.text = "Pilih";
                option.text = "Bingung";
                option.text = "Hampir Mungkin";
                option.text = "Mungkin";
                option.text = "Hampir Pasti";
                option.text = "Pasti";
                option.value = "0";
                option.value = "0.2";
                option.value = "0.4";
                option.value = "0.6";
                option.value = "0.8";
                option.value = "1";
                option.id = "opt";
                btn.add(option); 
                document.body.appendChild(btn); 
            }
        </script>
    </body>    
</html>