

<?php
session_start();
$conn = mysqli_connect("localhost","root","","login");



if($_POST['newpw'] != "" && $_POST['newpw-confirm'] != "") //check got enter or not
{
	if($_POST['newpw'] == $_POST['newpw-confirm'])//if newPW is == to newPW-confirm
	{ //run this
		$firstPW = $_POST['newpw'];
		$secondPW = $_POST['newpw-confirm'];
		$username = $_SESSION['user_pw']['username'];
		
		$sqlnewPW="update users set password ='".$secondPW."' WHERE username='".$username."'";
		$result = mysqli_query($conn,$sqlnewPW);
		
		//echo $secondPW;
		header('Location:index.php?error=Password Change Succesfully');
		
	}
	else
	{
		header('Location:new_PW.php?error=Password Not Same');
	}
	
}else{
		header('Location:new_PW.php?error=Please Enter Password');

}

$conn-> close();
?>