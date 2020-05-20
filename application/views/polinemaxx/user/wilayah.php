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
                            <a href="<?php echo base_url(); ?>member"><img src="<?php echo base_url('img/movie_black.png');?>" width="35px" height="30px"><br>
                            <span><br>Tayang</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>member/theater"><img src="<?php echo base_url('img/theater_black.png'); ?>" width="35px" height="30px"><br>
                            <span><br>Theater</span></a>
                        </li>
                        <li style="margin-left: 30px" class="active">
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

    <div class="ser-list">
        <div class="container">
            <div class="row">
            <div id="map" style="width:100%;height:500px"></div>

                <script>
                    function initMap(){
                        //membuat objek untuk titik koordinat
                        var arayaXXI = {lat: -7.9368228,lng: 112.648572};
                        var dieng21 = {lat: -7.9736947,lng: 112.610206};
                        
                        //membuat objek peta
                        var map = new google.maps.Map(document.getElementById("map"), {
                            zoom : 12, center : new google.maps.LatLng(-7.973668,112.6036131)
                        });

                        //membuat objek untuk info  window
                        var contentString = '<b>Araya XXI</b>';
                        var dieng = '<b>Dieng 21</b>';

                        //membuat objek info window
                        var infowindow = new google.maps.InfoWindow({
                            content : contentString,
                            position : arayaXXI
                        });

                        var infowindow2 = new google.maps.InfoWindow({
                            content : dieng,
                            position : dieng21
                        });

                        //tampilkan info window pada peta
                        infowindow.open(map);
                        infowindow2.open(map);
                        google.maps.event.addDomListener(window,'load',initMap);
                    }
                </script>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7_M8_T-mU5XCgNR37h_XDfj_wqmnIc2M&callback&callback=initMap"></script>
            </div>
        </div>
    </div>

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