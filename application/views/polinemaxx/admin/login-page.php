<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--title -->
    <title><?= $title ?></title>
    <!-- google fonts -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
     <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('css/bootstrap.min.css');?>" rel='stylesheet' />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('css/style1.css'); ?>">
    <link href="<?php echo base_url('css/style2.css');?>" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="<?php echo base_url('css/lines.css');?>" rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url('css/font-awesome.css');?>" rel="stylesheet"> 
    <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css');?>">
    <!-- jQuery -->
    <script src="<?php echo base_url('js/jquery.min.js');?>"></script>
    <!----webfonts--->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!---//webfonts--->  
    <!-- Nav CSS -->
    <link href="<?php echo base_url('css/custom.css');?>" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('js/metisMenu.min.js');?>"></script>
    <script src="<?php echo base_url('js/custom.js');?>"></script>
    <!-- Graph JavaScript -->
    <script src="<?php echo base_url('js/d3.v3.js');?>"></script>
    <script src="<?php echo base_url('js/rickshaw.js');?>"></script>

    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url('css/flexslider.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/responsive.css'); ?>" type="text/css" />
    
</head>

<body>
<div id="wrapper">
<header>
    <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('img/PolinemaXX_logoAdmin.png');?>" class="logo-hdr" width="300"></a>
        </div>
    </nav>
</header>
    <!-- header -->

    <?=
    form_open('admin/proses_login');
    ?>
    <section class="login-block">
        <div class="container">
            <div class="login-inner">
                <div class="login-form">
                    <img src="<?php echo base_url('img/male_user.png');?>" width="100px" height="100px"></img>
                    <form>
                        <div class="pom-agile">
                            <span class="fa fa-user" aria-hidden="true"></span>
                            <input placeholder="Nama Pengguna" id="username" name="username" class="user" type="text" required="">
                        </div><br>
                        <div class="pom-agile">
                            <span class="fa fa-key" aria-hidden="true"></span>
                            <input placeholder="Kata Sandi" id="password" name="password" class="pass" type="password" required="">
                        </div>
                    </form><br>
                    <button class="inlog-btn">Login</button>
                </div>
            </div>
        </div>
    </section>
    <?=
    form_close();
    ?>


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
    <script defer src="<?php echo base_url('js/bootstrap.min.js');?>"></script>

    
</div>
</body>

</html>