<?php
$servername ="localhost";
$username = "root";
$password = "";
$database = "aanestysappi";

$con = new mysqli($servername, $username, $password, $database);

  if ($con->connect_error) {
    die("Yhdistäminen epäonnistui: " . $con->connect_error);
  }
 ?>
