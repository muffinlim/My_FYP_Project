<?php session_start();?>
<?php include 'student_header_home.php';?>


<div class="material-title">
	<h2>Enter Code to take Attendance</h2>
	
	<?php if(isset($_REQUEST['error'])){?>
	<div class="showerrormsg">
	<span style="display: block; color:red; font-size:20px; font-weight: bold;"><?php echo $_REQUEST['error'];?></span>
	</div>
	<?php } ?>
	
	
	<form class="codeRegister" action="student_attendance_register_post.php" method="post">
	<input class="codeBox" type="text" name="enteredCode" Placeholder="Enter Code">
	<br/>
	<a class="cancelBtn" href="student_home.php">Cancel</a>
	<input class="submitBtn" type="submit">
	</form>
</div>


</div>


<?php include 'student_footer.php';?>