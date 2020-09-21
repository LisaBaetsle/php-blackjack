<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blackjack</title>
</head>

<body>
  <form method="post">
    <button type="submit" id="hit" name="hit" value="hit">Hit me!</button>
    <button type="submit" id="stand" name="stand" value="stand">Stand</button>
    <button type="submit" id="surrender" name="surrender" value="surrender">Surrender</button>
  </form>

  <?php
  var_dump($_POST);
  ?>

</body>

</html>