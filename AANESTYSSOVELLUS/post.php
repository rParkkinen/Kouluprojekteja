<?php
require ('db.php');
$kysymys = $_POST['title'];
$vastaus = $_POST['Vastaus'];

  $sql = "INSERT INTO kysymykset (Kysymys)
  VALUES ('$kysymys')";

  $stmt = $con->prepare("INSERT INTO vaihtoehdot (Otsikko) VALUES (?)");
  $stmt->bind_param("s",$vastaus);

  $stmt->execute();

  if (mysqli_query($con,$sql)) {
    echo "Uutta tietoa tallennettiin";
    echo mysqli_insert_id($con);

  } else {
    echo "Virhe: " .$sql . "<br>" . mysqli_error($con);
  }
  print_r($_POST);
  $stmt->close();
  $con->close();
?>