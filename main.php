<?php include "home.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/home.css">
    
</head>
<body>
    <div class="vbody">
        <h3>Welcome <?php echo $_SESSION["username"]; ?></h3>
        <pre>
            This is dev code, feel free to send PR to <a href="https://github.com/anir0y/projectzero">GitHub</a>


        </pre>



    </div>
</body>
</html>

<?php include("footer.php"); ?>
