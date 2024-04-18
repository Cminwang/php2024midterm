<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="width=device-width, initial-scale=1.0">
    <title>author</title>
</head>
<body>
    <form action="showpaper.php" method="post"></form>
        <fieldset>
            <a name="#top"></a>
            <h1>Author您好，歡迎進入論文投稿網頁</h1>
    論文標題:<input type="text"name="up"size="15"/><br/>
    作者姓名:<input type="text"name="name"size="15"/><br/>
    作者email:<input type="text"name="email"size="15"/><br/>
<br/>
論文摘要: <textarea name="Address" rows="20" cols="50">
</textarea><br/>    </form>
<br>
<input type="submit" value="提交">
            
    </form>
    <?php
        unset($_SESSION["check"]);
        echo "<br><a href='logout.php'>登出</a>
</body>
</html>