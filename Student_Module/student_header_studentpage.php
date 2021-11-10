<!--Student Page-->
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>student_page</title>
	<!----Link to the Header and Footer CSS File---->
	<link rel="stylesheet" href="css/student_header_footer.css">
	<link rel="stylesheet" href="css/student_material.css">
</head>

<body>
<!------Header of the page------>
<header class="head-container">
<div class="logo-box">
	<a><img src="../img/raisehand.png" alt="raisehand"></a>
</div>
<div class="page-title"><h1>Student</h1></div>
</header>

<div class="big-container">
<!------Left Navigation Bar of the page------>
<div class="left-bar">
<nav class="navtag">
	<ul id="menulist" class="menulist">
		<li class="barlist"><a href="student_Home.php">Home</a></li> 
		<li class="barlist"><a href="student_page.php">Student</a></li> 
		<li class="barlist"><a href="" id="btn" onclick="disabledBtn()">Teacher</a></li> 
		<li class="barlist"><a href="student_profile.php">Profile</a></li>
		<li class="barlist"><a href="../Login_Module/logout.php">Logout</a></li>
	</ul>
</nav>
</div>


<script>

function disabledBtn()
{
	document.getElementById("btn").disabled = true;
	alert("You are NOT ALLOWED to go this Page");
}
</script>