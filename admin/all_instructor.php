<?php 
	include 'header.php';
?>

		<div class="container">
<div class="row header">
                <div class="widget-heading">
                    <h5 class="" style="color: black !important"> All Instructors</h5>
                </div>
                <?php include 'error.php'; ?>
                <div class="widget-content widget-content-area table_area br-6">
                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr #</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Country</th>
                                <th>Phone</th> 
                                      <th>Email Status</th> 
                                <th>User Status</th>
                                <th>Date</th>
                                <th>Action</th>
                                <th>Delete</th>
                                
                            </tr>
                        </thead>
                        <tbody>
<?php 
	$x = 1;
	$select = "select * from instructor_registration order by date desc";
	$res = mysqli_query($con,$select);
	while($data = mysqli_fetch_array($res)){
?>
                                <tr>
                                    <td><?php echo $x; ?></td>
                                    <td><?php echo $data['first_name'] ?></td>
                                    <td><?php echo $data['last_name'] ?></td>
                                    <td><?php echo $data['email'] ?></td>
                                    <td><?php echo $data['address'] ?></td>
                                    <td><?php echo $data['country'] ?></td>
                                    <td><?php echo $data['phone'] ?></td>
                                     <td>
          <?php if($data['email_status'] == "Pending" ){
            ?>
            <a href="all_instructor.php?id=<?php echo $data['id'] ?>&action=approve" class="btn btn-primary">Approve</a>
        <?php   } else {  ?>
            <?php echo $data['email_status'] ?>
       <?php }?>
                                    </td>
                                    <td><?php echo $data['user_status'] ?></td>
                                    <td><?php echo $data['date'] ?></td>
                                    <td>
                                    	<?php 
                                    		if($data['user_status'] == 'Active'){
                                    	?>
                                    	<a href="all_instructor.php?id=<?php echo $data['id'] ?>&action=block" onClick='return confirm("Do you want to block this Instructer?")' class="btn btn-primary">Block</a>
                                    	<?php
                                    		}else{
                                    	?>
                                    	<a href="all_instructor.php?id=<?php echo $data['id'] ?>&action=active" class="btn btn-primary">Active</a>
                                    	<?php 
                                    		}
                                    	?>
                                    	
                                    </td>
                                    <td><a href="all_instructor.php?id=<?php echo $data['id'] ?>&action=delete" onClick='return confirm("Approve This User?")' class="btn btn-primary">Delete</a></td>
                                </tr>
<?php 
	$x++;
}
?>                                
                            </tbody>
                        </table>
                    </div>
<?php 
	if(isset($_GET['action'])){
		if($_GET['action'] == 'block'){
			$update = "update instructor_registration set user_status = 'Block' where id = '".$_GET['id']."'";
			$run = mysqli_query($con, $update);
			if($run){
				$_SESSION['error'] = error('success','Instructor block successfully.');
				header("location:all_instructor.php");
			}
		}
		
		   if($_GET['action'] == 'approve'){
			$update = "update instructor_registration set email_status = 'Verified' where id = '".$_GET['id']."'";
			$run = mysqli_query($con, $update);
			if($run){
				$_SESSION['error'] = error('success','Instructor email approved successfully.');
				header("location:all_instructor.php");
			}
		}
		if($_GET['action'] == 'active'){
			$update = "update instructor_registration set user_status = 'Active' where id = '".$_GET['id']."'";
			$run = mysqli_query($con, $update);
			if($run){
				$_SESSION['error'] = error('success','Instructor active successfully.');
				header("location:all_instructor.php");
			}
		}
        if($_GET['action'] == 'delete'){
            $delete = "delete from instructor_registration where id = '".$_GET['id']."'";
            $run = mysqli_query($con, $delete);
            if($run){
                $_SESSION['error'] = error('success','Instructor delete successfully.');
                header("location:all_instructor.php");
            }
        }
	}
?>
         </div>
</div> 

<?php 
	include 'footer.php';
?>