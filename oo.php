<?php include 'header.php';?>
<!-- <head> -->

<link href="css/oo.css" rel="stylesheet">
 <link href="css/oo2.css" rel="stylesheet">
<!-- </head> -->

<div class="content-area">
<section class="section courses-filters px-2  ">
<div class="container">
<div class="courses-filters__cols">
<div class="courses-filters__left mt-4 mt-lg-5 mb-1">
<h1 class="heading courses-filters__title">Find Lesson Pricing Near You Today </h1>
<div class="course-filters__postcode">
<form>
<div class="course-overview__search-group postcode__search-group">
<div class="search-group search-group--courses">
<div class="search-group__icon">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-mapmarker ">
<use xlink:href="/svg/sprite.svg#sprite-mapmarker"></use>
</svg>
</div>
<input class="search-group__input" type="text" placeholder="Enter postcode" />
<button class="button" type="submit">
<span class="loading d-none">
<span>One Moment</span>
</span>
<span class="button-desktop d-block">Get Prices</span>
</button>
<div class="pointer">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-arrow-pointing-left " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-arrow-pointing-left"></use>
</svg>
</div>
</div>
</div>
<div class="postcode-message postcode-message--na">
<h3 class="postcode-message__title mb-2 mx-2">Sorry, it looks like we're not in your area yet</h3>
<p>It looks like you've entered a postcode outside of our catchment area. If you are willing to travel to an area we cover, please see the <a href="https://www.passVeryFast.co.uk/areas">areas we cover</a></p>
</div>
<div class="postcode-message postcode-message--error"></div>
</form>
</div>
<div class="courses-filters__right">
<div class="postcode-filter mb-lg-4">
<a href=" " class="course-postcode-changepostcode-button postcode-filter__link">Change postcode</a>
</div>
</div>
</div>
</div>
</div>

</section>
<section class="section courses-controls">
<div class="courses-controls__wrap">
<div class="container mt-0 mb-4 mb-lg-5">
<div class="js-reveal--disabled">
<div class="courses-controls__columns row ">
<div class="course-form col-12 mb-4 col-lg-4 mb-lg-0 px-3 px-lg-4">
<div class="course-form__field">
<span class="course-form__label">Choose Transmission</span>
<div class="course-form__inputs">
<input type="radio" name="transmission" id="course-form__transmission-manual" value="manual" />
<label class="course-form__button" for="course-form__transmission-manual">
<span class="course-form__tick">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick ">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</span>
Manual
</label>
<input type="radio" name="transmission" id="course-form__transmission-auto" value="auto" checked />
<label class="course-form__button" for="course-form__transmission-auto">
<span class="course-form__tick">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick ">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
 </span>
Auto
</label>
</div>
</div>
</div>
<div class="course-form col-12 mb-4 col-lg-4 mb-lg-0 px-3 px-lg-4">
<div class="course-form__field">
<span class="course-form__label">Would you like a practical test?</span>
<div class="course-form__inputs">
<meta name="practical_fee" content="110">
<input type="radio" name="practical" id="course-form__practical-yes" value="yes" />
<label class="course-form__button" for="course-form__practical-yes">
<span class="course-form__tick">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick ">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</span>
Yes
</label>
<input type="radio" name="practical" id="course-form__practical-no" value="no" checked />
<label class="course-form__button" for="course-form__practical-no">
<span class="course-form__tick">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick ">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</span>
No
</label>
</div>
</div>
</div>
<div class="course-form col-12 mb-0 col-lg-4 mb-lg-0 px-3 px-lg-4">
<div class="course-form__field">
<span class="course-form__label">Would you like a theory test?</span>
<div class="course-form__inputs">
<meta name="theory_fee" content="40">
<input type="radio" name="theory" id="course-form__theory-yes" value="yes" />
<label class="course-form__button" for="course-form__theory-yes">
<span class="course-form__tick">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick ">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</span>
Yes
</label>
<input type="radio" name="theory" id="course-form__theory-no" value="no" checked />
<label class="course-form__button" for="course-form__theory-no">
<span class="course-form__tick">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick ">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</span>
No
</label>
</div>
</div>
</div>
</div>
<div class="text-center mt-2 mb-0">
<h2 class="heading heading--black">Need help choosing the right course?</h2>
<div class="hero-courses__cta">
<a href="https://www.passVeryFast.co.uk/course-recommender" class="button">
<span class="d-block d-md-none">Get started</span>
<span class="d-none d-md-block">Try our course recommender</span>
</a>
</div>
</div>
<hr class="mt-4">
</div>
 </div>
</div>
</section>
<section class="section courses-listing">
<div class="courses-listing__wrap mb-6">
<div class="container">
<div class="js-reveal--disabled">
<div class="courses-listing__columns row mt-0 mb-lg-5">
<div class="column col-12 col-md-6 col-lg-4 js-reveal">
<div class="course-card  other-courses__card course-colour--blue" id="10-hour-course" data-slug="10-hour-course" data-name="10 Hours Course">
<div class="course-card__coloured-header">
<span>Refresher course</span>
</div>
<div class="course-card__wrapper">
<div class="course-card__header">
<div class="course-card__hours">
<span class="course-card__hours-num">10</span>
<span class="course-card__hours-word">Hours</span>
</div>
<div class="course-card__price">
<span class="course-card__price-label course-card__price-label-from
                        ">
Prices from </span>
<span class="course-card__price-amount">£495</span>
</div>
</div>
<hr>
<div class="course-icons__wrapper">
<ul class="course-icons course-icons--lg my-4">
<li class="course-icon manual" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-gears " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-gears"></use>
</svg>
<span class="course-icon__label">Manual car</span>
</li>
<li class="course-icon auto ml-0">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-automatic-transmission " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-automatic-transmission"></use>
</svg>
<span class="course-icon__label">Auto car</span>
</li>
<li class="course-icon practical" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-wheel " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-wheel"></use>
</svg>
<span class="course-icon__label">Practical test</span>
</li>
<li class="course-icon theory" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-checklist " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-checklist"></use>
</svg>
<span class="course-icon__label">Theory test</span>
</li>
</ul>
</div>
<hr>
<div class="course-card__body">
<div class="course-card__body-section course-card__exp_level">
<strong>Experience level:</strong>
<p class="pt-2">
You’re an experienced driver who just needs a few tweaks to become test-ready
</p>
</div>
<hr>
<div class="course-card__body-section course--card__timing-parent">
<div class="course-card__timing-wrapper hideUntilPostcode">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__blue">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Lessons can typically start in:&nbsp;</strong> <span class="lessons_start_in_text"></span>&nbsp;days</span>
</span>
</div>
<div class="course-card__timing-wrapper">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__blue">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Course typically takes:&nbsp;</strong> 2-4 days</span>
</span>
</div>
<div class="course-card__timing-wrapper hideUntilPostcode">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__blue">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Average course completion in:&nbsp;</strong><span class="course_completion_in_text"></span>&nbsp;months</span>
</span>
</div>
</div>
<div class="course-card__footer course-card__body-section course-card__booking-section" style="padding-bottom: 0px">
<a href=" " class="button w-100">Book now</a>
<a href=" " class="button button-secondary w-100">Find Out More</a>
<span class="course-card__note text-center">(Only £250 upfront)</span>
</div>
</div>
</div>
</div>
</div> <div class="column col-12 col-md-6 col-lg-4 js-reveal">
<div class="course-card  other-courses__card course-colour--blue" id="15-hour-course" data-slug="15-hour-course" data-name="15 Hours Course">
<div class="course-card__coloured-header">
<span>Refresher course</span>
</div>
<div class="course-card__badge--best-seller">
BEST SELLER
</div>
<div class="course-card__wrapper">
<div class="course-card__header">
<div class="course-card__hours">
<span class="course-card__hours-num">15</span>
<span class="course-card__hours-word">Hours</span>
</div>
<div class="course-card__price">
<span class="course-card__price-label course-card__price-label-from
                        ">
Prices from </span>
<span class="course-card__price-amount">£730</span>
</div>
</div>
<hr>
<div class="course-icons__wrapper">
<ul class="course-icons course-icons--lg my-4">
<li class="course-icon manual" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-gears " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-gears"></use>
</svg>
<span class="course-icon__label">Manual car</span>
</li>
<li class="course-icon auto ml-0">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-automatic-transmission " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-automatic-transmission"></use>
</svg>
<span class="course-icon__label">Auto car</span>
</li>
<li class="course-icon practical" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-wheel " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-wheel"></use>
</svg>
<span class="course-icon__label">Practical test</span>
</li>
<li class="course-icon theory" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-checklist " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-checklist"></use>
</svg>
<span class="course-icon__label">Theory test</span>
</li>
</ul>
</div>
<hr>
<div class="course-card__body">
<div class="course-card__body-section course-card__exp_level">
<strong>Experience level:</strong>
<p class="pt-2">
You’re a fairly experienced driver who needs to work on a couple of key skills
</p>
</div>
<hr>
<div class="course-card__body-section course--card__timing-parent">
<div class="course-card__timing-wrapper hideUntilPostcode">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__blue">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Lessons can typically start in:&nbsp;</strong> <span class="lessons_start_in_text"></span>&nbsp;days</span>
</span>
</div>
<div class="course-card__timing-wrapper">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__blue">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Course typically takes:&nbsp;</strong> 3-6 days</span>
</span>
</div>
<div class="course-card__timing-wrapper hideUntilPostcode">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__blue">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Average course completion in:&nbsp;</strong><span class="course_completion_in_text"></span>&nbsp;months</span>
</span>
</div>
</div>
<div class="course-card__footer course-card__body-section course-card__booking-section" style="padding-bottom: 0px">
<a href=" " class="button w-100">Book now</a>
<a href=" " class="button button-secondary w-100">Find Out More</a>
<span class="course-card__note text-center">(Only £250 upfront)</span>
</div>
</div>
</div>
</div>
</div> <div class="column col-12 col-md-6 col-lg-4 js-reveal">
<div class="course-card  other-courses__card course-colour--yellow" id="20-hour-course" data-slug="20-hour-course" data-name="20 Hours Course">
<div class="course-card__coloured-header">
<span>Intermediate course</span>
</div>
<div class="course-card__wrapper">
<div class="course-card__header">
<div class="course-card__hours">
<span class="course-card__hours-num">20</span>
<span class="course-card__hours-word">Hours</span>
</div>
<div class="course-card__price">
<span class="course-card__price-label course-card__price-label-from
                        ">
Prices from </span>
<span class="course-card__price-amount">£960</span>
</div>
</div>
<hr>
<div class="course-icons__wrapper">
<ul class="course-icons course-icons--lg my-4">
<li class="course-icon manual" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-gears " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-gears"></use>
</svg>
<span class="course-icon__label">Manual car</span>
</li>
<li class="course-icon auto ml-0">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-automatic-transmission " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-automatic-transmission"></use>
</svg>
<span class="course-icon__label">Auto car</span>
</li>
<li class="course-icon practical" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-wheel " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-wheel"></use>
</svg>
<span class="course-icon__label">Practical test</span>
</li>
<li class="course-icon theory" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-checklist " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-checklist"></use>
</svg>
<span class="course-icon__label">Theory test</span>
</li>
</ul>
</div>
<hr>
<div class="course-card__body">
<div class="course-card__body-section course-card__exp_level">
<strong>Experience level:</strong>
<p class="pt-2">
You’re roughly halfway through your driving journey and still have skills to learn
</p>
</div>
<hr>
<div class="course-card__body-section course--card__timing-parent">
<div class="course-card__timing-wrapper hideUntilPostcode">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__yellow">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
 </span>
<span><strong>Lessons can typically start in:&nbsp;</strong> <span class="lessons_start_in_text"></span>&nbsp;days</span>
</span>
</div>
<div class="course-card__timing-wrapper">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__yellow">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Course typically takes:&nbsp;</strong> 1-3 weeks</span>
</span>
</div>
<div class="course-card__timing-wrapper hideUntilPostcode">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__yellow">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Average course completion in:&nbsp;</strong><span class="course_completion_in_text"></span>&nbsp;months</span>
</span>
</div>
</div>
<div class="course-card__footer course-card__body-section course-card__booking-section" style="padding-bottom: 0px">
<a href=" " class="button w-100">Book now</a>
<a href=" " class="button button-secondary w-100">Find Out More</a>
<span class="course-card__note text-center">(Only £250 upfront)</span>
</div>
</div>
</div>
</div>
</div> <div class="column col-12 col-md-6 col-lg-4 js-reveal">
<div class="course-card  other-courses__card course-colour--yellow" id="25-hour-course" data-slug="25-hour-course" data-name="25 Hours Course">
<div class="course-card__coloured-header">
<span>Intermediate course</span>
</div>
<div class="course-card__badge--best-seller">
BEST SELLER
</div>
<div class="course-card__wrapper">
<div class="course-card__header">
<div class="course-card__hours">
<span class="course-card__hours-num">25</span>
<span class="course-card__hours-word">Hours</span>
</div>
<div class="course-card__price">
<span class="course-card__price-label course-card__price-label-from
                        ">
Prices from </span>
<span class="course-card__price-amount">£1175</span>
</div>
</div>
<hr>
<div class="course-icons__wrapper">
<ul class="course-icons course-icons--lg my-4">
<li class="course-icon manual" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-gears " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-gears"></use>
</svg>
<span class="course-icon__label">Manual car</span>
</li>
<li class="course-icon auto ml-0">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-automatic-transmission " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-automatic-transmission"></use>
</svg>
<span class="course-icon__label">Auto car</span>
</li>
<li class="course-icon practical" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-wheel " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-wheel"></use>
</svg>
<span class="course-icon__label">Practical test</span>
</li>
<li class="course-icon theory" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-checklist " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-checklist"></use>
</svg>
<span class="course-icon__label">Theory test</span>
</li>
</ul>
</div>
<hr>
<div class="course-card__body">
<div class="course-card__body-section course-card__exp_level">
<strong>Experience level:</strong>
<p class="pt-2">
You’ve almost mastered the basics but are still a long way from being test-ready
</p>
</div>
<hr>
<div class="course-card__body-section course--card__timing-parent">
<div class="course-card__timing-wrapper hideUntilPostcode">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__yellow">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Lessons can typically start in:&nbsp;</strong> <span class="lessons_start_in_text"></span>&nbsp;days</span>
</span>
</div>
<div class="course-card__timing-wrapper">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__yellow">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Course typically takes:&nbsp;</strong> 1-4 weeks</span>
</span>
</div>
<div class="course-card__timing-wrapper hideUntilPostcode">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__yellow">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Average course completion in:&nbsp;</strong><span class="course_completion_in_text"></span>&nbsp;months</span>
</span>
</div>
</div>
<div class="course-card__footer course-card__body-section course-card__booking-section" style="padding-bottom: 0px">
<a href=" " class="button w-100">Book now</a>
<a href=" " class="button button-secondary w-100">Find Out More</a>
<span class="course-card__note text-center">(Only £250 upfront)</span>
</div>
</div>
</div>
</div>
</div> <div class="column col-12 col-md-6 col-lg-4 js-reveal">
<div class="course-card  other-courses__card course-colour--yellow" id="30-hour-course" data-slug="30-hour-course" data-name="30 Hours Course">
<div class="course-card__coloured-header">
<span>Intermediate course</span>
</div>
<div class="course-card__wrapper">
<div class="course-card__header">
<div class="course-card__hours">
<span class="course-card__hours-num">30</span>
<span class="course-card__hours-word">Hours</span>
</div>
<div class="course-card__price">
<span class="course-card__price-label course-card__price-label-from
                        ">
Prices from </span>
<span class="course-card__price-amount">£1390</span>
</div>
</div>
<hr>
<div class="course-icons__wrapper">
<ul class="course-icons course-icons--lg my-4">
<li class="course-icon manual" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-gears " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-gears"></use>
</svg>
<span class="course-icon__label">Manual car</span>
</li>
<li class="course-icon auto ml-0">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-automatic-transmission " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-automatic-transmission"></use>
</svg>
<span class="course-icon__label">Auto car</span>
</li>
<li class="course-icon practical" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-wheel " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-wheel"></use>
</svg>
<span class="course-icon__label">Practical test</span>
</li>
<li class="course-icon theory" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-checklist " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-checklist"></use>
</svg>
<span class="course-icon__label">Theory test</span>
</li>
</ul>
</div>
<hr>
<div class="course-card__body">
<div class="course-card__body-section course-card__exp_level">
<strong>Experience level:</strong>
<p class="pt-2">
You have a little bit of driving experience under your belt but lots more to learn
</p>
</div>
<hr>
<div class="course-card__body-section course--card__timing-parent">
<div class="course-card__timing-wrapper hideUntilPostcode">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__yellow">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Lessons can typically start in:&nbsp;</strong> <span class="lessons_start_in_text"></span>&nbsp;days</span>
</span>
</div>
<div class="course-card__timing-wrapper">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__yellow">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Course typically takes:&nbsp;</strong> 1-5 weeks</span>
</span>
</div>
<div class="course-card__timing-wrapper hideUntilPostcode">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__yellow">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Average course completion in:&nbsp;</strong><span class="course_completion_in_text"></span>&nbsp;months</span>
</span>
</div>
</div>
<div class="course-card__footer course-card__body-section course-card__booking-section" style="padding-bottom: 0px">
<a href=" " class="button w-100">Book now</a>
<a href=" " class="button button-secondary w-100">Find Out More</a>
<span class="course-card__note text-center">(Only £250 upfront)</span>
</div>
</div>
</div>
</div>
</div> <div class="column col-12 col-md-6 col-lg-4 js-reveal">
<div class="course-card  other-courses__card course-colour--pink" id="35-hour-course" data-slug="35-hour-course" data-name="35 Hours Course">
<div class="course-card__coloured-header">
<span>Beginner course</span>
</div>
<div class="course-card__wrapper">
<div class="course-card__header">
<div class="course-card__hours">
<span class="course-card__hours-num">35</span>
<span class="course-card__hours-word">Hours</span>
</div>
<div class="course-card__price">
<span class="course-card__price-label course-card__price-label-from
                        ">
Prices from </span>
<span class="course-card__price-amount">£1590</span>
</div>
</div>
<hr>
<div class="course-icons__wrapper">
<ul class="course-icons course-icons--lg my-4">
<li class="course-icon manual" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-gears " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-gears"></use>
</svg>
<span class="course-icon__label">Manual car</span>
</li>
<li class="course-icon auto ml-0">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-automatic-transmission " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-automatic-transmission"></use>
</svg>
<span class="course-icon__label">Auto car</span>
</li>
<li class="course-icon practical" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-wheel " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-wheel"></use>
</svg>
<span class="course-icon__label">Practical test</span>
</li>
<li class="course-icon theory" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-checklist " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-checklist"></use>
</svg>
<span class="course-icon__label">Theory test</span>
</li>
</ul>
</div>
<hr>
<div class="course-card__body">
<div class="course-card__body-section course-card__exp_level">
<strong>Experience level:</strong>
<p class="pt-2">
You have limited driving experience and are still getting your head around the basics
</p>
</div>
<hr>
<div class="course-card__body-section course--card__timing-parent">
<div class="course-card__timing-wrapper hideUntilPostcode">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__pink">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Lessons can typically start in:&nbsp;</strong> <span class="lessons_start_in_text"></span>&nbsp;days</span>
</span>
</div>
<div class="course-card__timing-wrapper">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__pink">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Course typically takes:&nbsp;</strong> 1-6 weeks</span>
</span>
</div>
<div class="course-card__timing-wrapper hideUntilPostcode">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__pink">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Average course completion in:&nbsp;</strong><span class="course_completion_in_text"></span>&nbsp;months</span>
</span>
</div>
</div>
<div class="course-card__footer course-card__body-section course-card__booking-section" style="padding-bottom: 0px">
<a href=" " class="button w-100">Book now</a>
<a href=" " class="button button-secondary w-100">Find Out More</a>
<span class="course-card__note text-center">(Only £250 upfront)</span>
</div>
</div>
</div>
</div>
</div> <div class="column col-12 col-md-6 col-lg-4 js-reveal">
<div class="course-card  other-courses__card course-colour--pink" id="40-hour-course" data-slug="40-hour-course" data-name="40 Hours Course">
<div class="course-card__coloured-header">
<span>Beginner course</span>
</div>
<div class="course-card__wrapper">
<div class="course-card__header">
<div class="course-card__hours">
<span class="course-card__hours-num">40</span>
<span class="course-card__hours-word">Hours</span>
</div>
<div class="course-card__price">
<span class="course-card__price-label course-card__price-label-from
                        ">
Prices from </span>
<span class="course-card__price-amount">£1785</span>
</div>
</div>
<hr>
<div class="course-icons__wrapper">
<ul class="course-icons course-icons--lg my-4">
<li class="course-icon manual" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-gears " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-gears"></use>
</svg>
<span class="course-icon__label">Manual car</span>
</li>
<li class="course-icon auto ml-0">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-automatic-transmission " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-automatic-transmission"></use>
</svg>
<span class="course-icon__label">Auto car</span>
</li>
<li class="course-icon practical" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-wheel " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-wheel"></use>
</svg>
<span class="course-icon__label">Practical test</span>
</li>
<li class="course-icon theory" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-checklist " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-checklist"></use>
</svg>
<span class="course-icon__label">Theory test</span>
</li>
</ul>
</div>
<hr>
<div class="course-card__body">
<div class="course-card__body-section course-card__exp_level">
<strong>Experience level:</strong>
<p class="pt-2">
You’re a beginner and a fast learner who’s eager to master the road and get test-ready
</p>
</div>
<hr>
<div class="course-card__body-section course--card__timing-parent">
<div class="course-card__timing-wrapper hideUntilPostcode">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__pink">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Lessons can typically start in:&nbsp;</strong> <span class="lessons_start_in_text"></span>&nbsp;days</span>
</span>
</div>
<div class="course-card__timing-wrapper">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__pink">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Course typically takes:&nbsp;</strong> 2-8 weeks</span>
</span>
</div>
<div class="course-card__timing-wrapper hideUntilPostcode">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__pink">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Average course completion in:&nbsp;</strong><span class="course_completion_in_text"></span>&nbsp;months</span>
</span>
</div>
</div>
<div class="course-card__footer course-card__body-section course-card__booking-section" style="padding-bottom: 0px">
<a href=" " class="button w-100">Book now</a>
<a href=" " class="button button-secondary w-100">Find Out More</a>
<span class="course-card__note text-center">(Only £250 upfront)</span>
</div>
</div>
</div>
</div>
</div> <div class="column col-12 col-md-6 col-lg-4 js-reveal">
<div class="course-card  other-courses__card course-colour--pink" id="48-hour-course" data-slug="48-hour-course" data-name="48 Hours Course">
<div class="course-card__coloured-header">
<span>Beginner course</span>
</div>
<div class="course-card__badge--best-seller">
BEST SELLER
</div>
<div class="course-card__wrapper">
<div class="course-card__header">
<div class="course-card__hours">
<span class="course-card__hours-num">48</span>
<span class="course-card__hours-word">Hours</span>
</div>
<div class="course-card__price">
<span class="course-card__price-label course-card__price-label-from
                        ">
Prices from </span>
<span class="course-card__price-amount">£2065</span>
</div>
</div>
<hr>
<div class="course-icons__wrapper">
<ul class="course-icons course-icons--lg my-4">
<li class="course-icon manual" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-gears " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-gears"></use>
</svg>
<span class="course-icon__label">Manual car</span>
</li>
<li class="course-icon auto ml-0">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-automatic-transmission " style="width: inherit; height: inherit; max-width: 100%;">
 <use xlink:href="/svg/sprite.svg#sprite-automatic-transmission"></use>
</svg>
<span class="course-icon__label">Auto car</span>
</li>
<li class="course-icon practical" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-wheel " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-wheel"></use>
</svg>
<span class="course-icon__label">Practical test</span>
</li>
<li class="course-icon theory" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-checklist " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-checklist"></use>
</svg>
<span class="course-icon__label">Theory test</span>
</li>
</ul>
</div>
<hr>
<div class="course-card__body">
<div class="course-card__body-section course-card__exp_level">
<strong>Experience level:</strong>
<p class="pt-2">
You’re looking for a beginner driving course that starts off with the absolute basics
</p>
</div>
<hr>
<div class="course-card__body-section course--card__timing-parent">
<div class="course-card__timing-wrapper hideUntilPostcode">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__pink">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Lessons can typically start in:&nbsp;</strong> <span class="lessons_start_in_text"></span>&nbsp;days</span>
</span>
</div>
<div class="course-card__timing-wrapper">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__pink">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Course typically takes:&nbsp;</strong> 3-12 weeks</span>
</span>
</div>
<div class="course-card__timing-wrapper hideUntilPostcode">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__pink">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Average course completion in:&nbsp;</strong><span class="course_completion_in_text"></span>&nbsp;months</span>
</span>
</div>
</div>
<div class="course-card__footer course-card__body-section course-card__booking-section" style="padding-bottom: 0px">
<a href=" " class="button w-100">Book now</a>
<a href=" " class="button button-secondary w-100">Find Out More</a>
<span class="course-card__note text-center">(Only £250 upfront)</span>
</div>
</div>
</div>
</div>
</div> <div class="column col-12 col-md-6 col-lg-4 js-reveal">
<div class="course-card  course-card-pto  other-courses__card course-colour--green" id="practical-test-only" data-slug="practical-test-only" data-name="Practical Test Only" style="display: none">
<div class="course-card__coloured-header">
<span>Practical Test Only</span>
</div>
<div class="course-card__wrapper">
<div class="course-card__header">
<div class="course-card__hours">
<span class="course-card__hours-num">0</span>
<span class="course-card__hours-word">Hours</span>
</div>
<div class="course-card__price">
<span class="course-card__price-label course-card__price-label-from
                        ">
</span>
<span class="course-card__price-amount">£</span>
</div>
</div>
<hr>
<div class="course-icons__wrapper">
<ul class="course-icons course-icons--lg my-4">
<li class="course-icon manual" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-gears " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-gears"></use>
</svg>
<span class="course-icon__label">Manual car</span>
</li>
<li class="course-icon auto ml-0">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-automatic-transmission " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-automatic-transmission"></use>
</svg>
<span class="course-icon__label">Auto car</span>
</li>
<li class="course-icon practical" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-wheel " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-wheel"></use>
</svg>
<span class="course-icon__label">Practical test</span>
</li>
<li class="course-icon theory" style="display:none;">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-checklist " style="width: inherit; height: inherit; max-width: 100%;">
<use xlink:href="/svg/sprite.svg#sprite-checklist"></use>
</svg>
<span class="course-icon__label">Theory test</span>
</li>
</ul>
</div>
<hr>
<div class="course-card__body">
<div class="course-card__body-section course-card__exp_level">
<strong>Experience level:</strong>
<p class="pt-2">
You&#039;re an experienced driver and are ready to pass.
</p>
</div>
<hr>
<div class="course-card__body-section course--card__timing-parent">
<div class="course-card__timing-wrapper">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__primary">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
 <span><strong>Test typically takes:&nbsp;</strong> 1 hour</span>
</div>
<div class="course-card__timing-wrapper hideUntilPostcode">
<span class="course-card__timing">
<span class="course-card__timing-icon">
<div class="circle-tick circle-tick__primary">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
</span>
<span><strong>Test can typically be booked in:&nbsp;</strong> <span class="pto_lead_time"></span> months</span>
</span>
</div>
</div>
<div class="course-card__footer course-card__body-section course-card__booking-section" style="padding-bottom: 0px">
<a href=" " class="button w-100">Book now</a>
<a href=" " class="button button-secondary w-100">Find Out More</a>
<span class="course-card__note text-center" style="visibility: hidden">(Only £250 upfront)</span>
</div>
</div>
</div>
</div>
</div> </div>
</div>
</div>
</div>
</section>
<section class="courses-infobox py-5">
<div class="container overridePaddingForMobileSlider">
<div class="info-points__columns mt-5 mb-3">
<div class="column carousel-cell info-point__primary">
<div class="circle-tick circle-tick__primary">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
<p>Book today with a deposit of <strong>only &pound;250</strong>. Simply pay the rest 7 days after we secure your driving instructor.</p>
</div>
<div class="column carousel-cell info-point__blue">
<div class="circle-tick circle-tick__blue">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
<p>Complete your course and get your license in <strong>as little as 3 months</strong> dependent on test and instructor availability in your area.</p>
</div>
<div class="column carousel-cell info-point__yellow">
<div class="circle-tick circle-tick__yellow">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
<p>Our courses are designed to give you <strong>the best chance of passing</strong>. Lessons are scheduled just ahead of your test, keeping learning fresh.</p>
</div>
<div class="column carousel-cell info-point__pink">
<div class="circle-tick circle-tick__pink">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-tick " style="top:6px !important; width: 12px; height: 12px">
<use xlink:href="/svg/sprite.svg#sprite-tick"></use>
</svg>
</div>
<p>Dependent on location, DVSA test wait times could be as long as 6 to 10 months, our <strong>fast tracked test service</strong> cuts this in half.</p>
</div>
</div>
</div>
</section> <section class="home-whychoose   home-whychoose--dark ">
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
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-icon-courses-to-suit ">
<use xlink:href="/svg/sprite.svg#sprite-icon-courses-to-suit"></use>
</svg>
</div>
<h3 class="heading-2">Courses to suit you</h3>
<p class="home-whychoose__text">Our driving courses can be run intensively, semi-intensively or as slowly as you need to go</p>
<div class="text-center mt-3">
<span class="text-btn">
<span>Read more</span>
</span>
</div>
</div>
</a> </div>
<div class="col-12 mb-3 mb-md-4 col-md-6 col-lg-4">
<a href=" " class="home-whychoose__card js-reveal text-center">
<div class="home-whychoose__card-wrap">
<div class="home-whychoose__icon">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-icon-pass-fast ">
<use xlink:href="/svg/sprite.svg#sprite-icon-pass-fast"></use>
</svg>
</div>
<h3 class="heading-2">Want to pass fast?</h3>
<p class="home-whychoose__text">We can book tests up to 8 weeks faster than DVSA wait times</p>
<div class="text-center mt-3">
<span class="text-btn">
<span>Read more</span>
</span>
</div>
</div>
</a> </div>
<div class="col-12 mb-3 mb-md-4 col-md-6 col-lg-4">
<a href=" " class="home-whychoose__card js-reveal text-center">
<div class="home-whychoose__card-wrap">
<div class="home-whychoose__icon">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-icon-success-stories ">
<use xlink:href="/svg/sprite.svg#sprite-icon-success-stories"></use>
</svg>
</div>
<h3 class="heading-2">Success Stories</h3>
<p class="home-whychoose__text">We&#039;ve helped over 50,000 students get on the road, check out our reviews!</p>
<div class="text-center mt-3">
<span class="text-btn">
<span>Read more</span>
</span>
</div>
</div>
</a> </div>
<div class="col-12 mb-3 mb-md-4 col-md-6 col-lg-4">
<a href=" " class="home-whychoose__card js-reveal text-center">
<div class="home-whychoose__card-wrap">
<div class="home-whychoose__icon">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-icon-home-pickups ">
<use xlink:href="/svg/sprite.svg#sprite-icon-home-pickups"></use>
</svg>
</div>
<h3 class="heading-2">Home Pickups</h3>
<p class="home-whychoose__text">Get picked up and dropped off at home with driving lessons across Great Britain.</p>
<div class="text-center mt-3">
<span class="text-btn">
<span>Read more</span>
</span>
</div>
</div>
</a> </div>
<div class="col-12 mb-3 mb-md-4 col-md-6 col-lg-4">
<a href=" " class="home-whychoose__card js-reveal text-center">
<div class="home-whychoose__card-wrap">
<div class="home-whychoose__icon">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-icon-courses-from ">
<use xlink:href="/svg/sprite.svg#sprite-icon-courses-from"></use>
</svg>
</div>
<h3 class="heading-2">Courses from £580</h3>
<p class="home-whychoose__text">Our intensive driving courses come with fast-tracked practical test fee included!</p>
<div class="text-center mt-3">
<span class="text-btn">
<span>Read more</span>
</span>
</div>
</div>
</a> </div>
<div class="col-12 mb-3 mb-md-4 col-md-6 col-lg-4">
<a href=" " class="home-whychoose__card js-reveal text-center">
<div class="home-whychoose__card-wrap">
<div class="home-whychoose__icon">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-icon-support ">
<use xlink:href="/svg/sprite.svg#sprite-icon-support"></use>
</svg>
</div>
<h3 class="heading-2">Support at every Step</h3>
<p class="home-whychoose__text">Our team is here to get things sorted for you, making your experience hassle-free.</p>
<div class="text-center mt-3">
<span class="text-btn">
<span>Read more</span>
</span>
</div>
</div>
</a> </div>
</div>
</div>
<div class="home-whychoose__columns d-sm-block d-xs-block d-md-none">
<div class="home-whychoose-carousel" data-flickity='{ "wrapAround": true }'>
<div class="carousel-cell">
<a href=" " class="home-whychoose__card js-reveal text-center">
<div class="home-whychoose__card-wrap">
<div class="home-whychoose__icon">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-icon-courses-to-suit ">
<use xlink:href="/svg/sprite.svg#sprite-icon-courses-to-suit"></use>
</svg>
</div>
<h3 class="heading-2">Courses to suit you</h3>
<p class="home-whychoose__text">Our driving courses can be run intensively, semi-intensively or as slowly as you need to go</p>
<div class="text-center mt-3">
<span class="text-btn">
<span>Read more</span>
</span>
</div>
</div>
</a> </div>
<div class="carousel-cell">
<a href=" " class="home-whychoose__card js-reveal text-center">
<div class="home-whychoose__card-wrap">
<div class="home-whychoose__icon">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-icon-pass-fast ">
<use xlink:href="/svg/sprite.svg#sprite-icon-pass-fast"></use>
</svg>
</div>
<h3 class="heading-2">Want to pass fast?</h3>
<p class="home-whychoose__text">We can book tests up to 8 weeks faster than DVSA wait times</p>
<div class="text-center mt-3">
<span class="text-btn">
<span>Read more</span>
</span>
</div>
</div>
</a> </div>
<div class="carousel-cell">
<a href=" " class="home-whychoose__card js-reveal text-center">
<div class="home-whychoose__card-wrap">
<div class="home-whychoose__icon">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-icon-success-stories ">
<use xlink:href="/svg/sprite.svg#sprite-icon-success-stories"></use>
</svg>
</div>
<h3 class="heading-2">Success Stories</h3>
<p class="home-whychoose__text">We&#039;ve helped over 50,000 students get on the road, check out our reviews!</p>
<div class="text-center mt-3">
<span class="text-btn">
<span>Read more</span>
</span>
</div>
</div>
</a> </div>
<div class="carousel-cell">
<a href=" " class="home-whychoose__card js-reveal text-center">
<div class="home-whychoose__card-wrap">
<div class="home-whychoose__icon">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-icon-home-pickups ">
<use xlink:href="/svg/sprite.svg#sprite-icon-home-pickups"></use>
</svg>
</div>
<h3 class="heading-2">Home Pickups</h3>
<p class="home-whychoose__text">Get picked up and dropped off at home with driving lessons across Great Britain.</p>
<div class="text-center mt-3">
<span class="text-btn">
<span>Read more</span>
</span>
</div>
</div>
</a> </div>
<div class="carousel-cell">
<a href=" " class="home-whychoose__card js-reveal text-center">
<div class="home-whychoose__card-wrap">
<div class="home-whychoose__icon">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-icon-courses-from ">
<use xlink:href="/svg/sprite.svg#sprite-icon-courses-from"></use>
</svg>
</div>
<h3 class="heading-2">Courses from £580</h3>
<p class="home-whychoose__text">Our intensive driving courses come with fast-tracked practical test fee included!</p>
<div class="text-center mt-3">
<span class="text-btn">
<span>Read more</span>
</span>
</div>
</div>
</a> </div>
<div class="carousel-cell">
<a href=" " class="home-whychoose__card js-reveal text-center">
<div class="home-whychoose__card-wrap">
<div class="home-whychoose__icon">
<svg xmlns="http://www.w3.org/2000/svg" class="svg svg-icon-support ">
<use xlink:href="/svg/sprite.svg#sprite-icon-support"></use>
</svg>
</div>
<h3 class="heading-2">Support at every Step</h3>
<p class="home-whychoose__text">Our team is here to get things sorted for you, making your experience hassle-free.</p>
<div class="text-center mt-3">
<span class="text-btn">
<span>Read more</span>
</span>
</div>
</div>
</a> </div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="common-questions">
<div class="common-questions__wrap my-6 mb-7">
<div class="container">
<div class="js-reveal">
<div class="text-center">
<h2 class="heading-centered mt-0">Common questions</h2>
</div>
<div class="common-questions__columns mt-2 mt-lg-5 mb-6 mb-lg-5" data-flickity='{ "wrapAround": true, "watchCSS": true, "autoPlay": 7000, "prevNextButtons": false }'>
<div class="common-questions__card">
<div class="common-questions__card-wrap">
<h3 class="heading heading--black mt-4 mt-lg-0">Why should I take an intensive course?</h3>
<div class="common-questions__text">
<p>Intensive courses are a quick and efficient way to learn the skills you need to be a safe, confident driver. Don’t waste time on single lessons—our prices cover all lessons and the services of your own booking agent. We’ve helped thousands of people get on the road fast—check out our <a href="https://www.passVeryFast.co.uk/customer-reviews">reviews</a> page!</p>
</div>
</div>
</div>
<div class="common-questions__card">
<div class="common-questions__card-wrap">
<h3 class="heading heading--black mt-4 mt-lg-0">How is the course structured?</h3>
<div class="common-questions__text">
<p>Whether you need a beginner or refresher driving course, you pick how
many hours you drive per day. Choose from fully intensive driving
lessons (5 hours) or semi-intensive driving lessons (2 hours). We aim to
fit things around you—so even if you work or study, we’ll still get you
on the road fast!</p>
</div>
</div>
</div>
<div class="common-questions__card">
<div class="common-questions__card-wrap">
<h3 class="heading heading--black mt-4 mt-lg-0">Which course is right for me?</h3>
<div class="common-questions__text">
<p>Once you decide on a manual driving course or automatic driving course,
it’s simply a case of using our <a href="https://www.passVeryFast.co.uk/course-recommender">Course
Recommender</a>. Alternatively, you can give us a call on <a href="tel:03331234949">0333 123 4949</a>. Our
experienced team can provide advice on everything from recommended
hours, lesson prices and course assessments.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php 
    include 'footer.php';
?>

<style>
    .course-card__coloured-header {
    /* background-color: black; */
    /* color: "white"; */
    color: white !important;
    }
</style>
<!-- <script type="e85cd7c6c6568b7f2858fcfd-text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>

<script data-cookieconsent="ignore" src="/js/lazyload.js?id=f9a5c754a61d99643471" type="e85cd7c6c6568b7f2858fcfd-text/javascript"></script><script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="e85cd7c6c6568b7f2858fcfd-|49" defer=""></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"765813fd5c054a08","token":"180d28523894473d84c27d438c61e196","version":"2022.11.0","si":100}' crossorigin="anonymous"></script>
</body>
<script data-cookieconsent="ignore" src="/js/app.js?id=0c459a5e6947703b9802" type="e85cd7c6c6568b7f2858fcfd-text/javascript"></script>
<script data-cookieconsent="ignore" src="/js/nav.js?id=d1b88f0b3281c26f98fe" type="e85cd7c6c6568b7f2858fcfd-text/javascript"></script>
<script data-cookieconsent="ignore" type="e85cd7c6c6568b7f2858fcfd-text/javascript" async src="https://bot.leadoo.com/bot/dynamic.js?company=93a07b34"></script>
<style>iframe.ld-chat-bot {z-index: 2147483 !important}</style>
<script data-cookieconsent="ignore" src="/js/flickity.js?id=23643edd4b9a5c198add" type="e85cd7c6c6568b7f2858fcfd-text/javascript"></script>
<script data-cookieconsent="ignore" src="/js/courses.js?id=31e2c137936b1e627846" type="e85cd7c6c6568b7f2858fcfd-text/javascript"></script>
<script data-cookieconsent="ignore" src="/js/lazyload.js?id=f9a5c754a61d99643471" type="e85cd7c6c6568b7f2858fcfd-text/javascript"></script></html> -->




















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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-light overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">£<?php echo $data['amount'] ?></div>
                            <h5 class="mb-3"><?php echo $data['title'] ?></h5>
                            <p><?php echo $data['detail'] ?></p>
                            <h5><?php echo $data['time'] ?> Hours</h5>
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

<?php 
    include 'footer.php';
?>
