<?php

$total = 4;
switch ($total) {
	case 1:
	case 2:
	case 3:
	case 4:
		echo '<p>$total is less than 5';
		break;
	default:
		echo '<p>$total is 5 or more';
}

$turtle = 'Leo';
$bandana = '';
switch($turtle){
	case 'Leo':
		$bandana = 'blue';
		break;
		
	case 'Raph':
		$bandana = 'red';
		break;
	
	case 'Mike':
		$bandana = 'orange';
		break;
	
	case 'Don':
		$bandana = 'blue';
		break;
	
	
}
echo "<p>$bandana</p>";

$turtle = 'Don';
$bandana = match($turtle){
	'Leo' => 'blue',
	'Raph' => 'red',
	'Mike' => 'orange',
	'Don' => 'purple',
	default => 'red',
};
echo $bandana;