<?php

declare(strict_types=1);

// require 'Player.php';

class Dealer extends Player
{
  public function __construct(Deck $deck)
  {
    array_push($this->cards, $deck->drawCard());
  }

  public function Hit(Deck $deck)
  {
    // dealer stops drawing cards if total > 15
    while ($this->calcScore() <= 15) {
      parent::Hit($deck);
    }
  }
}
