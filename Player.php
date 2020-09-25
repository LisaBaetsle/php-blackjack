<?php

declare(strict_types=1);

class Player
{
  protected array $cards = [];
  private bool $lost = false;

  // CONSTRUCTOR
  function __construct(Deck $deck)
  {
    array_push($this->cards, $deck->drawCard());
    array_push($this->cards, $deck->drawCard());
  }

  // GETTER
  public function getCards(): array
  {
    return $this->cards;
  }

  // CALCULATE SCORE
  public function calcScore()
  {
    $sum = 0;
    foreach ($this->cards as $card) {
      $sum = $sum + $card->getValue();
    }
    return $sum;
  }

  // HIT
  public function Hit(Deck $deck)
  {
    if ($this->calcScore() > 21) {
      $this->lost = true;
    } else {
      array_push($this->cards, $deck->drawCard());
      if ($this->calcScore() > 21) {
        $this->lost = true;
      }
    }
  }

  //SURRENDER
  public function Surrender(): bool
  {
    return $this->lost = true;
  }

  //HAS LOST
  public function hasLost(): bool
  {
    return $this->lost;
  }

  //SHOW CARDS
  public function showCards(): void
  {
    // echo cards in unicode format
    foreach ($this->cards as $card) {
      echo $card->getUnicodeCharacter(true);
    }
  }
};
