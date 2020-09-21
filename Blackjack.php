<?php

declare(strict_types=1);

require 'Player.php';

class Blackjack
{
  private Player $player;
  private $dealer;
  private $deck;

  public function __construct()
  {
    $this->deck = new Deck();
    $this->deck->shuffle();

    $this->player = new Player($this->deck);
    $this->dealer = new Player($this->deck);
  }

  public function getPlayer(): Player
  {
    return $this->player;
  }

  public function getDealer(): void
  {
  }
};
