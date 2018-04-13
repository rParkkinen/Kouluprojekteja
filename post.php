<?php
require ('db.php');
$kysymys = $_POST['title'];
$vastaus = $_POST['Vastaus'];


  $sql = "INSERT INTO kysymykset (Kysymys)
  VALUES ('$kysymys')";

if ($con->query($sql) === TRUE) {
  $last_id = $con->insert_id;
  echo "Uusi tallennus onnistui. Viimeisin ID on: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

foreach ($vastaus as $yksi_vastaus){
  $sql = "INSERT INTO vaihtoehdot (Otsikko, Aanestys_ID) VALUES (?, ?)";
  $stmt = $con->prepare($sql);
  $stmt->bind_param("si",$yksi_vastaus, $last_id);
  $stmt->execute();
  $stmt->close();
}

  // $stmt = $con->prepare("INSERT INTO vaihtoehdot (Otsikko, Aanestys_ID) VALUES (?, ?)");
  // var_dump($stmt);
  // printf("Error: %s.\n", $stmt->error);

  // $stmt->bind_param("si",$vastaus, $last_id);

 

  // print_r($stmt);
  // printf("%s\n", mysqli_info($con));
  // print_r($_POST);
  $con->close();
?>