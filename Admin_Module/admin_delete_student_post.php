<?php //delete student from the database and the table
session_start();
$conn = mysqli_connect("localhost","root","","login");

$qrdlt = mysqli_query($conn,"DELETE FROM users WHERE id='".$_GET["id"]."' ");

if($qrdlt){
	header('Location:admin_add_students.php?success=Delete Successfully');
}else{
	echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>