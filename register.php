<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
</head>
<body>
<div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="do_register.php">
  	  Username <input type="text" name="username" size="20" placeholder="ใส่ชื่อบัญชี" required><br>
    	Password <input type="password" name="passwd" size="20" required>
      <div class="input-group">
  	  <label>ชื่อ-สกุล</label>
  	  <input type="text" name="fullname" size="50" required>
      </div>
      <select name="sex" id="sex" required> 
<option value=" ">เพศ</option>
<option value="ชาย">ชาย</option>
<option value="หญิง">หญิง</option>
</select></br>
        <button type="submit">Register</button>
      </div>
  	<p>
  		มีบัญชีอยู่แล้ว? <a href="login.php">เข้าสู่ระบบ</a>
  	</p>
  </form>
</body>
</html>