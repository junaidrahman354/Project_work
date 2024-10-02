<?php 
	include 'header.php';
?>

		<div class="container">
<div class="row header">
                <div class="widget-heading">
                    <h5 class="" style="color: black !important">Manage Products</h5>
                </div>
                <?php include 'error.php'; ?>
                <div class="widget-content widget-content-area table_area br-6">
                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                        <thead>

                            <tr>
                                <th style="width: 50px;">Sr#</th>
                                <th style="width: 150px;">Product Name</th>
                                <th style="width: 40px;">Product Price</th>
                                <th style="width: 90px;">Product Image</th>
                                <th style="width: 20px;">Update</th>
                                <th style="width: 20px;">Delete</th>
                               
                                
                            </tr>
                        </thead>
                        <tbody>
                       <?php 
                       $sql = "SELECT * FROM shop";
                       $result = mysqli_query($con,$sql) or die();
                       if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                      
                       ?>
                            <tr>
                                <td><?= $row['id']; ?></td>
                                <td><?= $row['product_name']; ?></td>
                                <td><?="£ " . $row['product_price']; ?></td>
                                <td><?= $row['product_img']; ?></td>                                    
                                <td>
                                    	<a href="update_product.php?id=<?php echo $row['id']?>" onClick='return confirm("Confirm to update this product?")' class="btn btn-primary">Update</a>
                                    	
                                 </td>

                                <td>
                                    
                                     <a href="manage_product.php?id=<?php echo $row['id'] ?>&action=delete" onClick='return confirm("Confirm to delete this product?")' class="btn btn-primary">Delete</a>
                                    
                                </td>
                             </tr>
                              <?php       
                            }
                           }
                           ?>
                            </tbody>
                        </table>
                    </div>
<?php 
	if(isset($_GET['action'])){
		// if($_GET['action'] == 'update'){
		// 	$_SESSION['product_id'] = $_GET['id'];
        //     header("location:update_product.php");
		// }
        if($_GET['action'] == 'delete'){
            $delete = "delete from shop where id = '".$_GET['id']."'";
            $run = mysqli_query($con, $delete);
            if($run){
                $_SESSION['error'] = error('success','Course delete successfully.');
                header("location:manage_product.php");
            }
        }
	}
?>
         </div>
</div> 

<?php 
	include 'footer.php';
?>