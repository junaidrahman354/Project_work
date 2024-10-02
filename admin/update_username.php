<?php 
    include 'header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-0"></div>
        <div class="col-lg-6 col-md-6 col-12">
            <center><h2>Update Username</h2></center>
            <?php include 'error.php'; ?>
            <form method="post">
                <div class="form-group">
                    <label>Old Username</label>
                    <input type="text" name="old_username" class="form-control" placeholder="Enter Old Uername" required="">
                </div>
                <div class="form-group mt-3">
                    <label>New Username</label>
                    <input type="text" name="new_username" class="form-control" placeholder="Enter New Username" required="">
                </div>
                <div class="form-group mt-3">
                    <label>Confirm Username</label>
                    <input type="text" name="confirm_username" class="form-control" placeholder="Enter Confirm Username" required="">
                </div>
                <center><button type="submit" name="btn" onClick='return confirm("Confirm to Update Username?")' class="btn btn-dark btn-lg mt-3">Submit</button></center>
            </form>
        </div>
<?php
    if(isset($_POST['btn'])){
        $old_username = $_POST['old_username'];
        $new_username = $_POST['new_username'];
        $confirm_username = $_POST['confirm_username'];

        $select = "select * from admin_login where user_name = '$old_username'";
        $res = mysqli_query($con, $select);
        $data = mysqli_fetch_array($res);
        if($data['user_name'] != $old_username){
            $_SESSION['error'] = error('danger', 'Old username is incorrect!');
            header("location:update_username.php");
        }elseif ($confirm_username != $new_username) {
            $_SESSION['error'] = error('danger', 'Confirm username does not match!');
            header("location:update_username.php");
        }else{

        $update = "update admin_login set user_name = '$confirm_username'";
        $run = mysqli_query($con, $update);
        if(!$run){
            echo mysqli_error($con);
        }else{
            $_SESSION['error'] = error('success', 'Username has been updated successfully');
            header("location:update_username.php");
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