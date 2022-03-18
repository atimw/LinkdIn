<?php
include 'learningphp.php';
function double( $a ) {
    return $a + 2;
}
function triple($a){
    return $a + 3;
}

echo '<p>' . double(5) . '</p>';

echo '<p>' . learningPHP\double(5) . '</p>';

echo '<p>' . triple(5) . '</p>';

echo '<p>' . learningPHP\triple(5) . '</p>';