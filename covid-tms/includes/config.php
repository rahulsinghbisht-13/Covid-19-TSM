<?php
//time zone - Indian
date_default_timezone_set('Asia/Kolkata');
//database connection
//  data base name - covidtmsdb
$con=mysqli_connect("localhost","root","","covidtmsdb");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

  ?>
