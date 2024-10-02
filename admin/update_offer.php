<?php 
	include 'header.php';
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $offer_name = $_POST['offer_name'];
        $offer_time = $_POST['offer_time'];
        $offer_price = $_POST['offer_price'];
        $sql = "update offer set offer_name = '$offer_name',offer_time = '$offer_time',offer_price = '$offer_price' where id = '$id'";
        $result = mysqli_query($con,$sql) or die("Query Failed!");            header("Location: manage_offer.php");
           
    }
  ?>


<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-0"></div>
		<div class="col-lg-6 col-md-6 col-12">
			<center><h2>Update Offer</h2></center>
            <?php include 'error.php'; ?>
            <br>
            <?php 
            $id = $_GET['id'];
            $sql1 = "SELECT * FROM offer WHERE id = '$id'";
            $result1 = mysqli_query($con,$sql1) or die();
            if(mysqli_num_rows($result1) > 0){
            while($row1 = mysqli_fetch_assoc($result1)){
            ?>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <input type="hidden" name="id"  class="form-control" value="<?php echo $row1['id'];?>" placeholder="">
            </div>   
            <div class="form-group mt-2">
					<label>Offer Title</label>
					<input type="text" name="offer_name" value="<?php echo $row1['offer_name']; ?>" class="form-control"  required>
				</div>
                <div class="form-group mt-2">
				
                          
                           <input type="hidden" value="1" class="form-control" value="<?php echo $row1['offer_time']; ?>"  name="offer_time">
                   
				</div>
                <div class="form-group mt-2">
					<label>Offer hours</label>
					<!--<input type="email" name="product_price" class="form-control" placeholder="Enter your product Price" required>-->
                    <div class="input-group">
                           <span class="input-group-text">£</span>
                           <input type="number" class="form-control" value="<?php echo $row1['offer_price']; ?>"  name="offer_price">
                    </div>
				</div>
              
                <center><button type="submit" name="submit" onClick='return confirm("Confirm to Update this offer?")' class="btn btn-dark btn-lg mt-5">Update Offer</button></center>
            </form>
            <?php 
            }
        }
            ?>
        </div>
    </div>
</div>
	

<?php 
	include 'footer.php';
?>