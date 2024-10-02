

<?php
  require_once __DIR__ . "/../connection.php";
  $user_id = $_SESSION['user_id'];

    if(isset($_SESSION['user_id'])){
  $select = "select * from user_registration where id = '$user_id'";
  $res = mysqli_query($con, $select);
  $current_user = mysqli_fetch_array($res);

      ?>
<?php 
    if(isset($_POST['pick_btn'])){
        extract($_POST);

        foreach([
          "update user_registration set email = '$email', first_name = '$first_name', last_name = '$last_name', address = '$address', city = '$city', postcode = '$postcode', country = '$country', phone = '$phone',pick_address = '$pick_address', pick_city = '$pick_city', pick_postcode = '$pick_postcode',drop_address = '$drop_address', drop_city = '$drop_city', drop_postcode = '$drop_postcode',cmnts = '$cmnts' where id = '".$current_user['id']."'",
          // "update user_registration set  where id = '".$current_user['id']."'",
          // "update user_registration set  where id = '".$current_user['id']."'",
         "Insert into  test_driving set `user_id`='$user_id',  `ddate`='$ddate',`dtime`='$dtime', `location`='$location', `Comments`='$Comments'",
          "update  test_driving set `user_id`='$user_id',  `ddate`='$ddate',`dtime`='$dtime', `location`='$location', `Comments`='$Comments'",
          
          // "update  test_driving set `user_id`='$user_id',  `ddate`='$ddate',`dtime`='$dtime', `location`='$locaton', `Comments`='$Comments'",
          "update time_table set monday='$monday', tuesday='$tuesday', wednesday='$wednesday', thursday = '$thursday', friday =  '$friday', saturday = '$saturday',sunday='$sunday' where user_id = '".$current_user['id']."'",
          "insert into time_table set  `user_id`='$user_id', monday='$monday', tuesday='$tuesday', wednesday='$wednesday', thursday = '$thursday', friday =  '$friday', saturday = '$saturday',sunday='$sunday'",
        ] as $update) $run = mysqli_query($con, $update);
        // echo $update;

      //   if( "id = '".$current_user['id']."'"){
     
      //   }
      // else{
      // }
      // $run1 = mysqli_query($con, $insert);

        if($run){
            $_SESSION['error'] = error('success', ' updated successfully.');
            header("location:../profile.php");
        }
    // }
    // if(isset($_POST['pick_btn'])){
        // $run = mysqli_query($con, $update);
        // if($run){
        //     $_SESSION['error'] = error('success', 'Drop off Addess update successfully.');
        //     header("location:profile.php");
        }
    // }
  // if(
    // isset($_POST['pick-btn']) &&
    // !empty($_POST['app-btn']) &&
    // !empty($_POST['times']) &&
    // !empty($_POST['dates']) &&
    // !empty($_POST['location']) &&
    // !empty($_POST['comments'])
  // ){


    // if(mysqli_query($con, $sql)){
    //   $_SESSION['error'] = error('success', 'Driving test appoinment successfully Added.');
    //   header("location:profile.php");
    // }
    else{ echo mysqli_error($con);
      die($sql);
    }

  // }
// }


// if(isset($_POST['[pick_btn]'])){
//   $run = mysqli_query($con, $insert);
//         if(!$run){
//             echo mysqli_error($con);
//             // die($insert);
//         }else{
//             $_SESSION['error'] = error('success', 'Progress add successfully.');
//             header("location:profile.php");
// }
}
?>


<?php 

// if(isset($_POST['profile_btn'])){
//     $first_name = $_POST['first_name'];
//     $last_name = $_POST['last_name'];
//     $email = $_POST['email'];
//     $address = $_POST['address'];
//     $city = $_POST['city'];
//     $postcode = $_POST['postcode'];
//     $country = $_POST['country'];
//     $phone = $_POST['phone'];
   
//     // $add = "Insert i"
//     // aval_morning ='$morm''$mort''$morw''$morth''$morf''$mors'$morsn
//     $run = mysqli_query($con, $update);
//     if(!$run){
//         echo mysqli_error($con);
//     }else{
//         $_SESSION['error'] = error('success', 'Personal information updated successfully.');
//         header("location:profile.php");
//     }
// }
?>