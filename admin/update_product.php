<?php 
	include 'header.php';
  ?>


<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-0"></div>
		<div class="col-lg-6 col-md-6 col-12">
			<center><h2>Update Product</h2></center>
            <?php include 'error.php'; ?>
            <br>
            <?php 
            $id = $_GET['id'];
            $sql1 = "SELECT * FROM shop WHERE id = '$id'";
            $result1 = mysqli_query($con,$sql1) or die();
            if(mysqli_num_rows($result1) > 0){
            while($row1 = mysqli_fetch_assoc($result1)){
            ?>
            <form action="save_update_product.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" name="id"  class="form-control" value="<?php echo $row1['id'];?>" placeholder="">
            </div>   
            <div class="form-group mt-2">
					<label>Product Title</label>
					<input type="text" name="product_name" value="<?php echo $row1['product_name']; ?>" class="form-control"  required>
				</div>
                <div class="form-group mt-2">
					<label>Product Price</label>
					<!--<input type="email" name="product_price" class="form-control" placeholder="Enter your product Price" required>-->
                    <div class="input-group">
                           <span class="input-group-text">£</span>
                           <input type="number" class="form-control" value="<?php echo $row1['product_price']; ?>"  name="product_price">
                    </div>
				</div>
                <div class="form-group mt-2">
					<label>Product Image</label>
                    <input type="file" class="form-control" accept='image/*' name="new_img" id="">
                    <img src="img/<?php echo $row1['product_img'] ;?>" class="mt-2" style="width:150px;height:150px;border-radius:15px;" alt="">
					<input type="hidden" name="old_img" class="form-control" value="<?php $row1['product_img'];?>" accept='image/*'>
				</div>
                <center><button type="submit" name="submit" onClick='return confirm("Confirm to Update this product?")' class="btn btn-dark btn-lg mt-5">Update Product</button></center>
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