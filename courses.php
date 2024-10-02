<link href="css/oo.css" rel="stylesheet">
<link href="css/oo2.css" rel="stylesheet">



<!-- <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->
<?php
include 'header.php';
?>
<style>
    .navbar-toggler {
        padding: 0.25rem 0.75rem;
        font-size: 1.25rem;
        line-height: 1;
        background-color: transparent !important;
        border: 1px solid transparent;
        border-radius: 0px;
        transition: box-shadow 0.15s ease-in-out;

        height: 62px !important;


    }
    @media (max-width:767px){
        .nav-item{
            margin-right: auto !important;
            width: 100% !important;
            padding-right: 80% !important;
        }
    }
   

  .me-4 {
    margin-right: -1px!important;
   
    margin-top: -14px;
}

    .navbar-light .navbar-toggler {
        color: rgba(0, 0, 0, 0.55);
        border-color: rgba(0, 0, 0, 0);
    }
    .course-card__price span img{
        width: 60px !important;
        margin-top: -50px;
        margin-left:-30px;
        rotate: -30deg;
        position: absolute;
        height: 60px !important;
    }
</style>
<!-- Page Header Start -->
<div class="container page-header  py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Courses</h1>
        <nav aria-label="breadcrumb animated slideInDown">
        </nav>
    </div>
</div>
<!-- Page Header End -->
<div class="main-mac">
    <h3>Select a gearbox type :</h3>
    <div class="svb">
        <label class="switch">
            <h5 class="Manual">Manual</h5>
            <h5 class="Automatic">Automatic</h5>
            <!-- style = "margin-left:-200px;" -->
            <input type="checkbox" checked>
            <span class="slider round"> </span>
            <style>
                .Manual {
                    font-size: 1.25rem;
                    float: left;
                    margin-left: -120px;
                }

                .Automatic {
                    font-size: 1.25rem;
                    float: left;
                    width: 134px;
                    margin-left: 80px;
                }
            </style>
        </label>
    </div>
</div>
<br><br>
<hr>

<div id="main_content">
    <h1 class="man-car">Automatic </h1>
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <!-- <a href="courses.php" class="btn btn-dark mb-5">Manual Car</a> -->


                <h6 class="text-primary text-uppercase mb-2">Choose A Course Below And Pass Very Fast</h6>
                <h1 class="display-6 mb-4">Our Courses Are Tailored To Help You Become A Safe Driver</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <?php
                $select = "SELECT * FROM courses WHERE title = 'Automatic Car'";
                $res = mysqli_query($con, $select);

                // $arr = ['', '', ];
                while ($data = mysqli_fetch_array($res)) {
                ?>
                    <div class="column col-12 col-md-6 col-lg-4 js-reveal">
                        <div class="course-card  other-courses__card course-colour--blue" id="15-hour-course" data-slug="15-hour-course" data-name="15 Hours Course">
                            <?php
                            if ($data['seller'] == "Refresher course") {
                            ?>
                                <div <?= ($data['seller'] == "Refresher course") ? "style='background-color:#2aced2;' " : "" ?> class=" sam course-card__coloured-header" style="">

                                    <span style="color:black;">
                                        <?php echo $data['seller'] ?>
                                    </span>

                                </div>
                            <?php
                            }
                            ?>

                            <?php
                            if ($data['seller'] == "Intermediate course") {
                            ?>
                                <div <?= ($data['seller'] == "Intermediate course") ? "style='background-color:#FFB41D;' " : "" ?> class=" sam course-card__coloured-header" style="">

                                    <span style="color:black;">
                                        <?php echo $data['seller'] ?>
                                    </span>

                                </div>
                            <?php
                            }
                            ?>


                            <?php
                            if ($data['seller'] == "Beginner course") {
                            ?>
                                <div <?= ($data['seller'] == "Beginner course") ? "style='background-color:#FB649B;' " : "" ?> class=" sam course-card__coloured-header" style="">

                                    <span style="color:black;">
                                        <?php echo $data['seller'] ?>
                                    </span>

                                </div>
                            <?php
                            }
                            ?>




                            <?php
                            if ($data['time'] == '20') {
                            ?>
                                <div class="course-card__badge--best-seller">
                                    BEST SELLER
                                    <br>
                                </div>

                            <?php
                            }

                            ?>
                            <div class="course-card__wrapper">
                                <div class="course-card__header">
                                    <div class="course-card__hours">
                                        <span class="course-card__hours-num">
                                            <h5>
                                                <?php echo $data['time'] ?>
                                            </h5>
                                        </span>
                                        <span class="course-card__hours-word">Hours</span>
                                    </div>
                                    <div class="course-card__price">
                                    <?php if($data['crms'] == 1){ ?>
                                        <span>
                                            <img src="img/crm.png" alt="">
                                        </span>
                                        <?php } ?>
                                        <span class="course-card__price-label course-card__price-label-from
                        ">
                                            Prices from </span>
                                        <span class="course-card__price-amount">£
                                            <?php echo $data['amount'] ?>
                                        </span>
                                    </div>
                                </div>
                                <hr>
                                <div class="course-icons__wrapper">
                                    <ul class="course-icons course-icons--lg my-4">
                                        <li class="course-icon Automatic" style="display:none;">
                                            <svg xmlns="team-1.jpg" class="svg svg-gears " style="width: inherit; height: inherit; max-width: 100%;">
                                                <use xlink:href="/svg/sprite.svg#sprite-gears"></use>
                                            </svg>
                                            <span class="course-icon__label">Automatic</span>
                                        </li>
                                        <li class="course-icon auto ml-0">
                                            <svg xmlns="team-1.jpg" class="svg svg-automatic-transmission " style="width: inherit; height: inherit; max-width: 100%;">
                                                <use xlink:href="/svg/sprite.svg#sprite-automatic-transmission"></use>
                                            </svg>
                                            <span class="course-icon__label">Auto car</span>
                                        </li>
                                        <li class="course-icon practical" style="display:none;">
                                            <svg xmlns="team-1.jpg" class="svg svg-wheel " style="width: inherit; height: inherit; max-width: 100%;">
                                                <use xlink:href="/svg/sprite.svg#sprite-wheel"></use>
                                            </svg>
                                            <span class="course-icon__label">Practical test</span>
                                        </li>
                                        <li class="course-icon theory" style="display:none;">
                                            <svg xmlns="team-1.jpg" class="svg svg-checklist " style="width: inherit; height: inherit; max-width: 100%;">
                                                <use xlink:href="/svg/sprite.svg#sprite-checklist"></use>
                                            </svg>
                                            <span class="course-icon__label">Theory test</span>
                                        </li>

                                        <h4>Automatic</h4>
                                    </ul>
                                    </ul>

                                </div>
                                <hr>
                                <div class="course-card__body">
                                    <div class="course-card__body-section course-card__exp_level">
                                        <strong>Detail:</strong>
                                        <p>
                                        <p>
                                            <?php echo $data['detail'] ?>
                                        </p>
                                        </p>
                                    </div>
                                    <!-- <hr> -->
                                    <div class="course-card__body-section course--card__timing-parent">
                                        <div class="course-card__timing-wrapper">
                                            <span class="course-card__timing">
                                        </div>
                                        <div class="course-card__timing-wrapper hideUntilPostcode">
                                            <span class="course-card__timing">
                                                <span class="course-card__timing-icon">
                                                    <div class="circle-tick circle-tick__primary">
                                                        <svg xmlns="team-1.jpg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
                                                            <use xlink:href="/svg/sprite.svg#sprite-tick"></use>
                                                        </svg>
                                                    </div>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="course-card__footer course-card__body-section course-card__booking-section" style="padding-bottom: 0px">
                                        <!-- <a href="" class="button SweetAlert w-100">Book now</a> -->
                                        <button class="button sweet w-100" type="button" data-bs-toggle="modal" data-bs-target="#model_2<?= $data['id']?>">Book now</button>
                                        <!-- ==== -->
                                        <div class="modal fade" id="model_2<?= $data['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                           <div class="modal-dialog modal-dialog-centered">
                                             <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Book The Course</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                             </div>
                                           
                                              <div class="modal-body">
                                                <h6>To book this course please contact us via</h6><br><br>
                                                <div class="container-fluid p-0 pb-3">
                                                    <div class="row p-0 m-0">
                                                        <div class="col-md-5">
                                                        
                                                         <a href="https://wa.me/07935199032/?text=<?php echo "Hi Sir, I'm Intrested in PassVeryFast ". $data['seller'] ." That Price is : £ ". $data['amount'] . " In " . $data['title']; ?>" class="bg-dark" style="color:white;text-decoration:none;" ><svg class="" style="width:22px;height:22px" viewBox="0 0 24 24"><path fill="currentColor" d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" /></svg> 07935199032 </a>
                                                        </div>
                                                        
                                                        <div class="col-md-7 mail-btn">
                                                         <a href="mailto: Info@passveryfast.co.uk" class="bg-dark" style="color:white;text-decoration:none;" ><i class="fa fa-envelope"  aria-hidden="true"></i> Info@passveryfast.co.uk </a>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!-- ==== -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div id="secondary_content">
    <h1 class="man-car">Manual</h1>
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <!-- <a href="automatic-car.php" class="btn btn-dark mb-5">Automatic Car</a> -->
                <h6 class="text-primary text-uppercase mb-2">Choose A Course Below And Pass Very Fast</h6>
                <h1 class="display-6 mb-4">Our Courses Are Tailored To Help You Become A Safe Driver</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <?php
                $select = "select * from courses where title = 'Manual Car'";
                $res = mysqli_query($con, $select);
                while ($data = mysqli_fetch_array($res)) {
                ?>
                    <div class="column col-12 col-md-6 col-lg-4 js-reveal">
                        <div class="course-card  other-courses__card course-colour--blue" id="15-hour-course" data-slug="15-hour-course" data-name="15 Hours Course">
                            <?php
                            if ($data['seller'] == "Refresher course") {
                            ?>
                                <div <?= ($data['seller'] == "Refresher course") ? "style='background-color:#2aced2;' " : "" ?> class=" sam course-card__coloured-header" style="">

                                    <span style="color:black;">
                                        <?php echo $data['seller'] ?>
                                    </span>

                                </div>
                            <?php
                            }
                            ?>

                            <?php
                            if ($data['seller'] == "Intermediate course") {
                            ?>
                                <div <?= ($data['seller'] == "Intermediate course") ? "style='background-color:#FFB41D;' " : "" ?> class=" sam course-card__coloured-header" style="">

                                    <span style="color:black;">
                                        <?php echo $data['seller'] ?>
                                    </span>

                                </div>
                            <?php
                            }
                            ?>


                            <?php
                            if ($data['seller'] == "Beginner course") {
                            ?>
                                <div <?= ($data['seller'] == "Beginner course") ? "style='background-color:#FB649B;' " : "" ?> class=" sam course-card__coloured-header" style="">

                                    <span style="color:black;">
                                        <?php echo $data['seller'] ?>
                                    </span>

                                </div>
                            <?php
                            }
                            ?>




                            <?php
                            if ($data['time'] == '20') {
                            ?>
                                <div class="course-card__badge--best-seller">
                                    BEST SELLER
                                    <br>
                                </div>

                            <?php
                            }

                            ?>
                            <div class="course-card__wrapper">
                                <div class="course-card__header">
                                    <div class="course-card__hours">
                                        <span class="course-card__hours-num">
                                            <h5>
                                                <?php echo $data['time'] ?>
                                            </h5>
                                        </span>
                                        <span class="course-card__hours-word">Hours</span>
                                    </div>
                                    <div class="course-card__price">
                                        <?php if($data['crms'] == 1){ ?>
                                        <span>
                                            <img src="img/crm.png" alt="">
                                        </span>
                                        <?php } ?>
                                        <span class="course-card__price-label course-card__price-label-from">
                                            Prices from </span>
                                        <span class="course-card__price-amount">£
                                            <?php echo $data['amount'] ?>
                                        </span>
                                    </div>
                                </div>
                                <hr>
                                <div class="course-icons__wrapper">
                                    <ul class="course-icons course-icons--lg my-4">
                                        <li class="course-icon manual" style="display:none;">
                                            <svg xmlns="team-1.jpg" class="svg svg-gears " style="width: inherit; height: inherit; max-width: 100%;">
                                                <use xlink:href="/svg/sprite.svg#sprite-gears"></use>
                                            </svg>
                                            <span class="course-icon__label">Manual</span>
                                        </li>
                                        <li class="course-icon auto ml-0">
                                            <svg xmlns="team-1.jpg" class="svg svg-automatic-transmission " style="width: inherit; height: inherit; max-width: 100%;">
                                                <use xlink:href="/svg/sprite.svg#sprite-automatic-transmission"></use>
                                            </svg>
                                            <span class="course-icon__label">Manual</span>
                                        </li>
                                        <li class="course-icon practical" style="display:none;">
                                            <svg xmlns="team-1.jpg" class="svg svg-wheel " style="width: inherit; height: inherit; max-width: 100%;">
                                                <use xlink:href="/svg/sprite.svg#sprite-wheel"></use>
                                            </svg>
                                            <span class="course-icon__label">Practical test</span>
                                        </li>
                                        <li class="course-icon theory" style="display:none;">
                                            <svg xmlns="team-1.jpg" class="svg svg-checklist " style="width: inherit; height: inherit; max-width: 100%;">
                                                <use xlink:href="/svg/sprite.svg#sprite-checklist"></use>
                                            </svg>
                                            <span class="course-icon__label">Theory test</span>
                                        </li>
                                        <h4>
                                            Manual </h4>
                                    </ul>
                                </div>
                                <hr>
                                <div class="course-card__body">
                                    <div class="course-card__body-section course-card__exp_level">
                                        <strong>Detail:</strong>
                                        <p>
                                            <!-- <p> -->
                                            <?php echo $data['detail'] ?>
                                            <!-- </p> -->
                                        </p>
                                    </div>
                                    <!-- <hr> -->
                                    <div class="course-card__body-section course--card__timing-parent">
                                        <div class="course-card__timing-wrapper">
                                            <span class="course-card__timing">
                                        </div>
                                        <div class="course-card__timing-wrapper hideUntilPostcode">
                                            <span class="course-card__timing">
                                                <span class="course-card__timing-icon">
                                                    <div class="circle-tick circle-tick__primary">
                                                        <svg xmlns="team-1.jpg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
                                                            <use xlink:href="/svg/sprite.svg#sprite-tick"></use>
                                                        </svg>
                                                    </div>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="course-card__footer course-card__body-section course-card__booking-section" style="padding-bottom: 0px">
                                        <!-- <a href="" class="button sweet w-100">Book now</a> -->
                                        <button class="button sweet w-100" type="button" data-bs-toggle="modal" data-bs-target="#model_1<?= $data['id'] ?>">Book now</button>
                                        <!-- ==== -->
                                       
                                        <div class="modal fade" id="model_1<?= $data['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                           <div class="modal-dialog modal-dialog-centered">
                                             <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Book The Course</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                             </div>
                                           
                                              <div class="modal-body">
                                                <h6>To book this course please contact us via</h6><br><br>
                                                <div class="container-fluid p-0 pb-3">
                                                    <div class="row p-0 m-0">
                                                        <div class="col-md-5">
                                                        <a href="https://wa.me/+923417222741/?text=<?php echo "Hi Sir, I'm Intrested in PassVeryFast ". $data['seller'] ." That Price is : £ ". $data['amount'] . " In " . $data['title']; ?>" class="bg-dark" style="color:white;text-decoration:none;" ><svg class="" style="width:22px;height:22px" viewBox="0 0 24 24"><path fill="currentColor" d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z" /></svg> 07935199032 </a>
                                                        </div>
                                                        <div class="col-md-7 mail-btn">
                                                        <a href="mailto: Info@passveryfast.co.uk" class="bg-dark" style="color:white;text-decoration:none;" ><i class="fa fa-envelope"  aria-hidden="true"></i> Info@passveryfast.co.uk </a>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                       
                                        <!-- ==== -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- Courses Start -->

<!-- Courses End -->

</section>
<section class="courses-infobox py-5">
    <div class="container overridePaddingForMobileSlider">
        <div class="info-points__columns mt-5 mb-3">
            <div class="column carousel-cell info-point__primary">
                <!-- <div class="circle-tick circle-tick__primary">
                    <svg xmlns="team-1.jpg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
                        <use xlink:href="/svg/sprite.svg#sprite-tick"></use>
                    </svg>
                </div> -->
                <div class="float-start c-tik">
                    <i style="font-size: 35px;" class="fa fa-check"></i>
                </div><br><br>
                <p>Book today with a deposit of <strong>only &pound;250</strong>. Simply pay the rest 7 days after we
                    secure your driving instructor.</p>
            </div>
            <div class="column carousel-cell info-point__blue">
                <!-- <div class="circle-tick circle-tick__blue">
                    <svg xmlns="team-1.jpg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
                        <use xlink:href="/svg/sprite.svg#sprite-tick"></use>
                    </svg>
                </div> -->
                <div class="float-start c-tik">
                    <i style="font-size: 35px;" class="fa fa-check"></i>
                </div><br><br>
                <p>Complete your course and get your license in <strong>as little as 3 months</strong> dependent on test
                    and instructor availability in your area.</p>
            </div>
            <div class="column carousel-cell info-point__yellow">
                <!-- <div class="circle-tick circle-tick__yellow">
                    <svg xmlns="team-1.jpg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
                        <use xlink:href="/svg/sprite.svg#sprite-tick"></use>
                    </svg>
                </div> -->
                <div class="float-start c-tik">
                    <i style="font-size: 35px;" class="fa fa-check"></i>
                </div><br><br>
                <p>Our courses are designed to give you <strong>the best chance of passing</strong>. Lessons are
                    scheduled just ahead of your test, keeping learning fresh.</p>
            </div>
            <div class="column carousel-cell info-point__pink">
                <!-- <div class="circle-tick circle-tick__pink">
                    <svg xmlns="team-1.jpg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
                        <use xlink:href="/svg/sprite.svg#sprite-tick"></use>
                    </svg>
                </div> -->
                <div class="float-start c-tik">
                    <i style="font-size: 35px;" class="fa fa-check"></i>
                </div><br><br>
                <p>Dependent on location, DVSA test wait times could be as long as 6 to 10 months, our <strong>fast
                        tracked test service</strong> cuts this in half.</p>
            </div>
        </div>
    </div>
</section>
<section class="home-whychoose   home-whychoose--dark ">
    <div class="home-whychoose__wrap my-4  my-lg-5 ">
        <div class="container">
            <div>
                <div class="text-center js-reveal">
                    <h2 class="heading-centered">Why choose passVeryFast?</h2>
                </div>
                <div class="home-whychoose__columns mt-5 mb-4 mt-lg-6 mb-lg-4 d-none d-md-block d-lg-block d-xl-block">
                    <div class="row">
                        <div class="col-12 mb-3 mb-md-4 col-md-6 col-lg-4">
                            <a href=" " class="home-whychoose__card js-reveal text-center">
                                <div class="home-whychoose__card-wrap">
                                    <div class="home-whychoose__icon">
                                        <svg xmlns="team-1.jpg" class="svg svg-icon-courses-to-suit ">
                                            <use xlink:href="/svg/sprite.svg#sprite-icon-courses-to-suit"></use>
                                        </svg>
                                    </div>
                                    <h3 class="heading-2">Want to pass Course?</h3>
                                    <p class="home-whychoose__text">We can book tests up to 8 weeks faster than DVSA
                                        wait times</p>
                                    <div class="text-center mt-3">
                                        <span class="text-btn">
                                            <span>Read more</span>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>
<style>
    .course-card__booking-section .button {
        background-color: black !important;
        color: white !important;
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: black;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #000;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #fff;
        background-color: #000;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }


    /* Rounded sliders */

    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

    #secondary_content {
        display: none;
    }

    .man-car {
        text-align: center !important
    }

    .main-mac {
        text-align: center;
    }


    .course-card__badge--best-seller {
        position: relative;
        margin-bottom: 0;
        color: #000;
        background-color: #c6eed2;
        border: 1px solid #000;
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        left: -41%;
        padding: 5px;
        padding-left: 5px;
        font-size: 8pt;
        top: -5%;
        text-align: center;
        font-weight: 700;
        margin-bottom: -31px;
        text-align: center;
        padding-left: 18px;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-align: center;
    }
  /* ==========Model========== */
  .modal-body a{
   padding:15px 19px !important;
   /* margin-left: 6px !important; */
   font-size: 15px !important;
   border-radius: 10px !important;
   background-color: rgb(20,20,20) !important;
  }
  .modal-body a:hover{
    background-color: #000 !important;
    transition: all 0.5s ease-in-out !important;
  }
  @media (max-width:767px){
    .mail-btn{
        margin-top: 46px !important;
    }
  }
   
</style>

<script>
    let mainContent = document.querySelector('#main_content');
    let secondaryContent = document.querySelector('#secondary_content');

    document.querySelector('.switch input').addEventListener('change', e => {
        mainContent.style.display = e.target.checked ? 'block' : 'none';
        secondaryContent.style.display = e.target.checked ? 'none' : 'block';
    });
</script>
<!-- CDN for sweet alert -->
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<script>
    document.querySelector(".sweet").addEventListener('click', function(){
     Swal.fire({
      title: '<strong>Book This Course</strong>', 
      icon: 'info',
      html:
         '<b>To book this course please contact us via</b>',
         text: '<a href="" style="color:white;text-decoration:none;" ><i class="fa fa-envelope"></i> Info@passveryfast.co.uk</a>',
      showCloseButton: true,
      showCancelButton: true,
      focusConfirm: false,
      confirmButtonText:'<a href="https://wa.me/07935199032" style="color:white;text-decoration:none;" ><i class="fa fa-whatsapp"  aria-hidden="true"></i> 07935199032 </a>',
      confirmButtonColor :'black',
        confirmButtonAriaLabel: 'Thumbs up, great!',
      cancelButtonAriaLabel: 'Thumbs down'
   })
     });
</script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script> -->