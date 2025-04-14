<?php

if (isset($_GET['name'])) {
   
    $name = htmlspecialchars($_GET['Username']); 
    echo "Hello, " . $name . "!";
} else {
    echo "No name parameter provided.";
}
?>