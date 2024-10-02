<?php 
    include 'connection.php';
    if(!isset($_SESSION['admin_id'])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PassVeryFast | Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
      <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <img class="img-fluid" width="" style="" src="<?php echo $logo; ?>">
                </a>
               <!--  <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div> -->
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                    <div class="nav-item dropdown">
                        
                        <a href=" " class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-users me-2"></i>User's</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="all_user.php" class="dropdown-item">All Users</a>
                            <a href="active_user.php" class="dropdown-item">Active Users</a>
                            <a href="block_user.php" class="dropdown-item">Block Users</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href=" " class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-users me-2"></i>Instructors</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="all_instructor.php" class="dropdown-item">All Instructors</a>
                            <a href="active_instructor.php" class="dropdown-item">Active Instructor</a>
                            <a href="block_instructor.php" class="dropdown-item">Block Instructor</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href=" " class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-bars me-2"></i>Courses</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add_courses.php" class="dropdown-item">Add Courses</a>
                            <a href="manage_courses.php" class="dropdown-item">Manage Courses</a>
                            
                        </div>
                    </div>
                    <!--<div class="nav-item dropdown">
                        <a href=" " class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-bars me-2"></i>Subject</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add_subject.php" class="dropdown-item">Add Subject</a>
                            <a href="manage_subject.php" class="dropdown-item">Manage Subject</a>
                        </div>
                    </div>-->
                    <div class="nav-item dropdown">
                        <a href=" " class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-bars me-2"></i>Progress</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add_progress.php" class="dropdown-item">Add Progress</a>
                            <a href="manage_progress.php" class="dropdown-item">Manage Progress</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href=" " class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-star me-2"></i>Reivews</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="review.php" class="dropdown-item">Reviews</a>
                            <a href="add-review.php" class="dropdown-item">Add Review</a>
                        
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href=" " class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-store me-2"></i>Shop</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add_product.php" class="dropdown-item">Add Products</a>
                            <a href="manage_product.php" class="dropdown-item">Manage Products</a>
                        
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href=" " class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-gift me-2"></i>Offers</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="add_offer.php" class="dropdown-item">Add Offer</a>
                            <a href="manage_offer.php" class="dropdown-item">Manage Offers</a>
                        
                        </div>
                    </div>

                    <a href="instructer_student.php" style="font-size: 15px;" class="nav-item nav-link"><i class="fa fa-users"></i>Instructer Student</a>
                    <a href="../chat_sys/index.php" class="nav-item nav-link"> <i class='fas fa-comment-alt'></i> Messeges</a>
                    <a href="add_new_user.php" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Add Users</a>
                    <a href="add_new_instructor.php" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Add Instructors</a>
                    <a href="theory_test.php" class="nav-item nav-link"><i class="fa fa-book me-2"></i>Theory Test</a>
                    <a href="driving_test.php" class="nav-item nav-link"><i class="fa fa-car me-2"></i>Driving Test</a>
                    <a href="update_username.php" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Edit Username</a>
                    <a href="update_password.php" class="nav-item nav-link"><i class="fa fa-lock me-2"></i>Edit Password</a>
                    <a href="logout.php" onClick='return confirm("Do you want to logout?")' class="nav-item nav-link"><i class="fa fa-power-off me-2" ></i>Log out</a>
                   

                   <!-- <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href=" " class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="login.php" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div> -->
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-dark mb-0">PVF</h2>
                </a>
                <a href=" " class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <!-- <input class="form-control border-0" type="search" placeholder="Search"> -->
                </form>
                <div class="navbar-nav align-items-center ms-auto"> 
                    <div class="nav-item dropdown">
                        <a class="nav-link " data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Admin</span>
                        </a>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
