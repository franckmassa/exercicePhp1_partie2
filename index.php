<?php
//Déclaration de la variable
$age = -5;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice1</title>
</head>
<body>
  <p>
    <?php
    //Alerte si l'age est en dessous de 0
    if ($age < 0){
      echo 'Veuillez entrer un age valide';
    //Affichage du message en fonction de l'age
    } elseif ($age >=18){
      echo 'Vous êtes majeur';
    } else {
      echo 'Vous êtes mineur';
    }
    ?>
  </p>
</body>
</html>
