<?php
include 'connection.php';

if (isset($_SESSION['instructor_id'])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Instructor Login | PassVeryFast</title>
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

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        .login-form {

            box-shadow: 0 0 20px 2px #b3b3a1;
            overflow: hidden;
            background-color: #b5bfc9 !important;
        }
    </style>
</head>
<div class="dropClas"></div>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center " style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 ">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3  login-form">
                        <form method="POST">


                            <h3 class="text-center">Instructor</h3>
                            <h2 class="text-center">Log In</h2>
                            <?php include 'error.php'; ?>
                            <div class="form-floating mb-3">
                                <?php
                                if (isset($_GET['code'])) {
                                    $code = $_GET['code'];
                                    $update = "update instructor_registration set email_status = 'Verified' where email_code = '$code'";
                                    $run = mysqli_query($con, $update);
                                    if ($run) {
                                        $_SESSION['error'] = error('success', 'Email Verified Successfully.');
                                        header("location:login.php");
                                    }
                                }
                                ?>
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required="">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required="">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                </div>
                                <a href="password_reset.php">Forgot Password</a>
                            </div>
                            <button type="submit" name="login_btn" class="btn btn-dark py-3 w-100 mb-4">Log In</button>
                            <p class="text-center mb-0 ">Don't have an Account? <a href="signup.php">Sign Up</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>
    <?php
    if (isset($_POST['login_btn'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $select = "select * from instructor_registration where email = '$email' and password = '$password'";
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
            $_SESSION['instructor_id'] = $data['id'];
            header("location:index.php");
        }
    }
    ?>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>