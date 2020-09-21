<?php

declare(strict_types=1);

class Deck
{
  private const CARDS_PER_SUIT = 14; //Why 14? There are 13 cards per suit

  private $cards = []; // This is an empty array

  // If you call new deck(), this constructs a deck with all the combinations of cards
  public function __construct()
  {
    $suits = [
      Suit::SPADE(), // This is from the class suit in suit.php
      Suit::HEART(),
      Suit::CLUB(),
      Suit::DIAMOND(),
    ];

    // For every suit inside the suits array, add a card from 1 and stop when it reaches 14)
    foreach ($suits as $suit) {
      foreach (range(1, self::CARDS_PER_SUIT) as $i) {
        $this->cards[] = new Card($suit, $i);
      }
    }
  }

  public function shuffle(): void // A void function must not return a value
  {
    shuffle($this->cards); // This function shuffles (randomizes the order of the elements in) an array
  }

  /** @return Card[] */
  public function getCards(): array // This is the getter voor the cards array
  {
    return $this->cards;
  }

  public function drawCard(): ?Card
  {
    // array_shift() shifts the first value of the array off and returns it, shortening the array by one element and moving everything down. All numerical array keys will be modified to start counting from zero while literal keys won't be affected.
    return array_shift($this->cards);
  }
}
