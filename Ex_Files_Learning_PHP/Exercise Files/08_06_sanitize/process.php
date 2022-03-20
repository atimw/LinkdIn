<?php
var_dump($_POST);

echo "<br>";

if(!empty($_POST)){
    foreach($_POST as &$value){
        array_map('trim', $value);
    }
}

// if(!empty($_POST)){
//     foreach($_POST as $value){
//         $value = array_map('trim', $value);
//     }
// }
// echo $_POST['message'];