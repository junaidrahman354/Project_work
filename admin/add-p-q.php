<?php 
	include 'header.php';
?>

<div class="container-fluid">
	<div class="row">
	    <center>
	        <h2>Add Progress</h2>
			<?php include 'error.php'; ?>
		</center>
		<div class="col-lg-5 col-md-5 col-0"></div>
		<div class="col-lg-2 col-md-2 col-12 r-1">
			
				
						<?php 
							$id = $_SESSION['id'];
							$select = "select * from subject where id = '1'";
							$res = mysqli_query($con, $select);
							$data = mysqli_fetch_array($res);
						?>
				<form method="POST">
					<div class="form-group">
						    <br>
                            <select id="list" name="progress1" class="mt-5">
                                <option id="lable"><?php echo $data['subject1'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress2" class="mt-5">
                                <option id="lable"><?php echo $data['subject2'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress3" class="mt-5">
                                <option id="lable"><?php echo $data['subject3'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress4" class="mt-5">
                                <option id="lable"><?php echo $data['subject4'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress5" class="mt-5">
                                <option id="lable"><?php echo $data['subject5'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress6" class="mt-5">
                                <option id="lable"><?php echo $data['subject6'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress7" class="mt-5">
                                <option id="lable"><?php echo $data['subject7'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress8" class="mt-5">
                                <option id="lable"><?php echo $data['subject8'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress9" class="mt-5">
                                <option id="lable"><?php echo $data['subject9'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress10" class="mt-5">
                                <option id="lable"><?php echo $data['subject10'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress11" class="mt-5">
                                <option id="lable"><?php echo $data['subject11'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress12" class="mt-5">
                                <option id="lable"><?php echo $data['subject12'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress13" class="mt-5">
                                <option id="lable"><?php echo $data['subject13'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress14" class="mt-5">
                                <option id="lable"><?php echo $data['subject14'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress15" class="mt-5">
                                <option id="lable"><?php echo $data['subject15'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress16" class="mt-5">
                                <option id="lable"><?php echo $data['subject16'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress17" class="mt-5">
                                <option id="lable"><?php echo $data['subject17'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress18" class="mt-5">
                                <option id="lable"><?php echo $data['subject18'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress19" class="mt-5">
                                <option id="lable"><?php echo $data['subject19'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress20" class="mt-5">
                                <option id="lable"><?php echo $data['subject20'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress21" class="mt-5">
                                <option id="lable"><?php echo $data['subject21'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress22" class="mt-5">
                                <option id="lable"><?php echo $data['subject22'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress23" class="mt-5">
                                <option id="lable"><?php echo $data['subject23'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress24" class="mt-5">
                                <option id="lable"><?php echo $data['subject24'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress25" class="mt-5">
                                <option id="lable"><?php echo $data['subject25'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress26" class="mt-5">
                                <option id="lable"><?php echo $data['subject26'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress27" class="mt-5">
                                <option id="lable"><?php echo $data['subject27'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress28" class="mt-5">
                                <option id="lable"><?php echo $data['subject28'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress29" class="mt-5">
                                <option id="lable"><?php echo $data['subject29'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress30" class="mt-5">
                                <option id="lable"><?php echo $data['subject30'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress31" class="mt-5">
                                <option id="lable"><?php echo $data['subject31'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress32" class="mt-5">
                                <option id="lable"><?php echo $data['subject32'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress33" class="mt-5">
                                <option id="lable"><?php echo $data['subject33'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress34" class="mt-5">
                                <option id="lable"><?php echo $data['subject34'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress35" class="mt-5">
                                <option id="lable"><?php echo $data['subject35'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress36" class="mt-5">
                                <option id="lable"><?php echo $data['subject36'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress37" class="mt-5">
                                <option id="lable"><?php echo $data['subject37'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress38" class="mt-5">
                                <option id="lable"><?php echo $data['subject38'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress39" class="mt-5">
                                <option id="lable"><?php echo $data['subject39'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress40" class="mt-5">
                                <option id="lable"><?php echo $data['subject40'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress52" class="mt-5">
                                <option id="lable"><?php echo $data['subject52'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress41" class="mt-5">
                                <option id="lable"><?php echo $data['subject41'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress42" class="mt-5">
                                <option id="lable"><?php echo $data['subject42'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress43" class="mt-5">
                                <option id="lable"><?php echo $data['subject43'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress44" class="mt-5">
                                <option id="lable"><?php echo $data['subject44'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress45" class="mt-5">
                                <option id="lable"><?php echo $data['subject45'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress46" class="mt-5">
                                <option id="lable"><?php echo $data['subject46'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress47" class="mt-5">
                                <option id="lable"><?php echo $data['subject47'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress48" class="mt-5">
                                <option id="lable"><?php echo $data['subject48'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress49" class="mt-5">
                                <option id="lable"><?php echo $data['subject49'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress50" class="mt-5">
                                <option id="lable"><?php echo $data['subject50'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress51" class="mt-5">
                                <option id="lable"><?php echo $data['subject51'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            
                            <select id="list" name="progress52" class="mt-5">
                                <option id="lable"><?php echo $data['subject52'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            
                            <select id="list" name="progress53" class="mt-5">
                                <option id="lable"><?php echo $data['subject53'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            
                            <select id="list" name="progress54" class="mt-5">
                                <option id="lable"><?php echo $data['subject54'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            
                            <select id="list" name="progress55" class="mt-5">
                                <option id="lable"><?php echo $data['subject55'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress56" class="mt-5">
                                <option id="lable"><?php echo $data['subject56'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress57" class="mt-5">
                                <option id="lable"><?php echo $data['subject57'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress58" class="mt-5">
                                <option id="lable"><?php echo $data['subject58'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress59" class="mt-5">
                                <option id="lable"><?php echo $data['subject59'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress60" class="mt-5">
                                <option id="lable"><?php echo $data['subject60'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress61" class="mt-5">
                                <option id="lable"><?php echo $data['subject61'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress62" class="mt-5">
                                <option id="lable"><?php echo $data['subject62'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress63" class="mt-5">
                                <option id="lable"><?php echo $data['subject63'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress64" class="mt-5">
                                <option id="lable"><?php echo $data['subject64'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress65" class="mt-5">
                                <option id="lable"><?php echo $data['subject65'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress66" class="mt-5">
                                <option id="lable"><?php echo $data['subject66'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress67" class="mt-5">
                                <option id="lable"><?php echo $data['subject67'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress68" class="mt-5">
                                <option id="lable"><?php echo $data['subject68'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress69" class="mt-5">
                                <option id="lable"><?php echo $data['subject69'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress70" class="mt-5">
                                <option id="lable"><?php echo $data['subject70'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <br><br>
                            <textarea name="information" id="list" cols="15" rows="5" placeholder ="Enter an Additional informationrmation"></textarea>
						    <button type="submit" name="btn" class="btn btn-dark mt-2">Add</button>
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
        $progress53 = $_POST['progress53'];
        $progress54 = $_POST['progress54'];
        $progress55 = $_POST['progress55'];
        $progress56 = $_POST['progress56'];
        $progress57 = $_POST['progress57'];
        $progress58 = $_POST['progress58'];
        $progress59 = $_POST['progress59'];
        $progress60 = $_POST['progress60'];
        $progress61 = $_POST['progress61'];
        $progress62 = $_POST['progress62'];
        $progress63 = $_POST['progress63'];
        $progress64 = $_POST['progress64'];
        $progress65 = $_POST['progress65'];
        $progress66 = $_POST['progress66'];
        $progress67 = $_POST['progress67'];
        $progress68 = $_POST['progress68'];
        $progress69 = $_POST['progress69'];
        $progress70 = $_POST['progress70'];
        $information = $_POST['information'];
        echo  $insert = "insert into `progress` (user_id, progress1, progress2, progress3, progress4, progress5, progress6, progress7, progress8, progress9, progress10, progress11, progress12, progress13, progress14, progress15, progress16, progress17, progress18, progress19, progress20, progress21, progress22, progress23, progress24, progress25, progress26, progress27, progress28, progress29, progress30, progress31, progress32, progress33, progress34, progress35, progress36, progress37, progress38, progress39, progress40, progress41, progress42, progress43, progress44, progress45, progress46, progress47, progress48, progress49, progress50, progress51, progress52, progress53,progress54,progress55,progress56,progress57,progress58,progress59,progress60,progress61,progress62,progress63,progress64,progress65,progress66,progress67,progress68,progress69,progress70,information) values ('$id', '$progress1', '$progress2', '$progress3', '$progress4', '$progress5', '$progress6', '$progress7', '$progress8', '$progress9', '$progress10', '$progress11', '$progress12', '$progress13', '$progress14', '$progress15', '$progress16', '$progress17', '$progress18', '$progress19', '$progress20', '$progress21', '$progress22', '$progress23', '$progress24', '$progress25', '$progress26', '$progress27', '$progress28', '$progress29', '$progress30', '$progress31', '$progress32', '$progress33', '$progress34', '$progress35', '$progress36', '$progress37', '$progress38', '$progress39', '$progress40', '$progress41', '$progress42', '$progress43', '$progress44', '$progress45', '$progress46', '$progress47', '$progress48', '$progress49', '$progress50', '$progress51', '$progress52', '$progress53','$progress54','$progress55','$progress56','$progress57','$progress58','$progress59','$progress60','$progress61','$progress62','$progress63','$progress64','$progress65','$progress67','$progress68','$progress69','$progress70','$information')";
        $run = mysqli_query($con, $insert);
        if(!$run){
            echo mysqli_error($con);
        }else{
            $_SESSION['error'] = error('success', 'Progress add successfully.');
            header("location:add_progress.php");
        }
    }
?>
		<div class="col-lg-2 col-md-2 col-0"></div>
	</div>		
</div>

<?php 
	include 'footer.php';
?>


























































































<?php 
	include 'header.php';
?>

<div class="container-fluid">
	<div class="row">
	    <center>
	        <h2>Add Progress</h2>
			<?php include 'error.php'; ?>
		</center>
		<div class="col-lg-5 col-md-5 col-0"></div>
		<div class="col-lg-2 col-md-2 col-12 r-1">
			
				
						<?php 
							$id = $_SESSION['id'];
							$select = "select * from subject where id = '1'";
							$res = mysqli_query($con, $select);
							$data = mysqli_fetch_array($res);
						?>
				<form method="POST">
					<div class="form-group">
						    <br>
                            <select id="list" name="progress1" class="mt-5">
                                <option id="lable"><?php echo $data['subject1'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress2" class="mt-5">
                                <option id="lable"><?php echo $data['subject2'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress3" class="mt-5">
                                <option id="lable"><?php echo $data['subject3'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress4" class="mt-5">
                                <option id="lable"><?php echo $data['subject4'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress5" class="mt-5">
                                <option id="lable"><?php echo $data['subject5'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress6" class="mt-5">
                                <option id="lable"><?php echo $data['subject6'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress7" class="mt-5">
                                <option id="lable"><?php echo $data['subject7'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress8" class="mt-5">
                                <option id="lable"><?php echo $data['subject8'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress9" class="mt-5">
                                <option id="lable"><?php echo $data['subject9'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress10" class="mt-5">
                                <option id="lable"><?php echo $data['subject10'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress11" class="mt-5">
                                <option id="lable"><?php echo $data['subject11'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress12" class="mt-5">
                                <option id="lable"><?php echo $data['subject12'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress13" class="mt-5">
                                <option id="lable"><?php echo $data['subject13'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress14" class="mt-5">
                                <option id="lable"><?php echo $data['subject14'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress15" class="mt-5">
                                <option id="lable"><?php echo $data['subject15'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress16" class="mt-5">
                                <option id="lable"><?php echo $data['subject16'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress17" class="mt-5">
                                <option id="lable"><?php echo $data['subject17'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress18" class="mt-5">
                                <option id="lable"><?php echo $data['subject18'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress19" class="mt-5">
                                <option id="lable"><?php echo $data['subject19'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress20" class="mt-5">
                                <option id="lable"><?php echo $data['subject20'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress21" class="mt-5">
                                <option id="lable"><?php echo $data['subject21'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress22" class="mt-5">
                                <option id="lable"><?php echo $data['subject22'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress23" class="mt-5">
                                <option id="lable"><?php echo $data['subject23'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress24" class="mt-5">
                                <option id="lable"><?php echo $data['subject24'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress25" class="mt-5">
                                <option id="lable"><?php echo $data['subject25'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress26" class="mt-5">
                                <option id="lable"><?php echo $data['subject26'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress27" class="mt-5">
                                <option id="lable"><?php echo $data['subject27'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress28" class="mt-5">
                                <option id="lable"><?php echo $data['subject28'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress29" class="mt-5">
                                <option id="lable"><?php echo $data['subject29'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress30" class="mt-5">
                                <option id="lable"><?php echo $data['subject30'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress31" class="mt-5">
                                <option id="lable"><?php echo $data['subject31'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress32" class="mt-5">
                                <option id="lable"><?php echo $data['subject32'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress33" class="mt-5">
                                <option id="lable"><?php echo $data['subject33'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress34" class="mt-5">
                                <option id="lable"><?php echo $data['subject34'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress35" class="mt-5">
                                <option id="lable"><?php echo $data['subject35'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress36" class="mt-5">
                                <option id="lable"><?php echo $data['subject36'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress37" class="mt-5">
                                <option id="lable"><?php echo $data['subject37'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress38" class="mt-5">
                                <option id="lable"><?php echo $data['subject38'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress39" class="mt-5">
                                <option id="lable"><?php echo $data['subject39'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress40" class="mt-5">
                                <option id="lable"><?php echo $data['subject40'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress52" class="mt-5">
                                <option id="lable"><?php echo $data['subject52'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress41" class="mt-5">
                                <option id="lable"><?php echo $data['subject41'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress42" class="mt-5">
                                <option id="lable"><?php echo $data['subject42'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress43" class="mt-5">
                                <option id="lable"><?php echo $data['subject43'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress44" class="mt-5">
                                <option id="lable"><?php echo $data['subject44'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress45" class="mt-5">
                                <option id="lable"><?php echo $data['subject45'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress46" class="mt-5">
                                <option id="lable"><?php echo $data['subject46'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress47" class="mt-5">
                                <option id="lable"><?php echo $data['subject47'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress48" class="mt-5">
                                <option id="lable"><?php echo $data['subject48'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress49" class="mt-5">
                                <option id="lable"><?php echo $data['subject49'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress50" class="mt-5">
                                <option id="lable"><?php echo $data['subject50'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <select id="list" name="progress51" class="mt-5">
                                <option id="lable"><?php echo $data['subject51'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            
                            <select id="list" name="progress52" class="mt-5">
                                <option id="lable"><?php echo $data['subject51'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            
                            <select id="list" name="progress53" class="mt-5">
                                <option id="lable"><?php echo $data['subject51'] ?></option>
                                <option id="1" value="1">1</option>
                                <option id="2" value="2">2</option>
                                <option id="3" value="3">3</option>
                                <option id="4" value="4">4</option>
                                <option id="5" value="5">5</option>
                                <option id="6" value="6">6</option>
                            </select><br>
                            <br><br>
                            <textarea name="information" id="list" cols="15" rows="5" placeholder ="Enter an Additional informationrmation"></textarea>
						    <button type="submit" name="btn" class="btn btn-dark mt-2">Add</button>
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
        $progress52 = $_POST['progress53'];
        $information = $_POST['information'];
        
      echo  $insert = "insert into `progress` (user_id, progress1, progress2, progress3, progress4, progress5, progress6, progress7, progress8, progress9, progress10, progress11, progress12, progress13, progress14, progress15, progress16, progress17, progress18, progress19, progress20, progress21, progress22, progress23, progress24, progress25, progress26, progress27, progress28, progress29, progress30, progress31, progress32, progress33, progress34, progress35, progress36, progress37, progress38, progress39, progress40, progress41, progress42, progress43, progress44, progress45, progress46, progress47, progress48, progress49, progress50, progress51, progress52, progress53,information) values ('$id', '$progress1', '$progress2', '$progress3', '$progress4', '$progress5', '$progress6', '$progress7', '$progress8', '$progress9', '$progress10', '$progress11', '$progress12', '$progress13', '$progress14', '$progress15', '$progress16', '$progress17', '$progress18', '$progress19', '$progress20', '$progress21', '$progress22', '$progress23', '$progress24', '$progress25', '$progress26', '$progress27', '$progress28', '$progress29', '$progress30', '$progress31', '$progress32', '$progress33', '$progress34', '$progress35', '$progress36', '$progress37', '$progress38', '$progress39', '$progress40', '$progress41', '$progress42', '$progress43', '$progress44', '$progress45', '$progress46', '$progress47', '$progress48', '$progress49', '$progress50', '$progress51', '$progress52', '$progress53','$information')";
        $run = mysqli_query($con, $insert);
        if(!$run){
            echo mysqli_error($con);
        }else{
            $_SESSION['error'] = error('success', 'Progress add successfully.');
            header("location:add_progress.php");
        }
    }
?>
		<div class="col-lg-2 col-md-2 col-0"></div>
	</div>		
</div>

<?php 
	include 'footer.php';
?>