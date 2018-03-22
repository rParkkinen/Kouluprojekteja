<?php
require ('db.php');
$kysymys = $_POST['title'];
// $vastaus = $_POST['Vastaus'];
$vastaus = "Kissa";

  $sql = "INSERT INTO kysymykset (Kysymys)
  VALUES ('$kysymys')";

if ($con->query($sql) === TRUE) {
  $last_id = $con->insert_id;
  echo "Uusi tallennus onnistui. Viimeisin ID on: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

  $stmt = $con->prepare("INSERT INTO vaihtoehdot (Otsikko) VALUES (?)");
  var_dump($stmt);
  printf("Error: %s.\n", $stmt->error);

  $stmt->bind_param("s",$vastaus);

  $stmt->execute();

  
  printf("%s\n", mysqli_info($con));
  print_r($_POST);
  $stmt->close();
  $con->close();
?>