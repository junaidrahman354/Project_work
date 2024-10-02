
<?php include "header.php"; 

?>
<style>
     .error {

color: red;
    
}
/* label.error{
        margin: 0px !important;
        height:20px !important;
        padding: 0px !important;
       
       
    } */
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
   #blah,#blah2{
      max-width:180px !important;
      max-height: 100px !important;
      border-radius: 10px !important;
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
   color: red;
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
                <form id="submitform" class="thoery-form" method="POST"  action="save_theory_post.php" enctype="multipart/form-data">
                  <div class="form-group mt-3 mt-md-3">      
                     <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name" required>
                     <!-- <span class="error" id="name_error"></span> -->
                  </div>
                  <div class="form-group mt-3 mt-md-3">
                    <input type="text" id="address" name="address" class="form-control" placeholder="Enter Your Address" required>
                    <!-- <span class="error" id="address_error"></span> -->
                  </div>
                  <div class="form-group mt-3 mt-md-3">
                     <input type="text" id="postcode" name="postcode" class="form-control" placeholder="Enter Your Post Code" required>
                     <!-- <span class="error" id="post_error"></span> -->
                  </div>
                  <div class="form-group mt-3 mt-md-3">
                     <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Your Phone Number" required>
                     <!-- <span class="error" id="phone_error"></span> -->
                  </div>
                  <div class="form-group mt-3 mt-md-3">
                     <input type="text" id="loc_test_center" name="location_test_center" class="form-control" placeholder="Enter The Location Of The Test Center" required>
                     <!-- <span class="error" id="loc_error"></span> -->
                  </div>
                
                  <div class="form-check mt-3 mt-md-3">
                     <input type="checkbox" name="near_test_center" class="ms-md-2 form-check-input" placeholder="" >
                     <label class="ms-2 form-control-label" for="">Any test center near me</label>
                  </div>
                  <style>
                     #blah {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#blah:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 70%;
  height: auto !important;
  max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 60px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 90%;
  }
}
                  </style>

                  <div class="form-group mt-3">
                     <label class="form-control-label" for="">A picture of your provisional licence(front)</label>
                     <input type="file"  onchange="readURL(this);" accept="image/*" name="licence_front_pic" class="bg-white form-control" placeholder="Enter Your Post Code" required>
                     <img id="blah" class="" alt="" src="" />
                    
                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                     <!-- The Close Button -->
                         <span class="close">&times;</span>

                       <!-- Modal Content (The Image) -->
                       <img class="modal-content" id="img01">

                       <!-- Modal Caption (Image Text) -->
                       <div id="caption"></div>
                  </div>
                  <div class="form-group mt-3">
                     <label class="form-control-label" for="">A picture of your provisional licence(back)</label>
                     <input type="file" onchange="readURL2(this);" accept="image/*" name="licence_back_pic" class="bg-white form-control" placeholder="Enter Your Post Code" required>
                     <img id="blah2" src="" alt="" />
                  </div>
                  <script>
    // Get the modal
    var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("blah");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}





                  </script>
                  <div class="form-group mt-3 mt-md-3">
                     <label class="form-control-label" for="">Would you like a practical test?</label>
                     <!-- <input type="text" name="practical_test" class="form-control" placeholder="Add theory test"> -->
                     <div class="d-flex mt-2 pyn">
                        <!-- <span class="b-1 round me-3"><input id="checkbox" name="aa" class="form-check-label" type="checkbox">&nbsp; Yes<label for="checkbox"></label></span>
                        <span class="b-2 round me-3"><input id="checkbox" name="aa" class="form-check-label" type="checkbox">&nbsp; No <label for="checkbox"></label></span> -->
                        
                       <span class="btn-r">
                          <input type="radio" onchange="add()" class="btn-check" value="£185" name="options-outlined" id="success-outlined" autocomplete="off">
                          <label class="btn btn-outline-dark" id="success-outlineds" for="success-outlined">Yes</label>
                       </span>
                       <span class="btn-r">
                          <input type="radio" onchange="sub()" value="£112" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off" checked>
                          <label class="btn btn-outline-dark" id="danger-outlineds" for="danger-outlined">No</label>
                       </span>
                       </div>
                  </div>
                  <div class="form-group mt-3 mt-md-3">
                     <!-- <label class="form-control-label" for="postcode">Cost: £112 including the booking fee</label> -->
                     <!-- <input type="text" name="cost" class="form-control" placeholder="Cost: £112 including the booking fee."> -->
                     <label class="form-control-label" for="">Cost : </label><span name="" id="result">£112</span>
                  </div>
                  <button type="submit"  name="save" value="submit" class="btn btn-dark ms-md-4">Submit</button>
                </form>
              </div>        
          </div> 
     </div>
     
<style>
     #success-outlineds,#danger-outlineds{
      background-color: none;
     }
     
</style>

<script>
   if(document.getElementById("success-outlined").checked){
     document.getElementById("success-outlineds").style.background = 'black';
     document.getElementById("danger-outlineds").style.background = 'white';
     
   }
   if(document.getElementById("danger-outlined").checked){
      document.getElementById("success-outlineds").style.background = 'white';
     document.getElementById("danger-outlineds").style.background = 'black';
    
     
   }
  
//   ---------------------
  function add(){
   document.getElementById("success-outlineds").style.background = 'black';
     document.getElementById("danger-outlineds").style.background = 'white';
   document.getElementById("success-outlineds").style.boxShadow = '0px 0px 0px 0px white';
    

   const add = document.getElementById("success-outlined");
   const result = document.getElementById("result");
   result.innerHTML = add.value; 
  }
  function sub(){
   document.getElementById("success-outlineds").style.background = 'white';
     document.getElementById("danger-outlineds").style.background = 'black';
   document.getElementById("danger-outlineds").style.boxShadow = '0px 0px 0px 0px white';

    
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
