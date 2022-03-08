<?php

$min = 1; 
$max = 50;
$guess = 5; //Change this value to test!
// If you really want to go nuts, try this:
//$num = rand($min, $max);
$num = rand($min, $max);

if ($guess > $max || $guess < $min){
	echo '<p>Your number is out of range. Please guess between 1 and 50.</p>';
} else if ($guess > $num){
	echo '<p>Your guess was too high!</p>';
} else if ($guess < $num){
	echo '<p>Your guess was too low!</p>';
} else if ($guess === $num){
	echo '<p>You are correct!</p>';
}
echo '<p>The correct number is, ' . $num . '</p>';