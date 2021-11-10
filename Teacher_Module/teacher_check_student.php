<?php session_start();
$conn = mysqli_connect("localhost","root","","login");
$data = array();
$subject = $_SESSION['user_data']['subject_ID'];//to get users table's subject id

$qrAttendance = mysqli_query($conn,"SELECT student_ID,name,subject_name,attendance_status FROM users
INNER JOIN tbl_attendance ON users.id=tbl_attendance.student_ID 
INNER JOIN subject ON tbl_attendance.subject_ID=subject.id
WHERE tbl_attendance.subject_ID = '".$subject."' ");

//AND tbl_attendance.attendance_status = 1 

?>

<?php include 'teacher_header.php';?>

<!------content of the page------>
<div class="material-title">
	<h2>Student Attendance Table</h2>
	<div class="teacheraddBtn"><a href="teacher_add_student.php">+Add New Student</a>
	</div>
	<table class="viewStudenttable">
	<caption>0 = Absent   |   1 = Present</caption>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Course</th>
			<th>Attendance</th>
		</tr>
		<?php
			while($row = mysqli_fetch_array($qrAttendance))
			{
		?>
		<tr>
			<td><?php echo $row['student_ID'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['subject_name'];?></td>
			<td><?php echo $row['attendance_status'];?></td>
		</tr>
		<?php 
			}
		?>
		
	</table>
	
</div>

	
<!--Big Container Close Tag-->	
</div>

<?php include 'teacher_footer.php';?>

