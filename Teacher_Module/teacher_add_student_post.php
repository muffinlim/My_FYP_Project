<?php 
session_start();
$conn = mysqli_connect("localhost","root","","login");

$name = mysqli_real_escape_string($conn,$_REQUEST['name']);
$username = mysqli_real_escape_string($conn,$_REQUEST['username']);
$password = mysqli_real_escape_string($conn,$_REQUEST['password']);
$qr = mysqli_query($conn,"INSERT into users(name,username,password,user_type,subject_ID) values('".$name."','".$username."','".$password."','2','".$_POST['subject_ID']."')");

if($qr){
	header('Location:teacher_add_student.php?success=Added Successfully');
}else{
	header('Location:teacher_add_student.php?error=Failed to add Student');
}

?>