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
                                <th>Sr#</th>
                                <th>Title</th>
                                <th>Amount</th>
                                <th>Hours</th>
                                <th>Details</th>
                                <th>Best Seller</th>
                                <th>Courses</th>
                                <th>Update</th>
                                <th>Delete</th>
                                
                            </tr>
                        </thead>
                        <tbody>
<?php 
	$x = 1;
	$select = "select * from courses";
	$res = mysqli_query($con,$select);
	while($data = mysqli_fetch_array($res)){
?>
                                <tr>
                                    <td><?php echo $x; ?></td>
                                    <td><?php echo $data['title'] ?></td>
                                    <td><?php echo $data['amount'] ?></td>
                                    <td><?php echo $data['time'] ?></td>
                                    <td><?php echo $data['detail'] ?></td>
                                    <td><?php echo $data['best_seller'] ?></td>
                                    <td><?php echo $data['seller'] ?></td>
                                    <td>
                                    	<a href="manage_courses.php?id=<?php echo $data['id'] ?>&action=update" onClick='return confirm("Confirm to update the Course?")' class="btn btn-primary">Update</a>
                                    	
                                    </td>
                                    <td><a href="manage_courses.php?id=<?php echo $data['id'] ?>&action=delete" onClick='return confirm("Confirm to delete this course?")' class="btn btn-primary">Delete</a></td>
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
		if($_GET['action'] == 'update'){
			$_SESSION['course_id'] = $_GET['id'];
            header("location:update_course.php");
		}
        if($_GET['action'] == 'delete'){
            $delete = "delete from courses where id = '".$_GET['id']."'";
            $run = mysqli_query($con, $delete);
            if($run){
                $_SESSION['error'] = error('success','Course delete successfully.');
                header("location:manage_courses.php");
            }
        }
	}
?>
         </div>
</div> 

<?php 
	include 'footer.php';
?>