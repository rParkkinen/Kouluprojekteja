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
    <canvas id="charts" width="300" height="300"></canvas>
    <script>
      var ctx = document.getElementById("charts");
      var charts = new Chart(ctx, {
        type:'bar',
        data: {
          labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
          datasets: [{
            label: '# of Votes',
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
              'rgba(255,99,132,1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero:true
              }
            }]
          }
        }
      });
    </script>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
  <script src="navBarscript.js"></script>
</html>
