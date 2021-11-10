<?php session_start();
$conn = mysqli_connect("localhost","root","","login");


$courseID = $_SESSION['user_data']['subject_ID']; //get the Course ID and change to name
$qrCourseName = mysqli_query($conn,"SELECT * FROM subject WHERE id = '".$courseID."'");

?>


<?php include 'student_header_home.php';?>

<!------content of the page------>
<div class="material-title">
	<h2>Select Your Specific Courses</h2>
	
	<table class="showcourse">
	<?php 
		while($row2 = mysqli_fetch_array($qrCourseName)){
	?>
	<tr>
		<td><a class="courseName" href="student_attendance_register.php"><?php echo $row2['subject_Name'];?></a></td>
	</tr>
	<?php } ?>
	
	</table>
</div>

</div>

<?php include 'student_footer.php';?>

