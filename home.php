<?php
session_start() ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myweb</title>
</head>
<body>
    <header style="background-color:coral; height:50px;">
    <a href="login.php">เข้าสู่ระบบ</a>
    &nbsp;&nbsp;
    <a href="register.php">สมัครสมาชิก</a>
    </header><?php
    if (isset($_SESSION['uid'])){
        print "Welcome, ". $_SESSION['fullname'];
        print "<a href= 'logout.php'>Logout</a></br>";
    }?>
    <?php
if($_GET['error'] == '1')
print "<br><font color='red'>*Username or Password ไม่ถูกต้อง</font><br>"
?>
    <nav style="display: inline-block; width:200px; background-color:#4dffff;">
    <h1>Menu</h1>
    <a href="#">Menu1</a><br>
    <a href="#">Menu2</a><br>
    <a href="#">Menu3</a><br>
    <a href="#">Menu4</a><br>
    <a href="#">Menu5</a><br>
    </nav>
    <section style="display: inline-block; width:200px; background-color:#4d50ff;">
เนื้อหาเว็บไซต์
</section>

</body>
</html>
