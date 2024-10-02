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
            <option id="lable" value="">1.&emsp;
              <?php echo $data['subject1'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress2" class="mt-5">
            <option id="lable" value="">2.&emsp;
              <?php echo $data['subject2'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress5" class="mt-5">
            <option id="lable" value="">3.&emsp;
              <?php echo $data['subject5'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress3" class="mt-5">
            <option id="lable" value="">4.&emsp;
              <?php echo $data['subject3'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress4" class="mt-5">
            <option id="lable" value="">5.&emsp;
              <?php echo $data['subject4'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress6" class="mt-5">
            <option id="lable" value="">6.&emsp;
              <?php echo $data['subject6'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress7" class="mt-5">
            <option id="lable" value="">7.&emsp;
              <?php echo $data['subject7'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>

          <select id="list" name="progress11" class="mt-5">
            <option id="lable" value="">8.&emsp;
              <?php echo $data['subject11'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress12" class="mt-5">
            <option id="lable" value="">9.&emsp;
              <?php echo $data['subject12'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress13" class="mt-5">
            <option id="lable" value="">10.&emsp;
              <?php echo $data['subject13'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          
          <select id="list" name="progress14" class="mt-5">
            <option id="lable" value="">11.&emsp;
              <?php echo $data['subject14'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress15" class="mt-5">
            <option id="lable" value="">12.&emsp;
              <?php echo $data['subject15'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress16" class="mt-5">
            <option id="lable" value="">13.&emsp;
              <?php echo $data['subject16'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress17" class="mt-5">
            <option id="lable" value="">14.&emsp;
              <?php echo $data['subject17'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress18" class="mt-5">
            <option id="lable" value="">15.&emsp;
              <?php echo $data['subject18'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress19" class="mt-5">
            <option id="lable" value="">16.&emsp;
              <?php echo $data['subject19'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress20" class="mt-5">
            <option id="lable" value="">17.&emsp;
              <?php echo $data['subject20'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress21" class="mt-5">
            <option id="lable" value="">18.&emsp;
              <?php echo $data['subject21'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress22" class="mt-5">
            <option id="lable" value="">19.&emsp;
              <?php echo $data['subject22'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress23" class="mt-5">
            <option id="lable" value="">20.&emsp;
              <?php echo $data['subject23'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress24" class="mt-5">
            <option id="lable" value="">21.&emsp;
              <?php echo $data['subject24'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress25" class="mt-5">
            <option id="lable" value="">22.&emsp;
              <?php echo $data['subject25'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress26" class="mt-5">
            <option id="lable" value="">23.&emsp;
              <?php echo $data['subject26'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress27" class="mt-5">
            <option id="lable" value="">24.&emsp;
              <?php echo $data['subject27'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress28" class="mt-5">
            <option id="lable" value="">25.&emsp;
              <?php echo $data['subject28'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress29" class="mt-5">
            <option id="lable" value="">26.&emsp;
              <?php echo $data['subject29'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress30" class="mt-5">
            <option id="lable" value="">27.&emsp;
              <?php echo $data['subject30'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br> 
            <select id="list" name="progress53" class="mt-5">
            <option id="lable" value="">28.&emsp;
              <?php echo $data['subject53'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress36" class="mt-5">
            <option id="lable" value="">29.&emsp;
              <?php echo $data['subject36'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress8" class="mt-5">
            <option id="lable" value="">30.&emsp;
              <?php echo $data['subject8'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress9" class="mt-5">
            <option id="lable" value="">31.&emsp;
              <?php echo $data['subject9'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress10" class="mt-5">
            <option id="lable" value="">32.&emsp;
              <?php echo $data['subject10'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress31" class="mt-5">
            <option id="lable" value="">33.&emsp;
              <?php echo $data['subject31'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>

          <select id="list" name="progress32" class="mt-5">
          <option id="lable" value="">34.&emsp;
              <?php echo $data['subject32'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress33" class="mt-5">
            <option id="lable" value="">35.&emsp;
              <?php echo $data['subject33'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress35" class="mt-5">
            <option id="lable" value="">36.&emsp;
              <?php echo $data['subject35'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress37" class="mt-5">
            <option id="lable" value="">37.&emsp;
              <?php echo $data['subject37'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress38" class="mt-5">
            <option id="lable" value="">38.&emsp;
              <?php echo $data['subject38'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress39" class="mt-5">
            <option id="lable" value="">39.&emsp;
              <?php echo $data['subject39'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress40" class="mt-5">
            <option id="lable" value="">40.&emsp;
              <?php echo $data['subject40'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress52" class="mt-5">
            <option id="lable" value="">41.&emsp;
              <?php echo $data['subject52'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress54" class="mt-5">
            <option id="lable" value="">42.&emsp;
              <?php echo $data['subject54'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>

          <select id="list" name="progress55" class="mt-5">
            <option id="lable" value="">43.&emsp;
              <?php echo $data['subject55'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress56" class="mt-5">
            <option id="lable" value="">44.&emsp;
              <?php echo $data['subject56'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress57" class="mt-5">
            <option id="lable" value="">45.&emsp;
              <?php echo $data['subject57'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress58" class="mt-5">
            <option id="lable" value="">46.&emsp;
              <?php echo $data['subject58'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress59" class="mt-5">
            <option id="lable" value="">47.&emsp;
              <?php echo $data['subject59'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress60" class="mt-5">
            <option id="lable" value="">48.&emsp;
              <?php echo $data['subject60'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress61" class="mt-5">
            <option id="lable" value="">49.&emsp;
              <?php echo $data['subject61'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress62" class="mt-5">
            <option id="lable" value="">50.&emsp;
              <?php echo $data['subject62'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress41" class="mt-5">
            <option id="lable" value="">51.&emsp;
              <?php echo $data['subject41'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          
          <select id="list" name="progress63" class="mt-5">
            <option id="lable" value="">52.&emsp;
              <?php echo $data['subject63'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br> 
          
          <select id="list" name="progress44" class="mt-5">
            <option id="lable" value="">53.&emsp;
              <?php echo $data['subject44'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress64" class="mt-5">
            <option id="lable" value="">54.&emsp;
              <?php echo $data['subject64'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress65" class="mt-5">
            <option id="lable" value="">55.&emsp;
              <?php echo $data['subject65'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress66" class="mt-5">
            <option id="lable" value="">56.&emsp;
              <?php echo $data['subject66'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress67" class="mt-5">
            <option id="lable" value="">57.&emsp;
              <?php echo $data['subject67'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress68" class="mt-5">
            <option id="lable" value="">58.&emsp;
              <?php echo $data['subject68'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
         
          <select id="list" name="progress70" class="mt-5">
            <option id="lable" value="">59.&emsp;
              <?php echo $data['subject70'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress69" class="mt-5">
            <option id="lable" value="">60.&emsp;
              <?php echo $data['subject69'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
           <select id="list" name="progress71" class="mt-5">
            <option id="lable" value="">61.&emsp;
              <?php echo $data['subject71'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option> 
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br> 
          <select id="list" name="progress45" class="mt-5">
            <option id="lable" value="">62.&emsp;
              <?php echo $data['subject45'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress46" class="mt-5">
            <option id="lable" value="">63.&emsp;
              <?php echo $data['subject46'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress47" class="mt-5">
            <option id="lable" value="">64.&emsp;
              <?php echo $data['subject47'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress48" class="mt-5">
            <option id="lable" value="">65.&emsp;
              <?php echo $data['subject48'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress49" class="mt-5">
            <option id="lable" value="">66.&emsp;
              <?php echo $data['subject49'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <select id="list" name="progress50" class="mt-5">
            <option id="lable" value="">67.&emsp;
              <?php echo $data['subject50'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br><br>
          <select id="list" name="progress43" class="mt-5">
            <option id="lable" value="">68.&emsp;
              <?php echo $data['subject43'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <br>
          <select id="list" name="progress51" class="mt-5">
            <option id="lable" value="">69.&emsp;
              <?php echo $data['subject51'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <!--==========================-->
          <select id="list" name="overtaking" class="mt-5">
            <option id="lable" value="">71.&emsp;
              <?php echo $data['subject72'] ?>
            </option>
            <option id="1" value="1">1</option>
            <option id="2" value="2">2</option>
            <option id="3" value="3">3</option>
            <option id="4" value="4">4</option>
            <option id="5" value="5">5</option>
            <option id="6" value="6">6</option>
          </select><br>
          <!--==========================-->
          <br><br>
          <pre style="width:130%;">Additional Information - Pupil</pre>
          <textarea name="information" id="list" cols="15" rows="5"
            placeholder="Additional Information"></textarea><br><br>

          <pre style="width:130%;">Personal Comment</pre>
          <textarea name="admin_per_info" id="list" cols="15" rows="5" placeholder=" Personal comment"></textarea>
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
        $progress35 = $_POST['progress35'];
        $progress36 = $_POST['progress36'];
        $progress37 = $_POST['progress37'];
        $progress38 = $_POST['progress38'];
        $progress39 = $_POST['progress39'];
        $progress40 = $_POST['progress40'];
        $progress41 = $_POST['progress41'];
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
        $progress71 = $_POST['progress71'];
        // =================
        $overtaking = $_POST['overtaking'];
        // =================
        $information = $_POST['information'];
        $admin_per_info = $_POST['admin_per_info'];
        
             $insert = "insert into `progress` (user_id, progress1, progress2, progress3, progress4, progress5, progress6, progress7, progress8, progress9, progress10, progress11, progress12, progress13, progress14, progress15, progress16, progress17, progress18, progress19, progress20, progress21, progress22, progress23, progress24, progress25, progress26, progress27, progress28, progress29, progress30, progress31, progress32, progress33,  progress35, progress36, progress37, progress38, progress39, progress40, progress41,  progress43, progress44, progress45, progress46, progress47, progress48, progress49, progress50, progress51, progress52, progress53,progress54,progress55,progress56,progress57,progress58,progress59,progress60,progress61,progress62,progress63,progress64,progress65,progress66,progress67,progress68,progress69,progress70,progress71,overtaking,information,admin_per_info) values ('$id', '$progress1', '$progress2', '$progress3', '$progress4', '$progress5', '$progress6', '$progress7', '$progress8', '$progress9', '$progress10', '$progress11', '$progress12', '$progress13', '$progress14', '$progress15', '$progress16', '$progress17', '$progress18', '$progress19', '$progress20', '$progress21', '$progress22', '$progress23', '$progress24', '$progress25', '$progress26', '$progress27', '$progress28', '$progress29', '$progress30', '$progress31', '$progress32', '$progress33',  '$progress35', '$progress36', '$progress37', '$progress38', '$progress39', '$progress40', '$progress41',  '$progress43', '$progress44', '$progress45', '$progress46', '$progress47', '$progress48', '$progress49', '$progress50', '$progress51', '$progress52', '$progress53','$progress54','$progress55','$progress56','$progress57','$progress58','$progress59','$progress60','$progress61','$progress62','$progress63','$progress64','$progress65','$progress66','$progress67','$progress68','$progress69','$progress70','$progress71','$overtaking''" . mysqli_real_escape_string($con, $information) . "', '" . mysqli_real_escape_string($con, $admin_per_info) . "')";
        $run = mysqli_query($con, $insert);
        if(!$run){
            echo mysqli_error($con);
            die($insert);
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

<style>
  #list {
    padding: 15px;
    border: none;
    width: 120%;}
</style>