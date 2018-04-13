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
      <a href="index.php">Etusivu</a>
    </div>
    <img src="hamburgermenu.png" class="hamburger" style="cursor: pointer" onclick="openNav(), openKim()">
    <div id="main">

    </div>
    <div class="text-container" style="border-radius: 10px 10px 0px 0px">
      <h1 class="text">Tästä suatat suaha kyselyn tulille :D</h1>
    </div>
    <div class="text-container">
      <form action="post.php" method="post" id="addAnswer">
        <input type="text" name="title" placeholder="Kysyhän tässä" autocomplete="off" required />
        <input class="answers" name="Vastaus[]" type="text" id="Vastaus" placeholder="Suattaapi olla tämä" autocomplete="off" required />
        <input class="answers" name="Vastaus[]" type="text" id="Vastaus" placeholder="Suattaapi olla tämäkin" autocomplete="off" required />
        <div name="moreAnswers" id="moreAnswers"></div>
        <input type="button" class="btn" value="Lissää uus vaehtoehto" onclick="add()" style="cursor: pointer" />
        <input type="button" class="deletebtn" name="deletebtn" value="Emmiä näi montaa halunna, mistä poestettaan?" onclick="removeElement()" style="cursor: pointer" />
        <input type="submit" class="submitBtn" name="submit" value="Tästäkö se toimitettaan" />
    </form>
    </div>
    <footer id="KimJongUn">
      <!-- <img src="kim.png" alt="kim"> -->

    </footer>
  </body>
  <script>

  var answerid = 0;
  var form = document.getElementById("moreAnswers");

  function removeElement() {
    if (form.hasChildNodes()) {
      form.removeChild(form.childNodes[form.childNodes.length-1]);
    }
  }

  function add() {
    if (answerid > 5) return;
    answerid++;
    var x = document.createElement("INPUT");
    x.setAttribute("class", "answers")
    x.setAttribute("type", "text");
    x.setAttribute("placeholder", "Ja tämä");
    x.setAttribute("autocomplete", "off");
    x.setAttribute("name", "Vastaus[]");

    var form = document.getElementById("moreAnswers");
    form.insertBefore(x, form.childNodes[form.childNodes.length]);
  }
  </script>
  <script src="navBarscript.js"></script>
</html>
