<?php

include 'connection.php';


$user_id = $_SESSION['user_id'];

$select = "select * from user_registration where id = '$user_id'";

$res = mysqli_query($con, $select);

$current_user = mysqli_fetch_array($res);

?>

<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="utf-8">

  <title>PassVeryFast</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="keywords">

  <meta content="" name="description">



  <!-- Favicon -->

  <link href="img/favicon.ico" rel="icon">

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



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



  <link href="css/style.css" rel="stylesheet">

  

</head>
<div class="dropClas"></div>
<style>
  pre {
    color: white
  }

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



<body>

  <!-- Spinner Start -->

  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">

    <div class="spinner-grow text-primary" role="status"></div>

  </div>

  <!-- Spinner End -->





  <!-- Topbar Start -->

  <div class="container-fluid bg-dark text-light p-0">

    <div class="row gx-0 d-none d-lg-flex">

      <div class="col-lg-7 px-5 text-start">

        <div class="h-100 d-inline-flex align-items-center me-4">

          <small class="fa fa-map-marker-alt text-primary me-2"></small>

          <small>10006 King Lane Leeds LS17 5PS</small>

        </div>

        <div class="h-100 d-inline-flex align-items-center">

          <small class="far fa-clock text-primary me-2"></small>

          <small>Info@passveryfast.co.uk</small>

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
    <!-- <img src="img/cloud-2.png" alt="" class="cloud"> -->
  </div>

   

  <!-- Navbar Start -->
  
  <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
 

    <a href="index.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">

      <img class="img-fluid" herf="index.php" style="margin-top: -20px; width: 60%;" src="<?php echo $logo; ?>">


    </a>

   


    <label class="navbar-toggler me-4 collapsed" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">

      <input type="checkbox" />

      <span class="menu"> <span class="hamburger"></span> </span>

    </label>


    
    <div class="collapse navbar-collapse" id="navbarCollapse">
   
      <div class=" navbar-nav ms-auto p-4 p-lg-0">

        <a href="index.php" class="nav-item nav-link">Home</a>

        <a href="header.php?page=progress" class="nav-item nav-link">Progress</a>

        <a href="profile.php" class="nav-item nav-link">Profile</a>

        <a href="courses.php" class="nav-item nav-link">Courses</a>

  

        <?php

        if (isset($_SESSION['user_id'])) {

        ?>

          <a href="chat_sys/index.php" class="nav-item nav-link">Messeges</a>

        <?php

        }

        ?>

        <a href="contact.php" class="nav-item nav-link">Contact</a>

        <?php

        if (isset($_SESSION['user_id'])) {

        ?>

          <a href="logout.php" class="nav-item nav-link">Logout</a>

        <?php

        }

        ?>

      </div>

      <?php

      if (!isset($_SESSION['user_id'])) {

      ?>

        <a href="login.php" class="btn nan btn-primary py-4 px-lg-5 d-none d-lg-block">Login/Register</a>

      <?php

      } else {

      ?>

        <a class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Hi, <?php echo $current_user['first_name'] ?></a>

      <?php

      }

      ?>



    </div>
 
  </nav>
 

  <!-- Navbar End -->

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







  <style>
    .navMenu {

      position: absolute;

      top: 50%;

      left: 50%;

      -webkit-transform: translate(-50%, -50%);

      transform: translate(-50%, -50%);

      color: black;

    }



    .navMenu a {

      color: #f6f4e6;

      text-decoration: none;

      font-size: 1.2em;

      text-transform: uppercase;

      font-weight: 500;

      display: inline-block;

      width: 80px;

      -webkit-transition: all 0.2s ease-in-out;

      transition: all 0.2s ease-in-out;

      color: black;



    }



    .navMenu a:hover {

      color: #fddb3a;

    }



    .navMenu .dot {

      width: 6px;

      height: 6px;

      background: #fddb3a;

      border-radius: 50%;

      opacity: 0;

      -webkit-transform: translateX(30px);

      transform: translateX(30px);

      -webkit-transition: all 0.2s ease-in-out;

      transition: all 0.2s ease-in-out;

    }



    .navMenu a:nth-child(1):hover~.dot {

      -webkit-transform: translateX(30px);

      transform: translateX(30px);

      -webkit-transition: all 0.2s ease-in-out;

      transition: all 0.2s ease-in-out;

      opacity: 1;

    }



    .navMenu a:nth-child(2):hover~.dot {

      -webkit-transform: translateX(110px);

      transform: translateX(110px);

      -webkit-transition: all 0.2s ease-in-out;

      transition: all 0.2s ease-in-out;

      opacity: 1;

    }



    .navMenu a:nth-child(3):hover~.dot {

      -webkit-transform: translateX(200px);

      transform: translateX(200px);

      -webkit-transition: all 0.2s ease-in-out;

      transition: all 0.2s ease-in-out;

      opacity: 1;

    }



    .navMenu a:nth-child(4):hover~.dot {

      -webkit-transform: translateX(285px);

      transform: translateX(285px);

      -webkit-transition: all 0.2s ease-in-out;

      transition: all 0.2s ease-in-out;

      opacity: 1;

    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {

      display: none;

    }/* ===================Changes============================ */
    .availability-head{
   font-size: 19px;
	}
	.complete-bit{
		font-size: 25px;
	}
	.main-label{
		font-size: 20px;
		color: black;
	}
	.form-check-input{
	 /* font-size: 30px !important; */
	 width: 17px;
	 height: 17px;
	}
	/* .col-lg-6,.row{
		border: 1px solid red;
	} */
	/* .hr1{} */
	.mt1{
		margin-top: -20px;
	}
 /* ===courses=== */
 .course-icon  .course-icon__label{
       box-shadow: 0px 0px 15px 0.7px rgb(224, 217, 217);
        margin-left:-85px !important;
    }
    .course-icon .svg-automatic-transmission{
        margin-left: -170px !important;
        border-radius: 50%;
        margin-top:-16px;
       /* box-shadow: 0px 0px 15px 0.3px gray; */
       
    }
    .course-icons__wrapper h4{
        /* margin-left: 0px; */
        position: absolute;
    }
  </style>