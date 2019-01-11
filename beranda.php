<?php
  session_start();
  include("function.php");
  echo check_login();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>praktik login session</title>
  </head>
  <style media="screen">
  body {
    background: #3498db;
    font-family: sans-serif;
  }

  h1 {
    color: #fff;
  }
  </style>
  <body>
    <center><h1>Selamat Datang!</h1></center>
    <h3><a href="add_data.php">Tambah Data</h3>
    <h3><a href="logout.php">Logout!</a></h3>
    <p><p><p>
      <center></center>
  </body>
</html>
