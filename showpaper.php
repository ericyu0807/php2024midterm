
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    session_start();
    
    if(!isset($_SESSION["login"]) || $_SESSION["login"] !== "yes") {
        header("Location: index.php");
        exit;
    }
    
    echo "<p>您好，{$_SESSION['username']}，<a href='logout.php'>登出</a></p>";
    ?>
    
    <h1>Author您好，歡迎進入論文投稿網頁</h1>
        論文評審決定:
        論文標題: <br/><input type="text" name="sAName" value="" required><br/>
        作者姓名: <input type="text" name="sAuName" required><br/>
        作者Email:<input type="text" name="sAuAdd" required>
        <br/>    
        論文摘要:<textarea name="sComment" rows="10" cols="50"></textarea>
        <br/>
        <input type="submit" value="提交">
    </form>
</body>
</html>

