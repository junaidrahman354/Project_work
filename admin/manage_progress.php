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
<?php 
    $select2 = "select * from subject";
    $res2 = mysqli_query($con, $select2);
    $data2 = mysqli_fetch_array($res2);
?>
                            <tr>
                                <th>Sr#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                    <th><?php echo $data2['subject1'] ?></th>
                                    <th><?php echo $data2['subject2'] ?></th>
                                    <th><?php echo $data2['subject3'] ?></th>
                                    <th><?php echo $data2['subject4'] ?></th>
                                    <th><?php echo $data2['subject5'] ?></th>
                                    <th><?php echo $data2['subject6'] ?></th>
                                    <th><?php echo $data2['subject7'] ?></th>
                                    <th><?php echo $data2['subject8'] ?></th>
                                    <th><?php echo $data2['subject9'] ?></th>
                                    <th><?php echo $data2['subject10'] ?></th>
                                    <th><?php echo $data2['subject11'] ?></th>
                                    <th><?php echo $data2['subject12'] ?></th>
                                    <th><?php echo $data2['subject13'] ?></th>
                                    <th><?php echo $data2['subject14'] ?></th>
                                    <th><?php echo $data2['subject15'] ?></th>
                                    <th><?php echo $data2['subject16'] ?></th>
                                    <th><?php echo $data2['subject17'] ?></th>
                                    <th><?php echo $data2['subject18'] ?></th>
                                    <th><?php echo $data2['subject19'] ?></th>
                                    <th><?php echo $data2['subject20'] ?></th>
                                    <th><?php echo $data2['subject21'] ?></th>
                                    <th><?php echo $data2['subject22'] ?></th>
                                    <th><?php echo $data2['subject23'] ?></th>
                                    <th><?php echo $data2['subject24'] ?></th>
                                    <th><?php echo $data2['subject25'] ?></th>
                                    <th><?php echo $data2['subject26'] ?></th>
                                    <th><?php echo $data2['subject27'] ?></th>
                                    <th><?php echo $data2['subject28'] ?></th>
                                    <th><?php echo $data2['subject29'] ?></th>
                                    <th><?php echo $data2['subject30'] ?></th>
                                    <th><?php echo $data2['subject31'] ?></th>
                                    <th><?php echo $data2['subject32'] ?></th>
                                    <th><?php echo $data2['subject33'] ?></th>
                                    <th><?php echo $data2['subject35'] ?></th>
                                    <th><?php echo $data2['subject36'] ?></th>
                                    <th><?php echo $data2['subject37'] ?></th>
                                    <th><?php echo $data2['subject38'] ?></th>
                                    <th><?php echo $data2['subject39'] ?></th>
                                    <th><?php echo $data2['subject40'] ?></th>
                                    <th><?php echo $data2['subject41'] ?></th>
                                    <th><?php echo $data2['subject43'] ?></th>
                                    <th><?php echo $data2['subject44'] ?></th>
                                    <th><?php echo $data2['subject45'] ?></th>
                                    <th><?php echo $data2['subject46'] ?></th>
                                    <th><?php echo $data2['subject47'] ?></th>
                                    <th><?php echo $data2['subject48'] ?></th>
                                    <th><?php echo $data2['subject49'] ?></th>
                                    <th><?php echo $data2['subject50'] ?></th>
                                    <th><?php echo $data2['subject51'] ?></th>
                                    <th><?php echo $data2['subject52'] ?></th>
                                    <th><?php echo $data2['subject53'] ?></th>
                                    <th><?php echo $data2['subject54'] ?></th>
                                    <th><?php echo $data2['subject55'] ?></th>
                                    <th><?php echo $data2['subject56'] ?></th>
                                    <th><?php echo $data2['subject57'] ?></th>
                                    <th><?php echo $data2['subject58'] ?></th>
                                    <th><?php echo $data2['subject59'] ?></th>
                                    <th><?php echo $data2['subject60'] ?></th>
                                    <th><?php echo $data2['subject61'] ?></th>
                                    <th><?php echo $data2['subject62'] ?></th>
                                    <th><?php echo $data2['subject63'] ?></th>
                                    <th><?php echo $data2['subject64'] ?></th>
                                    <th><?php echo $data2['subject65'] ?></th>
                                    <th><?php echo $data2['subject66'] ?></th>
                                    <th><?php echo $data2['subject67'] ?></th>
                                    <th><?php echo $data2['subject68'] ?></th>
                                    <th><?php echo $data2['subject69'] ?></th>
                                    <th><?php echo $data2['subject70'] ?></th>
                                <th>Information</th>
                                <th>Personal Comment</th>
                                <th>Date</th>
                                <th>Update</th>
                                <th>Delete</th>
                                
                            </tr>
                        </thead>
                        <tbody>
<?php 
	$ss = 1;
	$select = "select * from progress";
	$res = mysqli_query($con,$select);
	while($data = mysqli_fetch_array($res)){
        $select1 = "select * from user_registration where id = '".$data['user_id']."'";
        $res1 = mysqli_query($con, $select1);
        $data1 = mysqli_fetch_array($res1);
        if($data['id'] != '22'){
?>
                                <tr>
                                    <td><?php echo $ss++; ?></td>
                                    <td><?php echo $data1['first_name'] ?></td>
                                    <td><?php echo $data1['last_name'] ?></td>
                                    <td><?php echo $data1['email'] ?></td>
                                    <td><?php echo $data['progress1'] ?></td>
                                    <td><?php echo $data['progress2'] ?></td>
                                    <td><?php echo $data['progress3'] ?></td>
                                    <td><?php echo $data['progress4'] ?></td>
                                    <td><?php echo $data['progress5'] ?></td>
                                    <td><?php echo $data['progress6'] ?></td>
                                    <td><?php echo $data['progress7'] ?></td>
                                    <td><?php echo $data['progress8'] ?></td>
                                    <td><?php echo $data['progress9'] ?></td>
                                    <td><?php echo $data['progress10'] ?></td>
                                    <td><?php echo $data['progress11'] ?></td>
                                    <td><?php echo $data['progress12'] ?></td>
                                    <td><?php echo $data['progress13'] ?></td>
                                    <td><?php echo $data['progress14'] ?></td>
                                    <td><?php echo $data['progress15'] ?></td>
                                    <td><?php echo $data['progress16'] ?></td>
                                    <td><?php echo $data['progress17'] ?></td>
                                    <td><?php echo $data['progress18'] ?></td>
                                    <td><?php echo $data['progress19'] ?></td>
                                    <td><?php echo $data['progress20'] ?></td>
                                    <td><?php echo $data['progress21'] ?></td>
                                    <td><?php echo $data['progress22'] ?></td>
                                    <td><?php echo $data['progress23'] ?></td>
                                    <td><?php echo $data['progress24'] ?></td>
                                    <td><?php echo $data['progress25'] ?></td>
                                    <td><?php echo $data['progress26'] ?></td>
                                    <td><?php echo $data['progress27'] ?></td>
                                    <td><?php echo $data['progress28'] ?></td>
                                    <td><?php echo $data['progress29'] ?></td>
                                    <td><?php echo $data['progress30'] ?></td>
                                    <td><?php echo $data['progress31'] ?></td>
                                    <td><?php echo $data['progress32'] ?></td>
                                    <td><?php echo $data['progress33'] ?></td>
                                    <td><?php echo $data['progress35'] ?></td>
                                    <td><?php echo $data['progress36'] ?></td>
                                    <td><?php echo $data['progress37'] ?></td>
                                    <td><?php echo $data['progress38'] ?></td>
                                    <td><?php echo $data['progress39'] ?></td>
                                    <td><?php echo $data['progress40'] ?></td>
                                    <td><?php echo $data['progress41'] ?></td>
                                    <td><?php echo $data['progress43'] ?></td>
                                    <td><?php echo $data['progress44'] ?></td>
                                    <td><?php echo $data['progress45'] ?></td>
                                    <td><?php echo $data['progress46'] ?></td>
                                    <td><?php echo $data['progress47'] ?></td>
                                    <td><?php echo $data['progress48'] ?></td>
                                    <td><?php echo $data['progress49'] ?></td>
                                    <td><?php echo $data['progress50'] ?></td>
                                    <td><?php echo $data['progress51'] ?></td>
                                    <td><?php echo $data['progress52'] ?></td>
                                    <td><?php echo $data['progress53'] ?></td>
                                    <td><?php echo $data['progress54'] ?></td>
                                    <td><?php echo $data['progress55'] ?></td>
                                    <td><?php echo $data['progress56'] ?></td>
                                    <td><?php echo $data['progress57'] ?></td>
                                    <td><?php echo $data['progress58'] ?></td>
                                    <td><?php echo $data['progress59'] ?></td>
                                    <td><?php echo $data['progress60'] ?></td>
                                    <td><?php echo $data['progress61'] ?></td>
                                    <td><?php echo $data['progress62'] ?></td>
                                    <td><?php echo $data['progress63'] ?></td>
                                    <td><?php echo $data['progress64'] ?></td>
                                    <td><?php echo $data['progress65'] ?></td>
                                    <td><?php echo $data['progress66'] ?></td>
                                    <td><?php echo $data['progress67'] ?></td>
                                    <td><?php echo $data['progress68'] ?></td>
                                    <td><?php echo $data['progress69'] ?></td>
                                    <td><?php echo $data['progress70'] ?></td>
                                    <td><?php echo $data['information'] ?></td>
                                    <td><?php echo $data['admin_per_info'] ?></td>

                                    <td><?php echo $data['date'] ?></td>
                                    <td><a href="manage_progress.php?pid=<?php echo $data['id'] ?>&action=update" onClick='return confirm("Confirm to Update this progress?")' class="btn btn-primary">Update</a></td>
                                    <td><a href="manage_progress.php?id=<?php echo $data['id'] ?>&action=delete" onClick='return confirm("Confirm to delete this progress?")' class="btn btn-primary">Delete</a></td>
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
	    
	    if($_GET['action'] == 'update'){
            $_SESSION['pid'] = $_GET['pid'];
            header("location:update_progress.php");
        }
	    
        if($_GET['action'] == 'delete'){
            $delete = "delete from progress where id = '".$_GET['id']."'";
            $run = mysqli_query($con, $delete);
            if($run){
                $_SESSION['error'] = error('success','Progress delete successfully.');
                header("location:manage_progress.php");
            }
        }
	}
?>
         </div>
</div> 

<?php 
	include 'footer.php';
?>