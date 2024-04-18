<?php
session_start();
unset($_SESSION["login"]); 
unset($_SESSION["type"]); 
unset($_SESSION["username"]); 
session_destroy(); 
header("Location: index.php"); 
?>
