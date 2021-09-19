<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
<h1>เข้าสู่ระบบ</h1>
<form action="dologin.php" method="post">
Username<br/><input type="text" name="username" size="20" required/><br/><br/>
Password<br/><input type="passwd" name="passwd" size="20" required/><br/><br/>
<button type="submit">Login</button>
<ins><a href="register.php">สมัครสมาชิก</a></ins>
</form>
<?php
if($_GET['error'] == '1')
print "<font color='red'>*Username or Password ไม่ถูกต้อง</font>"
?>
</center>
</body>
</html>