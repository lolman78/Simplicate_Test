<?php

include __DIR__.'/Game.php';

$notAWinner;

  $aGame = new Game();
  
  $aGame->add("George");
  $aGame->add("Chris");
  $aGame->add("Aiden");
  $aGame->add("Wendy");

  // misschien kun je hier voor de lol een soort invoer veld maken dat de gebruiker zelf speler namen erin kan zetten.
  // en als ze dan alle spelers erin hebben gezet die ze erin willen zetten laten ze het spel beginnen.

  do {

    $aGame->roll(rand(0,5) + 1);
    
    if (rand(0,9) == 7) {
      $notAWinner = $aGame->wrongAnswer();
    } else {
      $notAWinner = $aGame->wasCorrectlyAnswered();
    }
    
    
  } while ($notAWinner);
  