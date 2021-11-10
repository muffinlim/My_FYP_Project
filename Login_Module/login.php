

<?php
session_start();
$conn = mysqli_connect("localhost","root","","login");

if(isset($_POST['username'])) //check got enter or not
{
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql="SELECT * FROM users WHERE username ='".$username."'AND password='".$password."'";
	
	$result = mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)==1)//user found
	{ 
		$data = mysqli_fetch_assoc($result);
		$_SESSION['user_data'] = $data;
		
		// check if user is admin or user
		if($data['user_type']== 0 ) //for admin 
		{
			$_SESSION['username'] = $_SESSION['user_data'];
			header('Location:../Admin_Module/admin_home.php');
			
		}
		else if($data['user_type']== 1)//for teacher
		{ 
			$_SESSION['username'] = $_SESSION['user_data'];
			header('Location:../Teacher_Module/teacher_page.php');		
			
		}
		else if($data['user_type']== 2)//for student
		{	
			$_SESSION['username'] = $_SESSION['user_data'];
			header('Location:../Student_Module/student_home.php');
			
		}
	}else //username or password wrong ,cant find
	{
		header('Location:index.php?error=Invalid Login Details');
	}
		
}

?>