<?php
    // $hostname = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "passvery_driving_school";

    // $conn = mysqli_connect($hostname, $username, $password, $dbname);
// 	$conn = mysqli_connect("localhost", "ds_new_user", "!NewPassword@22", "ds_new");
	$con = mysqli_connect("localhost", "passvery_ds_new_user", "!NewPassword@22", "passvery_ds_new");
    if(!$conn){
      echo "Database connection error".mysqli_connect_error();
    }
  // include_once ".././conection.php"
?>
