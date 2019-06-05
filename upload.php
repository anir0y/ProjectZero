<DOCTYPE HTML>
<html>
<head>
<title>Inscure Upload</title>
</head>
<body>
<?php include "home.php" ; ?>
<div class=fupload>
<center>
<h1>Upload your Secret!</h1>
  <form enctype="multipart/form-data" action="upload.php" method="POST">
    <p>Upload your file</p>
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input>
  </form>
<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name'])." has been uploaded" ;
      echo "<br> <a href='/uploads/'>See your File here</a>";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>
</center></div>
</body>
</html>
<? include "footer.php"; ?>
