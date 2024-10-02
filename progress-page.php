<?php 
    include 'header.php';
    if(!isset($_SESSION['user_id'])){
        header("location:login.php");
    }else{
        unset($_SESSION['progress']);
    }

?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
  <div class="container text-center">
    <h1 class="display-4 text-white animated slideInDown mb-4">Progress</h1>
    <nav aria-label="breadcrumb animated slideInDown">
    </nav>
  </div>
</div>
<!-- Page Header End -->

<!--Progress Page Start-->

<center>
  <h2 class="mb-5">Check Your Progress</h2>
</center>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-12" style="padding: 0px;">
      <div style="padding: 0px;">
        <div class="box">
          <div class="container">
            <div class="row">
              <?php 
    $select = "select * from subject";
    $res = mysqli_query($con, $select);
    $subject_data = mysqli_fetch_array($res);
    
    $select1 = "select * from progress where user_id = '".$current_user['id']."'";
    $res1 = mysqli_query($con, $select1);
    $progress_data = mysqli_fetch_array($res1); 
    

    $c=0;
    foreach([
        1, 2, 5,3,4,6,7,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,53,36,8,9,10,31,32,33,35,37,38,39,40,52,54,55,56,57,58,59,60,61,62,41,63,44,64,65,66,67,68,70,69,71,46,45,47,48,49,50,43,51,72
    ] as $subject_no){
        ?>
              <div class="col-lg-12 col-md-12 col-12 r-1">
                <div class="box">
                  <div class="r-2 prha">
                    <div>
                      <p class="heading">
                        <?=++$c?>. &nbsp;
                        <?php echo $subject_data["subject$subject_no"] ?>
                      </p>
                    </div>

                    <div>
                      <div class="rating">
                        <input type="radio" name="rating" id="rate6"><label for="rate6"
                          style=" background: <?php if($progress_data["progress$subject_no"]==6){ echo '#26FF02'
                          ;}else{ echo 'white' ; } ?> !important;">6</label>
                        <input type="radio" name="rating" id="rate5"><label for="rate5"
                          style="  background: <?php if($progress_data["progress$subject_no"]>= 5){ echo
                          '#3DAB2B';}else{ echo 'white'; } ?>
                          !important;">5</label>
                        <input type="radio" name="rating" id="rate4"><label for="rate4"
                          style="  background: <?php if($progress_data["progress$subject_no"]>= 4){ echo
                          '#D3CA3E';}else{ echo 'white'; } ?>
                          !important;">4</label>
                        <input type="radio" name="rating" id="rate3"><label for="rate3"
                          style="  background: <?php if($progress_data["progress$subject_no"]>= 3){ echo
                          '#FDDD05';}else{ echo 'white'; } ?>
                          !important;">3</label>
                        <input type="radio" name="rating" id="rate2"><label for="rate2"
                          style="  background: <?php if($progress_data["progress$subject_no"]>= 2){ echo
                          '#C36A6A';}else{ echo 'white'; } ?>
                          !important;">2</label>
                        <input type="radio" name="rating" id="rate1"><label for="rate1"
                          style="  background: <?php if($progress_data["progress$subject_no"]>= 1){ echo
                          '#FF0000';}else{ echo 'white'; } ?>
                          !important;">1</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
    }
  ?>


              <div class="col-lg-4 col-md-4 col-4 r-1">
                <div class="box">
                  <div class="r-2 prha">
                    <div>
                      <p class="heading">
                        <?php echo $subject_data['information'] ?>
                      </p>
                      
                      <!-- <input type="text" disabled name="ratting_para" id="info_a"
                        value="<?php
                          // echo $progress_data['information']?>"> -->
                    </div>
                    <div>
                      <!-- <div style = "" class="para rating"> -->

                      <div class="para rating"> 
                       <p name="ratting_pra" id="info" cols="5" rows="3"> <?php
                            echo $progress_data['information']?> </p>
                       <!-- <pre></pre> -->
                      <!--  <input type="text" name = "info" > -->
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

            <?php 
    include 'footer.php';
?>
            <!-- 
<style>
    .heading {
    font-size: 24px;
    padding: 0;
    display: flex;
    /* align-items: center;
    justify-content: center; */
    margin-top: 10px;
    margin-left: 30pc;
}
.prha{
    float: left !important;
}
</style> -->
            <style>
              .para {
                border: 1px solid #000 !important;
                /* border-radius: none; */
                  padding: 13px 18px 63px 16px !important
              }

             
            </style>