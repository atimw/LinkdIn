<?php

$min = 1; 
$max = 50;
$guess = 4; //Change this value to test!
// If you really want to go nuts, try this:
//$num = rand($min, $max);
$num = rand($min, $max);

if ($guess === $num){
	echo '<p>You are correct!</p>';
} else if ($guess > $num){
	echo '<p>Your guess was too high!</p>';
} else if ($guess < $num){
	echo '<p>Your guess was too low!</p>';
} else {
	echo '<p>You guess was invalid!</p>';
}

