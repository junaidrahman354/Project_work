<?php 
    include 'header.php';
?>
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
<?php 
    $select = "select COUNT(*) as total from user_registration";
    $res = mysqli_query($con, $select);
    $data = mysqli_fetch_array($res);
    if($data['total'] == ''){
        $data['total'] = 0;
    }
?>
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-users fa-3x text-dark"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Users</p>
                                <h6 class="mb-0"><?php echo $data['total'] ?></h6>
                            </div>
                        </div>
                    </div>
<?php 
    $select = "select COUNT(*) as total from user_registration where user_status = 'Active'";
    $res = mysqli_query($con, $select);
    $data = mysqli_fetch_array($res);
    if($data['total'] == ''){
        $data['total'] = 0;
    }
?>
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-users fa-3x text-dark"></i>
                            <div class="ms-3">
                                <p class="mb-2">Active Users</p>
                                <h6 class="mb-0"><?php echo $data['total'] ?></h6>
                            </div>
                        </div>
                    </div>
<?php 
    $select = "select COUNT(*) as total from user_registration where user_status = 'Block'";
    $res = mysqli_query($con, $select);
    $data = mysqli_fetch_array($res);
    if($data['total'] == ''){
        $data['total'] = 0;
    }
?>
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-users fa-3x text-dark"></i>
                            <div class="ms-3">
                                <p class="mb-2">Block Users</p>
                                <h6 class="mb-0"><?php echo $data['total'] ?></h6>
                            </div>
                        </div>
                    </div>



                </div>
            <!-- Sale & Revenue End -->

<div class="col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12 mt-5">
                                            <center><h4>Website Link</h4> </center>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="widget-content widget-content-area p-4">

<div class="clipboard">
                                        <form class="form-horizontal">


                        <input type="text" class="form-control mb-4" id="referal_link" value="<?php echo $web_link; ?>" readonly="">
                    


                                            
<center>
                                            <a class="mb-2 btn btn-primary" href="javascript:;" id="copy_btn" onclick="copyFunction()"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy from Input</a>
                                            
                                            

</center>
                                        </form>
                                    </div>
                                </div>
                            </div>
</div> 


</div>

<?php 
    include 'footer.php';
?>

<script>
function copyFunction() {

        var copyText = document.getElementById("referal_link");
        if(copyText.value=="")
        {
          alert("Please generate a referal link first");
        }
        else
        {
          copyText.select();
          document.execCommand("copy");
          $("#copy_btn").html("Copied");
        }

} 
</script>