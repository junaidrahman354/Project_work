<?php 
    ini_set('error_reporting', 1);
    ini_set('display_errors', E_ALL);

    include 'header.php';
?>

<!-- Carousel Start -->
<!-- <div class="container"></div> -->
<div class="container-fluid aaa p-0 wow fadeIn" data-wow-delay="0.1s">
  <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="aaa w-100" src="img/carousel-1.jpg" alt="Image">
        <div class="aaa carousel-caption">
          <div class="aaa container">
            <div class="row aaa justify-content-center">
              <div class="aaa col-lg-7">
                <h1 class="aaa display-2 mt-2 text-light mb-5 animated slideInDown">Learn To Drive With Confidence</h1>

                <?php 
            if(!isset($_SESSION['user_id'])){
            ?>
                <a href="login.php" class="bbb nan btn py-sm-3 px-sm-5 ms-3">Login/Register</a>
                <?php
            }else{
            ?>
                <a class="btn  btn-primary py-sm-3 px-sm-5">Welcome</a>
                <?php 
            }
            ?>
                <a href="courses.php" class="bbb nan btn py-sm-3 px-sm-5 ms-3">Our Courses</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="w-100 aaa" src="img/carousel-2.jpg" alt="Image">
        <div class="aaa carousel-caption">
          <div class="aaa container">
            <div class="aaa row justify-content-center">
              <div class="aaa col-lg-7">
                <h1 class="aaa display-2 mt-2 text-light mb-5 animated slideInDown">Safe Driving Is Our Top Priority</h1>
                <?php 
            if(!isset($_SESSION['user_id'])){
            ?>
                <a  href="login.php" class="bbb btn nan py-sm-3 px-sm-5 ms-3">Login/Register</a>
                <?php
            }else{
            ?>
                <a class="btn btn-primary py-sm-3 px-sm-5">Welcome</a>
                <?php 
            }
            ?>
                <a href="courses.php" class="btn bbb nan py-sm-3 px-sm-5 ms-3">Our Courses</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!-- Carousel End -->


<!-- Facts Start -->
<div class="container-fluid facts py-5 pt-lg-0">
  <div class="container py-5 pt-lg-0">
    <div class="row gx-0">
      <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s" style="padding-bottom:15px;">
        <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
          <div class="d-flex">
            <div class="flex-shrink-0 btn-lg-square bg-primary">
              <i class="fa fa-car text-white"></i>
            </div>
            <div class="ps-4">
              <h5>Easy To Learn</h5>
              <span>Learn in an easy way with one of our experienced instructor</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s" style="padding-bottom:15px;">
        <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
          <div class="d-flex">
            <div class="flex-shrink-0 btn-lg-square bg-primary">
              <i class="fa fa-users text-white"></i>
            </div>
            <div class="ps-4">
              <h5>Fully qualified Instructors</h5>
              <span>Learn with one of our many top-notch driving instructors in the UK</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s" style="padding-bottom:15px;">
        <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
          <div class="d-flex">
            <div class="flex-shrink-0 btn-lg-square bg-primary">
              <i class="fa fa-file-alt text-white"></i>
            </div>
            <div class="ps-4">
              <h5>Get your pink driving licence</h5>
              <span>Pass very fast with us and get your full driving licence very fast</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Facts End -->


<!-- About Start -->
<div class="container-xxl py-6">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
          <img class="position-absolute w-100 h-100" src="img/about-1.jpg" alt="" style="object-fit: cover;">
          <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/about-2.jpg" alt=""
            style="width: 200px; height: 200px;">
        </div>
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="h-100">
          <h6 class="text-primary text-uppercase mb-2">Pass Very Fast</h6>
          <h1 class="display-6 mb-4">We Help Learners Pass Very Fast & Get Their Full Driving Licence On The First
            Attempt</h1>
          <p>A fantastic driving school with a very high pass rate! Learn with one of our excellent driving instructors
            with the highest quality teaching skills, discover the difference, pass very fast and give yourself the best
            possible start to a life time of safe driving.</p>
          <div class="row g-2 mb-4 pb-2">
            <div class="col-sm-6">
              <i class="fa fa-check text-primary me-2"></i>Fully Qualified Instructors
            </div>
            <div class="col-sm-6">
              <i class="fa fa-check text-primary me-2"></i>Online Track Records
            </div>
            <div class="col-sm-6">
              <i class="fa fa-check text-primary me-2"></i>No Cheap Gimmick
            </div>
            <div class="col-sm-6">
              <i class="fa fa-check text-primary me-2"></i>Dual Controlled Vehicles
            </div>
            <div class="col-sm-6">
              <i class="fa fa-check text-primary me-2"></i>
              Courses tailored to you
            </div>
            <div class="col-sm-6">
              <i class="fa fa-check text-primary me-2"></i>
              Manage your progress anywhere, anytime!
            </div>
          </div>
          <div class="row g-4">
            <div class="col-sm-6">
              <?php 
            if(!isset($_SESSION['user_id'])){
            ?>
              <a class="btn nan nan  py-3 px-5" href="login.php">Login/Register</a>
              <?php
            }else{
            ?>
              <a class="btn btn-primary py-3 px-5" href="courses.php">Courses</a>
              <?php 
            }
            ?>
            </div>
            <div class=" phone1 col-sm-6">
              <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:08007101132">
                <span class="flex-shrink-0 btn-square bg-primary">
                  <i class="fa fa-phone-alt text-white"></i>
                </span>
                <span class="phone px-3">0800 710 1132</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About End -->


<!-- Features Start -->
<div class="container-xxl py-6">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="text-primary text-uppercase mb-2">Why Choose Us!</h6>
        <h1 class="display-6 mb-4">Best Driving School</h1>
        <!-- <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p> -->
        <div class="row gy-5 gx-4">
          <div class="col-lg-6 col-sm-6 wow fadeIn" data-wow-delay="0.1s">
            <div class="d-flex align-items-center mb-3">
              <div class="flex-shrink-0 btn-square bg-primary me-3">
                <i class="fa fa-check text-white"></i>
              </div>
              <h5 class="mb-0">Experienced Fully Qualified Instructors</h5>
            </div>
            <!-- <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span> -->
          </div>
          <div class="col-lg-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
            <div class="d-flex align-items-center mb-3">
              <div class="flex-shrink-0 btn-square bg-primary me-3">
                <i class="fa fa-check text-white"></i>
              </div>
              <h5 class="mb-0">Fast Tracked Theory/Driving Test</h5>
            </div>
            <!-- <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span> -->
          </div>
          <div class="col-lg-6 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
            <div class="d-flex align-items-center mb-3">
              <div class="flex-shrink-0 btn-square bg-primary me-3">
                <i class="fa fa-check text-white"></i>
              </div>
              <h5 class="mb-0">No Cheap Gimmick</h5>
            </div>
            <!-- <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span> -->
          </div>
          <div class="col-lg-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
            <div class="d-flex align-items-center mb-3">
              <div class="flex-shrink-0 btn-square bg-primary me-3">
                <i class="fa fa-check text-white"></i>
              </div>
              <h5 class="mb-0">Automatic or Manual Driving Lessons</h5>
            </div>
            
            <!-- <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span> -->
          </div>
          <div class="col-lg-5 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
            <div class="d-flex align-items-center mb-3">
              <div class="flex-shrink-0 btn-square bg-primary me-3">
                <i class="fa fa-check text-white"></i>
              </div>
              <h5 class="mb-0">Tailored Courses</h5>
            </div>
          </div>
            <!-- <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span> -->
            <!-- <div class="col-lg-5 col-sm-6 wow fadeIn" data-wow-delay="0.4s" style="margin-top:4rem;">
              <div class="d-flex align-items-center mb-3">
                <div class="flex-shrink-0 btn-square bg-primary me-3">
                  <i class="fa fa-check text-white"></i>
                </div>
                <h5 class="mb-0">Manage Your Progress Anywhere, Anytime!</h5>
              </div> -->
              <!-- <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span> -->
            </div>
        </div>
      </div>
      <!-- <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
          <img class="position-absolute w-100 h-100" src="img/about-1.jpg" alt="" style="object-fit: cover;">
          <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="img/about-2.jpg" alt=""
            style="width: 200px; height: 200px">
        </div>
      </div> -->
    </div>
  </div>
  <hr>
</div>
<!-- Features End -->



<?php
      include __DIR__ . "/components/add-review.php";
    ?>

<?php 
    include 'footer.php';    
?>



<style>
  .nan {

    color: white;
    font: optional;
    /* width: 150px; */
    height: 50px;
    cursor: pointer;
    border: none;
    display: inline-table;
    /* display: flex; */
    align-items: center;
    justify-content: center;
    background-color: #181919;
    background-image: linear-gradient(315deg, #fff 0%, #0000 74%);
    background-size: 200% 100%;
    background-position: left;
    background-repeat: no-repeat;
    transition: 500ms;
    padding-top:12px ;
  }

  .nan:before {
    /* color: rgba(255,255,255,0.5); */
    font-size: 16px;
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 140px;
    height: 40px;
    /* background-color: #1b2845; */
    /* background-image: linear-gradient(320deg, #1b2845 0%, #274060 74%);
            */
    background-image: linear-gradient(315deg, #fff 0%, #0000 74%);

    transition: 500ms;
  }

  .nan:hover {
    background-position: right;
  }

  .nan:hover:before {
    color: rgba(2, 0, 36, 100);
  }

  .nan:focus {
    outline: none;
  }

  @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
  /* *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
/* html,body{
  display: grid;
  height: 100%;
  place-items: center;
  text-align: center;
  background: #000; */
  /* } */
</style>

<style>
    .btn:hover {
    color: black !important;
}
</style>