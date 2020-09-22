<?php

declare(strict_types=1);

require 'Suit.php';
require 'Card.php';
require 'Deck.php';
require 'Blackjack.php';

$deck = new Deck(); // This function makes an array of all the different card possibilities
// print_r($deck);
$deck->shuffle(); // This function shuffles all the cards of the deck
// print_r($deck);


// print_r($deck->drawCard());

/* foreach ($deck->getCards() as $card) { // It's best practice to use the getter, it gives the array of the shuffled cards
  // print_r($card);
  echo $card->getUnicodeCharacter(true);
  echo '<br>';
  var_dump($card);
} */

$blackjack = new Blackjack();
// print_r($blackjack->getPlayer());

// $player = new Player($deck);
print_r($blackjack->getPlayer());
echo '<br>';
echo '<br>';
// $player->Hit($deck);
$blackjack->getPlayer()->Hit($deck);
print_r($blackjack->getPlayer()->getCards());
// print_r($player);
echo '<br>';
echo '<br>';
// echo $card->getValue();
/* $sum = 0;
foreach ($blackjack->getPlayer()->getCards() as $card) {
  $sum = $sum + $card->getValue();
}
echo $sum; */

foreach ($blackjack->getPlayer()->getCards() as $card) {
  // print_r($card);
  echo $card->getUnicodeCharacter(true);
  echo '<br>';
  var_dump($card);
}


$blackjack->getPlayer()->getScore();
print_r($blackjack->getPlayer()->getScore());
