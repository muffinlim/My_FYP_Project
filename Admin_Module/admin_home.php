<?php session_start();?>
<?php include 'admin_header_home.php';?>


<!------Right side of the page------>
<!------Content of the page------>
<div class="material-title">
	<h2>Welcome <?php echo $_SESSION['user_data']['name'];?> !</h2>
	<button><a class="add" href="admin_add_students.php">Add new Students</a></button>
	<button><a class="add" href="admin_add_teacher.php">Add new Teachers</a></button>
</div>


	
</div>

<?php include 'footer.php';?>

