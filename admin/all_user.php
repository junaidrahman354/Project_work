<?php 
	include 'header.php';
   ?>

		<div class="container">
<div class="row header">
                <div class="widget-heading">
                    <h5 class="" style="color: black !important"> All Users</h5>
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
                                <th>Country</th>
                                <th>Assigned Instructer</th>
                                <th>Phone</th>
                                <th>Email Status</th>
                                <th>User Status</th>
                                <th>Date</th>
                                <th>Action</th>
                                <th>Delete</th>
                                <th>View Profile</th>
                                
                            </tr>
                        </thead>
                        <tbody>
<?php 
	$x = 1;
	$select = "select * from user_registration order by date desc";
	$res = mysqli_query($con,$select);
	while($data = mysqli_fetch_array($res)){
?>
                                <tr>
                                    <td><?php echo $x; ?></td>
                                    <td><?php echo $data['first_name'] ?></td>
                                    <td><?php echo $data['last_name'] ?></td>
                                    <td><?php echo $data['email'] ?></td>
                                    <td><?php echo $data['country'] ?></td>
                                  
                                    <td>
                                    <?php
                                    $sql = "SELECT id, first_name , last_name FROM instructor_registration";
                                    $result = mysqli_query($con,$sql) or die;
                                    if(mysqli_num_rows($result) > 0){
                                       
            
                                    ?>
                                        <select style="width:130px;"  onchange="InstructerStudent()" class="form-select" name="" id="change">
                                            <option  value="" disabled selected>Select</option>
                                            <?php  while($row = mysqli_fetch_assoc($result)){ ?>
                                            <option id="change2" value="<?= $row['id']; ?>" ><?php echo $row['first_name'] . " " . $row['last_name'];?></option>
                                            <?php  } ?>
                                        </select>
                                            <?php } 
                                            
                                            ?>

                                    </td>
                                   
                                    <td><?php echo $data['phone'] ?></td> 
                                       
                                    <td>
          <?php if($data['email_status'] == "Pending" ){
            ?>
            <a href="all_user.php?id=<?php echo $data['id'] ?>&action=approve" onClick='return confirm("Approve This User?")' class="btn btn-primary">Approve</a>
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
                                    	<a href="all_user.php?id=<?php echo $data['id'] ?>&action=block" onClick='return confirm("Do you want to block this User?")' class="btn btn-primary">Block</a>
                                    	<?php
                                    		}else{
                                    	?>
                                    	<a href="all_user.php?id=<?php echo $data['id'] ?>&action=active" class="btn btn-primary">Active</a>
                                    	<?php 
                                    		}
                                    	?>
                                    	
                                    </td>
                                    <td><a href="all_user.php?id=<?php echo $data['id'] ?>&action=delete" onClick='return confirm("Do you want to delete this User?")' class="btn btn-primary">Delete</a></td>
                                    <!-- <td><a href="all_user.php?id=" onClick='return confirm("Do you want to see profile?")' class="btn btn-primary">view</a></td> -->
                                    <td><button class="button btn btn-primary sweet" type="button" data-bs-toggle="modal" data-bs-target="#model_2<?= $data['id']?>">View</button></td>
                                        <!-- ==== -->
                                        <style>
                                            .modal-body label{
                                             font-weight: bold !important;
                                             font-size: 20px;
                                            }
                                            .modal-body span{
                                                /* background-color:gray; */
                                                /* padding: 10px; */
                                                font-size: 16px;
                                                font-family: verdana !important;
                                                border-radius: 5px;
                                            }
                                        </style>
                                        <div class="modal fade" id="model_2<?= $data['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                           <div class="modal-dialog modal-lg modal-dialog-centered">
                                             <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $data['first_name']. " " . $data['last_name']; ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                             </div>
                                           
                                              <div class="modal-body">
                                               <div class="container">
                                                <div class="row p-lg-5">
                                                    <div class="col-lg-6">
                                                       <label for="">ID  &nbsp;: &nbsp;</label><span><?php echo $data['id']; ?></span><br>
                                                        <label for="">Name &nbsp;:&nbsp;</label> <span><?php echo $data['first_name'] . " " . $data['last_name']; ?></span><br>
                                                        <label for="">Email &nbsp;:&nbsp;</label><span><?php echo $data['email']; ?></span><br>
                                                        <label for="">Address &nbsp;:&nbsp;</label><span><?php echo $data['address']; ?></span><br>
                                                        <label for="">Country &nbsp;:&nbsp;</label><span><?php echo $data['country']; ?></span><br>
                                                        <label for="">Phone &nbsp;:&nbsp;</label><span><?php echo $data['phone']; ?></span><br>
                                                        <label for="">Drop City &nbsp;:&nbsp;</label><span><?php echo $data['drop_city']; ?></span><br>
                                                        <label for="">Email Code &nbsp;:&nbsp;</label><span><?php echo $data['email_code']; ?></span><br>
                                                        <label for="">Email Status &nbsp;:&nbsp;</label><span><?php echo $data['email_status']; ?></span><br>
                                                      
                                                    </div>
                                                    <div class="col-lg-6">
                                                    <label for="">Password &nbsp;:&nbsp;</label><span><?php echo $data['password']; ?></span><br>
                                                    <label for="">Pick Address &nbsp;:&nbsp;</label><span><?php echo $data['pick_address']; ?></span><br>
                                                    <label for="">Pick City &nbsp;:&nbsp;</label><span><?php echo $data['pick_city']; ?></span><br>
                                                    <label for="">Pick Postcode &nbsp;:&nbsp;</label><span><?php echo $data['pick_postcode']; ?></span><br>
                                                    <label for="">Drop Address &nbsp;:&nbsp;</label><span><?php echo $data['drop_address']; ?></span><br>
                                                    <label for="">Date &nbsp;:&nbsp;</label><span><?php echo $data['date']; ?></span><br>
                                                    <label for="">Comments &nbsp;:&nbsp;</label><span><?php echo $data['cmnts']; ?></span><br>
                                                    <label for="">Instructer &nbsp;:&nbsp;</label><span><?php echo $data['instructer']; ?></span><br>
                                                    <label for="">User Status &nbsp;:&nbsp;</label><span><?php echo $data['user_status']; ?></span><br>
                                                     
                                                    </div>
                                                </div>
                                               </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!-- ==== -->
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
			$update = "update user_registration set user_status = 'Block' where id = '".$_GET['id']."'";
			$run = mysqli_query($con, $update);
			if($run){
				$_SESSION['error'] = error('success','User block successfully.');
				header("location:all_user.php");
			}
		}
		
		  if($_GET['action'] == 'approve'){
			$update = "update user_registration set email_status = 'Verified' where id = '".$_GET['id']."'";
			$run = mysqli_query($con, $update);
			if($run){
				$_SESSION['error'] = error('success','User email approved successfully.');
				header("location:all_user.php");
			}
		}
		if($_GET['action'] == 'active'){
			$update = "update user_registration set user_status = 'Active' where id = '".$_GET['id']."'";
			$run = mysqli_query($con, $update);
			if($run){
				$_SESSION['error'] = error('success','User active successfully.');
				header("location:all_user.php");
			}
		}
        if($_GET['action'] == 'delete'){
            $delete = "delete from user_registration where id = '".$_GET['id']."'";
            $run = mysqli_query($con, $delete);
            if($run){
                $_SESSION['error'] = error('success','User delete successfully.');
                header("location:all_user.php");
            }
        }
	}
?>

    
        </div>
        <script type="text/javascript">
            function InstructerStudent(){
               $id = document.getElementById("change").value;
              
                alert($id);
            }
        </script>
</div> 

<?php 
	include 'footer.php';
?>