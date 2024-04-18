<?php
session_start();
?>

<meta charset = "utf-8">

<html>
<?php

echo "登入失敗"."<br/>";
echo "3秒後回登入畫面";
header("Refresh:3;url=index.php");
$_SESSION["check"] ="No";

?>
</html>