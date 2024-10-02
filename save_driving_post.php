<?php 
if(isset($_POST['save'])){
   include "connection.php";

if(isset($_FILES['licence_front_pic'])){
   $error = array();
   $file_name = $_FILES['licence_front_pic']['name'];
   $file_size = $_FILES['licence_front_pic']['size'];
   $file_tmp = $_FILES['licence_front_pic']['tmp_name'];
   $file_type = $_FILES['licence_front_pic']['type']; 

   $file_ext = strtolower(end(explode('.',$file_name)));
   $extension = array("jpg","jpeg","png");
   if(in_array($file_ext,$extension) === false){
      $error[] = "This Extension file is not allowed, Please choose a JPG or PNG file.";
   }
//    if($file_size > 2057152){
//       $error[] = "File size must 2MB or lower!";
//    }
   // $new_name = time() . "-" . basename($file_name);
   $target = "admin/img/". $file_name;
   if(empty($error) === true){
      move_uploaded_file($file_tmp,$target);
     
   }else{
    echo "Only Images allowed";
      die();
   }
}

if(isset($_FILES['licence_back_pic'])){
   $error2 = array();
   $file_name2 = $_FILES['licence_back_pic']['name'];
   $file_size2 = $_FILES['licence_back_pic']['size'];
   $file_tmp2 = $_FILES['licence_back_pic']['tmp_name'];
   $file_type2 = $_FILES['licence_back_pic']['type']; 

   $file_ext2 = strtolower(end(explode('.',$file_name2)));
   $extension2 = array("jpg","jpeg","png");
   if(in_array($file_ext2,$extension2) === false){
      $error2[] = "This Extension file is not allowed, Please choose a JPG or PNG file.";
   }
//    if($file_size2 > 2057152){
//       $error2[] = "File size must 2MB or lower!";
//    }
   // $new_name2 = time() . "-" . basename($file_name2);
   $target2 = "admin/img/". $file_name2;
   if(empty($error2) === true){
      move_uploaded_file($file_tmp2,$target2);
   }else{
    echo "Only Images allowed";
      die();
   }
}


   $name = $_POST['name']; 
   $address = $_POST['address']; 
   $postcode = $_POST['postcode']; 
   $phone = $_POST['phone']; 
   $cost_price = $_POST['options-outlined'];
   $location_test_center = $_POST['location_test_center']; 
     if(isset($_POST['near_test_center'])){
      $near_test_center = "YES";
   }else{
      $near_test_center = "NO";
   }
   
   
   $sql = "INSERT INTO driving_test( name , address , post_code , phone , loc_test_center , near_center , licence_front_pic , licence_back_pic , cost_price)
   VALUES('{$name}','{$address}','{$postcode}','{$phone}','{$location_test_center}','{$near_test_center}','{$file_name}','{$file_name2}','{$cost_price}')";
   $result = mysqli_query($con,$sql) or die();
   header("Location: http://localhost/pass-2/driving_test.php");
}

?>