
<?php include "header.php"; 

?>


<div class="container-fluid page-header py-4 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white txt-sz animated slideInDown mb-4">Reviews</h1>
        <nav aria-label="breadcrumb animated slideInDown">
        </nav>
    </div>
</div>
<!-- --------- -->
<style>
    .card{
        border-radius: 10px;
    }
    .card .card-head{
        background-color: rgb(228, 231, 235) !important;
    }
    .card .card-head .user-name{
      margin-top: 11px;
      margin-left: 20px;
    }
   img{
   width: 40px !important;
   height: 40px !important;
   border-radius: 50%;
    }
    .card .star{
        margin-left: 50px;
    }
    /* .card .star i{
        color: gold;
        font-size: 20px;
    } */
    .page{
        display: flex;
        margin-top: 30px;
    }
    .active{
        background-color:black !important;
        color:white !important;
        border: 1px solid black;
        border-radius: 5px;
      

    }
    .page li{
     list-style: none;
     margin-left: 10px;
    
    
    }
    .page li a:hover{
        background-color: black !important;
        transition: all 0.5s ease-in-out;
        color:white !important;
    }
    .page li a{
        color: white;
        font-size: 13px;
     /* padding-top: 6px; */
     padding:10px 18px;
     width: 50px;
     height: 40px;
     justify-content: center;
     text-align: center;
     border-radius: 4px;
     background-color: rgb(55,51,51);
     color: white;
     font-weight: bold;
    }
    .card .cmnt{
        /* margin-left: 40px; */
        margin-top: 15px;
        font-size: 15px;
        font-weight: 300 !important;
    }
    .card1{
        border: 0.5px solid rgb(228, 231, 235) !important;
        border-radius: 5px;
    }
    .card1 .card1-head{
        background-color: rgb(228, 231, 235);
        padding: 10px 10px;
    }
    .card1-body .rev-1,
    .card1-body .slash,
    .card1-body .rev-2{
        color: gold;
        font-size: 43px;
        font-weight: bold;
      
    }
    .star1 i{
        font-size: 27px;
        margin-top: 13px;
    }
    .t-r{
        font-weight: bold;
        font-size: 23px;
        margin-top: 10px;
    }
</style>
<!-- ============ -->
  <div class="container">
    <div class="row px-lg-5">
        <div class="col-12 text-center">
            <div class="card1 text-center">
                <div class="card1-head">
                    <h5>Overall Review</h5>
                </div>
                <?php
               
    
                 $sql3 = "SELECT * FROM user_reviews ORDER BY user_reviews.id DESC";
                 $result3 = mysqli_query($con,$sql3) or die();
             
                 $row3 = mysqli_fetch_assoc($result3);
           
                 $all = mysqli_num_rows($result3);
                 
             
                //  ====== 5 ===========///
                $q = "SELECT * FROM user_reviews WHERE review = 5";
                $result4 = mysqli_query($con,$q) or die();
                $row4 = mysqli_fetch_assoc($result4);           
                $five = mysqli_num_rows($result4);
                //  ====== 4 ===========///
                $q1 = "SELECT * FROM user_reviews WHERE review = 4";
                $result5 = mysqli_query($con,$q1) or die();
                $row5 = mysqli_fetch_assoc($result5);           
                $four = mysqli_num_rows($result5);
                //  ====== 3 ===========///
                $q2 = "SELECT * FROM user_reviews WHERE review = 3";
                $result6 = mysqli_query($con,$q2) or die();
                $row6 = mysqli_fetch_assoc($result6);           
                $three = mysqli_num_rows($result6);
                //  ====== 2 ===========///
                $q3 = "SELECT * FROM user_reviews WHERE review = 2";
                $result7 = mysqli_query($con,$q3) or die();
                $row7 = mysqli_fetch_assoc($result7);           
                $two = mysqli_num_rows($result7);
                //  ====== 1 ===========///
                $q4 = "SELECT * FROM user_reviews WHERE review = 1";
                $result8 = mysqli_query($con,$q4) or die();
                $row8 = mysqli_fetch_assoc($result8);           
                $one = mysqli_num_rows($result8);
                 
                $total_average =  (1 * $one + 2 * $two + 3 * $three + 4 * $four + 5 * $five) / $all;
                
                 
                ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card1-body mt-4">
                            <span class="rev-1"><?= round($total_average, 1); ?></span>&nbsp;<span class="slash">/</span>&nbsp;<span class="rev-2">5.0</span>
                        </div>
                        <div class="card1-ft">
                            <?php 
                            if($total_average < 2){
                            ?>
                            <div class="star1">
                                <i style="color: gold;" class="fa fa-star"></i>
                                <i  class="fa fa-star"></i>
                                <i  class="fa fa-star"></i>
                                <i  class="fa fa-star"></i>
                                <i  class="fa fa-star"></i>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- ==== -->
                        <?php 
                            if($total_average >= 2 && $total_average < 3){
                            ?>
                            <div class="star1">
                                <i style="color: gold;" class="fa fa-star"></i>
                                <i style="color: gold;" class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- ==== -->
                        <?php 
                            if($total_average >= 3 && $total_average < 4){
                            ?>
                            <div class="star1">
                                <i style="color: gold;" class="fa fa-star"></i>
                                <i style="color: gold;" class="fa fa-star"></i>
                                <i style="color: gold;" class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- ===== -->
                        <?php 
                            if($total_average >= 4 && $total_average < 5){
                            ?>
                            <div class="star1">
                                <i style="color: gold;" class="fa fa-star"></i>
                                <i style="color: gold;" class="fa fa-star"></i>
                                <i style="color: gold;" class="fa fa-star"></i>
                                <i style="color: gold;" class="fa fa-star"></i>
                                <i  class="fa fa-star"></i>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- ====== -->
                        <?php 
                            if($total_average >= 5  ){
                            ?>
                            <div class="star1">
                                <i style="color: gold;" class="fa fa-star"></i>
                                <i style="color: gold;" class="fa fa-star"></i>
                                <i style="color: gold;" class="fa fa-star"></i>
                                <i style="color: gold;" class="fa fa-star"></i>
                                <i style="color: gold;" class="fa fa-star"></i>
                            </div>
                        </div>
                        <?php } ?>
                        
                        <div class="t-r"><?php echo $all . " Reviews"; ?></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
  </div>
<!-- ============ -->
 <div class="container">
   <div class="row px-md-5">
    <?php 
    // include "connection.php";
     $limit = 7; 
     
     if(isset($_GET['page'])){
     $page = $_GET['page'];
     }else{
        $page = 1;
     }
     $offset = ($page - 1) * $limit;
     $sql = "SELECT * FROM user_reviews
     LEFT JOIN user_registration ON user_reviews.user_id = user_registration.id
     ORDER BY user_reviews.id DESC
     LIMIT {$offset}, {$limit}";
     $result = mysqli_query($con,$sql) or die();
     if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){

        
    ?>
    <div class="col-12 d-flex mt-4">
    <img src="./img/abc.png" alt="">
       <div class="card w-100">
       <div class="card-head d-flex">
            <!-- <img src="./img/team-2.jpg" alt=""> -->
            <h5 class="user-name"><?= $row['first_name'] . " " . $row['last_name']; ?></h5>
        </div>
        <div class="card-body">
            <?php 
            if($row['review'] == 1){
           ?>
            <div class="star">
                <i style="color: gold;" class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <?php  
            } 
           ?>
           <!-- -- -->
           <?php 
            if($row['review'] == 2){
           ?>
            <div class="star">
                <i style="color: gold;" class="fa fa-star"></i>
                <i style="color: gold;" class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <?php  
            } 
           ?>
           <!-- === -->
           <?php 
            if($row['review'] == 3){
           ?>
            <div class="star">
                <i style="color: gold;" class="fa fa-star"></i>
                <i style="color: gold;" class="fa fa-star"></i>
                <i style="color: gold;" class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <?php  
            } 
           ?>
           <!-- ===== -->
           <?php 
            if($row['review'] == 4){
           ?>
            <div class="star">
                <i style="color: gold;" class="fa fa-star"></i>
                <i style="color: gold;" class="fa fa-star"></i>
                <i style="color: gold;" class="fa fa-star"></i>
                <i style="color: gold;" class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <?php  
            } 
           ?>
           <!-- === -->
           <?php 
            if($row['review'] == 5){
           ?>
            <div class="star">
                <i style="color: gold;" class="fa fa-star"></i>
                <i style="color: gold;" class="fa fa-star"></i>
                <i style="color: gold;" class="fa fa-star"></i>
                <i style="color: gold;" class="fa fa-star"></i>
                <i style="color: gold;" class="fa fa-star"></i>
            </div>
            <?php  
            } 
           ?>
            <h6 class="cmnt"><?= $row['desc'] ?></h6>
        </div>
        <div class="card-footer">
            <span class="float-end"><?= "<b>On</b> : " . $row['date_review']; ?></span>
        </div>
       </div>
    </div>
    <?php
        }
       }
     $sql1 = "SELECT * FROM user_reviews";        
       $result1 = mysqli_query($con,$sql1) or die();
       if(mysqli_num_rows($result1)){
       $total_records = mysqli_num_rows($result1);
      $total_page = ceil($total_records / $limit);?>
      <div><?php   echo "<b>Showing page </b> " . $page . " <b> of </b> " . $total_page  ; ?></div>
      <?php
      echo " <ul class='page'>";
      if($page > 1){
   echo "<li><a href='review.php?page=".($page-1)."'>Prev</a></li>";
      }
     for ($i=1; $i <= $total_page ; $i++) { 
        if($i == $page){
            $active = "active";
        }else{
            $active = "";
        }
        echo "<li  ><a class='{$active}' href='review.php?page={$i}'>{$i}</a></li>";
     }
      if($page < $total_page){
        echo "<li><a href='review.php?page=".($page + 1)."'>Next</a></li>";
      }
       ?>
        
         </ul>
         <?php
          } 
          ?>
    </div>
 </div>


<?php include "footer.php"; ?>

