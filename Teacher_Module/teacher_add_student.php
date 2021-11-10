<?php session_start();

$conn = mysqli_connect("localhost","root","","login");

$result = mysqli_query($conn,"SELECT * FROM users WHERE user_type='2'"); //usertype 2 is student

?>
<?php include 'teacher_header.php';?>




<!------content of the page------>

<div class="material-title">
<h2>Add New Student</h2>
<span class="makeAlltogether">
<table id="tblstudent" class="addStudentstable">
		<tr>
			<th>Name</th>
			<th>Username</th>
			<th>Password</th>
			<th>Course</th>
			<th>Action</th>
		</tr>
		<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
		?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['username'];?></td>
			<td><?php echo $row['password'];?></td>
			<td><?php echo $row['subject_ID'];?></td>
			<td><a class="dltBtn" href="teacher_delete_student_post.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
		</tr>
		<?php 
			$i++;
			}
		?>
		
</table>

<form class="adduserform" method="POST" action="teacher_add_student_post.php">

<?php if(isset($_REQUEST['error'])){?>
	<div class="showerrormsg">
	<span style="display: block; color:red; font-size:20px; font-weight: bold;"><?php echo $_REQUEST['error'];?></span>
	</div>
<?php } ?>

<?php if(isset($_REQUEST['success'])){?>
	<div class="showerrormsg">
	<span style="display: block; color:red; font-size:20px; font-weight: bold;"><?php echo $_REQUEST['success'];?></span>
	</div>
	<?php } ?>


	<div class="name">Name:</div>
	<input class="input1" type="text" name="name" id="name" placeholder="Name" required="required">
	
	<div class="userName">Username:</div>
	<input class="input1" type="text" name="username" id="username" placeholder="Username" required="required">

	<div class="passWord">Password:</div>
	<input class="input1" type="password" name="password" id="password" placeholder="Password" required="required">
	
	<div class="course"><label for="c"> Courses : </label>
	<select name="subject_ID" id="subject_ID">
		<option value="1">1  |  IT2020</option>
		<option value="2">2  |  CA2020</option>
		<option value="3">3  |  BS2020</option>
		<option value="4">4  |  EN2020</option>
	</select>
	</div>
	<div class="font">
	<input class="addBtn" type="submit" value=" Add ">
	</div>
</form>
</span>	
	

</div>
	

	
<!--Big Container Close Tag-->	
</div>

<?php include 'teacher_footer.php';?>


<!--Choose student and show in input box-->
<script>

var tblstudent = document.getElementById('tblstudent');
//var rIndex;

for(var i=1; i < tblstudent.rows.length; i++)
{
	tblstudent.rows[i].onclick = function()
	{
		//rIndex = this.rowIndex;
		document.getElementById('name').value = this.cells[0].innerHTML;
		document.getElementById('username').value = this.cells[1].innerHTML;
		document.getElementById('password').value = this.cells[2].innerHTML;
		document.getElementById('subject_ID').value = this.cells[3].innerHTML;
	}
}

</script>