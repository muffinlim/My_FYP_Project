<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>forgetPW_page</title>
	<!----Link to the Header and Footer CSS File---->
	<link rel="stylesheet" href="css/reset_PW.css">
	<link rel="stylesheet" href="css/header_footer.css">

</head>

<body>
<!----Login Module Header---->
<div class="logo-box">
	<a><img src="../img/raisehand.png" alt="raisehand"></a>
</div>

<!-------content of the page------->
	<div class="resetPW-container">
	<form class="resetform" method="POST" action="forgetPW_post.php">
	<h2>Enter to confirm your details</h2>
	<br/>
	
	<?php if(isset($_REQUEST['error'])){?>
	<div class="showerrormsg">
	<span class="errorMsg" style="display: block; color:red; font-size:20px; font-weight: bold;"><?php echo $_REQUEST['error'];?></span>
	</div>
	<?php } ?>
	<br/>
	
	
	<div class="font">Key in Name to confirm:</div>
	<input class="input1" type="text" name="name">

	<div class="font2">Key in Username to confirm:</div>
	<input class="input2" type="text" name="username">

	<div class="font3">
	<input class="input3" type="submit" name="confirmBtn" value="Change New Password">
	</div>
	
	</form>
	</div>


<!-------footer of the page------->
<div class="footer-content">
	<span> ISP Final Year Project - 2021 | Designed by SEGi College Student</span>
</div>
</body>
</html>