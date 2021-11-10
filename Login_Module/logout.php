<?php
session_start();

setcookie(session_name(),"",time()-3600);

session_destroy();

//after seesion destroy, always redirect user back to home page
header('Location: index.php');
?>