<?php
  include 'bdd.php';

  $listenom = $bdd->query('SELECT couleur_utilisateur FROM utilisateur WHERE role_utilisateur = 0');
  $listenom = $listenom->fetchALL(PDO::FETCH_COLUMN);
  $listenom = json_encode($listenom);
  echo $listenom;
 ?>
