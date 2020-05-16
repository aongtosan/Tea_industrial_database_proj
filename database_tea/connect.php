<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db_name = "tea_industrial_v2";
  // Create connection\
  $con = new mysqli($servername,$username,$password,$db_name);
  if($con->connect_error) die("connection fail");
  ?>