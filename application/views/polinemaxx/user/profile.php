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
    <!--dropdown menu-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                        <li style="margin-left: 30px">
                            <a href="<?php echo base_url();?>member/wilayah"><img src="<?php echo base_url('img/location.png');?>" width="30px" height="30px"><br>
                            <span><br>Wilayah</span></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>&nbsp</li>
                        <li>&nbsp</li>
                        <li style="padding-top: 18px">
                            <div class="btn-group open">
                              <a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata("nama");?></a>
                              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
                              </a>
                              <ul class="dropdown-menu">
                                <li class="active"><a href="<?php echo base_url();?>member/profile"><i class="fa fa-pencil fa-fw"></i> Profile</a></li>
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
    <!-- header-->

    <!--profile-->
    <div class="container">
        <div width="1200px" class="text-center" style="padding-top: 50px">
            <h2 style="text-decoration: bold; color: #B3A43B; font-size: 40px">Profil Saya</h2>
            <br>
           <table align="center" class="table table-striped" style="font-size: 20px">
               <tbody>
                    <tr>
                        <td colspan="3"><img src="<?php echo base_url('img/user_circle.png'); ?>" width = "100px" height = "100px"><br></td>
                    </tr>
                    <tr>
                        <td>&nbsp</td>
                    </tr>
                   <tr>
                       <td>Nama</td>
                       <td></td>
                       <td><?php echo $this->session->userdata("nama");?></td>
                   </tr>
                   <tr>
                       <td>Alamat</td>
                       <td></td>
                       <td><?php echo $this->session->userdata("alamat");?></td>
                   </tr>
                   <tr>
                       <td>E-mail</td>
                       <td></td>
                       <td><?php echo $this->session->userdata("email");?></td>
                   </tr>
                   <tr>
                       <td>No Telepon</td>
                       <td></td>
                       <td><?php echo $this->session->userdata("nohp");?></td>
                   </tr>
               </tbody>
           </table>
        </div>
    </div>
    <!-- /profile -->
    
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


</body>

</html>