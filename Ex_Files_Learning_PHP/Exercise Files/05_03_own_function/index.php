<?php
function is_palindrome($string){
    //Convert string to lowercase and remove spaces
    $string = str_replace(' ', '', strtolower($string));
    //Check string match after reversal
    return ($string == strrev($string));
}

//Gets 
$check_string = 'New en';
if (is_palindrome($check_string)){
    echo "<p>$check_string is a palindrome</p>";
} else {
    echo "<p>$check_string is not a palindrome</p>";
}