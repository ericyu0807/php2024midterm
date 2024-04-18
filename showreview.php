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
    
    <h1>Reviewer您好，歡迎進入論文評論網頁</h1>
    <form action="#" method="post">
        論文評審決定:
        <input type="checkbox" name="sdec[]" value="Accept">Accept
        <input type="checkbox" name="sdec[]" value="Minor Revision" >Minor Revision
        <input type="checkbox" name="sdec[]" value="Major Revision">Major Revision
        <input type="checkbox" name="sdec[]" value="Reject">Reject
        <br/>    
        請輸入意見:<textarea name="sComment" rows="10" cols="50"></textarea>
        <br/>
        <input type="submit" value="提交">
    </form>
</body>
</html>
