<?php 
 //cia mano komentaras

 /*
  Keliu eilučių komentaras
 */

 /**
  * 
  */
 // 
//  $cm=$_POST['cm'];
//  $col=$cm/2.54;

$kg = $_GET['kg'];
$x = 100;
$m = $_GET['cm'] / $x;
$KMI = round( $kg / ($m * $m), 2);

  if ($KMI < 18.5) {
    $msg = "Nepakankamas svoris";
  } else if ($KMI >= 18.5 && $KMI < 25) {
      $msg = "Normalus svoris";
  } else if ($KMI >=25 && $KMI < 30) {
      $msg = "Antsvoris";
  } else {
      $msg = "Nutukimas";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Rezultatas</title>
</head>
<body>
  <h1>Jūsų KMI</h1>
  <div class="card">
    <div class="result">
      <?php
        echo $KMI . "<br>" . $msg;
      ?>
    </div>
    <div class="back-btn">
      <a href="new.php">Atgal</a>
    </div>
  </div>
  <img src="kmi.png" alt="KMI normos">
  <img src="kmi2.png" alt="KMI normos2">


</body>
</html>