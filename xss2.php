<?php include('home.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alert the Damn thing</title>
</head>
<body>
    <script>
        // http://example.com/#welcome
        var name;
        if(location.hash === '#welcome') {
          name = "Arishti"
        }
        document.write(`hello ${name}`)
      </script>
    
</body>
</html>

