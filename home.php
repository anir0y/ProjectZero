<?php
ob_start();
session_start();
require_once("db_config.php");
include("header.php");

if (!$_SESSION["username"]){
	header('Location:login.php?msg=1');
}
ini_set('display_errors', 1);
?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="css/htmlstyles.css" rel="stylesheet">
</head>

<body>
		<div class="jumbotron">
		<p class="lead" style="color:white">
		Welcome <?php echo $_SESSION["username"]; ?> <a href="logout.php" class="button">Logout</a>
		<br></div>

<section>
<nav>
<ul>
<li><a href="main.php" style="color:white" >HOME</a>: &#127968;</li><p></p>
<li><a href="xss.php" style="color:white" >XSS</a><i>: Reflected XSS</i></li><p></p>
<li><a href="xss2.php#Arishti" style="color:white" >XSS</a><i>: D3V</i></li><p></p>
<li><a href="upload.php" style="color:white" >Insecure File Upload:</a><i>: Easy Challange</i></li><p></p>
<li><a href="productmgr.php" style="color:white" >Product Manager</a><i>: FBCTF Challange</i></li><p></p>
</div>
</ul>
</nav>
</body>
</html>
<? include "footer.php"; ?>
