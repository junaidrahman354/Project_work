<?php
    include 'connection.php';

    $user_id = $_SESSION['user_id'];

    $select = "select * from user_registration where id = '$user_id'";
    $res = mysqli_query($con, $select);
    $current_user = mysqli_fetch_array($res);


if(isset($_POST['[pick_btn]'])){
    $monday = $_POST['monday'];
    $tuesday = $_POST['tuesday'];
    $wednesday = $_POST['wednesday'];
    $thursday = $_POST['thursday'];
    $friday = $_POST['friday'];
    $saturday = $_POST['saturday'];
    $sunday = $_POST['sunday'];
    echo $insert = "insert into `time_table` (user_id, monday, tuesday, wednesday, thursday, friday, saturday,sunday) values ('$user_id','$monday', '$tuesday', '$wednesday', '$thursday', '$friday', '$saturday','$sunday')";
    $run = mysqli_query($con, $insert);
          if(!$run){
              echo mysqli_error($con);
              // die($insert);
          }else{
              $_SESSION['error'] = error('success', 'Progress add successfully.');
              header("location:profile.php");
  }
  }
?>