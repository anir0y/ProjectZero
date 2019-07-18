<?php
// init
$con = new mysqli("mysql", "root", "gh0st", "dbs");
if ($con->connect_error){
  die("connection failed: ".$con->connect_error);
}
