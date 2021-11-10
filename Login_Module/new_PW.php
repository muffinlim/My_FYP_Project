<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>newPW_page</title>
	<!----Link to the Header and Footer CSS File---->
	<link rel="stylesheet" href="css/new_PW.css">
	<link rel="stylesheet" href="css/header_footer.css">

</head>

<body>
<!----Login Module Header---->
<div class="logo-box">
	<a><img src="../img/raisehand.png" alt="raisehand"></a>
</div>

<!-------content of the page------->
	<div class="newPW-container">
	<form class="pwform" method="POST" action="newPW_post.php">
	<h2>Enter a new Password</h2>
	<br/>
	<?php if(isset($_REQUEST['error'])){?>
	<div class="showerrormsg">
	<span class="errorMsg" style="display: block; color:red; font-size:20px; font-weight: bold;"><?php echo $_REQUEST['error'];?></span>
	</div>
	<?php } ?>
	<br/>

	<div class="font">Enter Your New Password:</div>
	<input class="pw1" type="password" name="newpw">

	<div class="font2">Enter to confirm again:</div>
	<input class="pw2"type="password" name="newpw-confirm">

	<div class="font3">
	<input class="pwChange" type="submit" name="newPWbtn" value="Change New Password">
	</div>
	
	</form>
	</div>


<!-------footer of the page------->
<div class="footer-content">
	<span> ISP Final Year Project - 2021 | Designed by SEGi College Student</span>
</div>
</body>
</html>


