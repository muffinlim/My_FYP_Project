<?php session_start();?>
<?php include 'student_header_home.php';?>


<div class="material-title">
	
	<h2>Attendance Has Been Taken</h2>
	

	<?php if(isset($_REQUEST['success'])){?>
	<div class="showerrormsg">
	<span style="display: block; color:red; font-size:30px; font-weight: bold;"><?php echo $_REQUEST['success'];?></span>
	</div>
	<?php } ?>
	<br/><br/><br/>
	<a class="goHome" href="student_home.php">Go To Home Page</a>
	
	
</div>


</div>
<?php include 'student_footer.php';?>