
			<?php 

    include 'connection.php';

    $user_id = $_SESSION['user_id'];

    $select = "select * from user_registration where id = '$user_id'";
    $res = mysqli_query($con, $select);
    $current_user = mysqli_fetch_array($res);

if(isset($_POST['app_btn'])){
    $ddate = $_POST['ddate'];
    $dtime = $_POST['dtime'];
    $location = $_POST['location'];
    $Comments = $_POST['Comments'];
   

    $insert = "insert into `test_driving` (user_id,ddate, dtime, location, Comments) values ('$user_id','$ddate', '$dtime', '$location', '$Comments')";
  $run = mysqli_query($con, $insert);
    if(!$run){
        echo mysqli_error($con);
    }else{
        $_SESSION['error'] = error('success', 'Personal information updated successfully.');
        header("location:profile.php");
    }
}
?>