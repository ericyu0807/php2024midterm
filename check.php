<?php
session_start();
$ac = $_POST["sName"];
$pd = $_POST["sPWD"];
$role = $_POST["sChar"];

$ac1 = "chair";
$pd1 = "123";
$ac2 = "reviewer";
$pd2 = "234";
$ac3 = "author";
$pd3 = "345";

if (($ac == $ac1 && $pd == $pd1)) {
    $_SESSION["login"] = "yes";
    $_SESSION["type"] = "chair";
    $_SESSION["username"] = $ac;
    setcookie("sName", $ac, time() + 86400 * 7); 
    header("Location: chair.php");
} elseif (($ac == $ac2 && $pd == $pd2)) {
    $_SESSION["login"] = "yes";
    $_SESSION["type"] = "reviewer";
    $_SESSION["username"] = $ac;
    setcookie("sName", $ac, time() + 86400 * 7); 
    header("Location: reviewer.php");
} elseif (($ac == $ac3 && $pd == $pd3)) {
    $_SESSION["login"] = "yes";
    $_SESSION["type"] = "author";
    $_SESSION["username"] = $ac;
    setcookie("sName", $ac, time() + 86400 * 7); 
    header("Location: author.php");
} else {
    echo "帳密輸入錯誤<br/>5秒後回到首頁重新輸入帳號密碼";
    header("Refresh:5 url=index.php");
}
?>

