<?php
// init
$con = new mysqli("localhost", "arishti", "~xn*Kv!2pc{TY!tV", "arishtidb");
if ($con->connect_error){
  die("connection failed: ".$con->connect_error);
}
