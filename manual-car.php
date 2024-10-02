<link href="css/oo.css" rel="stylesheet">
<link href="css/oo2.css" rel="stylesheet">
<?php 
    include 'header.php';
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Courses</h1>
        <nav aria-label="breadcrumb animated slideInDown">
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Courses Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <a href="automatic-car.php" class="btn btn-dark mb-5">Automatic Car</a>
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
                <div class="course-card  other-courses__card course-colour--blue" id="15-hour-course"
                    data-slug="15-hour-course" data-name="15 Hours Course">
                    <div class="course-card__coloured-header">
                        <span style="color:white;">Refresher course</span>
                    </div>
                    <?php
                    if($data['time'] == '20'){
                    ?>
                    <div class="course-card__badge--best-seller">
                        BEST SELLER
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
                                <li class="course-icon manual" style="display:none;">
                                    <svg xmlns="team-1.jpg" class="svg svg-gears "
                                        style="width: inherit; height: inherit; max-width: 100%;">
                                        <use xlink:href="/svg/sprite.svg#sprite-gears"></use>
                                    </svg>
                                    <span class="course-icon__label">Manual car</span>
                                </li>
                                <li class="course-icon auto ml-0">
                                    <svg xmlns="team-1.jpg" class="svg svg-automatic-transmission "
                                        style="width: inherit; height: inherit; max-width: 100%;">
                                        <use xlink:href="/svg/sprite.svg#sprite-automatic-transmission"></use>
                                    </svg>
                                    <span class="course-icon__label">Manual car</span>
                                </li>
                                <li class="course-icon practical" style="display:none;">
                                    <svg xmlns="team-1.jpg" class="svg svg-wheel "
                                        style="width: inherit; height: inherit; max-width: 100%;">
                                        <use xlink:href="/svg/sprite.svg#sprite-wheel"></use>
                                    </svg>
                                    <span class="course-icon__label">Practical test</span>
                                </li>
                                <li class="course-icon theory" style="display:none;">
                                    <svg xmlns="team-1.jpg" class="svg svg-checklist "
                                        style="width: inherit; height: inherit; max-width: 100%;">
                                        <use xlink:href="/svg/sprite.svg#sprite-checklist"></use>
                                    </svg>
                                    <span class="course-icon__label">Theory test</span>
                                </li>
                                <h4>
                                    Manual Car</h4>
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
                                                <svg xmlns="team-1.jpg" class="svg svg-tick "
                                                    style="top:6px !important; width: 12px; height: 12px">
                                                    <use xlink:href="/svg/sprite.svg#sprite-tick"></use>
                                                </svg>
                                            </div>
                                        </span>
                                </div>
                            </div>
                            <div class="course-card__footer course-card__body-section course-card__booking-section"
                                style="padding-bottom: 0px">
                                <a href=" " class="button w-100">Book now</a>
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
<!-- Courses End -->

</section>
<section class="courses-infobox py-5">
    <div class="container overridePaddingForMobileSlider">
        <div class="info-points__columns mt-5 mb-3">
            <div class="column carousel-cell info-point__primary">
                <div class="circle-tick circle-tick__primary">
                    <svg xmlns="team-1.jpg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
                        <use xlink:href="/svg/sprite.svg#sprite-tick"></use>
                    </svg>
                </div>
                <p>Book today with a deposit of <strong>only &pound;250</strong>. Simply pay the rest 7 days after we
                    secure your driving instructor.</p>
            </div>
            <div class="column carousel-cell info-point__blue">
                <div class="circle-tick circle-tick__blue">
                    <svg xmlns="team-1.jpg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
                        <use xlink:href="/svg/sprite.svg#sprite-tick"></use>
                    </svg>
                </div>
                <p>Complete your course and get your license in <strong>as little as 3 months</strong> dependent on test
                    and instructor availability in your area.</p>
            </div>
            <div class="column carousel-cell info-point__yellow">
                <div class="circle-tick circle-tick__yellow">
                    <svg xmlns="team-1.jpg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
                        <use xlink:href="/svg/sprite.svg#sprite-tick"></use>
                    </svg>
                </div>
                <p>Our courses are designed to give you <strong>the best chance of passing</strong>. Lessons are
                    scheduled just ahead of your test, keeping learning fresh.</p>
            </div>
            <div class="column carousel-cell info-point__pink">
                <div class="circle-tick circle-tick__pink">
                    <svg xmlns="team-1.jpg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
                        <use xlink:href="/svg/sprite.svg#sprite-tick"></use>
                    </svg>
                </div>
                <p>Dependent on location, DVSA test wait times could be as long as 6 to 10 months, our <strong>fast
                        tracked test service</strong> cuts this in half.</p>
            </div>
        </div>
    </div>

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