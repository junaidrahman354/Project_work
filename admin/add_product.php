<?php 
	include 'header.php';
    if(isset($_POST['submit'])){
    
   $file_name = $_FILES['product_img']['name'];
   $file_size = $_FILES['product_img']['size'];
   $file_tmp = $_FILES['product_img']['tmp_name'];
   $file_type = $_FILES['product_img']['type'];
   $target = "img/" . $file_name;
 move_uploaded_file($file_tmp,$target);
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        // $product_img = $_POST['product_img'];


        $sql = "INSERT INTO shop (product_name,product_price,product_img) value ('{$product_name}','{$product_price}','{$file_name}')";
       
      if(mysqli_query($con,$sql)){
        $_SESSION['error'] = error('success','Review delete successfully.');
        header("location:add_product.php");
    }
    }
?>


<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-0"></div>
		<div class="col-lg-6 col-md-6 col-12">
			<center><h2>Add New Product</h2></center>
            <?php include 'error.php'; ?>
            <br>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
               <div class="form-group mt-2">
					<label>Product Title</label>
					<input type="text" name="product_name" class="form-control" placeholder="Enter your product Name" required>
				</div>
                <div class="form-group mt-2">
					<label>Product Price</label>
					<!--<input type="email" name="product_price" class="form-control" placeholder="Enter your product Price" required>-->
                    <div class="input-group">
                           <span class="input-group-text">£</span>
                           <input type="number" class="form-control" placeholder="Enter your product Price" name="product_price">
                    </div>
				</div>
                <div class="form-group mt-2">
					<label>Product Image</label>
					<input type="file" name="product_img" class="form-control" accept='image/*' required>
				</div>
                <center><button type="submit" name="submit" onClick='return confirm("Confirm to Add this product?")' class="btn btn-dark btn-lg mt-3">Add Product</button></center>
            </form>
        </div>
    </div>
</div>
	

<?php 
	include 'footer.php';
?>