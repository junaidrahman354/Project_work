<?php 
	include 'header.php';
	$id = $_SESSION['course_id'];
	$select = "select * from courses where id = '$id'";
	$res = mysqli_query($con, $select);
	$data = mysqli_fetch_array($res);
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-0"></div>
		<div class="col-lg-6 col-md-6 col-12">
			<center><h2>UPDATE Course</h2></center>
			<?php include 'error.php'; ?>
			<form method="post">
				<div class="form-group">
					<label>Course Title</label>
					<input type="text" name="title" class="form-control" placeholder="Enter Course Title" value="<?php echo $data['title'] ?>" required="">
				</div>
				<div class="form-group mt-3">
					<label>Amount</label>
					<input type="text" name="amount" class="form-control" placeholder="Enter Course Amount" value="<?php echo $data['amount'] ?>" required="">
				</div>
				<div class="form-group mt-3">
					<label>Time Hours</label>
					<input type="text" name="time" class="form-control" placeholder="Enter Time Hours" value="<?php echo $data['time'] ?>" required="">
				</div>
				<div class="form-group mt-3">
					<label>Course Detail</label>
					<textarea type="text" name="detail" class="form-control" placeholder="Enter Course Detail" required=""><?php echo $data['detail'] ?></textarea>
				</div>
				<div class="form-group mt-3">
					<label>Best Seller </label>
					<textarea type="text" name="best_seller" class="form-control" placeholder="Enter badge of best seller"><?php echo $data['best_seller'] ?></textarea>
				</div>
				<!-- <center><button type="submit" name="btn" class="btn btn-dark btn-lg mt-3">Update</button></center>
			</form>
		</div> -->
		<div class="form-group mt-3">
					<label>Courses </label>
					<textarea type="text" name="seller" class="form-control" placeholder="Enter badge of best seller"><?php echo $data['seller'] ?></textarea>
				</div>
				<?php if($data['crms'] == 1){ ?>
				<div class="form-group mt-3 mt-md-3">
                     <label class="form-control-label" for="">Do you want to make it special?</label>
                	 <div class="d-flex mt-2 pyn">
                          
                       <span class="btn-r">
                          <input type="radio" onchange="add()" class="btn-check" value="1" name="options-outlined" id="success-outlined" autocomplete="off" checked>
                          <label class="btn btn-outline-dark" id="success-outlineds" for="success-outlined">Yes</label>
                       </span> &nbsp;&nbsp;&nbsp;
                       <span class="btn-r">
                          <input type="radio" onchange="sub()" value="0" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
                          <label class="btn btn-outline-dark" id="danger-outlineds" for="danger-outlined">No</label>
                       </span>
                       </div>
                  </div>
				  <?php }else {?>
					<div class="form-group mt-3 mt-md-3">
                     <label class="form-control-label" for="">Do you want to make it special?</label>
                	 <div class="d-flex mt-2 pyn">
                          
                       <span class="btn-r">
                          <input type="radio" onchange="add()" class="btn-check" value="1" name="options-outlined" id="success-outlined" autocomplete="off">
                          <label class="btn btn-outline-dark" id="success-outlineds" for="success-outlined">Yes</label>
                       </span> &nbsp;&nbsp;&nbsp;
                       <span class="btn-r">
                          <input type="radio" onchange="sub()" value="0" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off" checked>
                          <label class="btn btn-outline-dark" id="danger-outlineds" for="danger-outlined">No</label>
                       </span>
                       </div>
                  </div>
					<?php }?>
				<center><button type="submit" name="btn" class="btn btn-dark btn-lg mt-3">Update</button></center>
			</form>
		</div>
<?php
	if(isset($_POST['btn'])){
		$title = $_POST['title'];
		$amount = $_POST['amount'];
		$time = $_POST['time'];
		$detail = $_POST['detail'];
		$best_seller = $_POST['best_seller'];
		$seller = $_POST['seller'];
		$crms = $_POST['options-outlined'];

		$update = "update courses set title = '$title', amount = '$amount', time = '$time', detail = '$detail', best_seller = '$best_seller', seller = '$seller' , crms = '$crms' where id = '$id'";
		// $update = "UPDATE INTO `courses`(`title`, `amount`, `time`, `detail`,`best_seller`) VALUES ('$title ', '$amount', '$time', '$detail','$best_seller') where id = '$id'";
		$run = mysqli_query($con, $update);
		if(!$run){
			echo mysqli_error($con);
			// die();
		}else{
			$_SESSION['error'] = error('success', 'Course updated successfully');
			// header("location:manage_course.php");
		}
	}
?>
	</div>		
</div>

<?php 
	include 'footer.php';
?>