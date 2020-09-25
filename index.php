<?php

declare(strict_types=1);

// START SESSION
session_start();

// REQUIRES
require 'Suit.php';
require 'Card.php';
require 'Deck.php';
require 'Player.php';
require 'Dealer.php';
require 'Blackjack.php';

// GLOBAL
$winner = '';

// RESET THE SESSIONS AND THE OBJECT blackjack WHEN PLAYER PRESSES START
if (isset($_POST['start'])) {
  unset($blackjack);
  session_unset();
}

// CHECK IF THERE IS A SESSION FOR BLACKJACK, AND MAKE THE OBJECT $BLACKJACK
if (!isset($_SESSION['blackjack'])) {
  $blackjack = new Blackjack;
  $_SESSION['blackjack'] = serialize($blackjack);
} else {
  $blackjack = unserialize($_SESSION['blackjack']);
}

// WHEN THE PLAYER PRESSES HIT
if (isset($_POST["hit"])) {
  $blackjack->getPlayer()->Hit($blackjack->getDeck());
  $_SESSION['blackjack'] = serialize($blackjack);
  if ($blackjack->getPlayer()->calcScore() > 21) {
    $winner = $blackjack->theWinner();
  }
};

// WHEN THE PLAYER PRESSES STAND
if (isset($_POST['stand'])) {
  $blackjack->getDealer()->Hit($blackjack->getDeck());
  $_SESSION['blackjack'] = serialize($blackjack);
  $winner = $blackjack->theWinner();
}

// WHEN THE PLAYER SURRENDERS
if (isset($_POST['surrender'])) {
  $blackjack->getPlayer()->Surrender();
  $_SESSION['blackjack'] = serialize($blackjack);
  $winner = $blackjack->theWinner();
}

require 'view.php';
