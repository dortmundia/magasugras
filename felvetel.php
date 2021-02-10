<?php include('server.php'); ?>

<!doctype html>
<html lang="hun">
  <head>
    <title>Magasugrások felvétele</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta charset="UTF-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


<div class="doboz">
  <a   href="index.php">Magasugrások listája</a>
  <a   href="felvetel.php">Magasugrás felvétele</a>
  <a   href="modositas.php">Magasugrás módosítása</a>
  <h1>Magasugrások</h1>
</div>




<div class="doboz" class="input-group mb-3">

<form action="/action_page.php" method="POST">

    Magasság: <input type='number'  class="form-control" name='input_high' required><br />
    Atléta neve: 	<input type='text'  class="form-control" name='input_name' required><br />
    Nemzetiség: <input type='text' name='input_nat' class="form-control" required><br />
    Dátum: <input type='date' name='input_date' class="form-control" required><br>
    Helyszín: <input type='text' name='input_place' class="form-control" required><br />
    <input type='hidden' name='action' value='cmd_insert_mu'>
    <input type='submit' class="btn btn-outline-success" value='Eredmény Felvétel'><br><br>
</form>

</div>


<footer>
<div class="doboz">
  <p><b> Készitette</b>: Berendi Barnabás, 2021.</p>
</div>
</footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="jquery.min.js"></script>
    <script src="scripts.js"></script>
  </body>
</html>