<?php
  // require "lib/IpsFunc.php";

  // $ips = new IpsFunc;
  // $ips->cek($_SERVER['REMOTE_ADDR']);
  
  session_start();
  if (!empty($_SESSION['nim'])) {
      header('location:index.php');
  }
  require_once(realpath(dirname(__FILE__))."/controller/loginController.php");
  require_once(realpath(dirname(__FILE__))."/lib/monitor.php");

  if (isset($_POST['action'])) {

    $login = new loginController;

    $username = Ids($_POST['username']);
    $password = Ids($_POST['password']);

    $login->login($username, $password);
    
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="style/materialize/icon.css" rel="stylesheet">
    <link rel="stylesheet" href="style/materialize/css/materialize.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Skripsi</title>
  </head>
  <body class="grey lighten-2">
    <div class="row">
      <div class="col m3"></div>
      <div class="col m6">
         <h2 class="header center-align">Are You User in My Web</h2>
         <div class="card horizontal hoverable">
           <div class="card-image">
             <br><br><br>
             <img src="style/image/undraw_access_account_99n5.svg">
             <br><br>
           </div>
           <div class="card-stacked">
             <div class="card-content">
                <h5 class="center-align">please login first</h5>
               <form class="" action="" method="post">
                 <div class="row">
                   <div class="input-field col s10">
                     <input type="text" name="username" >
                     <label for="username">Username</label>
                   </div>
                   <div class="input-field col s10">
                     <input type="password" name="password" >
                     <label for="password">Password</label>
                   </div>
                   <div class="input-field col s10">
                     <button class="btn waves-effect waves-light grey darken-3" type="submit" name="action">Login
                       <i class="material-icons right">send</i>
                     </button>
                   </div>
                 </div>
               </form>
             </div>
           </div>
         </div>
       </div>
       <div class="col m3"></div>
     </div>
     <script src="style/materialize/js/materialize.js" charset="utf-8"></script>
  </body>
</html>
