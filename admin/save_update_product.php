<?php
 

if(isset($_POST['submit'])){
    include "connection.php";
    if(empty($_FILES['new_img']['name'])){
        $file_name = $_POST['old_img'];
    }else{
        $file_name = $_FILES['new_img']['name'];
        $file_size = $_FILES['new_img']['size'];
        $file_tmp = $_FILES['new_img']['tmp_name'];
        $file_type = $_FILES['new_img']['type'];
        $target = "img/" . $file_name;
        move_uploaded_file($file_tmp,$target);
    }
         $id = $_POST['id'];
         $product_name = $_POST['product_name'];
         $product_price = $_POST['product_price'];
         // $product_img = $_POST['product_img'];
 
 
         $sql = "UPDATE shop SET product_name = '$product_name', product_price = '$product_price' , product_img = '$file_name' WHERE id = '$id'";
         $result = mysqli_query($con,$sql) or die("Query Failed.");
//    $result = mysqli_query($conn,$sql) or die("Query Failed.");
   if($result){
    header("Location: manage_product.php");
   }else{
    echo "<div class='alert alert-danger'>Some technical prob in Query</div>";
   }    
    //    $result2 = mysqli_query($con,$sql) or die();
    //     //  $_SESSION['error'] = error('success','Upadated successfully.');
    //      header("Location:manage_product.php");
         mysqli_close($con);
     }
     
 

?>