<?php
  require_once __DIR__ . "/../connection.php";
  $created_review = 0;

  if(
    isset($_POST['rew-btn']) &&
    !empty($_POST['rew-btn']) &&
    is_numeric($_POST['review'])
  ){
    $uid = $_SESSION['user_id'];
    $r = $_POST['review'];
    $desc = $_POST['desc'] ?? '';
    $desc = addcslashes($desc, "'");
    $date = date("d , M , Y");

    $sql = "INSERT INTO user_reviews(`user_id`, `review`, `desc` ,`date_review` ) VALUES ($uid, $r, '$desc','{$date}')";

    if(mysqli_query($con, $sql)){
      $created_review = 1;
    } else $created_review = -1;
  }
?>