<?php 
	include 'header.php';
?>
		<div class="container">
<div class="row header">
                <div class="widget-heading">
                    <h5 class="" style="color: black !important"> Add Progress</h5>
                </div>
                <?php include 'error.php'; ?>
                <div class="widget-content widget-content-area table_area br-6">
                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email </th>
                                <th>Add</th>
                                
                            </tr>
                        </thead>
                        <tbody>
<?php 
	$x = 1;
	$select = "select * from user_registration";
	$res = mysqli_query($con,$select);
	while($data = mysqli_fetch_array($res)){
	    $select2 = "select * from progress where user_id = '".$data['id']."'";
	    $res2 = mysqli_query($con, $select2);
	    $data2 = mysqli_fetch_array($res2);
	    if($data['id'] != $data2['user_id']){
?>
                                <tr>
                                    <td><?php echo $x; ?></td>
                                    <td><?php echo $data['first_name'] ?></td>
                                    <td><?php echo $data['last_name'] ?></td>
                                    <td><?php echo $data['email'] ?></td>
                                    <td><a href="add_progress.php?id=<?php echo $data['id'] ?>&action=add" class="btn btn-primary">Add</a></td>
                                </tr>
<?php 
	    }
	$x++;
}
?>                                
                            </tbody>
                        </table>
                    </div>
<?php 
	if(isset($_GET['action'])){
        if($_GET['action'] == 'add'){
           $_SESSION['id'] = $_GET['id'];
           header("location:add_progress_query.php");
        }
	}
?>
         </div>
</div> 
<?php 
	include 'footer.php';
?>