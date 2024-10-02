<?php 
    include 'header.php';
    if(!isset($_SESSION['user_id'])){
        header("location:login.php");
    }
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
	<div class="container text-center">
		<h1 class="display-4 text-white animated slideInDown mb-4">Profile</h1>
		<nav aria-label="breadcrumb animated slideInDown">
		</nav>
	</div>
</div>
<!-- Page Header End -->


<!-- Courses Start -->
<div class="container-xxl py-6">
	<div class="container">
		<div class="row g-4">
			<?php include 'error.php' ?>
			<div class="col-lg-6 col-md-6 mr-5" data-wow-delay="0.1s">
				<center>
					<h2 class="mb-5">Personal Information</h2>
				</center>
				<form method="POST">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-6">
							<div class="form-group">
								<label>First Name</label>
								<input type="text" name="first_name" class="form-control"
									value="<?php echo $current_user['first_name'] ?>" required="">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-6">
							<div class="form-group">
								<label>Last Name</label>
								<input type="text" name="last_name" class="form-control"
									value="<?php echo $current_user['last_name'] ?>" required="">
							</div>
						</div>
					</div>
					<div class="form-group mt-3">
						<label>Email</label>
						<input type="email" name="email" class="form-control" value="<?php echo $current_user['email'] ?>"
							required="">
					</div>
					<div class="form-group mt-3">
						<label>Address</label>
						<input type="text" name="address" class="form-control" value="<?php echo $current_user['address'] ?>"
							required="">
					</div>
					<div class="row mt-3">
						<div class="col-lg-6 col-md-6 col-6">
							<div class="form-group">
								<label>City</label>
								<input type="text" name="city" class="form-control" value="<?php echo $current_user['city'] ?>"
									required="">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-6">
							<div class="form-group">
								<label>Post Code</label>
								<input type="text" name="postcode" class="form-control" value="<?php echo $current_user['postcode'] ?>"
									required="">
							</div>
						</div>
					</div>
					<div class="form-group mt-3">
						<label>Country</label>
						<input type="text" name="country" class="form-control" value="<?php echo $current_user['country'] ?>"
							required="">
					</div>
					<!-- <form method="POST"> -->
					<div class="form-group mt-3">
						<label>Phone</label>
						<input type="text" name="phone" class="form-control" value="<?php echo $current_user['phone'] ?>"
							required="">
					</div>
					<center><button type="submit" name="drop_btn" class="btn btn-dark mt-3">Update</button></center>
				</form>
<form action="" method="POST">
	<br>
	<h5>Driving Test appoinment</h5>
		<div class="dap">
		<div class="form-group mt-3">
						<label>Date</label>
						<input type="date" name="dates" class="form-control"
							required="">
					</div>
					<div class="form-group mt-3">
						<label>Time</label>
						<input type="time" name="times" class="form-control"
							required="">
							
					</div>
					<div class="form-group mt-3">
						<label>Location</label>
						<input type="location" name="location" class="form-control"
							required="">
					</div>

					<div class="form-group mt-3">
						<label for="">Add Comment</label>
					<textarea name="comments" id="" cols="58" rows="5">
					</textarea>
					</div>
					<center><button type="submit" name="app_btn" class="btn btn-dark mt-3">Add</button></center>
					<?php
						include "includes/appoinment.php";
					?>
				</form>
			</div>
		
		
			<?php 

    if(isset($_POST['profile_btn'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $postcode = $_POST['postcode'];
        $country = $_POST['country'];
        $phone = $_POST['phone'];
       
        // $add = "Insert i"
        // aval_morning ='$morm''$mort''$morw''$morth''$morf''$mors'$morsn
        $update = "update user_registration set email = '$email', first_name = '$first_name', last_name = '$last_name', address = '$address', city = '$city', postcode = '$postcode', country = '$country', phone = '$phone', where id = '".$current_user['id']."'";
        $run = mysqli_query($con, $update);
        if(!$run){
            echo mysqli_error($con);
        }else{
            $_SESSION['error'] = error('success', 'Personal information updated successfully.');
            header("location:profile.php");
        }
    }
?>

		</div>
			<div class="col-lg-6 col-md-6" data-wow-delay="0.1s">
				<center>
					<h5>What's your availability for the driving lessons?</h5>
				</center>
				<h6 class="ml-5">Pick up address</h6>

				<?php 
    $select = "select * from user_registration where id = '".$current_user['id']."'";
    $res = mysqli_query($con, $select);
    $pick_data = mysqli_fetch_array($res);
?>


				<form method="post">
					<div class="form-group">
						<label>Addess</label>
						<input type="text" name="pick_address" class="form-control"
							value="<?php echo $pick_data['pick_address'] ?>">
					</div>
					<div class="form-group">
						<label>City</label>
						<input type="text" name="pick_city" class="form-control" value="<?php echo $pick_data['pick_city'] ?>">
					</div>
					<div class="form-group">
						<label>Post Code</label>
						<input type="text" name="pick_postcode" class="form-control"
							value="<?php echo $pick_data['pick_postcode'] ?>">
						<div class="form-group mt 3"><br>
							<label for="">Please complete this bit as well</label>
							<div class="monday">
								<h5>Monday</h5>
								<input type="radio" name="m1" id="mor" value="1">
								<label name="morm" for="mor">Morning</label>
								<input type="radio" name="m1" id="1">
								<label name="aftm" for="aft">Afternon</label>
								<input type="radio" name="m1" id="1">
								<label name="evnm" for="evn">Evening</label>
							</div>
							<div class="Tuesday">
								<h5>Tuesday</h5>
								<input type="radio" name="m2" id="mor" id="2">
								<label name="mort" for="mor">Morning</label>
								<input type="radio" name="m2" id="mor" id="2">
								<label name="aftt" for="aft">Afternon</label>
								<input type="radio" name="m2" id="mor" id="2">
								<label name="evnt" for="evn">Evening</label>
							</div>
							<div class="wedensday">
								<h5>wedensday</h5>
								<input type="radio" name="m3" id="mor" id="3">
								<label name="morw" for="mor">Morning</label>
								<input type="radio" name="m3" id="mor" id="3">
								<label class="aftw" for="aft">Afternon</label>
								<input type="radio" name="m3" id="mor" id="3">
								<label class="evnw" for="evn">Evening</label>
							</div>
							<div class="Thursday">
								<h5>Thursday</h5>
								<input type="radio" name="m4" id="mor" id="4">
								<label name="morthr" for="mor">Morning</label>
								<input type="radio" name="m4" id="mor" id="4">
								<label class="aftth" for="aft">Afternon</label>
								<input type="radio" name="m4" id="mor" id="4">
								<label class="evnth" for="evn">Evening</label>
							</div>
							<div class="Friday">
								<h5>Friday</h5>
								<input type="radio" name="m5" id="mor" id="5">
								<label class="morf" for="mor">Morning</label>
								<input type="radio" name="m5" id="mor" id="5">
								<label class="aftf" for="aft">Afternon</label>
								<input type="radio" name="m5" id="mor" id="5">
								<label class="evnf" for="evn">Evening</label>
							</div>
							<div class="Saturday">
								<h5>Saturday</h5>
								<input type="radio" name="m6" id="mor" id="6">
								<label class="mors" for="mor">Morning</label>
								<input type="radio" name="m6" id="mor" id="6">
								<label class="afts" for="aft">Afternon</label>
								<input type="radio" name="m6" id="mor" id="6">
								<label class="evns" for="evn">Evening</label>
							</div>
							<div class="sunday">
								<h5>Sunday</h5>
								<input type="radio" name="m7" id="mor" id="7">
								<label class="morsn" for="mor">Morning</label>
								<input type="radio" name="m7" id="mor" id="7">
								<label class="aftsn" for="aft">Afternon</label>
								<input type="radio" name="m7" id="mor" id="7">
								<label class="evnsn" for="evn">Evening</label>
							</div>
							<!-- </form> -->

						</div>

					</div>
					<center><button type="submit" name="pick_btn" class="btn btn-dark mt-3">Update</button></center>
				</form>
				<?php 
    if(isset($_POST['pick_btn'])){
        $pick_address = $_POST['pick_address'];
        $pick_city = $_POST['pick_city'];
        $pick_postcode = $_POST['pick_postcode'];
        $mor = ($morm  = $_POST['morm']||$mort  = $_POST['mort']||$morw  = $_POST['morw']||$morf  = $_POST['morf']||$morth  = $_POST['morth']||$morsn  = $_POST['morsn']);
        

        $aft = ($aftm  = $_POST['aftm']||$aftsn  = $_POST['aftsn']||$aftth  = $_POST['aftth']||$aftt  = $_POST['aftt']||$aftw  = $_POST['aftw']|| $aftf  = $_POST['aftf']);

        $evn = ($evnm  = $_POST['evnm']||$evnt  = $_POST['evnt']||$evnw  = $_POST['evnw']||$evnf  = $_POST['evnf']||$mors  = $_POST['mors']||$afts  = $_POST['afts']||$evns  = $_POST['evns']||$evnsn  = $_POST['evnsn']||$evnth  = $_POST['evnth']);
        $update = "update user_registration set pick_address = '$pick_address', pick_city = '$pick_city', pick_postcode = '$pick_postcode', aval_Morning = '$mor',aval_Evening = '$evn',aval_Afternoon = '$aft',  where id = '".$current_user['id']."'";
        $run = mysqli_query($con, $update);
        if($run){
            $_SESSION['error'] = error('success', 'Pick Up Addess update successfully.');
            header("location:profile.php");
        }
    }
?>



				<h6 class="ml-5">Drop off address</h6>
				<?php 
    $select = "select * from user_registration where id = '".$current_user['id']."'";
    $res = mysqli_query($con, $select);
    $drop_data = mysqli_fetch_array($res);
?>
				<form method="post">
					<div class="form-group">
						<label>Addess</label>
						<input type="text" name="drop_address" class="form-control"
							value="<?php echo $drop_data['drop_address'] ?>">
					</div>
					<div class="form-group">
						<label>City</label>
						<input type="text" name="drop_city" class="form-control" value="<?php echo $drop_data['drop_city'] ?>">
					</div>
					<div class="form-group">
						<label>Post Code</label>
						<input type="text" name="drop_postcode" class="form-control"
							value="<?php echo $drop_data['drop_postcode'] ?>">
					</div>
					<center><button type="submit" name="drop_btn" class="btn btn-dark mt-3">Update</button></center>
				</form>
				<?php 
    if(isset($_POST['drop_btn'])){
        $drop_address = $_POST['drop_address'];
        $drop_city = $_POST['drop_city'];
        $drop_postcode = $_POST['drop_postcode'];
        $update = "update user_registration set drop_address = '$drop_address', drop_city = '$drop_city', drop_postcode = '$drop_postcode' where id = '".$current_user['id']."'";
        $run = mysqli_query($con, $update);
        if($run){
            $_SESSION['error'] = error('success', 'Drop off Addess update successfully.');
            header("location:profile.php");
        }
    }
?>
			</div>
		</div>
	</div>
</div>
<!-- Courses End -->

<?php 
    include 'footer.php';
?>