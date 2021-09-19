<?php
$link= mysqli_connect("localhost","root","12345678","myweb") 
or die(mysqli_error($link));
mysqli_query($link, "SET NAMES utf8");
date_default_timezone_set("Asia/Bangkok");

$username = $_POST['username'];
$passwd = $_POST['passwd'];
$fullname = $_POST['fullname'];
$sex = $_POST['sex'];

$username = mysqli_real_escape_string($link, $username);
$passwd = mysqli_real_escape_string($link, $passwd);
$fullname = mysqli_real_escape_string($link, $fullname);


$sql = "INSERT INTO account SET
    username ='$username',
    passwd = '$passwd',
    fullname = '$fullname',
    sex = '$sex',
    apply_date = NOW();";
mysqli_query($link, $sql) or die(mysqli_error($link));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2?>สมัครสมาชิกเรียบร้อยแล้ว</h2>
    <a href="login.php">เข้าสู่ระบบ</a>
</body>
</html>