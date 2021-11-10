<?php session_start();?>
<?php 
include 'student_header_profile.php';


$conn = mysqli_connect("localhost","root","","login");
$courseID = $_SESSION['user_data']['subject_ID'];

if(isset($_POST['update']))// check the button is pressed or not
{
	$updateQR = "UPDATE users SET name='".$_POST['changeName']."', username='".$_POST['changeUsername']."', password='".$_POST['changePassword']."' WHERE name ='".$_POST['hidden']."' ";
	mysqli_query($conn,$updateQR);
}


$result = mysqli_query($conn,"SELECT * FROM users WHERE id = '".$_SESSION['user_data']['id']."'");
$qrCourseName = mysqli_query($conn,"SELECT * FROM subject WHERE id = '".$courseID."'");
while($row = mysqli_fetch_array($result)){
?>

<!------Content of the page------>
<div class="material-title">
	<h2><?php echo $row['name']?></h2>
	
	
	<table class="profile">
	
	<form class="update_form" action="student_profile.php" method="POST">
		<tr>
			<th>Name : </th>
			<td><input class="txtbox" type="text" name="changeName" value="<?php echo $row['name']?>"></td>
		</tr>
		<tr>
			<th>Username : </th>
			<td><input class="txtbox" type="text" name="changeUsername" value="<?php echo $row['username']?>"></td>
		</tr>
		<tr>
			<th>Password : </th>
			<td><input class="txtbox" type="password" name="changePassword" value="<?php echo $row['password']?>"></td>
		</tr>
		<tr>
			<th>Course : </th>
			<td><p><?php while($row2 = mysqli_fetch_array($qrCourseName)){echo $row2['subject_Name'];}?></p></td>
		</tr>
		<tr>
			<td><input type="hidden" name="hidden" value="<?php echo $row['name']?>"></td>
			<td><input class="upDateBtn" type="submit" name = "update" value="Update Profile"></td>
		</tr>
	</form>
	<?php } ?>
	</table>
</div>


</div>

<?php include 'student_footer.php';?>  







