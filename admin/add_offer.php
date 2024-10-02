<?php 
	include 'header.php';
    if(isset($_POST['submit'])){
    
  
        $offer_name = $_POST['offer_name'];
        $offer_time = $_POST['offer_time'];
        $offer_price = $_POST['offer_price'];
        // $product_img = $_POST['product_img'];


        $sql = "INSERT INTO offer (offer_name,offer_time,offer_price) value ('{$offer_name}','{$offer_time}','{$offer_price}')";
       
      if(mysqli_query($con,$sql)){
        $_SESSION['error'] = error('success','Offer added successfully.');
        header("location:add_offer.php");
    }
    }
?>


<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-0"></div>
		<div class="col-lg-6 col-md-6 col-12">
			<center><h2>Add New Offer</h2></center>
            <?php include 'error.php'; ?>
            <br>
           
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
           
            <div class="form-group mt-2">
			
            <label>Offer Title</label>
			
                <input type="text" name="offer_name" class="form-control" placeholder="Enter Offer Name" required>
			
          </div>
              
          <div class="form-group mt-2">
		
				   
                 <input type="hidden" value="1" class="form-control" placeholder="Enter offer hours" name="offer_time">

		  </div>
         
          
          <div class="form-group mt-2">
		
              <label>Offer price</label>
					<!--<input type="email" name="product_price" class="form-control" placeholder="Enter your product Price" required>-->
                    <div class="input-group">
                           <span class="input-group-text">£</span>
                           <input type="number" class="form-control" placeholder="Enter product price" name="offer_price">
                    </div>
				</div>
              
                <center><button type="submit" name="submit" onClick='return confirm("Confirm to Add this offer?")' class="btn btn-dark btn-lg mt-3">Add offer</button></center>
            </form>
        </div>
    </div>
</div>
	

<?php 
	include 'footer.php';
?>