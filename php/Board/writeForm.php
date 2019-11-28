<?php
include $_SERVER['DOCUMENT_ROOT'].'/php/Board/common/session.php';
include $_SERVER['DOCUMENT_ROOT'] . '/php/Board/common/checkSession.php';
?>
<!doctype html>
<html>
<head>
</head>
<body>
<form name="boardWrite" method="post" action="./saveBoard.php">
    제목
    <br>
    <br>
    <input type="text" name="title" required/>
    <br>
    <br>
    내용
    <br>
    <br>
    <textarea name="contents" cols="80" rows="10" required></textarea>
    <br>
    <br>
    <input type="submit" value="저장" />
</form>
</body>
</html>