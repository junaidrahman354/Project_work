<?php include "header.php"; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
 
<style>
.txt-sz{
    font-size: 40px;
    padding: 30px 30px;
}
.card{
   max-width:400px;
    border-radius: 25px;
    min-height: 300px;
    margin-top: 50px;
}
.card:hover{
    box-shadow: 0px 0px 16px 0.3px rgb(204, 198, 198);
    transition: all 0.5s ease-in-out;
}
.card-title h6{
    font-size:19px;
    color: black;
}
.card .icon img{
    width: 80px !important;
    height: 80px;
    position: absolute;
    width: 60px;
  font-size: 40px;
  box-shadow: 0px 7px 15px 0.7px rgb(204, 198, 198);
  background-color:white;
  padding: 14px 17px;
  border-radius: 50%;
  margin-left: 40%;
  margin-top: -38px;
}

.card .icon i{
  position: absolute;
  font-size: 40px;
  box-shadow: 0px 7px 15px 0.7px rgb(204, 198, 198);
  background-color:white;
  padding: 17px 20px;
  border-radius: 50%;
  margin-left: 39%;
  margin-top: -38px;
}
.card .icon i:hover{
    background-color: black;
    color: white;
    transition: all 1s ease;
}
.btn-card{
    color: blueviolet;
    font-weight: bold;
    font-size: 14px;
   
}
@media (max-width:414px){
    .card .icon i,
    .card .icon img{
        margin-left: 37% !important;
    }
}
@media (max-width:1199px){
    .card .icon i,
    .card .icon img{
        margin-left: 37% !important;
    }   
}
.btn-card:hover{
    color: blueviolet;
}
.btn-card i{
    margin-left: 10px !important;
}
.card-content{
    min-height: 160px;
}
.c1{
    padding-top: 20px 20px;
}
.c2{
    padding:20px 29px !important;
}

</style>
<!-- -------- -->
<div class="container-fluid page-header p-0 mt-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-5 text-white txt-sz animated slideInDown mb-4">Manual Driving License</h1>
        <nav aria-label="breadcrumb animated slideInDown">
        </nav>
    </div>
</div>
<!-- --------- -->
<br><br>

     <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="icon">
                        <i class="fa fa-car c1"></i>
                        </div>
                        <div class="card-bod">
                            <br><br><br>
                            <div class="card-title m-auto w-100">
                             <h6 class="m-auto text-center">Automatic Driving License</h6>
                            </div>
                            <div class="card-content px-4 mt-3 text-center">
                                <p>Beginner,intermediate or nearly test standard? Our courses are designed to suit all levels of driving</p>
                            </div><br>
                            <div class="card-foot text-center">
                                <a class="btn-card" href="#">CONTACT US <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                            </div><br>
                        </div>
                    </div>
                </div>
                <!-- ======= -->
                <div class="col-lg-4 col-md-6">
                <div class="card">
                        <div class="icon">
                        <i class="fa fa-book px-0 c2"></i>
                        </div>
                        <div class="card-bod">
                            <br><br><br>
                            <div class="card-title m-auto w-100">
                             <h6 class="m-auto text-center">Intensive Course prices</h6>
                            </div>
                            <div class="card-content px-4 mt-3 text-center">
                                <p>All our instructer are experienced are experienced & Approved .They'll teach you using the latest techniques and methods to suit your learning styles.. We understand everybody learns in different Ways!</p>
                            </div><br>
                            <div class="card-foot text-center">
                                <a class="btn-card" href="#">BOOK NOW<i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                            </div><br>
                        </div>
                    </div>
                </div>
                <!-- ======== -->
             
            </div>
     </div>




<?php include "footer.php"; ?>