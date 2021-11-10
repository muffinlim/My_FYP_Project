<?php session_start();?>
<?php include 'admin_header_profile.php';


?>

<!------Content of the page------>
<div class="material-title">
	<form class="nameForm" method="POST" action="edit_name_post.php">
	<h2>Enter a new Name</h2>


	<?php if(isset($_REQUEST['error'])){?>
	<div class="showerrormsg">
	<span class="errorMsg" style="display: block"><?php echo $_REQUEST['error'];?></span>
	</div>
	<?php } ?>


	<div class="font">Enter Your New Name:</div>
	<input type="text" name="newName">


	<div class="font3">
	<input type="submit" name="newNameBtn" value="Change Name">
	</div>
	
	</form>
</div>

</div>
<?php include 'footer.php';?>