<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--title -->
    <title><?= $title ?></title>
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
    <!-- header -->
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
                            <a href="<?php echo base_url(); ?>member"><img src="<?php echo base_url('img/movie_black.png');?>" width="35px" height="30px"><br>
                            <span><br>Tayang</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>member/theater"><img src="<?php echo base_url('img/theater_black.png'); ?>" width="35px" height="30px"><br>
                            <span><br>Theater</span></a>
                        </li>
                        <li style="margin-left: 30px">
                            <a href="<?php echo base_url();?>member/wilayah"><img src="<?php echo base_url('img/location.png');?>" width="30px" height="30px"><br>
                            <span><br>Wilayah</span></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>&nbsp</li>
                        <li>&nbsp</li>
                        <li style="padding-top: 18px">
                            <div class="btn-group">
                              <a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata("nama");?></a>
                              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url();?>member/profile"><i class="fa fa-pencil fa-fw"></i> Profile</a></li>
                                <li><a href="<?php echo base_url();?>polinemaxx/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                              </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </header>
    <!-- header -->

    <?php foreach ($film as $f):?>
    <div class="ser-list">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <ul class="nav nav-tabs list-items">
                        <li class="arrow_box">
                            <br><img src="<?= base_url().'assets/film/'.$f['gambar']; ?>" width="1200" height="550">
                            <!--<img src="img/feature1.jpg" width="1024" height="500">-->
                        </li>
                    </ul>
                </div>
                <div class="col-sm-8">
                    <!-- Tab panes -->
                    <div class="tab-content" align="left">
                                <h3 style="color: blue;text-align: left"><?= $f['nama']; ?> <a href="<?php echo base_url();?>member/beli/<?= $f['id_film'];?>"><button class="btn btn-primary">Beli</button></a></h3>
                            <div class="tab-data-info">
                                <img src="<?php echo base_url('img/clock.png');?>" width="30" height="30"><?= $f['durasi']; ?>
                                <h5>Deskripsi</h5>
                                <p><?= $f['deskripsi']; ?>
                                </p>
                                <h5>Producer:</h5>
                                <p><?= $f['produser']; ?></p>
                                <h5>Director:</h5>
                                <p><?= $f['direktor']; ?></p>
                                <h5>Writer:</h5>
                                <p><?= $f['penulis']; ?></p>
                                <h5>Cast:</h5>
                                <p><?= $f['cast']; ?></p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><Br>
    <div class="ser-list">
        <div class="container">
        <div class="swiper-slide media-video swiper-slide-visible swiper-slide-active">
                    <h3>Trailler <?= $f['nama']; ?></h3>
                    <video width="80%" height="50%" controls="" name="trailer"><source src="<?= base_url().'assets/film/'.$f['trailer']; ?>" type="video/mp4"></video>
        </div>
    </div>
    <?php endforeach; ?>

    <br><br><br><br>
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