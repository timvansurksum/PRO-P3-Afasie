<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./CSS/style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Odibee+Sans|VT323&display=swap" rel="stylesheet">
  <link href="/style/style.css" rel="stylesheet">
  <title>afasie.tv</title>
</head>

<body class="text">
  <?php
  include("./header.php");
  ?>
  <?php
  // de navbar
  include("./navbar.php");
  ?>
  <div class="container-fluid">
    <div class="row">
      <?php
      if (isset($_GET["content"])) {
        include("./" . $_GET["content"] . ".php");
      } else {
        include("./home.php");
      }
      ?>
    </div>
    <div class="row" style="background-color: rgb(36, 36, 36);">
      <footer>
        <?php
        include("./footer.php");
        ?>
      </footer>
    </div>
  </div>
  <div style="margin-bottom: 100px">
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="./js/app.js"></script>
</body>

</html>