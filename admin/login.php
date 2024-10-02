<?php 
    include 'connection.php';

    if(isset($_SESSION['admin_id'])){
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Login | PassVeryFast</title>
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
</head>

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
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <form method="post">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href = "../index.php" class="">
                                <img class="img-fluid" width="180" style="" src="<?php echo $logo; ?>">

                            <h3>Log In</h3>
                            </a>
                        </div>
                        <?php include 'error.php'; ?>
                        <div class="form-floating mb-3">
                            <input type="text" name="user_name" class="form-control" id="floatingInput" placeholder="Username">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button type="submit" name="admin_login" class="btn btn-dark py-3 w-100 mb-4">Log In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php 
    if(isset($_POST['admin_login'])){
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        $select = "select * from admin_login where user_name = '$user_name' and password = '$password'";
        $res = mysqli_query($con, $select);
        $data = mysqli_fetch_array($res);

        if($user_name != $data['user_name'] or $password != $data['password']){
            $_SESSION['error'] = error('danger','Username or Email is incorrect!');
            header("location:login.php");
        }else{
            $_SESSION['admin_id'] = $data['id'];
            header("location:index.php");
        }
    }
?>
    </div>

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