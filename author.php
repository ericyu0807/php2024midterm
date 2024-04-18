<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    session_start();

    if (!isset($_SESSION["login"]) || $_SESSION["login"] !== "yes" || $_SESSION["type"] !== "author") {
        header("Location: index.php");
        exit; 
    }
    echo "<h1>歡迎~這裡是author頁面</h1>";
    echo "<p>您好，{$_SESSION['username']}，<a href='logout.php'>登出</a></p>";

    echo "<a href='showpaper.php'><button>前往</button></a>";

    ?>
</body>
</html>
