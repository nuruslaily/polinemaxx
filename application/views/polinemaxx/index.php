<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- title -->
    <title><?= $title ?></title>
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
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
                        <li class="active">
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
                        <li id="noti_Container">
                            <a href="<?php echo base_url();?>polinemaxx/login"><img src="<?php echo base_url('img/user_circle.png');?>" width="30px" height="30px"></span> <br>
                            <span><br>Login</span></a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </header>
    <!-- header-->

    <!-- slider -->
    <section class="slider-sec">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li><!--1570 x 615-->
                        <div class="slide-inner slide-1">
                            <div class="overlay-slider"></div>
                        </div>
                    </li>
                    <li>
                        <div class="slide-inner slide-2">
                            <div class="overlay-slider"></div>
                        </div>
                    </li>
                    <li>
                        <div class="slide-inner slide-3">
                            <div class="overlay-slider"></div>
                        </div>
                    </li>

                </ul>
            </div>
        </section>
    </section>
    <!-- slider-->

    <br><br><Br>

    <section>
        <div class="container">
            <div class="row movies-list">
                <!--<div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="movie1">
                        <div>
                            <img src="img/feature1.jpg">
                        </div>
                        <div class="m-name">
                            <a href="#" class="movie-btn1" disabled><b>2D | D17+<b></a>
                            <h3><a href="<?= base_url() ;?>polinemaxx/detail">Malificent</a></h3>
                        </div>
                    </div>
                </div>-->
                <?php foreach ($film as $f):?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="movie1">
                        <div>
                            <img src="<?= base_url().'assets/film/'.$f['gambar']; ?>" width=270 height=330>
                        </div>
                        <div class="m-name">
                            <a href="#" class="movie-btn1" disabled><b><?= $f['kategori']; ?><b></a>
                            <a href="#" class="movie-btn1" disabled><b><?= $f['usia']; ?><b></a>
                            <h3>
                                <a href="<?= base_url() ;?>polinemaxx/detail/<?= $f['id_film'];?>"><?= $f['nama']; ?></a>
                            </h3>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <br><br><Br><br><br>

    <!-- footer -->
    <footer>
        <div class="container">
            <div class="footer-line">
                <h4 align="center"> Copyrights &copy 2020 <a href="#">PolinemaXX</a>. All Right Reserved</h4>
            </div>
        </div>
    </footer>
    <!--footer-->

    <!-- scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script defer src="<?php echo base_url('js/bootstrap.min.js');?>"></script>

    <script defer src="<?php echo base_url('js/jquery.flexslider.js');?>"></script>
    <script type="text/javascript">
     
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "fade",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>


</body>

</html>