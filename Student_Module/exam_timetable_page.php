<?php session_start();?>
<?php include 'student_header_studentpage.php';
	$conn = mysqli_connect("localhost","root","","login");
?>


<!------content of the page------>
<div class="material-title">
<h2>View Your Exam Time Table</h2>
<?php
//display image
	$query ="SELECT name FROM tbl_image ORDER by id DESC LIMIT 1";
	$result = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($result))
	{
		echo '<img class="phpImage" src="data:image/jpeg;base64,'.base64_encode($row['name']).'" alt="Images" style="width:550px; height:350px;">';
	}
?>
</div>



</div>
<?php include 'student_footer.php';?>