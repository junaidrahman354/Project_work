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

    <center><h2 class="mb-5">Check Your Progress</h2></center>
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
    
?>
                <div class="col-lg-12 col-md-12 col-12 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                                <p class="heading">1. &emsp; <?php echo $subject_data['subject1'] ?></p>
                            </div>
        
                            <div>
                                <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress1'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress1'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress1'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress1'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress1'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress1'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-lg-12 col-md-12 col-12 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">2. &emsp;<?php echo $subject_data['subject2'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress2'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress2'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress2'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress2'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress2'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress2'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                         </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">3.&emsp;<?php echo $subject_data['subject5'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress5'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress5'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress5'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress5'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress5'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress5'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">4.&emsp;<?php echo $subject_data['subject3'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress3'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress3'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress3'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress3'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress3'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress3'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">5.&emsp;<?php echo $subject_data['subject4'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress4'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress4'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress4'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress4'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress4'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress4'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">6.&emsp;<?php echo $subject_data['subject6'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress6'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress6'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress6'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress6'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress6'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress6'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">7.&emsp;<?php echo $subject_data['subject7'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress7'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress7'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress7'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress7'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress7'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress7'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">8.&emsp;<?php echo $subject_data['subject11'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress11'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress11'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress11'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress11'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress11'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress11'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">9.&emsp;<?php echo $subject_data['subject12'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress12'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress12'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress12'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress12'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress12'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress12'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <!-- <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">10.&emsp;</p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress12'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress12'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress12'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress12'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress12'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress12'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">10.&emsp;<?php echo $subject_data['subject13'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress13'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress13'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress13'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress13'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress13'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress13'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">11.&emsp;<?php echo $subject_data['subject14'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress14'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress14'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress14'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress14'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress14'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress14'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">12.&emsp;<?php echo $subject_data['subject15'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress15'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress15'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress15'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress15'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress15'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress15'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">13.&emsp;<?php echo $subject_data['subject16'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress16'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress16'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress16'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress16'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress16'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress16'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">14.&emsp;<?php echo $subject_data['subject17'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress17'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress17'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress17'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress17'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress17'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress17'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">15.&emsp;<?php echo $subject_data['subject18'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress18'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress18'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress18'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress18'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress18'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress18'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">16.&emsp;<?php echo $subject_data['subject19'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress19'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress19'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress19'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress19'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress19'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress19'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">17.&emsp;<?php echo $subject_data['subject20'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress20'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress20'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress20'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress20'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress20'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress20'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">18.&emsp;<?php echo $subject_data['subject21'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress21'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress21'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress21'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress21'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress21'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress21'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">19.&emsp;<?php echo $subject_data['subject22'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress22'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress22'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress22'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress22'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress22'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress22'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">20.&emsp;<?php echo $subject_data['subject23'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress23'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress23'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress23'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress23'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress23'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress23'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">21.&emsp;<?php echo $subject_data['subject24'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress24'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress24'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress24'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress24'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress24'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress24'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">22.&emsp;<?php echo $subject_data['subject25'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress25'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress25'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress25'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress25'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress25'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress25'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">23.&emsp;<?php echo $subject_data['subject26'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress26'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress26'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress26'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress26'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress26'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress26'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">24.&emsp;<?php echo $subject_data['subject27'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress27'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress27'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress27'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress27'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress27'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress27'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">25.&emsp;<?php echo $subject_data['subject28'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress28'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress28'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress28'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress28'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress28'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress28'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">26.&emsp;<?php echo $subject_data['subject29'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress29'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress29'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress29'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress29'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress29'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress29'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">27.&emsp;<?php echo $subject_data['subject30'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress30'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress30'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress30'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress30'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress30'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress30'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">28.&emsp;<?php echo $subject_data['subject53'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress53'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress53'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress53'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress53'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress53'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress53'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">29.&emsp;<?php echo $subject_data['subject36'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress36'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress36'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress36'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress36'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress36'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress36'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">30.&emsp;<?php echo $subject_data['subject8'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress8'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress8'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress8'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress8'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress8'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress8'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
    
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">31.&emsp;<?php echo $subject_data['subject9'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress9'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress9'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress9'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress9'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress9'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress9'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">32.&emsp;<?php echo $subject_data['subject10'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress10'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress10'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress10'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress10'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress10'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress10'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">33.&emsp;<?php echo $subject_data['subject31'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress31'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress31'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress31'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress31'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress31'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress31'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <!-- <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div>
                            <div>
                        <p class="heading">34.&emsp;<?php echo $subject_data['subject10'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress10'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress10'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress10'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress10'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress10'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress10'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div> -->
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">34.&emsp;<?php echo $subject_data['subject32'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress32'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress32'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress32'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress32'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress32'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress32'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">35.&emsp;<?php echo $subject_data['subject33'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress33'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress33'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress33'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress33'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress33'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress33'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <!-- <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">36.&emsp;<?php echo $subject_data['subject34'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress34'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress34'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress34'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress34'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress34'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress34'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div> -->
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">36.&emsp;<?php echo $subject_data['subject35'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress35'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress35'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress35'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress35'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress35'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress35'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">37.&emsp;<?php echo $subject_data['subject37'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress37'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress37'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress37'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress37'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress37'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress37'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">38.&emsp;<?php echo $subject_data['subject38'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress38'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress38'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress38'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress38'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress38'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress38'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">39.&emsp;<?php echo $subject_data['subject39'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress39'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress39'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress39'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress39'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress39'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress39'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">40.&emsp;<?php echo $subject_data['subject40'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress40'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress40'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress40'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress40'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress40'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress40'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">41.&emsp;<?php echo $subject_data['subject52'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress52'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress52'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress52'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress52'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress52'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress52'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">42.&emsp;<?php echo $subject_data['subject54'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress54'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress54'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress54'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress54'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress54'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress54'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">43.&emsp;<?php echo $subject_data['subject55'] ?></p>
                        </div>
                            <div>
                            <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress54'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress54'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress54'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress54'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress54'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress54'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">44.&emsp;<?php echo $subject_data['subject56'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress56'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress56'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress56'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress56'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress56'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress56'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">45.&emsp;<?php echo $subject_data['subject57'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress57'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress57'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress57'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress57'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress57'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress57'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">46.&emsp;<?php echo $subject_data['subject58'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress58'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress58'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress58'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress58'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress58'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress58'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">47.&emsp;<?php echo $subject_data['subject59'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress59'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress59'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress59'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress59'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress59'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress59'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">48.&emsp;<?php echo $subject_data['subject60'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress60'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress60'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress60'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress60'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress60'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress60'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">49.&emsp;<?php echo $subject_data['subject61'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress61'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress61'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress61'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress61'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress61'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress61'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">50.&emsp;<?php echo $subject_data['subject62'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress62'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress62'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress62'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress62'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress62'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress62'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">51.&emsp;<?php echo $subject_data['subject41'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress41'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress41'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress41'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress41'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress41'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress41'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">52.&emsp;<?php echo $subject_data['subject63'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress63'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress63'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress63'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress63'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress63'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress63'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">53.&emsp;<?php echo $subject_data['subject44'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress44'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress44'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress44'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress44'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress44'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress44'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">54.&emsp;<?php echo $subject_data['subject64'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress64'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress64'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress64'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress64'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress64'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress64'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">55.&emsp;<?php echo $subject_data['subject65'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress65'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress65'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress65'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress65'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress65'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress65'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">56.&emsp;<?php echo $subject_data['subject66'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress66'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress66'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress66'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress66'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress66'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress66'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">57.&emsp;<?php echo $subject_data['subject67'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress67'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress67'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress67'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress67'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress67'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress67'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">58.&emsp;<?php echo $subject_data['subject68'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress68'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress68'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress68'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress68'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress68'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress68'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">59.&emsp;<?php echo $subject_data['subject70'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress70'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress70'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress70'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress70'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress70'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress70'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">60.&emsp;<?php echo $subject_data['subject69'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress69'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress69'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress69'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress69'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress69'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress69'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">61.&emsp;<?php echo $subject_data['subject71'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress71'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress71'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress71'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress71'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress71'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress71'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">62.&emsp;<?php echo $subject_data['subject45'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress45'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress45'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress45'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress45'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress45'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress45'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">63.&emsp;<?php echo $subject_data['subject46'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress46'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress46'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress46'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress46'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress46'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress46'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">64.&emsp;<?php echo $subject_data['subject47'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress47'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress47'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress47'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress47'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress47'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress47'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">65.&emsp;<?php echo $subject_data['subject48'] ?></p>
                        </div>
                            <div>
                            <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress49'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress49'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress49'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress49'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress49'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress49'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">66.&emsp;<?php echo $subject_data['subject49'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress49'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress49'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress49'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress49'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress49'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress49'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">67.&emsp;<?php echo $subject_data['subject50'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress50'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress50'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress50'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress50'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress50'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress50'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">68.&emsp;<?php echo $subject_data['subject43'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress43'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress43'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress43'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress43'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress43'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress43'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">69.&emsp;<?php echo $subject_data['subject51'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['progress51'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['progress51'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['progress51'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['progress51'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['progress51'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['progress51'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>


   
                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading">69.&emsp;<?php echo $subject_data['subject72'] ?></p>
                        </div>
                            <div>
                        <div class="rating">
                            <input type="radio" name="rating" id="rate6"><label for="rate6" style=" background: <?php if($progress_data['overtaking'] == 6){  echo '#26FF02';}else{ echo 'white'; } ?> !important;">6</label>
                            <input type="radio" name="rating" id="rate5"><label for="rate5"  style="  background: <?php if($progress_data['overtaking'] >= 5){  echo '#3DAB2B';}else{ echo 'white'; } ?> !important;">5</label>
                            <input type="radio" name="rating" id="rate4"><label for="rate4" style="  background: <?php if($progress_data['overtaking'] >= 4){  echo '#D3CA3E';}else{ echo 'white'; } ?> !important;">4</label>
                            <input type="radio" name="rating" id="rate3"><label for="rate3"  style="  background: <?php if($progress_data['overtaking'] >= 3){  echo '#FDDD05';}else{ echo 'white'; } ?> !important;">3</label>
                            <input type="radio" name="rating" id="rate2"><label for="rate2" style="  background: <?php if($progress_data['overtaking'] >= 2){  echo '#C36A6A';}else{ echo 'white'; } ?> !important;">2</label>
                            <input type="radio" name="rating" id="rate1"><label for="rate1" style="  background: <?php if($progress_data['overtaking'] >= 1){  echo '#FF0000';}else{ echo 'white'; } ?> !important;">1</label>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-4 col-4 r-1">
                    <div class="box">
                        <div class="r-2 prha">
                            <div>
                        <p class="heading"><?php echo $subject_data['information'] ?></p>
                        </div>
                            <div>
                        <div class="para rating">
                            <p name="ratting_pra" id="info" cols="30" rows="3"> <?php echo $progress_data['information']?> </p>
                            <!-- <textarea </textarea> -->
                            <!-- <pre></pre> -->
                            <!-- <input type="text" name = "info" > -->
                        </div>
                        </div>
                        </div>
                    </div>
                </div>

                


                




            </div>
            </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
  

   <!--Progress Page End-->

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
.para{
    border: 1px solid #000 !important;
/* border-radius: none; */
padding: 18px 163px 63px 26px !important;
}
</style>