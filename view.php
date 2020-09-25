<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
  <title>Blackjack</title>
</head>

<body>



  <div class="container">
    <div class="row">
      <div class="player col-md-6">
        <h1>Player</h1>
        <p>These are your cards: </p>
        <p style="font-size:200px;"> <?= $blackjack->getPlayer()->showCards(); ?>
        </p>
        <p> The sum is <?= $blackjack->getPlayer()->calcScore(); ?> </p>
        <p> You have lost = <?= $blackjack->getPlayer()->hasLost(); ?> </p>
      </div>

      <div class="computer col-md-6">
        <h1>Dealer</h1>
        <p>These are the dealer's cards:</p>
        <p style="font-size:200px;"> <?= $blackjack->getDealer()->showCards(); ?>
        </p>
        <p> The sum is <?= $blackjack->getDealer()->calcScore(); ?> </p>
        <p> You have lost = <?= $blackjack->getDealer()->hasLost(); ?> </p>
      </div>
    </div>

    <div class="row">
      <form method="post">
        <button type="submit" id="start" name="start" value="start">Start game</button>
        <button type="submit" id="hit" name="hit" value="hit">Hit me!</button>
        <button type="submit" id="stand" name="stand" value="stand">Stand</button>
        <button type="submit" id="surrender" name="surrender" value="surrender">Surrender</button>
      </form>
    </div>
  </div>


</body>

</html>