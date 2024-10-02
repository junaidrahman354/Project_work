<?php
// include "header.php";
// include 'connection.php';
// $page = $_SESSION['progress'];

// if(!isset($_SESSION['user_id'])){
//     header("location:index.php");
// }
include 'header.php';

?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

<div class="container-fluid p-0" style = "text-align:center;">
<div class="page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Book Now</h1>
        <nav aria-label="breadcrumb animated slideInDown">
        </nav>
    </div>
</div>

<h2 class="col-7" >
    To book this course please contact us via :
</h2>

<!-- <i class="fa-social fa-whatsapp" aria-hidden="true"></i> -->
<div class="d-flex pt-2">
<!-- <h5>Whatsapp</h5> -->

 <ul class="wrapper w1">
<li class="icon whatsapp">
    <span class="tooltip">whatsapp</span>
    <!-- <span class="icon1"><i class="fab fa-facebook-f"></i></span> -->
   <!-- <span> <i class="fa fa-whatsapp" aria-hidden="true"></i></span> -->
   <span class="icon1">
<i class="fa fa-whatsapp"></i></span>
   <!-- <i class="fa fa-mail-forward" aria-hidden="true"></i> -->

   <!-- w -->
  </li>
  
  <span class="num">07935199032</span>

  </ul>
<br><br><br>
<span class = "or">OR</span>
 <ul class="wrapper w1">
<li class="icon whatsapp">
    <span class="tooltip">Mail</span>
    <!-- <span class="icon1"><i class="fab fa-facebook-f"></i></span> -->
   <!-- <span> <i class="fa fa-whatsapp" aria-hidden="true"></i></span> -->
   <span class="icon1">
    <i class="fa fa-envelope" aria-hidden="true"></i>
   </span>
  </li>
  <span class="num">Info@passveryfast.co.uk</span>

  </ul>
  <!-- <i class="fa fa-mail-forward" aria-hidden="true"></i> -->
  
</div>
</div>
<?php
include "footer.php";
?>

<style>
    .w1 .icon {
    background: #000;
}
    .w1 .tooltip {
    position: absolute;
    top: 0;
    font-size: 14px;
    background: #000;
    color: #ffffff;}
    .icon1{
        color:white;
    }
    .num{
        margin-top:25px;
    }
    .or{
        margin: 25px 10px 10px 10px;
    }
</style>