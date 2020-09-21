<?php

declare(strict_types=1);

require 'Suit.php';
require 'Card.php';
require 'Deck.php';

$deck = new Deck(); // This function makes an array of all the different card possibilities
// print_r($deck);
$deck->shuffle(); // This function shuffles all the cards of the deck
// print_r($deck);

foreach ($deck->getCards() as $card) { // It's best practice to use the getter, it gives the array of the shuffled cards
  // print_r($card);
  echo $card->getUnicodeCharacter(true);
  echo '<br>';
  var_dump($card);
}
