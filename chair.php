<?php
session_start();
if(!isset($_SESSION["login"]) || $_SESSION["login"] !== "yes" || $_SESSION["type"] !== "chair"){
    echo "<h1>非法進入，請先登入。2秒後離開...</h1>";
    header("Refresh:2 url=index.php");
} else {
    echo "<h1>歡迎~這裡是 chair 頁面</h1>";
    echo "你可以<a href='logout.php'>點此</a>登出!"; 
}
?>

