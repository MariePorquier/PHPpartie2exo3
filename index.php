<?php
$gender = 'femme';
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHPpartie2exo3</title>
  </head>
  <body>
    <p>
     <?php
     if ($gender == 'homme')
     {
     echo 'C\'est une développeuse !!!';
     }
      else {
     echo 'C\'est un développeur !!!';
     }
     ?>
   </p>
  </body>
</html>
