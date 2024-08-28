<?php

$diceValue = 0;
$totalPoints = 0;

while ($diceValue != 6) {
    $diceValue = random_int(1, 6);
    echo "You rolled: " . $diceValue . "<br>";
    if ($diceValue % 2 == 1)
        echo $totalPoints += $diceValue;
    // else if($diceValue%2== 0) $totalPoints+=$diceValue;
    echo "Current score: " . $totalPoints;
}


?>