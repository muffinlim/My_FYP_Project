<?php 
session_start();
$conn = mysqli_connect("localhost","root","","login");

$enteredCode = $_POST["enteredCode"];
$teacherCode = $_SESSION['code'];//this code must let teacher login first
//if teacher logout, there will be error


$id = $_SESSION['user_data']['id'];//get user table's id
$status = 1; // 0=Absent  //1=Present
$subject = $_SESSION['user_data']['subject_ID'];//get user table's subject_ID //value is 1 , 2 , 3, 4


if(isset($_POST['enteredCode']))//check whether the text box is entered or not
{
	if($enteredCode == $teacherCode){
		$qr = mysqli_query($conn,"INSERT into tbl_attendance(student_ID,attendance_status,subject_ID) values('".$id."','".$status."','".$subject."')");

		if($qr){
			header('Location:attendance_confirmed.php?success=Attendance Taken Successfully');
		}else{
			header('Location:student_attendance_register.php?error=Failed to Take Attendance');
		}
	}else{
		header('Location:student_attendance_register.php?error=Please Enter a Correct Code');
	}
}else{
	header('Location:student_attendance_register.php?error=Cannot Be Blank');
}
?>