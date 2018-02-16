<?php
  session_start();

?>
<html>
  <head>
  </head>
  <body>

    <?php include_once('../../pages/adminMenu.php'); ?>

  <section id="content">

<?php

  $diseaseId= $_POST["diseaseId"];
  $name = $_POST["name"];
  $synonym= $_POST["synonym"];
  $description= $_POST["description"];
  $symtomp= $_POST["symtomp"];
  $causes= $_POST["causes"];
  $population= $_POST["population"];
  $disorder= $_POST["disorder"];
  $diagnosis= $_POST["diagnosis"];
  $treatment= $_POST["treatment"];
  $terhapy= $_POST["terhapy"];
  $subdivision= $_POST["subdivision"];


include_once("DiseasesCollector.php");

$DiseaseCollectorObj = new DiseaseCollector();

if ($DiseaseCollectorObj->createUser($diseaseId, $name, $synonym, $description, $symtomp, $causes, $population, $disorder, $diagnosis, $treatment, $terhapy, $subdivision)){
  echo "La enfermedad ". $name ." se ha creado correctamente</br>";
}else {
  echo "ERROR al crear enfermedad</br>";
}

?>

<div><a href="/admin/diseases">Volver a Enfermedades</a></div>
</section>
</body>
</html>
