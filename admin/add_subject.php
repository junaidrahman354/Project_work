<?php 
	include 'header.php';
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-0"></div>
		<div class="col-lg-6 col-md-6 col-12">
			<center><h2>Add Subject</h2></center>
			<?php include 'error.php'; ?>
			<form method="post">
				<div class="form-group">
					<label>Subject Title</label>
					<input type="text" name="subject" class="form-control" placeholder="Enter Subject Title" required="">
				</div>
				<center><button type="submit" name="btn" class="btn btn-dark btn-lg mt-3">Submit</button></center>
			</form>
		</div>
<?php
	if(isset($_POST['btn'])){
		$subject = $_POST['subject'];

		$insert = "INSERT INTO `subject`(`subject`) VALUES ('$subject')";
		$run = mysqli_query($con, $insert);
		if(!$run){
			echo mysqli_error($con);
		}else{
			$_SESSION['error'] = error('success', 'Subject add successfully');
			header("location:add_subject.php");
		}
	}
?>
		<div class="col-lg-3 col-md-3 col-0"></div>
	</div>		
</div>

<?php 
	include 'footer.php';
?>