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
                    <h5 class="" style="color: black !important">Reviews</h5>
                </div>
                <?php include 'error.php'; ?>
                <div class="widget-content widget-content-area table_area br-6">
                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>User Id</th>
                                <th>Name</th>
                                <th>Rating</th>
                                <th>Comments</th>
                                <th>Review date</th>
                                <th>Delete</th>
                                                              
                            </tr>
                        </thead>
                        <tbody>
                                 <?php
                                //  $sql = "SELECT * .,user_reviews.id AS id"
                                  $sql = "SELECT user_reviews.id as u_id, user_reviews.user_id, user_reviews.review , user_reviews.desc ,user_reviews.date_review  FROM user_reviews
                                  INNER JOIN user_registration ON user_reviews.user_id = user_registration.id";
                                  
                                  $result = mysqli_query($con,$sql) or die();
                                  if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){

                                 ?>
                                <tr>
                                 
                                    <td><?= $row['u_id'] ?></td>
                                    <!-- <td><// $row['first_name'] . " " . $row['last_name']; ?></td> -->
                                    <td><?= $row['review'] . " Star";?></td>
                                    <td><?= $row['desc'] ?></td>
                                    <td><?= $row['date_review']; ?></td>
                                    <td>
                                        <a href="review.php?id=<?php echo $row['u_id'] ?>&action=delete" onClick='return confirm("Confirm to delete this review?")' class="btn btn-primary">delete</a>
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
            if($_GET['action'] == 'delete'){
               
                $delete = "delete from user_reviews where id = '".$_GET['id']."'";
                $run = mysqli_query($con, $delete);
             
                if($run){
                    $_SESSION['error'] = error('success','Review delete successfully.');
                    header("location:review.php");
                }
            }
          }
          ?>

         </div>


</div> 

<?php 
	include 'footer.php';
?>