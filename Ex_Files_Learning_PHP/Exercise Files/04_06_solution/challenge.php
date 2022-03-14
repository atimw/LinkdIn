<?php

//Gets 0 to start
$num1 = 0;
//Gets 1 to start
$num2 = 1;

while ($num1 < 200) {
	echo "<p>$num1</p>";
	//Gets $num1 + $num2
	$num3 = $num1 + $num2;
	$num1 = $num2;
	$num2 = $num3;
}
