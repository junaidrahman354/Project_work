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
                                <th>Phone</th>
                                <th>Email Status</th>
                                <th>User Status</th>
                                <th>Date</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
<?php 
	$x = 1;
	$select = "select * from user_registration";
	$res = mysqli_query($con,$select);
	while($data = mysqli_fetch_array($res)){
?>
                                <tr>
                                    <td><?php echo $x; ?></td>
                                    <td><?php echo $data['first_name'] ?></td>
                                    <td><?php echo $data['last_name'] ?></td>
                                    <td><?php echo $data['email'] ?></td>
                                    <td><?php echo $data['country'] ?></td>
                                    <td><?php echo $data['phone'] ?></td>
                                    <td><?php echo $data['email_status'] ?></td>
                                    <td><?php echo $data['user_status'] ?></td>
                                    <td><?php echo $data['date'] ?></td>
                                    <td><a class="btn btn-primary" href="all_user.php?id=<?php echo $data['id'] ?>&action=next">Send Message</a></td>
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
		if($_GET['action'] == 'next'){
			$_SESSION['id'] = $_GET['id'];
			header("location:send-message.php");
		}
	}
?>
         </div>
</div> 

<?php 
	include 'footer.php';
?>