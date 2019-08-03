<?php
// init
$con = new mysqli("localhost", "gh0st", "gh0st", "dbs");
if ($con->connect_error){
  die("connection failed: ".$con->connect_error);
}
