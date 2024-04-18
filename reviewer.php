<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="reviewer" content="width=device-width, initial-scale=1.0">
    <title>reviewer</title>
</head>
<body>
<form action="showreview.php" method="post">
        <fieldset>
        <a name="#top"></a>
                    <h1>Reviewer您好，歡迎進入論文評論網頁</h1>
            <legend>論文評審決定:</legend>
            <input type="radio" name="chose" value="c1" checked="True"/>Accept
            <input type="radio" name="chose" value="c2" />Minor Revision
            <input type="radio" name="chose" value="c3" />Major Revision
            <input type="radio" name="chose" value="c4" />Reject
<br/>
論文評論評語: <textarea name="Address" rows="20" cols="50">
</textarea><br/>    </form>
<br>
<input type="submit" value="提交">
    <?php
        unset($_SESSION["check"]);
        echo "<br><a href='logout.php'>登出</a>
</body>
</html>