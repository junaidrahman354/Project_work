<?php
  include_once __DIR__ . "/../includes/add_review.php";
?>

<?php
    if(isset($_SESSION['user_id'])){
      ?>
      <style>
        .container-1{
          background-color: black !important;
          padding: 27px 20px !important;
        }
        .container-1 .textarea textarea{
          background-color: white !important;
          color: black !important;
          height: 100% !important;
          border-radius: 10px;
          border: none !important;
          outline: none !important;
          box-shadow: 0px 0px 17px 0.6px white !important;
        
        }
        .container-1 .textarea{
          box-shadow: 0px 0px 16px 0.3px gray !important;
        }
        .msg span{
          font-weight: 300 !important;
          font-family: Verdana, Geneva, Tahoma, sans-serif !important;
          color: gray !important;
          font-size:13px !important;
        }
        .msg span b{
          color: white !important;
          font-size: 15px !important;
          font-family: Verdana, Geneva, Tahoma, sans-serif !important;
        }
        .container-1 button{
          background-color: black !important;
          border: 1px solid white !important;
          border-radius: 5px !important;
          height: 50px !important;
          color: white !important;
          width: 130px !important;
          padding: 12px 10px !important;
        }
        .container-1 button:hover{
          box-shadow: 0px 0px 15px 0.4px gray !important;
          transition: all 0.5s ease-in-out !important;
          border: none !important;
          }
       
        
      </style>
     
        <div class="review">
          <h1 class="hr1">Please leave us a review</h1>
          <link rel="stylesheet" href="style.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

          <form method="POST" class="container-1">
            <div class="post">
              <div class="text">Thanks for rating us!</div>
              <div class="edit">EDIT</div>
            </div>
            <div class=" msg text-center text-white">
              <span><b>Notice :</b> Reviews are public and include your account.</span><br><br><br>
            </div>
            <div class="star">
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
            </div>
              <div class="form">
              <div class="textarea">
                <textarea name="desc" cols="50" placeholder="Describe your experience.."></textarea>
              </div>
              <div class="btn">
                <button name="rew-btn" value="Post" type="submit">Post</button>
              </div>
            </div>
          </form>
        </div>

        <style>
          .container-1{
            display: center;
            background: #111;
            border: 1px solid #444;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
          }
          .container-1 .post{
            display: none;
          }
          .container-1 .text{
            font-size: 25px;
            color: #666;
            font-weight: 500;
          }
          .container-1 .edit{
            position: absolute;
            right: 10px;
            top: 5px;
            font-size: 10px;
            color: #666;
            font-weight: 500;
            cursor: pointer;
          }
          .review{
              text-align : center;
          }
          .container-1 .edit:hover{
            text-decoration: underline;
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
    }
?>
