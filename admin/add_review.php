<?php 
	include 'header.php';
    $created_review = 0;

    if(
      isset($_POST['rew-btn']) &&
      !empty($_POST['rew-btn']) &&
      is_numeric($_POST['review'])
    ){
    //   $uid = $_POST['id'];
      $r = $_POST['review'];
      $desc = $_POST['desc'] ?? '';
      $desc = addcslashes($desc, "'");
      $date = date("d , M , Y");
  
      $sql = "INSERT INTO user_reviews( `review`, `desc` ,`date_review` ) VALUES ( $r, '$desc','{$date}')";
  
      if(mysqli_query($con, $sql)){
        $created_review = 1;
      } else $created_review = -1;
    }
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-0"></div>
		<div class="col-lg-6 col-md-6 col-12"><br><br>
			<center><h2>Add Review</h2></center><br>
			<?php include 'error.php'; ?>
			<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" >
            <div class="float-start ps-3 star">
              <input type="radio" name="review" id="rate-5" value="5">
              <label for="rate-5" class="fas fa-star"></label>
              <input type="radio" name="review" id="rate-4" value="4">
              <label for="rate-4" class="fas fa-star"></label>
              <input type="radio" name="review" id="rate-3" value="3">
              <label for="rate-3" class="fas fa-star"></label>
              <input type="radio" name="review" id="rate-2" value="2">
              <label for="rate-2" class="fas fa-star"></label>
              <input type="radio" name="review" id="rate-1" value="1">
              <label for="rate-1" class="fas fa-star"></label>
            </div><br><br><br>
              <div class="form">
              <div class="textarea">
                <textarea name="desc" class="bg-white tex-dark" cols="50" placeholder="Describe your experience.."></textarea>
              </div>
              <div class="btn">
                <button name="rew-btn" value="Post" type="submit">ADD</button>
              </div>
			</form>
		</div>

		<div class="col-lg-3 col-md-3 col-0"></div>
	</div>		
</div>
<style>
    button{
        height: 50px !important;
        width: 120px !important;
        color: white !important;
        background-color:#1b1b1b;
        border-radius: 10px;
        padding:10px 20px 20px 20px ;
    }
    textarea{
        border-radius: 5px;
        color: black !important;
    }
     .container-1 .edit:hover{
            text-decoration: underline;
          }
          input{
            visibility: hidden !important;
          }
      
          .container-1 .star input{
            display: none; 
          } 
          .star label{
            font-size: 30px;
            color: #444;
            padding: 10px;
            float: right;
            transition: all 0.2s ease;
          } */
          input:not(:checked) ~ label:hover,
          input:not(:checked) ~ label:hover ~ label{
            color: #fd4;
          }
          input:checked ~ label{
            color: #fd4;
          }
          input#rate-5:checked ~ label{
            color: #fe5;
            text-shadow: 0 0 10px #f37;
          }
          #rate-1:checked ~ .form header:before{
              color : white;
            content: " Just hate it ";
          }
          #rate-2:checked ~ .form header:before{
              color : white;

            content: " Don't like it ";
          }
          #rate-3:checked ~ .form header:before{
              color : white;
            content: " awesome ";
          }
          #rate-4:checked ~ .form header:before{
              color : white;
            content: " Good like it ";
          }
          #rate-5:checked ~ .form header:before{
              color : white   ;
            content: "I Just love it awesome";
          }
          .container .form{
            display: none;
          }
          input:checked ~ .form{
            display: block;
          }
          .form header{
            font-size: 25px;
            color: #fe7;
            font-weight: 500;
            margin: 5px 0 20px 0;
            text-align: center;
            transition: all 0.2s ease;
          }
          .form .textarea{
            height: 100px;
            width: 100%;
            overflow: hidden;
          }
          .form .textarea textarea{
            height: 100%;
            width: 100%;
            outline: none;
            color: #eee;
            border: 1px solid #333;
            background: #222;
            padding: 20px;
            font-size: 17px;
            resize: none;
          }
          .textarea textarea:focus{
            border-color: #444;
          }
          .form .btn{
            height: 45px;
            width: 100%;
            margin: 15px 0;
          }
          .form .btn button{
            height: 100%;
            width: 100%;
            border: 1px solid #444;
            outline: none;
            background: #222;
            color: #999;
            font-size: 17px;
            font-weight: 500;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s ease;
          }
          .form .btn button:hover{
            background: #1b1b1b;
          }
        </style>

        <script>
          const btn = document.querySelector("button");
          const post = document.querySelector(".post");
          const widget = document.querySelector(".star-widget");
          const editBtn = document.querySelector(".edit");
          btn.onclick = () => {
            widget.style.display = "none";
            post.style.display = "block";
            editBtn.onclick = () => {
              widget.style.display = "block";
              post.style.display = "none";
            }
            return false;
          }
          <?php
            if($created_review === 1){
              ?>
                alert("Your Review has been added successfully!");
              <?php
            } elseif ($created_review === -1){
              ?>
                alert("Unable to Add Review! Please try again later.");
              <?php
            }
          ?>
        </script>
  
<?php 
	include 'footer.php';
?>