<?php 
	include 'header.php';
?>

<div class="container-fluid">
	<div class="row">
	    <center>
	        <h2>Add Progress</h2>
			<?php include 'error.php'; ?>
		</center>
		<div class="col-lg-4 col-md-4 col-0"></div>
		<div class="col-lg-4 col-md-4 col-12 r-1">
			
				
						<?php 
							$pid = $_SESSION['pid'];
							$select = "select * from subject where id = '1'";
							$res = mysqli_query($con, $select);
							$data = mysqli_fetch_array($res);
							
							$select1 = "select * from progress where id = '$pid'";
							$res1 = mysqli_query($con, $select1);
							$data1 = mysqli_fetch_array($res1);
						?>
				<form method="POST">
					<div class="form-group">
						    <br>
						    <input type="text" readonly="" value=" <?php echo $data['subject1'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress1" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress1'] ?>"><?php echo $data1['progress1'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value=" <?php echo $data['subject2'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress2" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress2'] ?>"><?php echo $data1['progress2'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value=" <?php echo $data['subject3'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress3" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress3'] ?>"><?php echo $data1['progress3'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value=" <?php echo $data['subject4'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress4" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress4'] ?>"><?php echo $data1['progress4'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value=" <?php echo $data['subject5'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress5" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress5'] ?>"><?php echo $data1['progress5'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value=" <?php echo $data['subject6'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress6" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress6'] ?>"><?php echo $data1['progress6'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject7'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress7" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress7'] ?>"><?php echo $data1['progress7'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value=" <?php echo $data['subject8'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress8" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress8'] ?>"><?php echo $data1['progress8'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value=" <?php echo $data['subject9'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress9" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress9'] ?>"><?php echo $data1['progress9'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject10'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress10" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress10'] ?>"><?php echo $data1['progress10'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject11'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress11" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress11'] ?>"><?php echo $data1['progress11'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value=" <?php echo $data['subject12'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress12" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress12'] ?>"><?php echo $data1['progress12'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject13'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress13" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress13'] ?>"><?php echo $data1['progress13'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject14'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress14" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress14'] ?>"><?php echo $data1['progress14'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject15'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress15" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress15'] ?>"><?php echo $data1['progress15'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject16'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress16" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress16'] ?>"><?php echo $data1['progress16'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject17'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress17" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress17'] ?>"><?php echo $data1['progress17'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject18'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress18" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress18'] ?>"><?php echo $data1['progress18'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject19'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress19" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress19'] ?>"><?php echo $data1['progress19'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject20'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress20" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress20'] ?>"><?php echo $data1['progress20'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value=" <?php echo $data['subject21'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress21" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress21'] ?>"><?php echo $data1['progress21'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject22'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress22" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress22'] ?>"><?php echo $data1['progress22'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject23'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress23" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress23'] ?>"><?php echo $data1['progress23'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject24'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress24" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress24'] ?>"><?php echo $data1['progress24'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject25'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress25" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress25'] ?>"><?php echo $data1['progress25'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject26'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress26" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress26'] ?>"><?php echo $data1['progress26'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject27'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress27" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress27'] ?>"><?php echo $data1['progress27'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject28'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress28" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress28'] ?>"><?php echo $data1['progress28'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject29'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress29" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress29'] ?>"><?php echo $data1['progress29'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject30'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress30" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress30'] ?>"><?php echo $data1['progress30'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject31'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress31" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress31'] ?>"><?php echo $data1['progress31'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject32'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress32" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress32'] ?>"><?php echo $data1['progress32'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject33'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress33" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress33'] ?>"><?php echo $data1['progress33'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject34'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress34" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress34'] ?>"><?php echo $data1['progress34'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value=" <?php echo $data['subject35'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress35" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress35'] ?>"><?php echo $data1['progress35'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject36'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress36" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress36'] ?>"><?php echo $data1['progress36'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject37'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress37" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress37'] ?>"><?php echo $data1['progress37'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject38'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress38" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress38'] ?>"><?php echo $data1['progress38'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject39'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress39" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress39'] ?>"><?php echo $data1['progress39'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject40'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress40" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress40'] ?>"><?php echo $data1['progress40'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject52'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress52" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress52'] ?>"><?php echo $data1['progress52'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject41'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress41" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress41'] ?>"><?php echo $data1['progress41'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject42'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress42" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress42'] ?>"><?php echo $data1['progress42'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject43'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress43" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress43'] ?>"><?php echo $data1['progress43'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject44'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress44" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress44'] ?>"><?php echo $data1['progress44'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject45'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress45" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress45'] ?>"><?php echo $data1['progress45'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject46'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress46" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress46'] ?>"><?php echo $data1['progress46'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value=" <?php echo $data['subject47'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress47" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress47'] ?>"><?php echo $data1['progress47'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject48'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress48" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress48'] ?>"><?php echo $data1['progress48'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject49'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress49" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress49'] ?>"><?php echo $data1['progress49'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject50'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress50" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress50'] ?>"><?php echo $data1['progress50'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <input type="text" readonly="" value="<?php echo $data['subject51'] ?>" class="form-control text-dark mt-5">
                            <select id="list" name="progress51" class="mt-1">
                                <option id="lable" value="<?php echo $data1['progress51'] ?>"><?php echo $data1['progress51'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
						    <button type="submit" name="btn" class="btn btn-dark mt-2">Update</button>
					</div>
			    </form>
		</div>
<?php 
    if(isset($_POST['btn'])){
        $progress1 = $_POST['progress1'];
        $progress2 = $_POST['progress2'];
        $progress3 = $_POST['progress3'];
        $progress4 = $_POST['progress4'];
        $progress5 = $_POST['progress5'];
        $progress6 = $_POST['progress6'];
        $progress7 = $_POST['progress7'];
        $progress8 = $_POST['progress8'];
        $progress9 = $_POST['progress9'];
        $progress10 = $_POST['progress10'];
        $progress11 = $_POST['progress11'];
        $progress12 = $_POST['progress12'];
        $progress13 = $_POST['progress13'];
        $progress14 = $_POST['progress14'];
        $progress15 = $_POST['progress15'];
        $progress16 = $_POST['progress16'];
        $progress17 = $_POST['progress17'];
        $progress18 = $_POST['progress18'];
        $progress19 = $_POST['progress19'];
        $progress20 = $_POST['progress20'];
        $progress21 = $_POST['progress21'];
        $progress22 = $_POST['progress22'];
        $progress23 = $_POST['progress23'];
        $progress24 = $_POST['progress24'];
        $progress25 = $_POST['progress25'];
        $progress26 = $_POST['progress26'];
        $progress27 = $_POST['progress27'];
        $progress28 = $_POST['progress28'];
        $progress29 = $_POST['progress29'];
        $progress30 = $_POST['progress30'];
        $progress31 = $_POST['progress31'];
        $progress32 = $_POST['progress32'];
        $progress33 = $_POST['progress33'];
        $progress34 = $_POST['progress34'];
        $progress35 = $_POST['progress35'];
        $progress36 = $_POST['progress36'];
        $progress37 = $_POST['progress37'];
        $progress38 = $_POST['progress38'];
        $progress39 = $_POST['progress39'];
        $progress40 = $_POST['progress40'];
        $progress41 = $_POST['progress41'];
        $progress42 = $_POST['progress42'];
        $progress43 = $_POST['progress43'];
        $progress44 = $_POST['progress44'];
        $progress45 = $_POST['progress45'];
        $progress46 = $_POST['progress46'];
        $progress47 = $_POST['progress47'];
        $progress48 = $_POST['progress48'];
        $progress49 = $_POST['progress49'];
        $progress50 = $_POST['progress50'];
        $progress51 = $_POST['progress51'];
        $progress52 = $_POST['progress52'];
        
        $update = "update `progress` set progress1 = '$progress1', progress2 = '$progress2', progress3 = '$progress3', progress4 = '$progress4', progress5 = '$progress5', progress6 = '$progress6', progress7 = '$progress7', progress8 = '$progress8', progress9 = '$progress9', progress10 = '$progress10', progress11 = '$progress11', progress12 = '$progress12', progress13 = '$progress13', progress14 = '$progress14', progress15 = '$progress15', progress16 = '$progress16', progress17 = '$progress17', progress18 = '$progress18', progress19 = '$progress19', progress20 = '$progress20', progress21 = '$progress21', progress22 = '$progress22', progress23 = '$progress23', progress24 = '$progress24', progress25 = '$progress25', progress26 = '$progress26', progress27 = '$progress27', progress28 = '$progress28', progress29 = '$progress29', progress30 = '$progress30', progress31 = '$progress31', progress32 = '$progress32', progress33 = '$progress33', progress34 = '$progress34', progress35 = '$progress35', progress36 = '$progress36', progress37 = '$progress37', progress38 = '$progress38', progress39 = '$progress39', progress40 = '$progress40', progress41 = '$progress41', progress42 = '$progress42', progress43 = '$progress43', progress44 = '$progress44', progress45 = '$progress45', progress46 = '$progress46', progress47 = '$progress47', progress48 = '$progress48', progress49 = '$progress49', progress50 = '$progress50', progress51 = '$progress51', progress52 = '$progress52' where id = '$pid'";
        $run = mysqli_query($con, $update);
        if(!$run){
            echo mysqli_error($con);
        }else{
            $_SESSION['error'] = error('success', 'Progress updated successfully.');
            header("location:manage_progress.php");
        }
    }
?>
		<div class="col-lg-4 col-md-4 col-0"></div>
	</div>		
</div>

<?php 
	include 'footer.php';
?>