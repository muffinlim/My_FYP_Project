

<?php
session_start();
$conn = mysqli_connect("localhost","root","","login");




if($_POST['name'] != "" && $_POST['username'] != "") //check got enter or not
{
	$username = $_POST['username'];
	$name = $_POST['name'];
	
	$sql="SELECT * FROM users WHERE username ='".$username."'AND name='".$name."'";
	$result = mysqli_query($conn,$sql);
	
		if(mysqli_num_rows($result)==1)//user found
		{
			$pw = mysqli_fetch_assoc($result);
			$_SESSION['user_pw'] = $pw;
			//echo '<script>alert("User Found")</script>';
			header('Location:new_PW.php');

		}
		else //username or name wrong ,cant find
		{
			header('Location:forget_password.php?error=Invalid User Details');
		}
	
}else{
		header('Location:forget_password.php?error=Please Enter Your Details');

}


?>