<?php
setcookie('visited', true);
if (isset($_COOKIE['visited'])){
    echo "<h1>Welcome back!</h1>";
    setcookie('visited',false,time() - 3600);
} else {
    echo "<h1>Welcome</h1>";
}