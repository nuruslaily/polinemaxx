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
    <link rel="stylesheet" href="<?php echo base_url('css/style4.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/responsive.css'); ?>" type="text/css" />
    
    <!-- scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script defer src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
    <script defer src="<?php echo base_url('js/bioskop.js'); ?>"></script>
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
                <table class="table" border="0" style="background-image: linear-gradient(#334C80, lightgrey); color: white">
                    <tbody class="text-left">
                        <tr>
                            <td colspan="4" class="text-center"><h2>Pembelian Tiket <?= $f['nama']; ?></h2></td>
                        </tr>
                        <tr >
                            <td rowspan ="8" class="text-center"><img src="<?= base_url().'assets/film/'.$f['gambar']; ?>" width="300" height="500"></td>
                        </tr>
                        <tr>
                            <td>Judul Film</td>
                            <td>:</td>
                            <td style="color: black"><input type="text" name="film" id="film" value="<?= $f['nama']; ?>" disabled size = "50"></td>
                        </tr>
                        <tr>
                            <td>Pilih Bioskop</td>
                            <td>:</td>
                            <td><select class="form-control" name="bioskop" id="bioskop">
                                <option>Dieng 21</option>
                                <option>Araya XXI</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td>Jam</td>
                            <td>:</td>
                            <td>
                                <input type="radio" id="9:00" name="jam" id="jam" value="9:00"><label for="9:00">9:00</label><br>
                                <input type="radio" id="12:00" name="jam" id="jam" value="12:00"><label for="12:00">12:00</label><br>
                                <input type="radio" id="15:00" name="jam" id="jam" value="15:00"><label for="15:00">15:00</label><br>
                                <input type="radio" id="18:00" name="jam" id="jam" value="18:00"><label for="18:00">18:00</label><br>
                                <input type="radio" id="21:00" name="jam" id="jam" value="21:00"><label for="21:00">21:00</label><br>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Pesan</td>
                            <td>:</td>
                            <td><input type="number" style="color:black" name="jumlah" id="jumlah" size="5"></td>
                        </tr>
                        <tr>
                            <td>Harga Tiket</td>
                            <td>:</td>
                            <td style="color: black"><input type="text" name="harga" id="harga" value="30000" disabled size = "50"></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>:</td>
                            <td><input type="text" name="total" id="total" value="harga*jumlah" disabled size = "50"></td>
                        </tr>
                        <tr class="onLoaderFunc">
                            <td>Pilih Kursi</td>
                            <td>:</td>
                            <td><input type="number" style="color:black" id='Numseats' required>
                            <div class="text-center">
				<button class="btn btn-primary btn-sm submitBtn" onclick="takeData()">Start Selecting</button>
			</div>
        <div class="seatStructure">
            <center>
  
            <table id="seatsBlock">
            <p id="notification"></p>
            <tr>
            <td colspan="14"><div class="screen">SCREEN</div></td>
            <td rowspan="20">
            <div class="smallBox greenBox">Selected Seat</div> <br/>
            <div class="smallBox redBox">Reserved Seat</div><br/>
            <div class="smallBox emptyBox">Empty Seat</div><br/>
            </td>
            
            <br/>
        </tr>
  
            <tr>
                <td></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td></td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
            </tr>
  
            <tr>
                <td>A</td>
                <td><input type="checkbox" class="seats" value="A1"></td>
                <td><input type="checkbox" class="seats" value="A2"></td>
                <td><input type="checkbox" class="seats" value="A3"></td>
                <td><input type="checkbox" class="seats" value="A4"></td>
                <td><input type="checkbox" class="seats" value="A5"></td>
                <td class="seatGap"></td>
                <td><input type="checkbox" class="seats" value="A6"></td>
                <td><input type="checkbox" class="seats" value="A7"></td>
                <td><input type="checkbox" class="seats" value="A8"></td>
                <td><input type="checkbox" class="seats" value="A9"></td>
                <td><input type="checkbox" class="seats" value="A10"></td>
                <td><input type="checkbox" class="seats" value="A11"></td>
                <td><input type="checkbox" class="seats" value="A12"></td>
            </tr>
            
            <tr>
                <td>B</td>
                <td><input type="checkbox" class="seats" value="B1"></td>
                <td><input type="checkbox" class="seats" value="B2"></td>
                <td><input type="checkbox" class="seats" value="B3"></td>
                <td><input type="checkbox" class="seats" value="B4"></td>
                <td><input type="checkbox" class="seats" value="B5"></td>
                <td></td>
                <td><input type="checkbox" class="seats" value="B6"></td>
                <td><input type="checkbox" class="seats" value="B7"></td>
                <td><input type="checkbox" class="seats" value="B8"></td>
                <td><input type="checkbox" class="seats" value="B9"></td>
                <td><input type="checkbox" class="seats" value="B10"></td>
                <td><input type="checkbox" class="seats" value="B11"></td>
                <td><input type="checkbox" class="seats" value="B12"></td>
            </tr>
            
            <tr>
                <td>C</td>
                <td><input type="checkbox" class="seats" value="C1"></td>
                <td><input type="checkbox" class="seats" value="C2"></td>
                <td><input type="checkbox" class="seats" value="C3"></td>
                <td><input type="checkbox" class="seats" value="C4"></td>
                <td><input type="checkbox" class="seats" value="C5"></td>
                <td></td>
                <td><input type="checkbox" class="seats" value="C6"></td>
                <td><input type="checkbox" class="seats" value="C7"></td>
                <td><input type="checkbox" class="seats" value="C8"></td>
                <td><input type="checkbox" class="seats" value="C9"></td>
                <td><input type="checkbox" class="seats" value="C10"></td>
                <td><input type="checkbox" class="seats" value="C11"></td>
                <td><input type="checkbox" class="seats" value="C12"></td>
            </tr>
            
            <tr>
                <td>D</td>
                <td><input type="checkbox" class="seats" value="D1"></td>
                <td><input type="checkbox" class="seats" value="D2"></td>
                <td><input type="checkbox" class="seats" value="D3"></td>
                <td><input type="checkbox" class="seats" value="D4"></td>
                <td><input type="checkbox" class="seats" value="D5"></td>
                <td></td>
                <td><input type="checkbox" class="seats" value="D6"></td>
                <td><input type="checkbox" class="seats" value="D7"></td>
                <td><input type="checkbox" class="seats" value="D8"></td>
                <td><input type="checkbox" class="seats" value="D9"></td>
                <td><input type="checkbox" class="seats" value="D10"></td>
                <td><input type="checkbox" class="seats" value="D11"></td>
                <td><input type="checkbox" class="seats" value="D12"></td>
            </tr>
            
            <tr>
                <td>E</td>
                <td><input type="checkbox" class="seats" value="E1"></td>
                <td><input type="checkbox" class="seats" value="E2"></td>
                <td><input type="checkbox" class="seats" value="E3"></td>
                <td><input type="checkbox" class="seats" value="E4"></td>
                <td><input type="checkbox" class="seats" value="E5"></td>
                <td></td>
                <td><input type="checkbox" class="seats" value="E6"></td>
                <td><input type="checkbox" class="seats" value="E7"></td>
                <td><input type="checkbox" class="seats" value="E8"></td>
                <td><input type="checkbox" class="seats" value="E9"></td>
                <td><input type="checkbox" class="seats" value="E10"></td>
                <td><input type="checkbox" class="seats" value="E11"></td>
                <td><input type="checkbox" class="seats" value="E12"></td>
                </tr>
  

                <tr class="seatVGap"></tr>
  
                <tr>
                <td>F</td>
                <td><input type="checkbox" class="seats" value="F1"></td>
                <td><input type="checkbox" class="seats" value="F2"></td>
                <td><input type="checkbox" class="seats" value="F3"></td>
                <td><input type="checkbox" class="seats" value="F4"></td>
                <td><input type="checkbox" class="seats" value="F5"></td>
                <td></td>
                <td><input type="checkbox" class="seats" value="F6"></td>
                <td><input type="checkbox" class="seats" value="F7"></td>
                <td><input type="checkbox" class="seats" value="F8"></td>
                <td><input type="checkbox" class="seats" value="F9"></td>
                <td><input type="checkbox" class="seats" value="F10"></td>
                <td><input type="checkbox" class="seats" value="F11"></td>
                <td><input type="checkbox" class="seats" value="F12"></td>
                </tr>
        
                <tr>
                <td>G</td>
                <td><input type="checkbox" class="seats" value="G1"></td>
                <td><input type="checkbox" class="seats" value="G2"></td>
                <td><input type="checkbox" class="seats" value="G3"></td>
                <td><input type="checkbox" class="seats" value="G4"></td>
                <td><input type="checkbox" class="seats" value="G5"></td>
                <td></td>
                <td><input type="checkbox" class="seats" value="G6"></td>
                <td><input type="checkbox" class="seats" value="G7"></td>
                <td><input type="checkbox" class="seats" value="G8"></td>
                <td><input type="checkbox" class="seats" value="G9"></td>
                <td><input type="checkbox" class="seats" value="G10"></td>
                <td><input type="checkbox" class="seats" value="G11"></td>
                <td><input type="checkbox" class="seats" value="G12"></td>
                </tr>
        
                <tr>
                <td>H</td>
                <td><input type="checkbox" class="seats" value="H1"></td>
                <td><input type="checkbox" class="seats" value="H2"></td>
                <td><input type="checkbox" class="seats" value="H3"></td>
                <td><input type="checkbox" class="seats" value="H4"></td>
                <td><input type="checkbox" class="seats" value="H5"></td>
                <td></td>
                <td><input type="checkbox" class="seats" value="H6"></td>
                <td><input type="checkbox" class="seats" value="H7"></td>
                <td><input type="checkbox" class="seats" value="H8"></td>
                <td><input type="checkbox" class="seats" value="H9"></td>
                <td><input type="checkbox" class="seats" value="H10"></td>
                <td><input type="checkbox" class="seats" value="H11"></td>
                <td><input type="checkbox" class="seats" value="H12"></td>
                </tr>
        
                <tr>
                <td>I</td>
                <td><input type="checkbox" class="seats" value="I1"></td>
                <td><input type="checkbox" class="seats" value="I2"></td>
                <td><input type="checkbox" class="seats" value="I3"></td>
                <td><input type="checkbox" class="seats" value="I4"></td>
                <td><input type="checkbox" class="seats" value="I5"></td>
                <td></td>
                <td><input type="checkbox" class="seats" value="I6"></td>
                <td><input type="checkbox" class="seats" value="I7"></td>
                <td><input type="checkbox" class="seats" value="I8"></td>
                <td><input type="checkbox" class="seats" value="I9"></td>
                <td><input type="checkbox" class="seats" value="I10"></td>
                <td><input type="checkbox" class="seats" value="I11"></td>
                <td><input type="checkbox" class="seats" value="I12"></td>
                </tr>
  
                <tr>
                <td>J</td>
                <td><input type="checkbox" class="seats" value="J1"></td>
                <td><input type="checkbox" class="seats" value="J2"></td>
                <td><input type="checkbox" class="seats" value="J3"></td>
                <td><input type="checkbox" class="seats" value="J4"></td>
                <td><input type="checkbox" class="seats" value="J5"></td>
                <td></td>
                <td><input type="checkbox" class="seats" value="J6"></td>
                <td><input type="checkbox" class="seats" value="J7"></td>
                <td><input type="checkbox" class="seats" value="J8"></td>
                <td><input type="checkbox" class="seats" value="J9"></td>
                <td><input type="checkbox" class="seats" value="J10"></td>
                <td><input type="checkbox" class="seats" value="J11"></td>
                <td><input type="checkbox" class="seats" value="J12"></td>
                </tr>
            </table><br>
			<div class="text-center">
				<button class="btn btn-primary btn-sm submitBtn" onclick="updateTextArea()">Confirm Selection</button>	
            </div><br>
					
        </div>
        <div class="displayerBoxes">
            <center>
            <table class="Displaytable">
            <tr>
                <th>Number of Seats</th>
                <th>Seats</th>
                </tr>
                <tr>
                <td><textarea id="NumberDisplay"></textarea></td>
                <td><textarea id="seatsDisplay"></textarea></td>
                </tr>
            </table>
            </center>
        </div>
                        </td>
                        </tr>
                        <tr>
                            <td>Bayar</td>
                            <td>:</td>
                            <td>
                                <input type="radio"  name="metode" id="metode" value="BNI"><img src="<?php echo base_url('img/BNI.png');?>" style="width: 70px"><br>
                                <input type="radio"  name="metode" id="metode" value="BRI"><img src="<?php echo base_url('img/bri.png');?>" style="width: 70px"><br>
                                <input type="radio"  name="metode" id="metode" value="Gopay"><img src="<?php echo base_url('img/gopay.png');?>" style="width: 70px"><br>
                                <input type="radio"  name="metode" id="metode" value="Dana"><img src="<?php echo base_url('img/dana.png');?>" style="width: 70px"><br>
                                <input type="radio"  name="metode" id="metode" value="OVO"><img src="<?php echo base_url('img/ovo.png');?>" style="width: 70px"><br>
                                <span></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="<?= base_url() ;?>member/pembayaran"><button type="submit" name="submit" id="submit">Konfirmasi Kursi</button></a>
        </div>
    </div>
    <?php endforeach; ?>
    <br><br><br>
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
    <script src="<?php echo base_url('js/jquery.nicescroll.js');?>"></script>
    <script src="<?php echo base_url('js/scripts.js');?>"></script>
    
    
</body>

</html>