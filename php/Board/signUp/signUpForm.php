<!doctype html>
<html>
<head>
    <title>회원가입폼 만들기</title>
</head>
<body>
<h1>회원가입</h1>
<form name="signUp" method="post" action="./signUpSave.php">
    이메일<br>
    <input type="email" name="userEmail" required/>
    <br>
    <br>
    닉네임<br>
    <input type="text" name="userNickName" required/>
    <br>
    <br>
    비밀번호<br>
    <input type="password" name="userPw" required/>
    <br>
    <br>
    생일<br>
    <select name="birthYear" required>
        <?php
        $thisYear = date('Y', time());

        for($i = $thisYear; $i >= 1950; $i--){
            echo "<option value='{$i}'>{$i}</option>";
        }
        ?>
    </select>년
    <select name="birthMonth" required>
        <?php
        for($i = 1; $i <= 12; $i++){
            echo "<option value='{$i}'>{$i}</option>";
        }
        ?>
    </select>월
    <select name="birthDay" required>
        <?php
        for($i = 1; $i <= 31; $i++){
            echo "<option value='{$i}'>{$i}</option>";
        }
        ?>
    </select>일
    <br>
    <br>
    <input type="submit" value="가입하기"/>
</form>
</body>
</html>