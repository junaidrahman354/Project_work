<?php 
	include 'header.php';
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-0"></div>
		<div class="col-lg-6 col-md-6 col-12">
			<center><h2>Add Course</h2></center>
			<?php include 'error.php'; ?>
			<form method="post">
				<div class="form-group">
					<label>Course Title</label>
					<select name="title" class="form-control" placeholder="Enter Course Title" required="">
					    <option>-- Select Option --</option>
					    <option>Manual Car</option>
					    <option>Automatic Car</option>
					</select>
				</div>
				<div class="form-group mt-3">
					<label>Amount</label>
					<input type="text" name="amount" class="form-control" placeholder="Enter Course Amount" required="">
				</div>
				<div class="form-group mt-3">
					<label>Time Hours</label>
					<input type="text" name="time" class="form-control" placeholder="Enter Time Hours" required="">
				</div>
				<div class="form-group mt-3">
					<label>Course Detail</label>
					<textarea type="text" name="detail" class="form-control" placeholder="Enter Course Detail" required=""></textarea>
				</div>
				<div class="form-group mt-3">
					<label>Best Seller</label>
					<textarea type="text" name="best_seller" class="form-control" value = "BEST SELLER" required=""></textarea>
				</div>
				
				<div class="form-group mt-3">
					<label>Courses</label>
					<textarea type="text" name="seller" class="form-control" value = "seller" required=""></textarea>
				</div>
				<div class="form-group mt-3 mt-md-3">
                     <label class="form-control-label" for="">Do you want to make it special?</label>
                	 <div class="d-flex mt-2 pyn">
                          
                       <span class="btn-r">
                          <input type="radio" onchange="add()" class="btn-check" value="1" name="options-outlined" id="success-outlined" autocomplete="off">
                          <label class="btn btn-outline-dark" id="success-outlineds" for="success-outlined">Yes</label>
                       </span> &nbsp;&nbsp;&nbsp;
                       <span class="btn-r">
                          <input type="radio" onchange="sub()" value="2" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off" checked>
                          <label class="btn btn-outline-dark" id="danger-outlineds" for="danger-outlined">No</label>
                       </span>
                       </div>
                  </div>

				<center><button type="submit" name="btn" onClick='return confirm("Confirm to Add this Course??")' class="btn btn-dark btn-lg mt-3">Submit</button></center>
				
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

		$insert = "INSERT INTO `courses`(`title`, `amount`, `time`, `detail`,`best_seller`,`seller`,`crms`) VALUES ('$title ', '$amount', '$time', '$detail','$best_seller','$seller','$crms')";
		$run = mysqli_query($con, $insert);
		if(!$run){
			echo mysqli_error($con);
		}else{
			$_SESSION['error'] = error('success', 'Course add successfully');
			header("location:add_courses.php");
		}
	}
?>
		<div class="col-lg-3 col-md-3 col-0"></div>
	</div>		
</div>

<?php 
	include 'footer.php';
?>