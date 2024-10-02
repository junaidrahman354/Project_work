<?php 
    include 'header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-0"></div>
        <div class="col-lg-6 col-md-6 col-12">
            <center><h2>Update Password</h2></center>
            <?php include 'error.php'; ?>
            <form method="post">
                <div class="form-group">
                    <label>Old Password</label>
                    <input type="password" name="old_password" class="form-control" placeholder="Enter Old Password" required="">
                </div>
                <div class="form-group mt-3">
                    <label>New Username</label>
                    <input type="password" name="new_password" class="form-control" placeholder="Enter New Password" required="">
                </div>
                <div class="form-group mt-3">
                    <label>Confirm Username</label>
                    <input type="password" name="confirm_password" class="form-control" placeholder="Enter Confirm Password" required="">
                </div>
                <center><button type="submit" name="btn" onClick='return confirm("Confirm to Update Password?")' class="btn btn-dark btn-lg mt-3">Submit</button></center>
            </form>
        </div>
<?php
    if(isset($_POST['btn'])){
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        $select = "select * from admin_login where password = '$old_password'";
        $res = mysqli_query($con, $select);
        $data = mysqli_fetch_array($res);
        if($data['password'] != $old_password){
            $_SESSION['error'] = error('danger', 'Old Password is incorrect!');
            header("location:update_password.php");
        }elseif ($confirm_password != $new_password) {
            $_SESSION['error'] = error('danger', 'Confirm Password does not match!');
            header("location:update_password.php");
        }else{

        $update = "update admin_login set password = '$confirm_password'";
        $run = mysqli_query($con, $update);
        if(!$run){
            echo mysqli_error($con);
        }else{
            $_SESSION['error'] = error('success', 'Password has been updated successfully');
            header("location:update_password.php");
        }
        }  
    }
?>
        <div class="col-lg-3 col-md-3 col-0"></div>
    </div>      
</div>

<?php 
    include 'footer.php';
?>