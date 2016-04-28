<?php
  include 'php/bdd.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Coiffure</title>
  <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/fonction.js"></script>
</head>
<body>
  <div id="perschoix" class="container">
    <h1 id="title"><span class="glyphicon glyphicon-scissors"></span> Coiffure</h1>
    <h1>Connexion</h1>
    <br>
    <br>
    <div class="col-xs-4">
      <div id="persdiv1">
        <h2 id="pers1"></h2>
      </div>
    </div>
    <div class="col-xs-4">
      <div id="persdiv2">
        <h2 id="pers2"></h2>
      </div>
    </div>
    <div class="col-xs-4">
      <div id="persdiv3">
        <h2 id="pers3"></h2>
      </div>
    </div>
  </div>
</body>
</html>
