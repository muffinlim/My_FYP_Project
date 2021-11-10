
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login_page</title>
	<!----Link to the Header and Footer CSS File---->
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/header_footer.css">
</head>

<body>
<!--Login Module Header-->
	<div class="logo-box">
	<a><img src="../img/raisehand.png" alt="raisehand"></a>
	</div>

<!-------content of the page------->
	<div class="login-container">
	<form class="loginform" method="POST" action="login.php">
	<h2>Student Attendance Self Registration System</h2>
	
	<?php if(isset($_REQUEST['error'])){?>
	<div class="showerrormsg">
	<span class="errorMsg" style="display:block; color:red; font-size:20px; font-weight: bold;"><?php echo $_REQUEST['error'];?></span>
	</div>
	<?php } ?>
	
	
	
	<div class="font">Username:</div>
	<input class="nameInput" type="text" name="username">

	<div class="font2">Password:</div>
	<input class="pwInput" type="password" name="password">
	
	<div class="font3">
	<input class="logInput" type="submit" value="Log In">
	</div>
		
	<h4>Forget Password ?<a  class="linkforgetpassword" href="forget_password.php">click here</a> </h4>

	</form>
	</div>
<!-------footer of the page------->
<div class="footer-content">
	<span> ISP Final Year Project - 2021 | Designed by SEGi College Student</span>
</div>
</body>
</html>