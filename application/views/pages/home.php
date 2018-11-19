<!-- <h2><?= $title ?></h2>
<p>Welcome to the ciBlog application</p>
 -->
<!-- <?php
// s
?> -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="content">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Untitled Document</title>
  <link rel="stylesheet" type="text/css" href="http://localhost/ciblog/assets2/style.css"/>
  <script type="text/javascript" src="http://localhost/ciblog/assets2/js/jQuery-2.1.4.min.js"></script>
  <script type="text/javascript" src="http://localhost/ciblog/assets2/js/jquery.cycle2.min.js"></script>
  <!-- <style type="text/css">
  .style1 {color: #FFFFFF}
  .style2 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 36px;
}
body {
	background-repeat: no-repeat;
}

</style> -->

  <style type="text/css">
<!-- 
 th{padding: 10px; background-color: orange; color:white; font-family: calibri}
 td{text-align: center; padding: 10px 0; background-color: #fbf7f7}
 #red{color:red;}
 h1{text-align: center; font-family: calibri}
.style3 {color: #FFFFFF}

-->
  </style>
</head>

<body>
<div id="header">
<div id="head">
<div id="logo"><img src="http://localhost/ciblog/assets2/logo/logo1.png" width="305" height="91" /></div>

	<ul style="position: absolute;
	margin: 0px;
	margin-top:50px;
	padding: 0px;
	list-style: none;
	margin-left:20px;
	top: 187px;
	left: 51px;" >
          <p align="center">
          <li style="float: left;
					width: 275px;
					height: 60px;
					background-color: black;
					opacity: .6;
					line-height: 60px;
					text-align: center;
					font-size: 15px;
					margin-right: 10px;
					margin-bottom: 20px;
					margin-left: 15px;
					margin-block-end: 40px;
					text-align: center;">
					<a href="http://localhost/ciblog/application/views/pages/home" class="style3">MENGENAL SKYPEA</a></li>
					
          <li style="float: left;
					width: 275px;
					height: 60px;
					background-color: black;
					opacity: .6;
					line-height: 60px;
					text-align: center;
					font-size: 15px;
					margin-right: 10px;
					margin-bottom: 20px;
					margin-left: 15px;
					margin-block-end: 40px;
					text-align: center;">
					<a href="" class="style3">KONTAK DAN INFORMASI</a></li>
					
          <li style="float: left;
					width: 275px;
					height: 60px;
					background-color: black;
					opacity: .6;
					line-height: 60px;
					text-align: center;
					font-size: 15px;
					margin-right: 10px;
					margin-bottom: 20px;
					margin-left: 15px;
					margin-block-end: 40px;
					text-align: center;">
					<a href="" class="style3">LAYANAN PUBLIK</a></li>
					
          <li style="margin-left:315px;float: left;
					width: 275px;
					height: 60px;
					background-color: black;
					opacity: .6;
					line-height: 60px;
					text-align: center;
					font-size: 15px;
					margin-right: 10px;
					margin-bottom: 20px;
					margin-left: 15px;
					margin-block-end: 40px;
					text-align: center;
					">
		  <a href="" class="style3">INFO DAERAH</a></li>
		  
          <li style="float: left;
					width: 275px;
					height: 60px;
					background-color: black;
					opacity: .6;
					line-height: 60px;
					text-align: center;
					font-size: 15px;
					margin-right: 10px;
					margin-bottom: 20px;
					margin-left: 15px;
					margin-block-end: 40px;
					text-align: center;">
					<a href="" class="style3">POTENSI DAERAH</a></li>
			
         </p>
    </ul>


 

  <div class="cycle-slideshow">
    <span class="cycle-prev">&#9001;</span> <!-- Untuk membuat tanda panah di kiri slider -->
    <span class="cycle-next">&#9002;</span> <!-- Untuk membuat tanda panah di kanan slider -->
    <span class="cycle-pager" style="padding-bottom:30px;"></span>  <!-- Untuk membuat tanda bulat atau link pada slider -->
    <img src="http://localhost/ciblog/assets2/images/slide1.png" alt="Gambar Pertama">
    <img src="http://localhost/ciblog/assets2/images/slide2.png" alt="Gambar Kedua">
    <img src="http://localhost/ciblog/assets2/images/slide3.png" alt="Gambar Ketiga">
    <img src="http://localhost/ciblog/assets2/images/slide4.png" alt="Gambar Keempat">  </div>


</div>

</div>
<div id="bg_content">
<div id="content">
  <p>
    <h3>PEMIMPIN DAERAH</h3>
</p>
  <p>&nbsp;</p>
  <table width="582" height="95" style="margin-left:15px;">
    <tr>
      <td width="256" rowspan="2"><img src="http://localhost/ciblog/assets2/logo/imam.jpg" width="250" height="300" /></td>
      <td width="60">&nbsp;</td>
      <td width="250" rowspan="2"><img src="http://localhost/ciblog/assets2/logo/aan.jpg" width="250" height="300" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td><p>&nbsp;</p>
        <p align="center"><strong>HAMZAH</strong></p>
        <p align="center">Presiden Skypedia </p></td>
      <td>&nbsp;</td>
      <td><p>&nbsp;</p>
        <p align="center"><strong>AAN SANOVA</strong></p>
        <p align="center">Wakil Presiden Skypedia  </p></td>
    </tr>
  </table>
  <p>&nbsp;  </p>
</div>
<div id="sidebar">
<?php 
include 'calendar.php';
?>
</div>
</div>

<div id="kotak">
<div id="kotak1"></div>
<div id="kotak2"></div>
</div>


</body>
</html>
