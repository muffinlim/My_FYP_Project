

<?php
session_start();
$conn = mysqli_connect("localhost","root","","login");



if(isset($_POST['newName'])) //check got enter or not
{
		$name = $_SESSION['user_data']['name'];
		$newName = $_POST['newName'];

		$sqlnewName="UPDATE users SET name ='".$_POST['newName']."' WHERE name ='".$_POST['newName']."' ";
		$result = mysqli_query($conn,$sqlnewName);
		
		header('Location:admin_profile.php?error=Name Update Succesfully');
	
}else{
		header('Location:admin_profile.php?error=Please Enter Your New Name');

}

$conn-> close();
?>