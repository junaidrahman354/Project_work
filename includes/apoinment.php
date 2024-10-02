
<?php
    if(isset($_SESSION['user_id'])){
      ?>
<?php
  require_once __DIR__ . "/../connection.php";
  // $created_review = 0;
  

  if(
    isset($_POST['app-btn']) &&
    !empty($_POST['app-btn']) &&
    !empty($_POST['times']) &&
    !empty($_POST['dates']) &&
    !empty($_POST['location']) &&
    !empty($_POST['comments'])
  ){
    $uid = $_SESSION['user_id'];
    $times = $_POST['times'];
    $dates = $_POST['dates'];
    $location = $_POST['location'];
    $comments = $_POST['comments'];

    $sql = "INSERT INTO driving_apponimnet(`user_id`,  `dates`,`times`, `location`, `comments`) VALUES ($uid,  '$dates','$times', '$locaton', '$comments')";

    if(mysqli_query($con, $sql)){
      $_SESSION['error'] = error('success', 'Driving test appoinment successfully Added.');
      header("location:profile.php");
      // echo "hyy";
    // } else $created_review = -1;
    }
    else{ echo mysqli_error($con);
      die($sql);
    }

  }
}
?>