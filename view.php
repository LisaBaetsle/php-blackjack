<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css">
  <title>Blackjack</title>
</head>

<body>



  <div class="container game">
    <div class="row justify-content-md-center">
      <h1>Welcome to blackjack</h1>
    </div>

    <div class="container container-buttons">
      <div class="row justify-content-md-center">
        <form method="post">
          <button type="submit" class="mr-3 btn btn-info btn-lg" id="start" name="start" value="start">Start game</button>
          <button type="submit" class="mr-3 btn btn-info btn-lg" id="hit" name="hit" value="hit">Hit me!</button>
          <button type="submit" class="mr-3 btn btn-info btn-lg" id="stand" name="stand" value="stand">Stand</button>
          <button type="submit" class="mr-3 btn btn-info btn-lg" id="surrender" name="surrender" value="surrender">Surrender</button>
        </form>
      </div>
    </div>

    <div class="container-result">
      <div class="row justify-content-md-center">
        <p> <?= $winner ?> </p>
      </div>

    </div>

    <div class="container-player">
      <h1>Player</h1>
      <p class="cards"> <?= $blackjack->getPlayer()->showCards(); ?>
      </p>
      <p> The sum is <?= $blackjack->getPlayer()->calcScore(); ?> </p>
    </div>


    <div class="container-computer">
      <h1>Dealer</h1>
      <p class="cards"> <?= $blackjack->getDealer()->showCards(); ?>
      </p>
      <p> The sum is <?= $blackjack->getDealer()->calcScore(); ?> </p>
    </div>
  </div>


  </div>


</body>

</html>