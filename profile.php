<?php 
    include 'header.php';
    if(!isset($_SESSION['user_id'])){
        header("location:login.php");
    }


		$id = $_SESSION['id'];
		$select = "select * from subject where id = '1'";
		$res = mysqli_query($con, $select);
		$data = mysqli_fetch_array($res);
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
		
	<form method="post" action="includes/profile_update.php" class="row g-4">
			<?php include 'error.php' ?>
			<h2 class="aa mt-5 mb-0 pb-0 pt-5">Personal Information</h2>
			<div class="col-lg-6 m-0 p-0 col-md-6 mr-5" data-wow-delay="0.1s">
				<!--<center>
					 <h2 class="mb-5">Personal Information</h2> 
				</center> -->
				<!--<form method="POST"> -->
				<div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-6"><br>
							<div class="form-group">
								<label>First Name</label>
								<input type="text" name="first_name" class="form-control"
									value="<?php echo $current_user['first_name'] ?>" required="">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-6"><br>
							<div class="form-group">
								
								<label>Last Name</label>
								<input type="text" name="last_name" class="form-control"
									value="<?php echo $current_user['last_name'] ?>" required="">
							</div>
						</div>
					</div>
					<div class="form-group mt1">
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
					<div class="form-group mt1">
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
					<!-- <center><button type="submit" name="pick_btn" class="btn btn-dark mt-3">Update</button></center> -->
				</div>

					<?php 
					$select1 = "select * from test_driving where user_id = '".$current_user['id']."'";
					$res1 = mysqli_query($con, $select1);
					$data1 = mysqli_fetch_array($res1);
					?>
				<div>
					<br>
					<h5>Driving Test appoinment</h5>
					<div class="dap">
						<div class="form-group mt-3">
							<label>Date</label>
							<input type="date" name="ddate" value="<?php echo $data1['ddate'] ?>" class="form-control"  >
						</div>
						<div class="form-group mt-3">
							<label>Time</label>
							<input type="time" name="dtime" value="<?php echo $data1['dtime'] ?>" class="form-control"  >

						</div>
						<div class="form-group mt-3">
							<label>Location</label>
							<input type="text" name="location" value="<?php echo $data1['location'] ?>" class="form-control"  >
						</div>

						<div class="form-group mt-3">
							<label for="">Add Comment</label>
							<textarea name="Comments" id=""cols="58" class="form-control" rows="5"><?php echo $data1['Comments'] ?></textarea>
						</div>
						<!-- <center><button type="submit" name="pick_btn" class="btn btn-dark mt-3">Add</button></center> -->
						<?php
						// include "includes/appoinment.php";
					?>
				</div>
			</div>



		</div>
	
		
		<div class="col-lg-6 col-md-6" data-wow-delay="0.1s">
			<!-- <center>
				<h5>What's your availability for the driving lessons?</h5>
			</center> -->
			<h6 class="ml-5">Pick up address</h6>

			<?php 
    $select = "select * from user_registration where id = '".$current_user['id']."'";
    $res = mysqli_query($con, $select);
    $pick_data = mysqli_fetch_array($res);
?>


			<div>
				<div class="form-group">
					<label>Addess</label>
					<input type="text" name="pick_address" class="form-control" value="<?php echo $pick_data['pick_address'] ?>">
				</div>
				<div class="form-group">
					<label>City</label>
					<input type="text" name="pick_city" class="form-control" value="<?php echo $pick_data['pick_city'] ?>">
				</div>
				<div class="form-group">
					<label>Post Code</label>
					<input type="text" name="pick_postcode" class="form-control"
						value="<?php echo $pick_data['pick_postcode'] ?>">
				</div>
				
				<!-- <center><button type="submit" name="pick_btn" class="btn btn-dark mt-3">Update</button></center> -->
	</div>
		


			<h6 class="ml-5">Drop off address</h6>
			<?php 
    $select = "select * from user_registration where id = '".$current_user['id']."'";
    $res = mysqli_query($con, $select);
    $drop_data = mysqli_fetch_array($res);
?>
			<div>
				<div class="form-group">
					<label>Addess</label>
					<input type="text" name="drop_address" class="form-control" value="<?php echo $drop_data['drop_address'] ?>">
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
				<div class="form-group mt-3">
							<label for="">Add Comment</label>
							<textarea name="cmnts" id=""cols="54" class="form-control"  rows="5"><?php echo $drop_data['cmnts'] ?></textarea>
				</div>

				
				<!-- <center><button type="submit" name="pick_btn" class="btn btn-dark mt-3">Update</button></center> -->
	</div>
	<?php 
    $select = "select * from instructor_registration";
    $res = mysqli_query($con, $select);
    $insreg = mysqli_fetch_array($res);
?>
	<br><h5 class="ml-5"><label for="">Instuctor Information:</label></h5>
	           <div class="form-group">
					<label>Name</label>
					<input type="text" disabled name="drop_address" class="form-control" value="<?php echo $insreg['first_name']." ".$insreg['last_name']; ?>">
				</div>
				<div class="form-group">
					<label>Contact Number</label>
					<input type="text" disabled  name="drop_city" class="form-control" value="<?php echo $insreg['phone']; ?>">
				</div>
	</div>
	
			<h6 class="ml-5 complete-bit"><label for="">Please complete this bit as well</label></h6>
		
			 <div class="w-md-50">
				<div class="col-lg-6 col-md-6">
				<h5 class="availability-head">What's your availability for the driving lessons?</h5>
				<!-- <div class="form-group">
			    	<label for="">Extra Information</label><br>
			       	<textarea name="extrainformation" id="" cols="" class="form-control" rows="5"></textarea>
			   </div> -->
				</div>
			 </div>
			<?php 
    $select = "select * from user_registration where id = '".$current_user['id']."'";
    $res = mysqli_query($con, $select);
    $drop_data = mysqli_fetch_array($res);
?>



<?php 
    $select2 = "select * from time_table where user_id = '".$current_user['id']."'";
    $res2 = mysqli_query($con, $select2);
    $d_data = mysqli_fetch_array($res2);
?>
   <!-- ================= -->
  

   <!-- ================= -->
			<div>
				<div class="ps-md-5">
					<br>

					<!-- <input type="text" readonly="" value="Tuesday" class="form-control text-dark mt-5"> -->
					<!-- <span>Monday : </span>
					
					<select id="list" name="monday" class="mt-5"  >
					
					<option id="lable">
						<?php echo $d_data['monday'] ?>
						</option>
						<option id="1" value="Morning">Morning</option>
						<option id="2" value="Evening">Evening</option>
						<option id="3" value="Afternoon">Afternoon</option>
					</select><br>
					<span>Tuesday : </span>
					<select id="list" name="tuesday" class="mt-5"  >
						<option id="lable">
						<?php echo$d_data['tuesday'] ?>
						</option>
						<option id="1" value="Morning">Morning</option>
						<option id="2" value="Evening">Evening</option>
						<option id="3" value="Afternoon">Afternoon</option>
					</select><br>
					<span>Wednesday : </span>
					<select id="list" name="wednesday" class="mt-5"  >
						<option id="lable">

						<?php echo $d_data['wednesday'] ?>
						</option>
						<option id="1" value="Morning">Morning</option>
						<option id="2" value="Evening">Evening</option>
						<option id="3" value="Afternoon">Afternoon</option>
					</select><br>
					<span>Thursday : </span>

					<select id="list" name="thursday" class="mt-5"  >
						<option id="lable">

						<?php echo $d_data['thursday'] ?>

						</option>
						<option id="1" value="Morning">Morning</option>
						<option id="2" value="Evening">Evening</option>
						<option id="3" value="Afternoon">Afternoon</option>
					</select><br>
					<span>Friday : </span>

					<select id="list" name="friday" class="mt-5"  >
						<option id="lable">

						<?php echo $d_data['friday'] ?>
						</option>
						<option id="1" value="Morning">Morning</option>
						<option id="2" value="Evening">Evening</option>
						<option id="3" value="Afternoon">Afternoon</option>
					</select><br>
					<span>Saturday : </span>

					<select id="list" name="saturday" class="mt-5"  >
						<option id="lable">

						<?php echo $d_data['saturday'] ?>
						</option>
						<option id="1" value="Morning">Morning</option>
						<option id="2" value="Evening">Evening</option>
						<option id="3" value="Afternoon">Afternoon</option>
					</select><br>
					<span>Sunday :     </span>

					<select id="list" name="sunday" class="mt-5"  >
						<option id="lable">

						<?php echo $d_data['sunday'] ?>
						</option>
						<option id="1" value="Morning">Morning</option>
						<option id="2" value="Evening">Evening</option>
						<option id="3" value="Afternoon">Afternoon</option>
					</select><br> -->
                  <!-- =========================== -->
				  <!-- Monday -->
				  <div class="form-group">
					<label class="main-label"  for="monday">Monday :</label><br>
						<label for="" class="form-check-label">Morning</label>
 <!--Morning Checkbox--><input type="checkbox" value="" name="morning" id="" class="form-check-input"> <span class="hr1"> |</span>
						<label for="" class="form-check-label">Afternoon</label> 
<!--Afternoon Checkbox--><input type="checkbox" value="" name="afternoon" id="" class="form-check-input"><span class="hr1"> |</span>
			        	<label for="" class="form-check-label">Evening</label>
 <!--Evening Checkbox--><input type="checkbox" value="" name="evening" id="" class="form-check-input">
				  </div> <br>
				  <!-- Tuesday -->
				  <div class="form-group">
					<label class="main-label"  for="monday">Tuesday :</label><br>
					<label for="" class="form-check-label">Morning</label>
 <!--Morning Checkbox--><input type="checkbox" value="" name="morning" id="" class="form-check-input"> <span class="hr1"> |</span>
						<label for="" class="form-check-label">Afternoon</label> 
<!--Afternoon Checkbox--><input type="checkbox" value="" name="afternoon" id="" class="form-check-input"><span class="hr1"> |</span>
			        	<label for="" class="form-check-label">Evening</label>
 <!--Evening Checkbox--><input type="checkbox" value="" name="evening" id="" class="form-check-input">
				  </div> <br>
				  <!-- Wednesday -->
				  <div class="form-group">
					<label class="main-label"  for="monday">Wednesday :</label><br>
					<label for="" class="form-check-label">Morning</label>
 <!--Morning Checkbox--><input type="checkbox" value="" name="morning" id="" class="form-check-input"> <span class="hr1"> |</span>
						<label for="" class="form-check-label">Afternoon</label> 
<!--Afternoon Checkbox--><input type="checkbox" value="" name="afternoon" id="" class="form-check-input"><span class="hr1"> |</span>
			        	<label for="" class="form-check-label">Evening</label>
 <!--Evening Checkbox--><input type="checkbox" value="" name="evening" id="" class="form-check-input">
				  </div> <br>
				  <!-- Thursday -->
				  <div class="form-group">
					<label class="main-label"  for="monday">Thursday :</label><br>
					<label for="" class="form-check-label">Morning</label>
 <!--Morning Checkbox--><input type="checkbox" value="" name="morning" id="" class="form-check-input"> <span class="hr1"> |</span>
						<label for="" class="form-check-label">Afternoon</label> 
<!--Afternoon Checkbox--><input type="checkbox" value="" name="afternoon" id="" class="form-check-input"><span class="hr1"> |</span>
			        	<label for="" class="form-check-label">Evening</label>
 <!--Evening Checkbox--><input type="checkbox" value="" name="evening" id="" class="form-check-input">
				  </div> <br>
				  <!-- Friday -->
				  <div class="form-group">
					<label class="main-label"  for="monday">Friday :</label><br>
					<label for="" class="form-check-label">Morning</label>
 <!--Morning Checkbox--><input type="checkbox" value="" name="morning" id="" class="form-check-input"> <span class="hr1"> |</span>
						<label for="" class="form-check-label">Afternoon</label> 
<!--Afternoon Checkbox--><input type="checkbox" value="" name="afternoon" id="" class="form-check-input"><span class="hr1"> |</span>
			        	<label for="" class="form-check-label">Evening</label>
 <!--Evening Checkbox--><input type="checkbox" value="" name="evening" id="" class="form-check-input">
				  </div> <br>
				  <!-- Saturday -->
				  <div class="form-group">
					<label class="main-label"  for="monday">Saturday :</label><br>
					<label for="" class="form-check-label">Morning</label>
 <!--Morning Checkbox--><input type="checkbox" value="" name="morning" id="" class="form-check-input"> <span class="hr1"> |</span>
						<label for="" class="form-check-label">Afternoon</label> 
<!--Afternoon Checkbox--><input type="checkbox" value="" name="afternoon" id="" class="form-check-input"><span class="hr1"> |</span>
			        	<label for="" class="form-check-label">Evening</label>
 <!--Evening Checkbox--><input type="checkbox" value="" name="evening" id="" class="form-check-input">
				  </div> <br>
				  <!-- Sunday -->
				  <div class="form-group">
					<label class="main-label"  for="monday">Sunday :</label><br>
					<label for="" class="form-check-label">Morning</label>
 <!--Morning Checkbox--><input type="checkbox" value="" name="morning" id="" class="form-check-input"> <span class="hr1"> |</span>
						<label for="" class="form-check-label">Afternoon</label> 
<!--Afternoon Checkbox--><input type="checkbox" value="" name="afternoon" id="" class="form-check-input"><span class="hr1"> |</span>
			        	<label for="" class="form-check-label">Evening</label>
 <!--Evening Checkbox--><input type="checkbox" value="" name="evening" id="" class="form-check-input">
				  </div><br>
				  <div class="w-md-50">
			     	<div class="col-lg-6 col-md-6">
				       <div class="form-group">
			         	<label for="">Extra Information</label><br>
			         	<textarea name="extrainformation" id="" cols="" class="form-control" rows="5"></textarea>
			           </div>
				    </div>
			     </div>
                  <!-- =========================== -->
				</div>


<br><br><br>
				<button type="submit" name="pick_btn" class="btn ms-md-5 btn-dark mt-1">Update </button>

	</div>




		</div>
	</form>
</div>
</div>
<!-- Courses End -->

<?php 
    include 'footer.php';
?>
<style>
	#list {
		padding: 5px;
		border: none;
		width: 50%;
		/* text-align:center; */
		border-radius: 10px;
		background-color: #e3e4e6;
		appearance: none;
		box-shadow: 1px 3px 15px 3px grey;
	}
	.availability-head{
   font-size: 19px;
	}
	.complete-bit{
		font-size: 25px;
	}
	.main-label{
		font-size: 20px;
		color: black;
	}
	.form-check-input{
	 /* font-size: 30px !important; */
	 width: 17px;
	 height: 17px;
	}
	/* .col-lg-6,.row{
		border: 1px solid red;
	} */
	/* .hr1{} */
	.mt1{
		margin-top: -20px;
	}
	.btn-dark{
		background-color: rgb(43, 41, 41);
		outline: none;
		border: none !important;
		border-radius: 10px !important;
	}
	.btn-dark:hover{
		transition: all 0.5s ease-in-out;
		background-color: black !important;
	}
 /* ======courses====== */
 .course-icon  .course-icon__label{
       box-shadow: 0px 0px 15px 0.7px rgb(224, 217, 217);
        margin-left:-85px !important;
    }
    .course-icon .svg-automatic-transmission{
        margin-left: -170px !important;
        border-radius: 50%;
        margin-top:-16px;
       /* box-shadow: 0px 0px 15px 0.3px gray; */
       
    }
    .course-icons__wrapper h4{
        /* margin-left: 0px; */
        position: absolute;
    }
	
</style>