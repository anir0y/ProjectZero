<?php include('home.php'); ?>
<body>
<div class="xss2" center>
  <h2>Hello, <?php
  if  (isset($_POST['name']) && !empty($_POST['name']))
      echo $_POST['name']; // To Fix This Need's to use htmlspecialchars function
  else
      echo 'User';
  ?>! </h2>
  <div class="container container-fluid">
      <div class="row">
          <div class="col"></div>
          <div class="col">
              <form  method="POST">
                  <label class="sr-only" for="input_name">Input Username:</label>
                  <div class="input-group">
                      <input type="text" class="form-control" name="name" id="input_name" placeholder="Username">
                      <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="submit">Hello!</button>
                      </div>
                  </div>
              </form>
          </div>
          <div class="col"></div>
      </div>
  </div>
<?php include "footer.php"; ?>
