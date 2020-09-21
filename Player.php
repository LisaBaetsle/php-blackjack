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

  public function Hit(): array
  {
    return $this->cards;
  }

  public function Surrender(): void
  {
  }

  public function getScore(): void
  {
  }

  public function hasLost(): void
  {
  }
};
