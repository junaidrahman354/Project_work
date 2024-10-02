<?php
include 'header.php';
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Offers</h1>
        <nav aria-label="breadcrumb animated slideInDown">
        </nav>
    </div>
</div>
<!-- Page Header End -->

<style>
.offer-card{
    width: 100%;
    height: 160px;
   box-shadow:0 0 15px 3px rgb(207, 202, 202);
    border-radius: 3px;
    transition: transform 1s;
}
.offer-time{
    font-size: 29px;
    font-weight: 500;
    padding-top: 10px;
    margin-left: 15px;
    height: 100px;
  color: black;
}

.offer-price{
    color: black;
    float: right;
    height: 30px;
    margin-right: 20px;
    margin-top: 20px;
    font-weight: bold;
}
.offer-card:hover{
    transform: scale(1.1);
}
   
</style>
<!-- Contact Start -->
  <div  class="container px-md-5 py-6" style="padding-top: 0px; padding-bottom:0px;">
    <div class="row text-center px-md-5">
        <div class="col-12">
           <span style="font-size: 20px;" class="text-center">Select an Offer from the list below</span>
           <hr>
        </div>
    </div>
    <div class="row">

        <?php 
        $sql = "SELECT * from offer";
        $result = mysqli_query($con,$sql) or die("query failed!");
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){ ?>
        <div class="col-md-6 mt-4 col-lg-4">
          <div class="offer-card">
           <div class="offer-time"><?= $row['offer_name'] ?></div>
           
           <div class="offer-price"><?= "£ " . $row['offer_price'] ?></div>
          </div>
       </div>
       <?php
        }
       }else{?>
    <div class="col-12 text-center"><h3>No Offer Found</h3></div>

        <?php
       }
       ?>
    </div>
 </div>
<?php
include 'footer.php';
?>