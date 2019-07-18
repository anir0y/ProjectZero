<?php include('home.php'); ?>
<body>
<div class="xss2" center>
    <?php

   if(isset($_GET['q'])) {
        $query = $_GET['q'];
            print $query;
        }
     else {
        print '?q=<XSS>';
    }

    ?>
<h2><center>This is a simple XSS challenge! </h2></center>
<p><em>wanna learn more about Cross Site Scripting??</em><p>
<a href="https://brutelogic.com.br/blog/xss101/">click here</a> to learn more about XSS attack!</p> 
</center>



</body>
</html>
<?php include "footer.php"; ?>
