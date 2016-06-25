<?php
require_once("config.php");
?>
<html>
  <head>
    <title>CSGO Lotus - Paths</title>
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="css/paths_css.css" rel="stylesheet">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, target-densitydpi=device-dpi" />
  </head>
  <body>
    <div id="wrapper">
    <header>
      <img id="logo" height="75px" src="img/logo.png"/>
      <?php
          if(!isset($_SESSION["steamid"])) {
              steamlogin($db);
          } else {
              include("libraries/steamauth/userInfo.php");
              echo '<div id="userinfo"><img id="balance" src="img/token.png">'.number_format(credits($_SESSION["steamid"], $db)).'<img id= "avatar" src="'.$steamprofile["avatarfull"].'">Welcome, <span>' . $steamprofile['personaname'] . '</span><div id="icon"><a href="#"><i class="fa fa-cog"></i></a></div></div>';
          }
      ?>
    </header>
    </div>
  </body>
</html>
