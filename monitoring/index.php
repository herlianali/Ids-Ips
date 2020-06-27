<?php 

  if ($_GET['alert'] == "password") {
    echo "";
  }elseif ($_GET['alert'] == "username") {
    echo "";
  }

  require_once("../controller/loginController.php");

  $login = new loginController;
  $login->loginAdmin($_POST['username'], $_POST['password']);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>.::Simulasi Pengumpulan::.</title>
    <link rel="stylesheet" href="../style/materialize/css/materialize.css">
  </head>
  <body class="grey darken-5">
    <div class="container">
      <center>
        <h1 class="black-text text-darken-2">Apa Kamu Super User</h1>
      </center>
      <div class="row">
        <div class="col m3"></div>
        <div class="col s12 m6">
          <div class="card">
            <div class="card-content">
              <span class="card-title">Login Monitoring</span>
              <form action="" method="post">
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="text" name="username" class="validate">
                  <label for="email">Username</label>
                </div>
                <div class="input-field col s12">
                  <input id="password" type="password" name="password" class="validate">
                  <label for="password">Password</label>
                </div>
               </div>
               <button type="submit" name="login" class="waves-effect waves-light btn-small grey darken-3">Login</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col m3"></div>
      </div>
    </div>

    <script type="text/javascript" src="../style/materialize/js/materialize.min.js"></script>
    <script type="text/javascript">
      M.toast({html: 'I am a toast!'})
    </script>
  </body>
</html>
