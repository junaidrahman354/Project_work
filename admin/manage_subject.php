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
                                <th>Subject</th>
                                <th>Date</th>
                                <th>Delete</th>
                                
                            </tr>
                        </thead>
                        <tbody>
<?php 
	$x = 1;
	$select = "select * from subject";
	$res = mysqli_query($con,$select);
	while($data = mysqli_fetch_array($res)){
?>
                                <tr>
                                    <td><?php echo $x; ?></td>
                                    <td><?php echo $data['subject'] ?></td>
                                    <td><?php echo $data['date'] ?></td>
                                    <td><a href="manage_subject.php?id=<?php echo $data['id'] ?>&action=delete" class="btn btn-primary">Delete</a></td>
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
        if($_GET['action'] == 'delete'){
            $delete = "delete from subject where id = '".$_GET['id']."'";
            $run = mysqli_query($con, $delete);
            if($run){
                $_SESSION['error'] = error('success','Subject delete successfully.');
                header("location:manage_subject.php");
            }
        }
	}
?>
         </div>
</div> 

<?php 
	include 'footer.php';
?>