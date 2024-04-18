<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>表單輸入</title>
</head>
<body>
    <h1>高大資管論文投稿系統</h1>
    <form action="check.php" method="post">
        請選擇您的角色:
        <select name="sChar">
            <option value="Chair">Chair</option>
            <option value="Reviewer">Reviewer</option>
            <option value="Author">Author</option>
        </select>
        <br/>    
        帳號: <input type="text" name="sName" value="<?php echo isset($_COOKIE['sName']) ? $_COOKIE['sName'] : ''; ?>" placeholder="請輸入帳號" required><br/>
        密碼: <input type="password" name="sPWD" placeholder="請輸入密碼" required><br/>
        <input type="submit" value="提交"><br/>
    </form>
</body>
</html>
