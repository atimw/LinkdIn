<?php
/**
 * Write equations that evaluate the following: 
 * (14 + 82 - 32 / 2)^2
 * 18 x (3 ÷ 6 -9) x 10
 * 5x (12 ÷2 -8 x 4 +12x6)
 * 
 * Be sure to use additional parentesis to get the right results! 
 */
$evals = array();
$evals[0] = (14 + 82 - (32 / 2 ) )**2;
$evals[1] = 18 * ( (3/6) - 9 ) * 10;
$evals[2] = 5 * ( (12/2) - (8*4) + (12*6) );
echo '<pre>';
print_r($evals);
echo '</pre>';
echo '<br>' . $evals[0] . '<br>' . $evals[1] . '<br>' . $evals[2];