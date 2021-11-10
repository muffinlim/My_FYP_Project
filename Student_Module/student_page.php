<?php session_start();?>
<?php include 'student_header_studentpage.php';?>
<?php
$conn = mysqli_connect("localhost","root","","login");
$courseID = $_SESSION['user_data']['subject_ID'];
$stuID = $_SESSION['user_data']['id'];

//count how many attendance for this specific student
$totalAttend = mysqli_query($conn,"SELECT COUNT(attendance_ID) FROM tbl_attendance WHERE attendance_status='1' AND subject_ID ='".$courseID."' AND student_ID ='".$stuID."' ");

//count total registration of this student
$total = mysqli_query($conn,"SELECT COUNT(attendance_ID) FROM tbl_attendance WHERE subject_ID ='".$courseID."' AND student_ID ='".$stuID."'");


$resultAttend = mysqli_fetch_array($totalAttend);
$result = mysqli_fetch_array($total);

?>

<!------content of the page------>
<div class="material-title">
	<h2>Hi <?php echo $_SESSION['user_data']['name'];?> </h2>
	
	<table class="rateAttendance" style="margin-top:30px;">
	<tr>
		<th>Attendance Rate</th>
		<th>Eligibility for Examination</th>
	</tr>
	
	<tr>
		<td><?php echo cal_percentage($resultAttend[0], $result[0]).'%'; ?></td>
		<td><?php if(cal_percentage($resultAttend[0], $result[0])>=80)
			{ echo "U Can Go For Exam";}
			else { echo "U Can't Take Exam";}?>
		</td>
	</tr>
	
	</table>
	
	<table class="checkExamTable">
	<tr>
		<td>
			<a class="clickLink" href="exam_timetable_page.php">Check Exam Time Table</a>
		</td>
	</tr>
	<tr>
		<td>
			<a class="clickLink" href="http://onlineresult.segi.edu.my/ss/login.php">Check Exam Result</a>
		</td>
	</tr>
	
	</table>
</div>

</div>

<?php include 'student_footer.php';?>

<?php
 function cal_percentage($num_amount, $num_total) {
  $count1 = $num_amount / $num_total;
  $count2 = $count1 * 100;
  $count = number_format($count2, 0);
  return $count;
}


?>