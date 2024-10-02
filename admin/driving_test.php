<?php 
	include 'header.php';
?>
<style>
    tr th{
        width: auto !important;
    }
 
</style>
		<div class="container">
<div class="row header">
                <div class="widget-heading">
                    <h5 class="" style="color: black !important">Driving Test User</h5>
                </div>
                <?php include 'error.php'; ?>
                <div class="widget-content widget-content-area table_area br-6">
                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr #</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Post Code</th>
                                <th>Phone</th>
                                <th>Location Of Center</th>
                                <th>Near Center</th>
                                <th>Licence Front Pic</th>
                                <th>Licence Back Pic</th> 
                                <th>Cost Price</th>
                                <th>Delete</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody>
                               <?php 
                           
                               $sql = "SELECT * FROM driving_test";
                               $result = mysqli_query($con,$sql) or die();
                               if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){

                              
                               ?>
                                <tr>
                                  <td><?php echo $row['id']; ?></td> 
                                  <td><?php echo $row['name']; ?></td> 
                                  <td><?php echo $row['address']; ?></td> 
                                  <td><?php echo $row['post_code']; ?></td> 
                                  <td><?php echo $row['phone']; ?></td> 
                                  <td><?php echo $row['loc_test_center']; ?></td> 
                                  <td><?php echo $row['near_center']; ?></td> 
                                  <td><?php echo $row['licence_front_pic']; ?></td> 
                                  <td><?php echo $row['licence_back_pic']; ?></td> 
                                  <td><?php echo $row['cost_price']; ?></td> 
                                  <td><a href="driving_test.php?id=<?php echo $row['id'] ?>&action=delete" onClick='return confirm("Confirm to Delete?")' class="btn btn-primary">delete</a></td>
                                  <td><button type="button" data-bs-toggle="modal" data-bs-target="#model_2<?= $row['id']?>"  class="btn btn-primary">View</button></td>
                                  <style>
                                            .modal-body label{
                                             font-weight: bold !important;
                                             font-size: 20px;
                                            }
                                            .modal-body span{
                                                font-size: 16px;
                                                font-family: verdana !important;
                                                border-radius: 5px;
                                            }
                                            .model-img img{
                                                max-width: 220px !important;
                                                max-height:200px;
                                                box-shadow: 0px 0px 15px 0.3px gray;
                                                border-radius: 10px;
                                                }
                                        </style>
                                        <div class="modal fade" id="model_2<?= $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                           <div class="modal-dialog modal-lg modal-dialog-centered">
                                             <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><?php echo $row['name'];?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                             </div>
                                           
                                              <div class="modal-body">
                                               <div class="container">
                                                <div class="row px-lg-5">
                                                    <div class="col-lg-6">
                                                       <label for="">ID  &nbsp;: &nbsp;</label><span><?php echo $row['id']; ?></span><br>
                                                        <label for="">Name &nbsp;:&nbsp;</label> <span><?php echo $row['name'];?></span><br>
                                                        <label for="">Post Code &nbsp;:&nbsp;</label><span><?php echo $row['post_code']; ?></span><br>
                                                        <label for="">Location of cest center &nbsp;:&nbsp;</label><span><?php echo $row['loc_test_center']; ?></span><br>
                                                        
                                                       
                                                      
                                                    </div>
                                                    <div class="col-lg-6">
                                                    <label for="">Password &nbsp;:&nbsp;</label><span><?php echo $row['address']; ?></span><br>
                                                    <label for="">Phone &nbsp;:&nbsp;</label><span><?php echo $row['phone']; ?></span><br>
                                                    <label for="">Any Test Center  &nbsp;:&nbsp;</label><span><?php echo $row['near_center']; ?></span><br>
                                                    <label for="">Cost Price &nbsp;:&nbsp;</label><span><?php echo $row['cost_price']; ?></span><br>                                             
                                                    </div>
                                                    <div class="model-img col-md-6"><br>
                                                    <label for="">Front Picture Of Licence &nbsp;:&nbsp;</label><br><img src="img/<?php echo $row['licence_front_pic'] ?>" alt=""><br>
                                                    </div>
                                                    <div class="model-img col-md-6"><br>
                                                    <label for="">Back Picture Of Licence &nbsp;:&nbsp;</label><br><img src="img/<?php echo $row['licence_back_pic'] ?>" alt=""><br>
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
                                  }
                                }
                                ?>
                               
                            </tbody>
                        </table>
                    </div>
          <?php 
          if(isset($_GET['action'])){
            if($_GET['action'] == 'delete'){
               
                $delete = "delete from driving_test where id = '".$_GET['id']."'";
                $run = mysqli_query($con, $delete);
                $path = unlink("img/" .$row['licence_front_pic']);
                $path1 = unlink("img/" .$row['licence_back_pic']);
                @unlink($path);
                @unlink($path1);
               
                if($run){
                    $_SESSION['error'] = error('success','User delete successfully.');
                    header("location:driving_test.php");
                }
            }
          }
          ?>

         </div>


</div> 

<?php 
	include 'footer.php';
?>