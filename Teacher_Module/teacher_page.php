<?php session_start();?>
<?php 
include 'teacher_header.php';
$conn = mysqli_connect("localhost","root","","login");


?>

<!------content of the page------>
<div class="material-title">
	<h2>Generate Attendance ID</h2>
	<div class="codeGenerator">
	<?php
	if(isset($_POST['generateCode']))//if the generate button is click
	{//it will run this code which lay inside
	
	$randomCode = substr(sha1('someString'.date('Ymd')),0,5);//this code will save in one day
	$_SESSION['code'] = $randomCode;
	echo '<div class="codeShow">'.$randomCode.'</div>';
	}
	?>
	<form class="codeGeneratorForm" method="POST">
		<input class="codeGeneratorBtn" type="submit" name="generateCode" value="Generate Code"/>
	</form>
	</div>
	
		
		
	<div class="formUpload">
<?php
	
	//insert image into database
	//the image is not in the folder of file-Upload
	if(isset($_POST['submit']))
	{
		$file = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
		$query = "INSERT into tbl_image(name) VALUES ('$file')";
		if(mysqli_query($conn,$query))
		{
			echo '<script>alert("Image Inserted into Database")</script>';
		}
		else{echo 'Failed';}
	}
	
	
	//display image
	$query1 ="SELECT name FROM tbl_image ORDER by id DESC LIMIT 1";
	$result = mysqli_query($conn,$query1);
	while($row = mysqli_fetch_array($result))
	{
		echo '<img class="phpImage" src="data:image/jpeg;base64,'.base64_encode($row['name']).'" alt="Images" style="width:300px; height:250px;">';
	}
?>
<form class="uploadForm" method="POST" enctype="multipart/form-data">
	<label>Upload Exam Time Table</label>
	<input type="file" name="userfile" id="image"/>
	<input type="submit" name="submit" id="submit" value="Upload"/>
</form>
	</div>
	
	<br/>
	
	<div class="linktoAttendance">
	<a href="teacher_check_student.php">Check Student Attendance</a>
	</div>
	
</div>

</div>
<?php include 'teacher_footer.php';?>




<!--script>
function generateCode(length) {
    var chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    var pass = "";
    for (var x = 0; x < length; x++) {
        var i = Math.floor(Math.random() * chars.length);
        pass += chars.charAt(i);
    }
	document.getElementById("codeDisplay").innerHTML = pass;
}
</script-->

