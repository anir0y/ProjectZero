<?php
ob_start();
session_start();
include("db_config.php");
ini_set('display_errors', 1);
?>
<html lang="en">
<head>
	<link href="css/htmlstyles.css" rel="stylesheet">
	<link rel=stylesheet href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Login Page</title>
</head>

<body>
<center>
<section class="header">
    <div class="mask">
        <div class="text-align">
			<div class="loginheader">
			<h1>Login Panel</h1>
			
			
            <form method="POST" autocomplete="off">
			<p style="color:white">
				Username:  <input type="text" id="uid" placeholder="username" name="uid"><br /></br />
				Password: <input type="password" id="pass"placeholder="Password"  name="password">
			</p>
			<br />
			<p>
			<input type="submit" value="Submit"/> 
			<input type="reset" value="Reset"/>
			</p></div>
		</form></center>
        </div>
        <a href="#section" class="section"><i class="fa fa-chevron-circle-down"></i></a>
    </div>
</section>
		</center>
        </div>
    
        
		<br />
		
      <div class="row marketing">
        <div class="col-lg-6">

<?php

if (!empty($_GET['msg'])) {
    echo "<center font style=\"color:#FF0000\">Ohh!Wrong Creds :( .<br\></font\>";
}


if (!empty($_REQUEST['uid'])) {
$username = ($_REQUEST['uid']);
$pass = $_REQUEST['password'];

$q = "SELECT * FROM users where username='".$username."' AND password = '".md5($pass)."'" ;
//echo $q;
	if (!mysqli_query($con,$q))
	{
		die('Error: ' . mysqli_error($con));
	}
	
	$result = mysqli_query($con,$q);
	$row_cnt = mysqli_num_rows($result);

	if ($row_cnt > 0) {
	
	$row = mysqli_fetch_array($result);
	
	if ($row){
	//$_SESSION["id"] = $row[0];
	$_SESSION["username"] = $row[1];
	$_SESSION["name"] = $row[3];
	//ob_clean();
	
	header('Location:home.php');
	}
}
	else{
		echo "<center><font style=\"color:#FF0000\"><br \>Invalid password! <b>Try Harder<b> </font\>";
	}
}

//}
?>
	</div>
	</div>
	</div> 

</body>
</html>
<?php include("footer.php"); ?>
