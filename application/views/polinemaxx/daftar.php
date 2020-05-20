<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--title -->
    <title><?= $title; ?></title>
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,900' rel='stylesheet' type='text/css'>
    <!-- stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/flexslider.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style1.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/responsive.css'); ?>" type="text/css" />
    
    <!-- scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script defer src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
    
</head>

<body>
<header>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('img/PolinemaXX_logo.png');?>" class="logo-hdr" width="300">
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('img/movie_black.png');?>" width="35px" height="30px"><br>
                            <span><br>Tayang</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>polinemaxx/theater"><img src="<?php echo base_url('img/theater_black.png'); ?>" width="35px" height="30px"><br>
                            <span><br>Theater</span></a>
                        </li>
                        <li style="margin-left: 30px">
                            <a href="<?php echo base_url();?>polinemaxx/wilayah"><img src="<?php echo base_url('img/location.png');?>" width="30px" height="30px"><br>
                            <span><br>Wilayah</span></a>
                        </li>
                    </ul>
                            
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li><br>
                        <form action="" method="post" class="form-inline my-2 my-lg-0">
                            <input type="search" class="form-control mr-sm-2" placeholder="Search Film" aria-label="Search Film" name="keyword">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color: blue; button:hover: red">Cari</button>       
                            </form>
                        </li>
                        <li>&nbsp</li>
                        <li>&nbsp</li>
                        <li id="noti_Container" class="active">
                            <a href="<?php echo base_url();?>polinemaxx/login"><img src="<?php echo base_url('img/user_circle.png');?>" width="30px" height="30px"></span> <br>
                            <span><br>Login</span></a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </header>
    <!-- header -->

    <section class="login-block">
        <div class="container">
            <div class="login-inner">
                <div class="login-form">
                    <h2>Daftar</h2><br>
                    <form action="" method="post">
                        <div class="pom-agile"><span class="fa fa-user" aria-hidden="true"></span>
                            <input placeholder="Nama Lengkap" name="nama" id="nama" class="user" type="text" required="">
                        </div>
                        <div class="pom-agile"><span class="fa fa-location-arrow" aria-hidden="true"></span>
                            <input placeholder="Alamat" name="alamat" id="alamat" class="user" type="text" required="">
                        </div><br>
                        <div class="pom-agile"><span class="fa fa-phone" aria-hidden="true"></span>
                            <input placeholder="No Telepon" name="nohp" id="nohp" class="user" type="text" required="">
                        </div><br>
                        <div class="pom-agile"><span class="fa fa-envelope" aria-hidden="true"></span>
                            <input placeholder="E-mail" name="email" id="email" class="user" type="email" required="">
                        </div><br>
                        <div class="pom-agile"><span class="fa fa-key" aria-hidden="true"></span>
                            <input placeholder="Kata Sandi" name="password" id="password" class="pass" type="password" required="">
                        </div><br>
                        <div class="pom-agile"><span class="fa fa-lock" aria-hidden="true"></span>
                            <input placeholder="Konfirmasi Kata Sandi" name="ConfPassword" id="ConfPassword" class="pass" type="password" required="">
                        </div><br>
                    <button class="inlog-btn" type="submit" name="submit">Daftar</button>
                    </form><br>
                    <h4>Sudah punya akun? <a href="<?php base_url() ?>login">Login sekarang!</a></h4>
                </div>
            </div>
        </div>
    </section>


    <!-- footer -->
     <footer>
        <div class="container">
            <div class="footer-line">
                <h4> Copyrights &copy 2020 <a href="#">PolinemaXX</a>. All Right Reserved</h4>
            </div>
        </div>
    </footer>
    <!-- footer -->

   <!-- scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script defer src="js/bootstrap.min.js"></script>
    
    
</body>

</html>