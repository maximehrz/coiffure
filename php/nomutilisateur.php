<?php
  include 'bdd.php';

  $listenom = $bdd->query('SELECT prenom_utilisateur FROM utilisateur WHERE role_utilisateur = 0');
  $listenom = $listenom->fetchALL(PDO::FETCH_COLUMN);
  $listenom = json_encode($listenom);
  echo $listenom;
 ?>
