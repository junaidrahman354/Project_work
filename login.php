<?php

include 'connection.php';

$page = $_SESSION['progress'];



if (isset($_SESSION['user_id'])) {

    header("location:index.php");
}

?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <title>Login | PassVeryFast</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="" name="keywords">

    <meta content="" name="description">



    <!-- Favicon -->

    <link href="img/favicon.ico" rel="icon">



    <!-- Google Web Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">



    <!-- Icon Font Stylesheet -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">



    <!-- Libraries Stylesheet -->

    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">



    <!-- Customized Bootstrap Stylesheet -->

    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Template Stylesheet -->

    <link href="css/style.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>



</head>
<div class="dropClas"></div>
<style>
    .error {

        color: red;
            
        }
</style>

<body>

    <!-- Spinner Start -->

    <!-- Spinner End -->





    <!-- Topbar Start -->

    <div class="container-fluid bg-dark text-light p-0">

        <div class="row gx-0 d-none d-lg-flex">

            <div class="col-lg-7 px-5 text-start">

                <div class="h-100 d-inline-flex align-items-center me-4">

                    <small class="fa fa-map-marker-alt text-primary me-2"></small>

                    <small>10006 King Lane, Leeds, LS17 5PS</small>

                </div>

                <div class="h-100 d-inline-flex align-items-center">

                    <small class="far fa-clock text-primary me-2"></small>

                    <small>Mon - Sat : 7:30 AM - 8 PM</small>

                </div>

            </div>

            <div class="col-lg-5 px-5 text-end">

                <div class="h-100 d-inline-flex align-items-center me-4">

                    <small class="fa fa-phone-alt text-primary me-2"></small>

                    <small>0800 710 1132</small>

                </div>

                <div class="h-100 d-inline-flex align-items-center mx-n2">

                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-facebook-f"></i></a>

                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>

                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-linkedin-in"></i></a>

                    <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>



                </div>

            </div>

        </div>

    </div>

    <style>
        label .menu {
            position: absolute;
            right: -10px;
            top: -101px;
            z-index: 100;
            width: 101px;
            height: 164px;
            background: #fff;
            /* border-radius: 4% 0% 1% 91%; */
            -webkit-transition: 0.5s ease-in-out;
            transition: 0.5s ease-in-out;
            box-shadow: 0 0 0 0 #fff, 0 0 0 0 #fff;
            cursor: pointer;
        }


        label .hamburger {

            position: absolute;

            top: 135px;

            left: 50px;

            width: 30px;

            height: 2px;

            background: #101111;

            display: block;

            -webkit-transform-origin: center;

            transform-origin: center;

            -webkit-transition: 0.5s ease-in-out;

            transition: 0.5s ease-in-out;

        }



        label .hamburger:after,

        label .hamburger:before {

            -webkit-transition: 0.5s ease-in-out;

            transition: 0.5s ease-in-out;

            content: "";

            position: absolute;

            display: block;

            width: 100%;

            height: 100%;

            background: #101111;

        }



        label .hamburger:before {

            top: -10px;

        }



        label .hamburger:after {

            bottom: -10px;

        }



        label input {

            display: none;

        }





        label input:checked+.menu .hamburger {

            -webkit-transform: rotate(45deg);

            transform: rotate(45deg);

        }



        label input:checked+.menu .hamburger:after {

            -webkit-transform: rotate(90deg);

            transform: rotate(90deg);

            bottom: 0;

        }



        label input:checked+.menu .hamburger:before {

            -webkit-transform: rotate(90deg);

            transform: rotate(90deg);

            top: 0;

        }



        label input:checked+.menu+ul {

            opacity: 1;

        }
    </style>

    <!-- Topbar End -->





    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">

        <a href="index.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">

            <img class="img-fluid" herf="index.php" style="margin-top: -20px; width: 60%;" src="<?php echo $logo; ?>">

        </a>

        <!--<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">-->

        <!--    <span class="navbar-toggler-icon"></span>-->

        <!--</button>-->

        <label class="navbar-toggler me-4 collapsed" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">

            <input type="checkbox" />

            <span class="menu"> <span class="hamburger"></span> </span>

        </label>



        <div class="collapse navbar-collapse" id="navbarCollapse">

            <div class="navbar-nav ms-auto p-4 p-lg-0">

                <a href="index.php" class="nav-item nav-link">Home</a>

                <a href="about.php" class="nav-item nav-link">About</a>

                <a href="courses.php" class="nav-item nav-link">Courses</a>

                <a href="header.php?page=progress" class="nav-item nav-link">Progress</a>

                <a href="profile.php" class="nav-item nav-link">Profile</a>

                <!-- <div class="nav-item dropdown">

                    <a href=" " class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>

                    <div class="dropdown-menu bg-light m-0">

                        <a href="feature.html" class="dropdown-item">Features</a>

                        <a href="appointment.html" class="dropdown-item">Appointment</a>

                        <a href="team.html" class="dropdown-item">Our Team</a>

                    </div>

                </div> -->

                <a href="contact.php" class="nav-item nav-link">Contact</a>

            </div>

            <a href="login.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login/Register</a>

        </div>

    </nav>

    <?php

    if (isset($_GET['page'])) {

        if (isset($_SESSION['user_id'])) {

            if ($_GET['page'] == 'progress') {

                header("location:progress-page.php");
            }
        } else {

            $_SESSION['progress'] = $_GET['page'];

            header("location:login.php");
        }
    }

    ?>

    <!-- Navbar End -->

    <center>

        <?php

        include 'error.php';

        ?>

    </center>

    <!--Login Form Start-->

    <?php

    if (isset($_GET['code'])) {

        $code = $_GET['code'];

        $update = "update user_registration set email_status = 'Verified' where email_code = '$code'";

        $run = mysqli_query($con, $update);

        if ($run) {

            $_SESSION['error'] = error('success', 'Email Verified Successfully.');

            header("location:login.php");
        }
    }

    ?>
    <style>
     
    </style>

    <div class="login-form abc" style="height: 940px;">

        <div class="button-box">

            <div id="btn"></div>

            <button type="button" class="toggle-btn btn1" onclick="login()">Log In</button>

            <button type="button" class="toggle-btn btn2" onclick="register()">Register</button>

        </div>





        <script>
            const btn1 = document.getElementById('btn1');

            btn.addEventListener('click', function onClick(event) {

                document.target.style.backgroundColor = 'black';

                document.target.style.color = 'white';



            });
        </script>





        <form id="login" method="post" class="input-group">

            <h5 class="log" style="padding-left :100px">LOGIN</h5>

            <input type="email" class="input-field" placeholder="Email" name="email" required>

            <input type="password" class="input-field" placeholder="Password" name="password" required>

            <a href='password_reset.php' class="text-dark">Forgot Password?</a>

            <button type="submit" name="login_btn" class="submit-btn mt-5">Log in</button>

        </form>



        <style>
            /* .log {} */



            .remembe2r {

                color: #777;

                font-size: 15px;

                bottom: 70px;

                left: 18px;

                position: absolute;

            }
           
    /* .ck-bx{
                height: auto !important;
            } */


            .dd {

                margin-bottom: 32px;

            }
        </style>



        <?php

        if (isset($_POST['login_btn'])) {

            $email = $_POST['email'];

            $password = $_POST['password'];



            $select = "select * from user_registration where email = '$email' and password = '$password'";

            $res = mysqli_query($con, $select);

            $data = mysqli_fetch_array($res);



            if ($data['email_status'] == 'Pending') {

                $_SESSION['error'] = error('warning', 'Please verify your email before login!');

                header("location:login.php");
            } else if ($data['email'] != $email or $data['password'] != $password) {

                $_SESSION['error'] = error('danger', 'Email or Password is incorrect!');

                header("location:login.php");
            } else if ($data['user_status'] == 'Block') {

                $_SESSION['error'] = error('danger', 'You are blocked by admin!');

                header("location:login.php");
            } else {

                $_SESSION['user_id'] = $data['id'];

                header("location:index.php");
            }
        }

        ?>

        <form id="register" onsubmit="return validates()" method="post" class="input-group">

            <h5 class="log" style="padding-left :100px">Register</h5>


              
            <input type="email" class="input-field" placeholder="Email" name="email" required>

            <input type="text" class="input-field" placeholder="First Name" name="first_name" required>

            <input type="text" class="input-field" placeholder="Last Name" name="last_name" required>

            <input type="text" class="input-field" placeholder="Address" name="address" required>

            <input type="text" class="input-field" placeholder="City" name="city" required>

            <input type="text" class="input-field" placeholder="Post Code" name="postcode" required>

            <!-- <input type="text" class="input-field" placeholder="Country" name="country" required> -->

            <input type="text" class="input-field" placeholder="Phone Number" name="phone" required>

            <input type="password" class="input-field password dd" placeholder="Password" name="password" required>
          
          <input type="checkbox" id="tat"  class="check-box checkbox_remove_clas" required name="checkboxToBeChecked"><span class=" remember">I agree to <a href="term.php">trems & conditions</a></span>
          
        
            <button type="submit"  name="register_btn" class="submit-btn">Register</button>
      
         

        </form>

        <script>
            function validates(){
                var valid = false;
                if(document.getElementById("tat").checked){
                    valid = true;
                }

                if(valid){
                   
                }else{
                    alert("before register you must fill all the fields and accept our terms and conditions");
                    return false;
                }
            }
        </script>
        

  

   <style>
  
    /* *{
        border: 1px solid red;
    } */
      label.error{
        margin: 0px !important;
        height:20px !important;
        padding: 0px !important;
        /* font-size: 13px !important; */
       
    }
    </style>
        <script>
         
            // $(document).ready(function() {



            //     $('.checkbox_remove_clas').change(function() {

            //         if ($(".checkbox_remove_clas").prop('checked') == true) {



            //             $(".check-box").css('top', '');

            //             $(".check-box").css('top', '40px');

            //             $('.remember ').removeClass('remembe2r'); 



            //         } else {

            //             $(".check-box").css('top', '-25px');

            //             $('.remember ').addClass('remembe2r');



            //         }

            //     })





            // });

            jQuery.validator.addMethod("noSpace", function(value, element) {

                return (value.trim() == value) && (value.indexOf(" ") < 0);

            })

            $.validator.addMethod("customemail",

                function(value, element) {

                    return /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(value);

                },

                "Invalid Email Format"

            );

            (function($, W, D) {

                var JQUERY4U = {};

                JQUERY4U.UTIL = {

                    setupFormValidation: function() {



                        $("#register").validate({



                            rules: {

                                first_name: {

                                    required: true,

                                },

                                last_name: {

                                    required: true,

                                },



                                email: {

                                    required: true,

                                },

                                phone: {

                                    required: true,

                                },

                                postcode: {

                                    required: true,

                                },

                                city: {

                                    required: true,

                                }



                                ,

                                checkboxToBeChecked: {

                                    required: true,

                                },



                                password: {

                                    required: true,

                                    minlength: 5

                                },

                                address: {

                                    required: true,

                                },



                            },

                            messages: {

                                first_name: {

                                    required: 'Please enter First Name',

                                },

                                last_name: {

                                    required: 'Please enter Last Name',

                                },



                                email: {

                                    required: 'Please enter Email',

                                },

                                phone: {

                                    required: 'Please enter Phone',

                                },

                                city: {

                                    required: 'Please enter City',

                                },

                                postcode: {

                                    required: 'Please enter postcode',

                                },



                                address: {

                                    required: 'Please enter Address',

                                },

                                password: {

                                    required: 'Please enter at least 5 characters.',

                                },

                                checkboxToBeChecked: {

                                    required: '',
                                  

                                },





                            },

                            invalidHandler: function(form, validator) {





                                let has = $(".check-box").hasClass("valid")

                                if (has = true) {

                                    $(".check-box").removeAttr('style');

                                    $('.remember ').removeClass('remembe2r');

                                } else {



                                    $(".check-box").css('top', '35px');

                                    $('.remember ').addClass('remembe2r');

                                }



                            },

                            submitHandler: function(form) {





                                form.submit();









                            }

                        });

                    }

                }

                $(D).ready(function($) {

                    JQUERY4U.UTIL.setupFormValidation();

                });

            })(jQuery, window, document);
        </script>

        <?php

        if (isset($_POST['register_btn'])) {

            $email = $_POST['email'];

            $first_name = $_POST['first_name'];

            $last_name = $_POST['last_name'];

            $address = $_POST['address'];

            $city = $_POST['city'];

            $postcode = $_POST['postcode'];

            // $country = $_POST['country'];

            $phone = $_POST['phone'];

            $password = $_POST['password'];

            $full_name = $first_name . " " . $last_name;

            $error = 0;



            $email_code = random_int(00000000, 99999999);



            $select = "select * from user_registration where email = '$email'";

            $res = mysqli_query($con, $select);

            $data = mysqli_fetch_array($res);



            //     if ($data['email'] == $email) {

            //         $_SESSION['error'] = error('danger', 'Email already exist!');

            // 
        ?>

            <script type="text/javascript">
                //      window.location.href = "<?php // echo "login.php" 
                                                ?>";
                //         
            </script>

            <?php

            //         $error = 1;

            //         exit();
            //     }





            if ($error == 0) {

                $insert = "insert into user_registration(email, first_name, last_name, address, city, postcode,phone, password, email_code) value ('$email', '$first_name', '$last_name', '$address', '$city', '$postcode','$phone', '$password', '$email_code')";

                $run = mysqli_query($con, $insert);

                if ($run) {



                    $Subject = "Welcome";

                    $Body = '   <head>    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>';

                    $Body .= '  <meta content="width=device-width" name="viewport"/>';
                    $Body .= '   <meta content="IE=edge" http-equiv="X-UA-Compatible"/>';

                    $Body .= ' <link rel="preconnect" href="https://fonts.gstatic.com">';

                    $Body .= '<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@500&display=swap" rel="stylesheet">';


                    $Body .= '  <style type="text/css">        p{font-size: 19px}            body {                margin: 0;                padding: 0;';

                    $Body .= '             background: white;            }            table,            td,            tr {                vertical-align: top;';

                    $Body .= '             border-collapse: collapse;            }            * {                line-height: inherit;            }';
                    $Body .= '     a[x-apple-data-detectors=true] {                color: inherit !important;';
                    $Body .= '     text-decoration: none !important;            }        </style>    <style id="media-query" type="text/css">         #outer';

                    $Body .= '{     width:100%;}.inner{    display: inline-block;}h4 {    margin-block-start: 0.20em!important;}h3 {        font-size: 1.17em;    margin-block-start: 0.20em!important;';
                    $Body .= '    font-weight: bold;}.button {  display: inline-block;  border-radius: 4px;  background-color: black;  border: none;  color: #FFFFFF;  text-align: center;';
                    $Body .= ' font-size: 28px;  padding: 20px;  width: 200px;  transition: all 0.5s;  cursor: pointer;  margin: 5px;}.button span {  cursor: pointer;  display: inline-block;';
                    $Body .= '  position: relative;  transition: 0.5s;}.button span:after {  content: "\00bb";  position: absolute;  opacity: 0;  top: 0;  right: -20px;  transition: 0.5s;}';
                    $Body .= '.button:hover span {  padding-right: 25px;}.button:hover span:after {  opacity: 1;  right: 0;}         </style>';
                    $Body .= ' </head>';

                    $Body .= ' <body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: white;">';

                    $Body .= '  <!--[if IE]><div class="ie-browser"><![endif]-->';

                    $Body .= '  <table bgcolor="white" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="table-layout: fixed; vertical-align: top; min-width: 320px; Margin: 0 auto; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: white; width: 100%;" valign="top" width="100%">';

                    $Body .= '  <tbody>';

                    $Body .= '  <tr style="vertical-align: top;" valign="top">';

                    $Body .= '  <td style="word-break: break-word; vertical-align: top;" valign="top">';

                    $Body .= '  <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color:white"><![endif]-->';

                    $Body .= '<div style="background-color:white;">';

                    $Body .= ' <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: white;">';

                    $Body .= ' <div style="border-collapse: collapse;display: table;width: 100%;background-color:white; ">';

                    $Body .= ' <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:white;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:white"><![endif]-->';

                    $Body .= ' <!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:white;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->';

                    $Body .= ' <div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px; ">';

                    $Body .= ' <div style="width:100% !important;">';

                    $Body .= '  <!--[if (!mso)&(!IE)]><!-->';

                    $Body .= ' <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px; ">';

                    $Body .= '<!--<![endif]-->';

                    $Body .= ' <div align="center" class="img-container center autowidth" style="padding-right: 25px;padding-left: 25px;">';

                    $Body .= '<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 25px;padding-left: 25px;" align="center"><![endif]-->';

                    $Body .= ' <div style="font-size:1px;line-height:25px"> </div>';

                    $Body .= '  <div style="font-size:1px;line-height:25px"> </div>';

                    $Body .= ' <!--[if mso]></td></tr></table><![endif]-->';

                    $Body .= ' </div>';

                    $Body .= '  <!--[if (!mso)&(!IE)]><!-->';

                    $Body .= ' </div>';

                    $Body .= ' <!--<![endif]-->';

                    $Body .= ' </div>';

                    $Body .= '  </div>';

                    $Body .= '  <!--[if (mso)|(IE)]></td></tr></table><![endif]-->';

                    $Body .= ' <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->';

                    $Body .= ' </div>';

                    $Body .= ' </div>';

                    $Body .= ' </div>';

                    $Body .= ' <div style="background-color:white;">';

                    $Body .= ' <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #052d85;">';

                    $Body .= ' <div style="border-collapse: collapse;display: table;width: 100%;background-color:#060818;">';

                    $Body .= ' <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:white;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:#052d85"><![endif]-->';

                    $Body .= ' <!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:#052d85;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->';

                    $Body .= '<div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">';

                    $Body .= ' <div style="width:100% !important;">';

                    $Body .= '  <!--[if (!mso)&(!IE)]><!-->';

                    $Body .= ' <div style="border-top:2px solid black; border-left:2px solid black; border-bottom:2px solid Black; border-right:2px solid Black; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px; height: 270px; background: white; padding: auto; text-align: center;  " class="top_header">';





                    $Body .= ' <!--<![endif]-->';

                    $Body .= ' <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 20px; padding-left: 20px; padding-top: 30px; padding-bottom: 20px; font-family: Arial, sans-serif"><![endif]-->';



                    $Body .= ' <img src="' . $logo . '" style="   height: 200px;    position:relative;    top: calc(10%);" />  ';
                    $Body .= '  </div>     </div>    </div>    </div>    </div>    </div>    <br>';

                    $Body .= '  <div style="Margin:0 auto;min-width:320px;max-width:600px;word-wrap:break-word;word-break:break-word;">';

                    $Body .= '  <div style="background-color:white;">';

                    $Body .= '  <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: ;">';

                    $Body .= '   <div style="border-collapse: collapse;display: table;width: 100%;background-color:;">';

                    $Body .= '   <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:white;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:#052d85"><![endif]-->';

                    $Body .= '   <!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:#052d85;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->';

                    $Body .= '  <div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">';

                    $Body .= '  <div style="width:100% !important; text-align: center;">';

                    $Body .= '   <!--[if (!mso)&(!IE)]><!-->';





                    $Body .= '   <span style="width: 100%;">';

                    $Body .= '    <h3>';

                    $Body .= '    Congratulations! Your account has been created successfully!';

                    $Body .= '    </h3>';

                    $Body .= '    <P>Verified Account By click on the button below</P>';

                    $Body .= ' </span>';



                    $Body .= '   <!--<![endif]-->';

                    $Body .= '   </div>';



                    $Body .= '   </div>';





                    $Body .= '   <!--[if (mso)|(IE)]></td></tr></table><![endif]-->';

                    $Body .= '  <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->';

                    $Body .= '  </div>';



                    $Body .= '   </div>';



                    $Body .= '   </div>';

                    $Body .= ' </div> ';

                    $Body .= ' <br>';

                    $Body .= '  <div style="background-color:white;">';

                    $Body .= '   <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #FFFFFF;">';

                    $Body .= '   <div style="border-collapse: collapse;display: table;width: 100%;background-color:#FFFFFF;     ">';



                    $Body .= '  <div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">';

                    $Body .= '  <div style="width:100% !important;">';

                    $Body .= '  <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:15px; padding-right: 0px; padding-left: 0px; ">';





                    $Body .= '  <div style="color:white;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.5;padding-top:10px;padding-right:30px;padding-bottom:0px;padding-left:30px;">';

                    $Body .= '  <div style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 12px; line-height: 1.5; color: white; mso-line-height-alt: 18px; ">';





                    $Body .= ' <p style="font-size: 16px; color: black; line-height: 1.5; text-align: center; mso-line-height-alt: 24px; margin: 0;">';





                    $Body .= ' <a href="' . $student_aprove_link . $email_code . '" class="button" style="vertical-align:middle; color: #fff;">Verify</a>';

                    $Body .= '  </p>';





                    $Body .= '  </div>';

                    $Body .= '  </div>';

                    $Body .= '  </div>';

                    $Body .= '  <!--[if mso]></td></tr></table><![endif]-->';

                    $Body .= '  <div align="center" class="button-container" style="padding-top:25px;padding-right:0px;padding-bottom:0px;padding-left:0px;">';

                    $Body .= '  <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"><tr><td style="padding-top: 25px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="" style="height:39pt; width:183.75pt; v-text-anchor:middle;" arcsize="8%" stroke="false" fillcolor="#052d85"><w:anchorlock/><v:textbox inset="0,0,0,0"><center style="color:#ffffff; font-family:Arial, sans-serif; font-size:14px"><![endif]-->';



                    $Body .= '  <!--[if mso]></center></v:textbox></v:roundrect></td></tr></table><![endif]-->';

                    $Body .= '  </div>';

                    $Body .= '  <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 20px; padding-left: 20px; padding-top: 20px; padding-bottom: 30px; font-family: Arial, sans-serif"><![endif]-->';

                    $Body .= ' <div style="color:#555555;font-family:Arial, Helvetica Neue, Helvetica, sans-serif;line-height:1.2;padding-top:20px;padding-right:20px;padding-bottom:30px;padding-left:20px;">';



                    $Body .= '  </div>';

                    $Body .= '  <!--[if mso]></td></tr></table><![endif]-->';

                    $Body .= '  <!--[if (!mso)&(!IE)]><!-->';

                    $Body .= '  </div>';

                    $Body .= '   <!--<![endif]-->   </div>    </div>     </div>    </div>    </div>';

                    $Body .= '  <div style="background-color:transparent;">';

                    $Body .= '   <div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">';

                    $Body .= '  <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">';

                    $Body .= '  <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->';

                    $Body .= '  <!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:transparent;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->';

                    $Body .= '  <div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">';

                    $Body .= '  <div style="width:100% !important;">';

                    $Body .= '  <!--[if (!mso)&(!IE)]><!-->';

                    $Body .= '  <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">';

                    $Body .= '  <!--<![endif]-->';

                    $Body .= '  <table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">';

                    $Body .= '  <tbody>';

                    $Body .= '  <tr style="vertical-align: top;" valign="top">';

                    $Body .= '  <td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;" valign="top">';

                    $Body .= ' <table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; width: 100%;" valign="top" width="100%">';

                    $Body .= '  <tbody>';

                    $Body .= '  <tr style="vertical-align: top;" valign="top">';

                    $Body .= '  <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>';

                    $Body .= '  </tr>';

                    $Body .= '  </tbody>';

                    $Body .= '  </table>';

                    $Body .= '  </td>';

                    $Body .= '  </tr>';

                    $Body .= '  </tbody>';

                    $Body .= '   </table>    </div>    </div>    </div>    </div>    </div>     </div>          </td>    </tr>    </tbody>    </table>   </body>    </html>';


            ?>
                    <script>
                        $.ajax({
                            type: "post",
                            url: "new.php",
                            data: {
                                email: '<?= $email ?>',
                                name: '<?= $full_name ?>',
                                subject: ' <?= $Subject ?>',
                                body: '<?= $Body ?>',
                            },

                            success: function(response) {



                                <?php
                                $_SESSION['error'] = error('success', 'Account has been registered successfully. Now verify your email before login.');

                                ?>

                                window.location.href = "<?php echo "login.php" ?>";





                            }
                        });
                    </script>
        <?php



                }
            }
        }

        ?>

    </div>



    <!--Login Form End-->







    <?php

    include 'footer.php';

    ?>



    <!-- Footer Start -->

    <!-- <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">

        <div class="container">

            <div class="row g-5">

                <div class="col-lg-4 col-md-6">

                    <h4 class="text-white mb-4">Get In Touch</h4>

                    <h2 class="text-primary mb-4"><span class="text-white">PassVeryFast</span>></h2>

                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>10006 King Lane, Leeds, LS17 5PS</p>

                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0800 710 1132</p>

                    <p class="mb-2"><svg class="me-3" style="width:24px;height:24px" viewBox="0 0 24 24">

                            <path fill="currentColor"

                                d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" />

                        </svg>07463325182</p>

                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@passveryfast.co.uk</p>

                </div>

                <div class="col-lg-4 col-md-6">

                    <h4 class="text-light mb-4">Quick Links</h4>

                    <a class="btn btn-link" href="index.php">Home</a>

                    <a class="btn btn-link" href="about.php">About Us</a>

                    <a class="btn btn-link" href="courses.php">Courses</a>

                    <a class="btn btn-link" href="contact.php">Contact Us</a>

                    <a class="btn btn-link" href="content.php">Content</a>

                </div>

                <div class="col-lg-4 col-md-6">

                    <h6 class="text-white mt-4 mb-3">Follow Us</h6>

                    <div class="d-flex pt-2">

                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-twitter"></i></a>

                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-facebook-f"></i></a>

                        <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a>

                        <a class="btn btn-square btn-outline-light me-0" href=""><i class="fab fa-linkedin-in"></i></a>

                    </div>

                </div>

            </div>

        </div>

    </div> -->

    <!-- Footer End -->





    <!-- Copyright Start -->

    <!-- <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">

        <div class="container">

            <div class="row">

                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">

                    &copy; <a href=" ">PassVeryFast</a>, All Right Reserved.

                </div>

            </div>

        </div>

    </div> -->

    <!-- Copyright End -->





    <!-- Back to Top -->

    <a href=" " class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>



    <script>
        var x = document.getElementById("login");

        var y = document.getElementById("register");

        var z = document.getElementById("btn");



        function register() {

            x.style.left = "-400px";

            y.style.left = "50px";

            z.style.left = "110px";

            x.style.backgroundColor = 'white';



            document.querySelector('.btn1').classList.remove('act');

            document.querySelector('.btn2').classList.add('act');

            // e.style.backgroundColor = 'black';   

            // e.style.borderRadius = '1em';

            // e.style.color = 'white';

        }

        function login() {

            x.style.left = "50px";

            y.style.left = "450px";

            z.style.left = "0";

            // y.style.backgroundColor = 'white';



            document.querySelector('.btn2').classList.remove('act');

            document.querySelector('.btn1').classList.add('act');

            // e.style.backgroundColor = 'black';

            // e.style.color = 'white';

            // e.style.borderRadius = '1em';





        }

        document.querySelector('.btn1').classList.add('act');
    </script>

    <style>
        .act {

            background-color: black;

            color: white;

            border-radius: 1em;

        }
    </style>


</body>



</html>



<style>
    @media screen and (max-width: 800px) {

        .left,
        .main,
        .right {

            width: 100%;
            /* The width is 100%, when the viewport is 800px or smaller */

        }

    }
</style>