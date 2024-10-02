     <!-- Footer Start -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
     <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
       <div class="container">
         <div class="row g-5">
           <div class="col-lg-4 col-md-4">
             <h4 class="text-white mb-3">Get In Touch</h4>
             <h2 class="text-primary mb-2"><span class="text-white">PassVeryFast</span></h2>
             <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>10006 King Lane, Leeds, LS17 5PS</p>
             <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0800 710 1132</p>
             <p class="mb-2"><svg class="me-3" style="width:24px;height:24px" viewBox="0 0 24 24">
                 <path fill="currentColor" d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" />
               </svg>07935199032</p>
             <p class="mb-2" style="width:111%;"><i class="fa fa-envelope me-3"></i>Info@passveryfast.co.uk</p>
           </div>
           <div class="col-lg-4 col-md-4">
             <h4 class="text-light mb-4 position-absolute col-md-3">Quick Links</h4>
             <a class="btn btn-link mt-5" href="index.php">Home</a>
             <a class="btn btn-link" href="about.php">About Us</a>
             <a href="term.php" class="btn btn-link">Terms and Conditions</a>
             <a class="btn btn-link" href="courses.php">Courses</a>
             <a class="btn btn-link" href="contact.php">Contact Us</a>
             <a class="btn btn-link" href="content.php">Content</a>
             <a class="btn btn-link" href="instructor/login.php">Instusctor Login</a>
             <a class="btn btn-link" href="google_optimization.php">Google Optimization</a>
             <a class="btn btn-link" href="theory_test.php">Book a theory test</a>
             <a class="btn btn-link" href="driving_test.php">Book a driving test</a>
             <a class="btn btn-link" href="review.php">Reviews</a>
             <a class="btn btn-link" href="shop.php">Shop</a>
             <a class="btn btn-link" href="offer.php">Offers</a>
           </div>


           <div class=" col-lg-3 col-md-4 img-time">
             <h3 style="color:white;width :250px; ">
               <pre>Business Hours</pre>
             </h3>
             <div class="dropdown">

               <?php
                $time_table = [
                  "Monday"    =>  "7:30am - 6:00pm",
                  "Tuesday"   =>  "7:30am - 6:00pm",
                  "Wednesday" =>  "7:30am - 6:00pm",
                  "Thursday"  =>  "7:30am - 6:00pm",
                  "Friday"    =>  "7:30am - 6:00pm",
                  "Saturday"  =>  "8:30am - 5:00pm",
                  "Sunday"    =>  "9:30am - 4:30pm",
                ];
                $curr_day = strftime("%A", time());
                ?>
                <!-- ======= -->
               <button onclick="myFunction()" id="myDpbtn" class="myDpbtn">
               <span style="position: absolute;margin-top:27px;" id="icon" class=" fa fa-chevron-down"></span>
                <!-- ========= -->

                 <pre>We're open today from <?= $time_table[$curr_day] ?> </pre>


                 <div id="myDropdown" class="d-none">
                   <!-- <a href="#">Link 1</a> -->
                   <?php
                    foreach ($time_table as $day => $time) {
                    ?>

                     <p>
                     <pre><?= $day ?>     <?= $time ?></pre>
                     </p>
                   <?php
                    }
                    ?>
                 </div>
               </button>
             </div>

           </div>
           <div class="nat col-lg-4 col-md-4">
             <h6 class=" mt-4 mb-4">Follow Us</h6>
             <div class="d-flex pt-2">
               <!-- <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light me-0" href=""><i class="fab fa-linkedin-in"></i></a> -->
               <ul class="wrapper">
                 <li class="icon facebook">
                   <span class="tooltip">Facebook</span>
                   <span><i class="fab fa-facebook-f"></i></span>
                 </li>
                 <li class="icon twitter">
                   <span class="tooltip">tiktok</span>
                   <i class="fab fa-tiktok "></i>

                   </span>
                 </li>
                 <!-- <li class="icon instagram">
    <span class="tooltip">Instagram</span>
    <span><i class="fab fa-instagram fa-spin"></i></span>
  </li>
  <li class="icon github">
    <span class="tooltip">Github</span>
    <span><i class="fab fa-github"></i></span>
  </li>
  <li class="icon youtube">
    <span class="tooltip">Youtube</span>
  
    <span><i class="fab fa-youtube"></i></span>
  </li> -->
               </ul>
             </div>

           </div>
         </div>

       </div>
     </div>
     <!-- Footer End -->


     <!-- Copyright Start -->
     <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
       <div class="container">
         <div class="row">
           <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
             &copy; <a href=" ">PassVeryFast</a>, All Rights Reserved.
           </div>
         </div>
       </div>
     </div>
     <!-- Copyright End -->


     <!-- Back to Top -->
     <a href=" " class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="lib/wow/wow.min.js"></script>
     <script src="lib/easing/easing.min.js"></script>
     <script src="lib/waypoints/waypoints.min.js"></script>
     <script src="lib/owlcarousel/owl.carousel.min.js"></script>

     <!-- Template Javascript -->
     <script src="js/main.js"></script>
     <style>
       /*
    Auther: Abdelrhman Said
*/

       @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

       * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
       }

       *:focus,
       *:active {
         outline: none !important;
         -webkit-tap-highlight-color: transparent;
       }
      
    /* =============== */
        .fa-chevron-down{
          transform: rotate(0deg);
          transition: transform 0.5s linear;
        }

        .fa-chevron-down.open{
          transform: rotate(180deg);
          transition: transform 0.5s linear;
        }
 /* ================= */


       .wrapper {
         display: content;
         list-style: none;
         color: black;
         /* margin-left:-80px; */
       }

       .wrapper .icon {
         position: relative;
         background: #ffffff;
         border-radius: 50%;
         padding: 15px;
         margin: 10px;
         width: 50px;
         height: 50px;
         font-size: 18px;
         display: flex;
         justify-content: center;
         align-items: center;
         flex-direction: column;
         box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
         cursor: pointer;
         transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
       }

       .wrapper .tooltip {
         position: absolute;
         top: 0;
         font-size: 14px;
         background: #ffffff;
         color: #ffffff;
         padding: 5px 8px;
         border-radius: 5px;
         box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
         opacity: 0;
         pointer-events: none;
         transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
       }

       .wrapper .tooltip::before {
         position: absolute;
         content: "";
         height: 8px;
         width: 8px;
         background: #ffffff;
         bottom: -3px;
         left: 50%;
         transform: translate(-50%) rotate(45deg);
         transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
       }

       .wrapper .icon:hover .tooltip {
         top: -45px;
         opacity: 1;
         visibility: visible;
         pointer-events: auto;
       }

       .wrapper .icon:hover span,
       .wrapper .icon:hover .tooltip {
         text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
       }

       .wrapper {
         display: contents !important;
          
       }

       .wrapper .facebook:hover,
       .wrapper .facebook:hover .tooltip,
       .wrapper .facebook:hover .tooltip::before {
         background: #1877F2;
         color: #ffffff;
       }

       .wrapper .twitter:hover,
       .wrapper .twitter:hover .tooltip,
       .wrapper .twitter:hover .tooltip::before {
         background: #1DA1F2;
         color: #ffffff;
       }

       .wrapper .instagram:hover,
       .wrapper .instagram:hover .tooltip,
       .wrapper .instagram:hover .tooltip::before {
         background: #E4405F;
         color: #ffffff;
       }

       .wrapper .github:hover,
       .wrapper .github:hover .tooltip,
       .wrapper .github:hover .tooltip::before {
         background: #333333;
         color: #ffffff;
       }

       .wrapper .youtube:hover,
       .wrapper .youtube:hover .tooltip,
       .wrapper .youtube:hover .tooltip::before {
         background: #CD201F;
         /* color: #ffffff; */
       }

       .navbar-nav>.nav-item {
         border-bottom: 1px solid black !important;
       }

       .navbar-nav>.nav-item:first-child {
         /* border-top: di; */
         display: none;
       }

     </style>
     <!-- ========= -->
     <script>
              (function(document){
          var div = document.getElementById('myDpbtn');
          var icon = document.getElementById('icon');
          var open = false;
        
          div.addEventListener('click', function(){
            if(open){
              icon.className = 'fa fa-chevron-down';  
            } else{
              icon.className = 'fa fa-chevron-down open';
              }
        
            open = !open;
          });
        })(document);
     </script>
     <!-- ======== -->
     </body>

     </html>
     <style>
       /* Dropdown Button */
       .dropbtn {
         background-color: black !important;
         color: white !important;
         padding: 16px;
         font-size: 16px;
         border: none;
         cursor: pointer;
       }

       /* Dropdown button on hover & focus */
       .dropbtn:hover,
       .dropbtn:focus {
         background-color: black !important;
         color: white !important;
       }

       /* The container <div> - needed to position the dropdown content */
       .dropdown {
         position: relative;
         display: inline-block;
       }

       /* Dropdown Content (Hidden by Default) */
       .dropdown-content {
         display: none;
         position: absolute;
         background-color: Gray !important;
         color: white !important;
         min-width: 200px;
         /* box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); */
         z-index: 1;
       }

       /* Links inside the dropdown */
       .dropdown-content a {
         color: white !important;
         padding: 12px 16px;
         text-decoration: none;
         display: block;
       }

       /* Drop Down */
       .myDpbtn {
         position: relative;
         background-color: #000;
         border: none;
         color: #fff;
        
       }

       #myDropdown {
         position: absolute;
         left: 0;
         right: 0;
         top: 100%;

         text-align: left;
       }
       

     </style>

     <script>
       /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
       function myFunction() {
         document.getElementById("myDropdown").classList.toggle("d-none");
       }

       // Close the dropdown menu if the user clicks outside of it
       window.onclick = function(event) {
         if (!event.target.matches('.myDpbtn')) {
           var dropdowns = document.getElementsByClassName("d-none");
           var i;
           for (i = 0; i < dropdowns.length; i++) {
             var openDropdown = dropdowns[i];
             if (openDropdown.classList.contains('show')) {
               openDropdown.classList.remove('show');
             }
           }
         }
       }
     </script>
   
     <style>
       .fa-tiktok {
         color: #111111;

         filter: drop-shadow(1px 0px 0px #FD3E3E) drop-shadow(-1px -1px 0px #4DE8F4);
       }

       @media screen and (max-width: 800px) {
         .nat {
           padding-top: 200px;
         }
       }
     </style>