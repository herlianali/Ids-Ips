<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>.::Simulasi Pengumpulan::.</title>
    <link rel="stylesheet" href="../style/materialize/css/materialize.css">
    <link href="../style/materialize/icon.css" rel="stylesheet">
    <style media="screen">
      header, main, footer {
        padding-left: 300px;
      }
      @media only screen and (max-width : 992px) {
      	header, main, footer {
      		padding-left: 0;
      	}
      }
    </style>
  </head>
  <body class="grey lighten-2">
    <header>
    	<nav class="grey darken-4">
    		<div class="nav-wrapper">
    			<div class="row">
    				<div class="col s12">
    					<a href="#" data-target="sidenav-1" class="left sidenav-trigger hide-on-medium-and-up"><i class="material-icons">menu</i></a>
    					<a href="home.php" class="brand-logo">Simulasi</a>
              <ul class="right">
                <li><a href="../controller/logout.php">Logout</a></li>
              </ul>
    				</div>
    			</div>
    		</div>
    	</nav>
    </header>

    <ul id="sidenav-1" class="sidenav sidenav-fixed">
    	<li>
        <div class="user-view">
          <div class="background">
            <img src="../style/image/background1.jpg" style="max-width:100%">
          </div>
          <a><img src="../style/images/user.png" class="circle"></a>
          <a class="white-text name">Anda adalah <b>LABORAN</b></a><br>
          <!-- <a class="white-text email">nim anda adalah <b>161080200123</b></a> -->
        </div>
      </li>
    	<li><a href="index.php">Monitoring Pengumpulan</a></li>
      <?php
      // hidden if condition false
      if (false) {
        echo '<li><a href="">Menu 2</a></li>';
      }
      ?>
      <li><a href="not_found.php">Data Pengumpulan Praktikum</a></li>
    	<li><a href="not_found.php">Input Jadwal Praktikum</a></li>
    </ul>

<main>
