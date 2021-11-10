<?php//this is the test for upload image
	if(isset($_POST['submit']))
{
	//upload Image into database
	$target_path="../file-Upload/";
	$target_path = $target_path.basename($_FILES['userfile']['name']);
	if(move_uploaded_file($_FILES['userfile']['tmp_name'], $target_path))
	{
		$conn = mysqli_connect("localhost","root","","login");
		$sqlImg = "INSERT into upload_image(path) values ('".$target_path."')";
		if($conn->query($sqlImg)==TRUE)
		{
			echo '<p>Succcessfully Added</p>';
		}else
		{
			echo '<p>Failed, Try Again</p>';
			echo 'Error:'.$sqlImg.$conn->error;
		}
		
		
		
		
		//display image 
		$sql1="SELECT path FROM upload_image WHERE path='$target_path' LIMIT 1";
		//this is to select the image which order id in descending order and print out only one image
		
		$result=$conn->query($sql1);
		if($result->num_rows>0)
		{
			while($row = $result->fetch_assoc())
			{
				$path = $row['path'];
				echo $path;
				echo '<br><br>';
?>
				<img src="<?php$path;?>" alt="Images" height="500" width="500px">
<?php
			}
		}
		
		
		
	}
}
	
	
	
	
?>