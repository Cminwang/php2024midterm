<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="showsystem" content="width=device-width, initial-scale=1.0">
    <title>高大資管論文投稿系統</title>
</head>
<body>
    <form action="check.php" method="post">
        <fieldset>
                <a name="#top"></a>
                    <h1>高大資管論文投稿系統</h1>
            <legend>請選擇你的角色:</legend>
            <select name="charactors">
                <option value="Chair" selected="True">Chair</option>
                <option value="Reviewer">Reviewer</option>
                <option value="Author">Author</option>
            </select>
            <br/>
            <label for="account">帳號:</label>
            <input type="text" name="account" id="account" placeholder="輸入帳號">
            <br>
            <label for="pwd">密碼:</label>
            <input type="password" name="pwd" id="pwd" placeholder="請輸入密碼">
        </fieldset>
        <br>
        <input type="submit" value="提交">
    </form>
    <?php
    if(isset($_COOKIE["account"])){
        $account = $COOKIE["account"];}
        else{$date = strtotime("+7 days", time());
        setcookie("account", $account, $date);
        } ?>
</body>
</html>