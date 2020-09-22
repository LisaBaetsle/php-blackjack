<?php

declare(strict_types=1);

class Player
{
  private array $cards;
  private bool $lost = false;

  function __construct(Deck $deck)
  {
    $playerCardOne = $deck->drawCard();
    $playerCardTwo = $deck->drawCard();

    $this->cards = [$playerCardOne, $playerCardTwo];
  }

  //GETTER
  public function getCards()
  {
    return $this->cards;
  }

  public function Hit(Deck $deck)
  {
    $playerCardThree = $deck->drawCard();
    array_push($this->cards, $playerCardThree);

    $sum = 0;
    foreach ($this->cards as $card) {
      $sum = $sum + $card->getValue();
    }
    // echo $sum;

    if ($sum > 21) {
      $this->lost = true;
    }
  }

  public function Surrender(): bool
  {
    return $this->lost = true;
  }

  public function getScore(): int
  {
    $totalSum = 0;
    foreach ($this->cards as $card) {
      $totalSum = $totalSum + $card->getValue();
    }

    return $totalSum;
  }

  public function hasLost(): bool
  {
    return $this->lost;
  }
};
