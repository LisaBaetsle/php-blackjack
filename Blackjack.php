<?php

declare(strict_types=1);

require 'Player.php';
require 'Dealer.php';

class Blackjack
{
  private Player $player;
  private Dealer $dealer;
  private $deck;

  public function __construct()
  {
    $this->deck = new Deck();
    $this->deck->shuffle();

    $this->player = new Player($this->deck);
    $this->dealer = new Dealer($this->deck);
  }

  public function getPlayer(): Player
  {
    return $this->player;
  }

  public function getDealer(): Dealer
  {
    return $this->Dealer;
  }
};
