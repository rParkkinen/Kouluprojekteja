<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <title>Äänestyssovellus</title>
  </head>
  <body>
    <div id="mysideNav" class="sideNav">
      <a href="javascript:void(0)" class="closeBtn" onclick="closeNav()">&times;</a>
      <a href="makeVote.php">Kyselehhän</a>
    </div>
    <img src="hamburgermenu.png" class="hamburger" onclick="openNav()">
    <div id="main">

    </div>
    <div class="text-container" style="border-radius: 5px 5px 5px 5px">
      <h1 class="text">Free voting app no scam free moneys back download <a href="#">here</a> VIRUS FREE</h1>
    </div>
    <div class="text-container">
      <img src="vince2.png" alt="vince">
    </div>
    <div class="text-container">
    <?php
    require ('db.php');
      $sql = "SELECT Kysymys, vaihtoehdot.Otsikko 
             FROM kysymykset
             JOIN vaihtoehdot 
             ON vaihtoehdot.Aanestys_ID=kysymykset.ID";
             $result = mysqli_query($con, $sql);

             if ($result->num_rows > 0) {
             echo "<table><tr></tr>";
              while ($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["Kysymys"]."</td><td>".$row["Otsikko"]."</td></tr>";
              } 
              echo "</table>";
            } else {
              echo "0 tulosta";
            } $con->close();
             
    ?>

    </div>

  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
  <script src="navBarscript.js"></script>
</html>
