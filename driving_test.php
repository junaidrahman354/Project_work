
<?php include "header.php"; 

?>
<style>
    .thoery-form{
        box-shadow: 0px 0px 15px 0.2px rgb(212, 206, 206);
        border-radius: 6px;
        padding:20px;
        
    }
    .thoery-form label{
      font-size: 13px !important;  
    }
  
    .thoery-form .form-control{
        height: 50px !important;
        font-size: 12px !important;
        border-radius: 7px !important;
    }
   @media (min-width:767px){
    .form-group{
        padding: 1px 30px !important;
    }
    .thoery-form{
        width: 65% !important;
        margin: auto !important;
    }
   }
   .thoery-form button{
    background-color: black !important;
    border-radius: 7px !important;
    margin-top: 1rem !important;

   }
   /* ---- */
   img{
      max-width:180px;
    }
    input[type=file]{
    padding:10px;
    background:#2d2d2d;}

   .pyn .b-1,
   .pyn .b-2{
      border: 1px solid rgb(212, 206, 206) !important;
      margin-left: 10px;
      padding: 3px 20px;
      border-radius: 10px;
      cursor: pointer;
   }
  
.btn-r label{
   border-radius: 20px !important;
   width: 90px;
   margin-left: 10px;
}
/* ======= */
.form-group #result{
   /* border: 1px solid black; */
   font-weight: bold;
   font-size: 19px;
   background-color: rgb(312, 306, 306);
   margin-top: 16px !important;
   box-shadow: 0px 0px 15px 0.3px rgb(192, 186, 186);
   padding:7px 20px;
   border-radius: 20px;
}
.error{
   color: red !important;
   height: auto;
   font-size:13px;
 }

</style>

<div class="container-fluid page-header py-4 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white txt-sz animated slideInDown mb-4">Book A Theory Test</h1>
        <nav aria-label="breadcrumb animated slideInDown">
        </nav>
    </div>
</div>
<!-- --------- -->


     <div class="container">
          <div class="row px-lg-5 mx-lg-5">
             <div class="col-12">
                <form id="submitform" class="thoery-form" method="POST" action="save_driving_post.php" enctype="multipart/form-data">
                   <div class="form-group mt-3">
                    <span class="text-center"><b>Kind notice:</b> You can only book your driving test after you've passed your theory test.</span>
                    </div>
                  <div class="form-group mt-3 mt-md-3">
                     <!-- <label class="form-control-label" for="name">Name</label> -->
                     <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
                  </div>
                  <div class="form-group mt-3 mt-md-3">
                     <!-- <label class="form-control-label" for="address">Address</label> -->
                     <input type="text" name="address" class="form-control" placeholder="Enter Your Address" required>
                  </div>
                  <div class="form-group mt-3 mt-md-3">
                     <!-- <label class="form-control-label" for="">Post Code</label> -->
                     <input type="text" name="postcode" class="form-control" placeholder="Enter Your Post Code" required>
                  </div>
                  <div class="form-group mt-3 mt-md-3">
                     <!-- <label class="form-control-label" for="">Post Code</label> -->
                     <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone Number" required>
                  </div>
                  <div class="form-group mt-3 mt-md-3">
                     <!-- <label class="form-control-label" for="location">Location Of The Test Center</label> -->
                     <input type="text" name="location_test_center" class="form-control" placeholder="Enter The Location Of The Test Center" required>
                  </div>
                
                  <div class="form-check mt-3 mt-md-3">
                     <input type="checkbox" name="near_test_center" class="ms-md-2 form-check-input" placeholder="" >
                     <label class="ms-2 form-control-label" for="">Any test center near me</label>
                  </div>
                  <div class="form-group mt-3">
                     <label class="form-control-label" for="">A picture of your provisional licence(front)</label>
                     <input type="file"  onchange="readURL(this);" accept="image/*" name="licence_front_pic" class="bg-white form-control" placeholder="Enter Your Post Code" required>
                     <img id="blah" class="" src="" alt="" />
                  </div>
                  <div class="form-group mt-3">
                     <label class="form-control-label" for="">A picture of your provisional licence(back)</label>
                     <input type="file" onchange="readURL2(this);" accept="image/*" name="licence_back_pic" class="bg-white form-control" placeholder="Enter Your Post Code" required>
                     <img id="blah2" src="" alt="" />
                  </div>
                  <div class="form-group mt-3 mt-md-3">
                     <label class="form-control-label" for="">Would you like a practical test?</label>
                     <!-- <input type="text" name="practical_test" class="form-control" placeholder="Add theory test"> -->
                     <div class="d-flex mt-2 pyn">
                        <!-- <span class="b-1 round me-3"><input id="checkbox" name="aa" class="form-check-label" type="checkbox">&nbsp; Yes<label for="checkbox"></label></span>
                        <span class="b-2 round me-3"><input id="checkbox" name="aa" class="form-check-label" type="checkbox">&nbsp; No <label for="checkbox"></label></span> -->
                        
                       <span class="btn-r">
                          <input type="radio" onchange="add()" class="btn-check" value="£185" name="options-outlined" id="success-outlined" autocomplete="off">
                          <label class="btn btn-outline-dark" for="success-outlined">Yes</label>
                       </span>
                       <span class="btn-r">
                          <input type="radio" onchange="sub()" value="£112" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off" checked>
                          <label class="btn btn-outline-dark" for="danger-outlined">No</label>
                       </span>
                       </div>
                  </div>
                  <div class="form-group mt-3 mt-md-3">
                     <!-- <label class="form-control-label" for="postcode">Cost: £112 including the booking fee</label> -->
                     <!-- <input type="text" name="cost" class="form-control" placeholder="Cost: £112 including the booking fee."> -->
                     <label class="form-control-label" for="">Cost : </label><span name="" id="result">£112</span>
                  </div>
                  <button type="submit"  name="save" value="save" class="btn btn-dark ms-md-4">Submit</button>
                </form>
              </div>        
          </div> 
     </div>
     


<script>
  
  
  function add(){

   

   const add = document.getElementById("success-outlined");
   const result = document.getElementById("result");
   result.innerHTML = add.value; 
  }
  function sub(){
   
   const sub = document.getElementById("danger-outlined");
   const result = document.getElementById("result");
   result.innerHTML = sub.value; 
  }
</script>

<?php include "footer.php"; ?>
<script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
      

        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah2')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>
   jQuery('#submitform').validate({
    rules : {
       name :{
         required : true
       } ,
       address :{ 
         required: true
      },
       postcode :  {
         required:true
      },
       phone :  {
         required:true
      },
       location_test_center : {
         required:true
      },
       
       near_test_center : {
         required : false
       },
       licence_front_pic : {
         required : false
       },
       licence_back_pic : {
         required : false
       }
    },
    messages : {
      name :{
         required : "!Please Enter your name"
       } ,
       address :{ 
         required: "!please Enter your address"
      },
       postcode :  {
         required: "!please enter your postcode"
      },
       phone :  {
         required: "!please enter your phone number"
      },
       location_test_center : {
         required: "!please enter the test center"
      }, 
    }
   
   });
</script>

