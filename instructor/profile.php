<?php 
	include 'header.php';
?>

<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-3 col-md-3 col-0"></div>
		<div class="col-lg-6 col-md-6 col-12">
		    <center>
		        <h1>Personal Information</h1>
		        <?php include 'error.php'; ?>
		    </center>
		    <form method="POST">
		        <div class="row">
		            <div class="col-lg-6 col-md-6 col-12">
		                <div class="form-group">
		                    <label>First Name</label>
		                    <input type="text" class="form-control" name="first_name" value="<?php echo $current_user['first_name'] ?>" placeholder="Enter Your First Name" required="">
		                </div>
		            </div>
		            <div class="col-lg-6 col-md-6 col-12">
		                <div class="form-group">
		                    <label>Last Name</label>
		                    <input type="text" class="form-control" name="last_name" value="<?php echo $current_user['last_name'] ?>" placeholder="Enter Your Last Name" required="">
		                </div>
		            </div>
		        </div>
		        <div class="form-group">
		            <label>Email</label>
		            <input type="email" class="form-control" name="email" placeholder="Enter Your Email" value="<?php echo $current_user['email'] ?>" required="">
		        </div>
		        <div class="form-group">
		            <label>Address</label>
		            <input type="text" class="form-control" name="address" placeholder="Enter Your Address" value="<?php echo $current_user['address'] ?>" required="">
		        </div>
		        <div class="form-group">
		            <label>Country</label>
		            <input type="text" class="form-control" name="country" placeholder="Enter Your Country Name" value="<?php echo $current_user['country'] ?>" required="">
		        </div>
		        <div class="form-group">
		            <label>Phone</label>
		            <input type="text" class="form-control" name="phone" placeholder="Enter Your Phone Number" value="<?php echo $current_user['phone'] ?>" required="">
		        </div>
		        <center>
		            <button type="submit" class="btn btn-dark mt-3" name="btn">Update</button>
		        </center>
		    </form>
		</div>
<?php 
    if(isset($_POST['btn'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $country = $_POST['country'];
        $phone = $_POST['phone'];
        
        $update = "update instructor_registration set first_name = '$first_name', last_name = '$last_name', email = '$email', address = '$address', country = '$country', phone = '$phone' where id = '".$current_user['id']."' ";
        $run = mysqli_query($con, $update);
        if(!$run){
            echo mysqli_error($con);
        }else{
            $_SESSION['error'] = error('success', 'Personal information updated  successfully');
            header("location:profile.php");
        }
    }
?>
        <div class="col-lg-3 col-md-3 col-0"></div>
	</div>		
</div>

<?php 
	include 'footer.php';
?>