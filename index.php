<?php

declare(strict_types=1);

// START SESSION
session_start();
// session_unset();

// REQUIRES
require 'Suit.php';
require 'Card.php';
require 'Deck.php';
require 'Player.php';
require 'Dealer.php';
require 'Blackjack.php';

if (isset($_POST['start'])) {
  // RESET
  unset($blackjack);
  session_unset();
}

// CHECK IF THERE IS A SESSION FOR BLACKJACK, AND MAKE THE VARIABLE $BLACKJACK
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
};

// WHEN THE PLAYER PRESSES STAND
if (isset($_POST['stand'])) {
  $blackjack->getDealer()->Hit($blackjack->getDeck());
  $_SESSION['blackjack'] = serialize($blackjack);
}

// WHEN THE PLAYER SURRENDERS
if (isset($_POST['surrender'])) {
  $blackjack->getPlayer()->Surrender();
  $_SESSION['blackjack'] = serialize($blackjack);
}


require 'view.php';
