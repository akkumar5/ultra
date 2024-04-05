<?php
/*
Template Name:Home
*/
get_header();

$site_url = site_url();
$theme_url = get_template_directory_uri();
?>

<section class="position-relative banner">
    <div class="overlay"></div>
    <div class="container banner__inner">
        <div class="col-12 col-lg-10 d-flex align-items-center
                     flex-column gap-4 text-center
                     text-white mx-auto position-relative banner__content">
            <h1 class="mb-0 banner_heading"> Composite Decking | Cladding | Fencing
                By Ultra Decking®</h1>
            <p class="banner__para mb-2"> The Number one in Quality and Price of Composite Materials </p>
            <div class="col-10 col-lg-5 d-flex align-items-center justify-content-center
                     gap-3 text-center mx-auto">
                <a href="#" class="btn btn-primary text-uppercase banner__btn"> Buy now <i
                        class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="#" class="btn btn-success text-uppercase banner__btn"> find out more <i
                        class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- banner end -->
<!-- intro section -->
<section class="padding-common intro">
    <div class="container intro__inner">
        <div class="row mb-5  intro__row">
            <div class="col-12 col-lg-10 d-flex flex-column align-items-center
                     justify-content-center gap-2 mb-2 mx-auto text-center">
                <h2 class="heading mb-2"> Quality <span class="heading--span"> Composite Materials  </span>For
                    Any
                    Budget or Design.
                </h2>
                <p class="para col-lg-10 mx-auto"> We understand no outdoor project is the same and
                    each homeowner requires different budgets and designs for different purposes and functions
                    within their exterior range. Here at Ultra Decking we offer a variety of composite materials
                    to suit any outdoor space, </p>
            </div>
        </div>

        <div class="row intro__row intro__row--category mb-4">
            <div class="col-12 intro__cat-box">
                <div class="position-relative overflow-hidden intro_cat-content intro_cat-content--first"
                    style="background-image:url(<?php echo $theme_url; ?>/assests/img/GreyWood.jpg">
                    <div class="position-absolute text-white text-center intro__box-centent">
                        <div class="position-relative d-flex flex-column gap-4 justify-content-center
                                align-items-center intro__front-flip">
                            <h3 class="intro__flip-heading">
                                Decking
                            </h3>
                            <a href="#" class="btn btn-outline intro__btn"> Shop Decking </a>
                        </div>
                        <div class="position-absolute d-flex flex-column gap-3 justify-content-center
                                align-items-center intro__flip-back">
                            <strong class="fw-bold into__back-heading"> Decking </strong>
                            <span class="intro__price"> From <strong> £4.52 </strong> Per Meter<br />
                                <strong class="text-uppercase intro__saving"> save 9% </strong></span>

                            <p class="intro__back-para">
                                Ultra Decking offers three different composite decking collections Our Home Choice
                                Collection
                                focuses on the perfect blend of affordability yet maintaining quality in two surface
                                finishes – traditional grooved or wood grain appearance. </p>
                            <p class="intro__back-para">
                                Our Exclusive Natural Collection focuses on the realistic wood appearance and colour.
                                Our Signature Collection focuses on the requirements of a longer lasting performance in
                                colour stability, resistance in staining, appearance as well as minimal maintenance
                                during the years. All our composite decking is manufactured using up to 90% high-grade
                                recycled materials inspected and tested by SGS and Intertek to EN Standards, giving you
                                peace of mind. </p>
                            <div class="btn-group me-2 intro__btn-group " role="group" aria-label="First group">
                                <button type="button" class="btn btn-primary me-2 text-uppercase
                                     intro__btn--back-btn">
                                    View decking
                                </button>
                                <button type="button" class="btn btn-success text-uppercase  intro__btn--back-btn">
                                    Free Sample
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
        <div class="row intro__row intro__row--category">
            <div class="col-12 col-lg-4 intro__cat-box mb-4">
                <div class="position-relative overflow-hidden intro_cat-content intro_cat-content--small-box"
                    style="background-image:url(<?php echo $theme_url; ?>/assests/img/GreyWood.jpg)">

                    <div class="position-absolute text-white text-center intro__box-centent">
                        <div class="position-relative d-flex flex-column gap-4 justify-content-center
                                align-items-center intro__front-flip">
                            <h3 class="intro__flip-heading">
                                Fencing
                            </h3>
                            <a href="#" class="btn btn-outline intro__btn"> Shop Fencing </a>
                        </div>
                        <div class="position-absolute d-flex flex-column gap-3 justify-content-center
                                align-items-center intro__flip-back">
                            <strong class="fw-bold into__back-heading"> Fencing </strong>
                            <span class="intro__price"> From <strong> £99.99 </strong> Per 6ft by 6ft Kit<br />
                                <strong class="text-uppercase intro__saving">
                                    £149.99 &nbsp;&nbsp; SAVE 25% </strong></span>
                            <p class="intro__back-para">
                                Presenting the newest product to our composite range: Composite fencing.
                                Produced to add privacy and security to your space without having to compromise
                                on aesthetic value. </p>

                            <div class="btn-group intro__btn-group " role="group" aria-label="First group">
                                <button type="button" class="btn btn-primary me-lg-2 mb-2 text-uppercase
                                     intro__btn--back-btn">
                                    View Fencing
                                </button>
                                <button type="button" class="btn btn-success mb-2 text-uppercase  intro__btn--back-btn">
                                    Free Sample
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
            <div class="col-12 col-lg-4  intro__cat-box mb-4">
                <div class="position-relative overflow-hidden intro_cat-content intro_cat-content--small-box"
                    style="background-image:url(<?php echo $theme_url; ?>/assests/img/GreyWood.jpg)">

                    <div class="position-absolute text-white text-center intro__box-centent">
                        <div class="position-relative d-flex flex-column gap-4 justify-content-center
                                align-items-center intro__front-flip">
                            <h3 class="intro__flip-heading">
                                Decking
                            </h3>
                            <a href="#" class="btn btn-outline intro__btn"> Shop Decking </a>
                        </div>
                        <div class="position-absolute d-flex flex-column gap-3 justify-content-center
                                align-items-center intro__flip-back">
                            <strong class="fw-bold into__back-heading"> Decking </strong>
                            <span class="intro__price"> From <strong> £4.52 </strong> Per Meter
                                <strong class="text-uppercase intro__saving"> save 9% </strong></span>

                            <p class="intro__back-para">
                                Presenting the newest product to our composite range: Composite fencing.
                                Produced to add privacy and security to your space without having to compromise
                                on aesthetic value. </p>
                            <div class="btn-group intro__btn-group " role="group" aria-label="First group">
                                <button type="button" class="btn btn-primary me-lg-2 mb-2 text-uppercase
                                     intro__btn--back-btn">
                                    View Fencing
                                </button>
                                <button type="button" class="btn btn-success mb-2 text-uppercase  intro__btn--back-btn">
                                    Free Sample
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
            <div class="col-12 col-lg-4 intro__cat-box">
                <div class="position-relative overflow-hidden intro_cat-content intro_cat-content--small-box"
                    style="background-image:url(<?php echo $theme_url; ?>/assests/img/GreyWood.jpg)">
                    <div class="position-absolute text-white text-center intro__box-centent">
                        <div class="position-relative d-flex flex-column gap-4 justify-content-center
                                align-items-center intro__front-flip">
                            <h3 class="intro__flip-heading">
                                Decking
                            </h3>
                            <a href="#" class="btn btn-outline intro__btn"> Shop Decking </a>
                        </div>
                        <div class="position-absolute d-flex flex-column gap-3 justify-content-center
                                align-items-center intro__flip-back">
                            <strong class="fw-bold into__back-heading"> Decking </strong>
                            <span class="intro__price"> From <strong> £4.52 </strong> Per Meter
                                <strong class="text-uppercase intro__saving"> save 9% </strong></span>

                            <p class="intro__back-para">
                                Presenting the newest product to our composite range: Composite fencing.
                                Produced to add privacy and security to your space without having to compromise
                                on aesthetic value. </p>
                            <div class="btn-group intro__btn-group " role="group" aria-label="First group">
                                <button type="button" class="btn btn-primary me-lg-2 mb-2 text-uppercase
                                     intro__btn--back-btn">
                                    View Fencing
                                </button>
                                <button type="button" class="btn btn-success mb-2 text-uppercase  intro__btn--back-btn">
                                    Free Sample
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- intro section end-->
<!-- Why Choose section -->
<section class="padding-common bg-primary why-choose">
    <div class="container why-choose__inner">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="why-choose__contents pe-lg-5">
                    <h2 class="heading text-white mb-4"> Why Choose
                        <span class="heading--span text-white"> Ultra Decking? </span>
                    </h2>
                    <div class="row justify-content-center d-lg-none mb-3">
                        <div class="col-6">
                            <figure class="position-relative why-choose__image">
                                <img class="why-choose__src"
                                    src="<?php echo $theme_url;?>/assests/img/solid-decking-boards.jpg"
                                    alt="Solid Decking Boards">
                                <figcaption class="position-absolute text-white why-choose__caption">
                                    Solid Decking Boards
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-6">
                            <figure class="position-relative why-choose__image">
                                <img class="why-choose__src"
                                    src="<?php echo $theme_url;?>/assests/img/solid-decking-boards.jpg"
                                    alt="Solid Decking Boards">
                                <figcaption class="position-absolute text-white why-choose__caption">
                                    Solid Decking Boards
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <p class="para text-white mb-5">
                        At Ultra Decking, we are committed to reducing our environmental impact whilst
                        creating natural-looking and long-lasting composite products. All our composite
                        materials are manufactured using up to 90% high-grade recycled materials
                        inspected and tested by SGS and Intertek to EN Standards, giving you peace of mind.
                    </p>
                    <blockquote class="para para--quotes why-choose__qoutes text-white p-4">
                        Ultra Decking is the perfect mix of quality and affordability. Our focus on these factors
                        and our excellent customer service has led us to be one of the highest-rated composite
                        providers.
                        We are rated 4.9/5 on Google reviews, 4.7/5 on Trustpilot and Facebook and 5/5 on Feefo.
                    </blockquote>
                </div>
            </div>
            <div class="col-12 col-lg-6 d-none d-lg-block">
                <div class="row justify-content-lg-end align-items-center">
                    <div class="col-6">
                        <figure class="position-relative why-choose__image">
                            <img class="why-choose__src"
                                src="<?php echo $theme_url;?>/assests/img/solid-decking-boards.jpg"
                                alt="Solid Decking Boards">
                            <figcaption class="position-absolute text-white why-choose__caption">
                                Solid Decking Boards
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-6">
                        <figure class="position-relative why-choose__image">
                            <img class="why-choose__src"
                                src="<?php echo $theme_url;?>/assests/img/solid-decking-boards.jpg"
                                alt="Solid Decking Boards">
                            <figcaption class="position-absolute text-white why-choose__caption">
                                Solid Decking Boards
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Why Choose section -->
<!-- Review Section -->
<section class="padding-common bg-secondary testimonial">
    <div class="container testimonial__inner">
    </div>
</section>
<!-- Review Section end-->

<!-- service-flow -->
<section class="service-flow p-4 bg-primary text-white">
    <div class="container service-flow__inner">
        <div class="row align-items-center">
            <div class="col-6 col-lg-3 mb-3 mb-lg-0 service-flow__item">
                <div class="d-flex gap-3 align-items-center">
                    <figure class="service-flow__image">
                        <img src="<?php echo $theme_url;?>/assests/img/free-sample.svg"
                            alt="free sample">
                    </figure>
                    <span class="service-flow__title"> Get 4 Free Samples</span>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 mb-lg-0 service-flow__item">
                <div class="d-flex gap-3 align-items-center">
                    <figure class="service-flow__image">
                        <img src="<?php echo $theme_url;?>/assests/img/promise.svg"
                            alt="free sample">
                    </figure>
                    <span class="service-flow__title">Price Promise </span>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 mb-lg-0 service-flow__item">
                <div class="d-flex gap-3 align-items-center">
                    <figure class="service-flow__image">
                        <img src="<?php echo $theme_url;?>/assests/img/free-delivery.svg"
                            alt="free sample">
                    </figure>
                    <span class="service-flow__title"> Free Delivery</span>
                </div>
            </div>
            <div class="col-6 col-lg-3 service-flow__item">
                <div class="d-flex gap-3 align-items-center">
                    <figure class="service-flow__image">
                        <img src="<?php echo $theme_url;?>/assests/img/g-review.svg"
                            alt="free sample">
                    </figure>
                    <span class="service-flow__title">Highest Industry Review</span>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- service-flow end-->
<!-- popular-products start -->
<section class="padding-common popular-products">
    <div class="container popular-products__inner">
        <div class="col-12 col-lg-8 px-lg-3 d-flex flex-column align-items-center
                     justify-content-center gap-2 mb-2 mx-auto text-center">
            <h2 class="heading mb-3 col-lg-10"> Popular Composite Decking Boards and Composite
                <span class="heading--span">Accessories </span>
            </h2>
            <p class="para  mx-auto">
                These are our most popular composite products and accessories for 2023, as chosen by our customers.
            </p>
        </div>
        <div class="row popular-products__container js-proslider pt-5">
            <div class="col-3 popular-products__product-box product-item">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                         justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#">
                            <img class="product-item__image"
                                src="<?php echo $theme_url;?>/assests/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="<?php echo $theme_url;?>/assests/img/Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex position-absolute bottom-0 pb-3 pe-3 w-100 justify-content-between
                         align-items-center">
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                            <span class="product-item__review d-flex align-items-center justify-centent-end">
                                <img class="me-1"
                                    src="<?php echo $theme_url;?>/assests/img/product-review.svg"
                                    alt="review"> (2)
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3" href="#">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                        product-item-btn">
                            View Product
                        </button>
                        <button type="button" class="btn btn-success  text-uppercase  product-item-btn">
                            Free Sample
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 popular-products__product-box product-item">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                         justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#">
                            <img class="product-item__image"
                                src="<?php echo $theme_url;?>/assests/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="<?php echo $theme_url;?>/assests/img/Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex position-absolute bottom-0 pb-3 pe-3 w-100 justify-content-between
                         align-items-center">
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                            <span class="product-item__review d-flex align-items-center justify-centent-end">
                                <img class="me-1"
                                    src="<?php echo $theme_url;?>/assests/img/product-review.svg"
                                    alt="review"> (2)
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3" href="#">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                        product-item-btn">
                            View Product
                        </button>
                        <button type="button" class="btn btn-success  text-uppercase  product-item-btn">
                            Free Sample
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 popular-products__product-box product-item">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                         justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#">
                            <img class="product-item__image"
                                src="<?php echo $theme_url;?>/assests/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="<?php echo $theme_url;?>/assests/img/Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex position-absolute bottom-0 pb-3 pe-3 w-100 justify-content-between
                         align-items-center">
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                            <span class="product-item__review d-flex align-items-center justify-centent-end">
                                <img class="me-1"
                                    src="<?php echo $theme_url;?>/assests/img/product-review.svg"
                                    alt="review"> (2)
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3" href="#">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                        product-item-btn">
                            View Product
                        </button>
                        <button type="button" class="btn btn-success  text-uppercase  product-item-btn">
                            Free Sample
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 popular-products__product-box product-item">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                         justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#">
                            <img class="product-item__image"
                                src="<?php echo $theme_url;?>/assests/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="<?php echo $theme_url;?>/assests/img/Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex position-absolute bottom-0 pb-3 pe-3 w-100 justify-content-between
                         align-items-center">
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                            <span class="product-item__review d-flex align-items-center justify-centent-end">
                                <img class="me-1"
                                    src="<?php echo $theme_url;?>/assests/img/product-review.svg"
                                    alt="review"> (2)
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3" href="#">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                        product-item-btn">
                            View Product
                        </button>
                        <button type="button" class="btn btn-success  text-uppercase  product-item-btn">
                            Free Sample
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 popular-products__product-box product-item">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                         justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#">
                            <img class="product-item__image"
                                src="<?php echo $theme_url;?>/assests/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="<?php echo $theme_url;?>/assests/img/Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex position-absolute bottom-0 pb-3 pe-3 w-100 justify-content-between
                         align-items-center">
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                            <span class="product-item__review d-flex align-items-center justify-centent-end">
                                <img class="me-1"
                                    src="<?php echo $theme_url;?>/assests/img/product-review.svg"
                                    alt="review"> (2)
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3" href="#">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                        product-item-btn">
                            View Product
                        </button>
                        <button type="button" class="btn btn-success  text-uppercase  product-item-btn">
                            Free Sample
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- popular-products end -->
<!-- ultratrade-boxes start -->
<section class="padding-common pt-0 position-relative ultratrade-boxes">
    <div class="container ultratrade-boxes__inner">
        <div class="row ultratrade-boxes__items">
            <div class="col-md-6 ultratrade-boxes__column">
                <div class="position-relative text-white ultratrade-boxes__item"
                    style="background-image:url('<?php echo $theme_url?>/assests/img/bg-trade.jpg')">
                    <div class="overlay"></div>
                    <div class="col-10 mx-auto d-flex position-relative flex-column justify-content-center
                    align-items-center gap-3 text-center ultratrade-boxes__content">
                        <h3 class="d-flex align-items-center gap-2 ultratrade-boxes__title">
                            <img class="ultratrade-boxes__logo"
                                src="<?php echo $theme_url;?>/assests/img/ultra-trade-logo.svg"
                                alt="Ultra Trade Logo">
                            In The Trade?
                        </h3>
                        <p class="para text-white"> It’s free to sign up for Ultra Trade, and you benefit from
                            affordable prices,
                            exclusive discounts and a wide range of products in stock. Never miss a deal. Join Today!
                        </p>
                        <a class="btn btn-primary text-uppercase ultratrade-boxes__btn" href="#">
                            Trade Registration<i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ultratrade-boxes__column">
                <div class="position-relative text-white ultratrade-boxes__item"
                    style="background-image:url('<?php echo $theme_url;?>/assests/img/Wooden-Joists.jpg')">
                    <div class="overlay"></div>
                    <div class="col-10 mx-auto d-flex position-relative flex-column justify-content-center
                    align-items-center gap-3 text-center ultratrade-boxes__content">
                        <h3 class="d-flex align-items-center gap-2 ultratrade-boxes__title">
                            <img class="ultratrade-boxes__logo"
                                src="<?php echo $theme_url;?>/assests/img/ultra-trade-logo.svg"
                                alt="Ultra Trade Logo">
                            In The Trade?
                        </h3>
                        <p class="para text-white"> It’s free to sign up for Ultra Trade, and you benefit from
                            affordable prices,
                            exclusive discounts and a wide range of products in stock. Never miss a deal. Join Today!
                        </p>
                        <a class="btn btn-primary text-uppercase ultratrade-boxes__btn" href="#">
                            Trade Registration<i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ultratrade-boxes end -->
<!-- installation -->
<section class="padding-common pt-0 installation">
    <div class="container installation__inner">
        <div class="row align-items-center installation__row">
            <div class="col-lg-6 pe-lg-3 installation__column">
                <h2 class="heading mb-3 installation__heading">
                    Composite Decking is
                    <span class="heading--span">Easy To Install </span>
                </h2>
                <p class="para mb-4 installation__para">
                    Composite decking is quicker and easier to install than natural timber.
                    Our fixing system couldn’t be easier to use; simply click your composite decking together
                    with our new ultra clip. Ultra Decking is the perfect choice for any composite decking installation.
                    For more information, please See our step-by-step video installation guide by clicking here.
                </p>
                <ul class="installation__lists">
                    <li class="installation__list">
                        Posts should be buried at least 500mm deep and concreted in
                    </li>
                    <li class="installation__list">
                        Joist centres must be 300mm
                    </li>
                    <li class="installation__list">
                        A gradient of 1.5% or more for drainage
                    </li>
                    <li class="installation__list">
                        6mm to 8mm expansion gap at decking boards end
                    </li>
                    <li class="installation__list">
                        25mm gap from any fixed objects
                    </li>
                    <li class="installation__list">
                        Minimum 3mm gap at deck boards edge (also referred to as grooved edge)
                    </li>
                    <li class="installation__list">
                        The deck should be raised by at least 300mm
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 installation__column">
                <div class="p-lg-4 installation__image">
                    <img class="p-3 installation__image-src"
                        src="<?php echo $theme_url;?>/assests/img/installation.jpg"
                        alt="Installation">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- installation end-->
<!-- Buyer guide -->
<section class="padding-common bg-primary buyer-guide">
    <div class="container buyer-guide__inner">
        <div class="row align-items-center buyer-guide__row">
            <div class="col-lg-6 buyer-guide__column">
                <div class="pe-lg-3 buyer-guide__image">
                    <img src="<?php echo $theme_url;?>/assests/img/guide.jpg"
                        alt="Buyer Guide">
                </div>
            </div>
            <div class="col-lg-6 buyer-guide__column">
                <div class="p-lg-4 buyer-guide__content">
                    <h2 class="heading mb-3 text-white buyer-guide__heading">
                        Composite Decking
                        <span class="text-white heading--span">Buyers Guide </span>
                    </h2>
                    <p class="para mb-5 text-white buyer-guide__para">
                        The amount of information on composite decking, fencing & cladding can be a little overwhelming,
                        so we created our composite decking guide pages to help you decide which products are right for
                        you. This guide was created after years of listening to your questions and providing advice.
                        The outcome is simple, accurate information to help you choose the right composite decking
                         for your new outdoor space.
                    </p>
                    <a class="btn btn--icon btn-white text-uppercase buyer-guide__btn" href="#">
                        Trade Registration<i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
</section>
<!-- Buyer guide end -->
<!-- benefits start -->
<section class="padding-common bg-secondary benefits">
    <div class="container benefits__inner">
        <div class="col-12 col-lg-8 px-lg-3 d-flex flex-column align-items-center
                        justify-content-center gap-2 mb-2 mx-auto text-center benefits__header">
            <h2 class="heading mb-3 col-lg-10"> Benefits of
                <span class="heading--span"> Composite Materials </span>
            </h2>
            <p class="para  mx-auto">
                Composite Products are an eco-friendly alternative to timber products produced from
                recycled wood and plastic that requires less maintenance but provides increased durability.
                Finally, no rotting, splintering, cracking, sealing or painting your deck.
            </p>
        </div>
        <div class="col-lg-8 pt-5 mx-auto benefits__video">
            <div class="p-4 benefits__video-wrapper">
                <div class="position-relative benefits__video-container">
                    <iframe class="position-absolute benefits__iframe" title="UD Projects"
                        src="https://player.vimeo.com/video/489300928?dnt=1&amp;app_id=122963"></iframe>
                    <div class="position-absolute benefits__video-play js-play">
                        <div class="benefits__play-inner"><i class="fa-solid fa-play"></i> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row padding-common pb-0 my-4 benefits__boxes js-slider-mobile">
            <div class="col-lg-3 benefits__column">
                <div class="benefits__box js-box-height">
                    <div class="d-flex flex-column gap-4 text-center bg-white benefits__box-item">
                        <div class="d-flex justify-content-center align-items-center mx-auto benefits__icons">
                            <img class="benefits__image"
                                src="<?php echo $theme_url;?>/assests/img/brushbig.svg"
                                alt="warranty">
                        </div>
                        <div class="benefits__content">
                            <h3 class="benefits__title mb-4">
                                Warranty
                            </h3>
                            <p class="para para--normal benefits__text">
                                Ultra Decking products come with long warranties from 10 to 25 years depending on the
                                collection
                                chosen, giving you peace of mind.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefits__column ">
                <div class="benefits__box js-box-height">
                    <div class="d-flex flex-column gap-4 text-center bg-white benefits__box-item">
                        <div class="d-flex justify-content-center align-items-center mx-auto benefits__icons">
                            <img class="benefits__image"
                                src="<?php echo $theme_url;?>/assests/img/calendar.svg"
                                alt="warranty">
                        </div>
                        <div class="benefits__content">
                            <h3 class="benefits__title mb-4">
                                Longevity
                            </h3>
                            <p class="para para--normal benefits__text">
                                Timber materials doesn't have the life span or stability over time compared
                                to composite materials. Composite decking, fencing & cladding is
                                resistant to staining, fading*, rotting, splintering and cracking.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefits__column">
                <div class="benefits__box js-box-height">
                    <div class="d-flex flex-column gap-4 text-center bg-white benefits__box-item">
                        <div class="d-flex justify-content-center align-items-center mx-auto benefits__icons">
                            <img class="benefits__image"
                                src="<?php echo $theme_url;?>/assests/img/shieldtick1.svg"
                                alt="warranty">
                        </div>
                        <div class="benefits__content">
                            <h3 class="benefits__title mb-4">
                                Slip Resistant
                            </h3>
                            <p class="para para--normal benefits__text">
                                Traditional timber decking can he extremely slippery when wet. Composite
                                decking offers better slip resistance than timber; put simply, it's much safer.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefits__column">
                <div class="benefits__box js-box-height">
                    <div class="d-flex flex-column gap-4 text-center bg-white benefits__box-item">
                        <div class="d-flex justify-content-center align-items-center mx-auto benefits__icons">
                            <img class="benefits__image"
                                src="<?php echo $theme_url;?>/assests/img/wind2.svg"
                                alt="warranty">
                        </div>
                        <div class="benefits__content">
                            <h3 class="benefits__title mb-4">
                                Low Maintenance
                            </h3>
                            <p class="para para--normal benefits__text">
                                Say goodbye to annually sealing, staining or painting your timber
                                materials. Unlike timber, composite materials requires no year
                                maintenance, saving you money and leaving you free to enjoy your new outdoor space.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- benefits end -->
<!-- inspired start -->
<section class="padding-common bg-primary inspired-block">
    <div class="container inspired-block__inner">
        <div class="col-12 col-lg-10 px-lg-3 d-flex flex-column align-items-center
                            justify-content-center gap-2 mb-2 mx-auto text-center inspired-block__header">
            <h2 class="heading mb-3 text-white  inspired-block__heading"> Be
                <span class="heading--span text-white "> inspired </span>
            </h2>
            <p class="para mx-auto mb-3 text-white inspired-block__para">
                At Ultra Decking, we are committed to reducing our environmental impact whilst creating natural-looking
                and long-lasting composite products. All our composite materials are manufactured using up to 90%
                high-grade recycled materials inspected and tested by SGS and Intertek to EN Standards, giving you
                peace of mind. </p>
            <p class="para mx-auto text-white  inspired-block__para">
                Composite decking is quicker and easier to install than natural timber. Our fixing system couldn’t
                be easier to use; simply click your composite decking together with our new ultra clip.
                Ultra Decking is the perfect choice for any composite decking installation.
            </p>
        </div>
        <div class="row my-5 pt-2 inspired-block__row js-slider-mobile">
            <div class="col-12 col-lg-4 inspired-block__column">
                <div class="inspired-block__item">
                    <a class="d-block inspired-block__link" href="#">
                        <img class="inspired-block__image"
                            src="<?php echo $theme_url;?>/assests/img/be-inspried-1.jpg"
                            alt="Inspired">
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-4 inspired-block__column">
                <div class="inspired-block__item">
                    <a class="d-block inspired-block__link" href="#">
                        <img class="inspired-block__image"
                            src="<?php echo $theme_url;?>/assests/img/be-inspried-1.jpg"
                            alt="Inspired">
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-4 inspired-block__column">
                <div class="inspired-block__item">
                    <a class="d-block inspired-block__link" href="#">
                        <img class="inspired-block__image"
                            src="<?php echo $theme_url;?>/assests/img/be-inspried-1.jpg"
                            alt="Inspired">
                    </a>
                </div>
            </div>

        </div>
        <div class="col-12 text-center inspired-block__btn-outer">
            <a href="#" class="btn btn--icon btn-white text-uppercase mx-auto inspired-block__btn">
                View Decking <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
<!-- be-inspare end -->
<!-- blog start -->
<section class="padding-common bg-secondary blog-showcase">
    <div class="container blog-showcase__inner">
        <div class="col-12 col-lg-8 px-lg-3 d-flex flex-column align-items-center
            justify-content-center gap-2 mb-5 mx-auto text-center blog-showcase__header">
            <h2 class="heading mb-3 col-lg-10"> Welcome to the
                <span class="heading--span"> Ultra Decking Blog </span>
            </h2>
            <p class="para  mx-auto blog-showcase__para">
                Composite Products are an eco-friendly alternative to timber products
                produced from recycled wood and plastic that requires less maintenance
                 but provides increased durability.
            </p>
        </div>
        <div class="row pt-2 blog-showcase__row js-slider-mobile">
            <div class="col-4 blog-showcase__column">
                <div class="blog-showcase__post-box">
                    <a class="d-flex justify-centent-center flex-column gap-4 blog-showcase__link" href="#">
                        <div class="blog-showcase__image-outer">
                            <img class="blog-showcase__image"
                                src="<?php echo $theme_url;?>/assests/img/be-inspried-1.jpg"
                                alt="blog">
                        </div>
                        <div class="text-center blog-showcase__title">
                            10 Composite Decking Pros and Cons Expert Guide (2023)
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-4 blog-showcase__column">
                <div class="blog-showcase__post-box">
                    <a class="d-flex justify-centent-center flex-column gap-4 blog-showcase__link" href="#">
                        <div class="blog-showcase__image-outer">
                            <img class="blog-showcase__image"
                                src="<?php echo $theme_url;?>/assests/img/be-inspried-1.jpg"
                                alt="blog">
                        </div>
                        <div class="text-center blog-showcase__title">
                            10 Composite Decking Pros and Cons Expert Guide (2023)
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-4 blog-showcase__column">
                <div class="blog-showcase__post-box">
                    <a class="d-flex justify-centent-center flex-column gap-4 blog-showcase__link" href="#">
                        <div class="blog-showcase__image-outer">
                            <img class="blog-showcase__image"
                                src="<?php echo $theme_url;?>/assests/img/be-inspried-1.jpg"
                                alt="blog">
                        </div>
                        <div class="text-center blog-showcase__title">
                            10 Composite Decking Pros and Cons Expert Guide (2023)
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- blog end -->
<!-- Shield Technology start -->
<section class="padding-common shield-technology">
    <div class="container shield-technology__inner">
        <div class="col-12 col-lg-10 px-lg-3  mb-5 pb-3 mx-auto text-center shield-technology__header">
            <h2 class="heading mb-3  shield-technology__heading"> Ultra Decking
                <span class="heading--span "> Shield Technology </span>
            </h2>
        </div>
        <div class="row shield-technology__row">
            <div class="col-12 col-lg-6 shield-technology__column">
                <ul class="installation__lists shield-technology__lists">
                    <li class="installation__list shield-technology__item ">
                        <h4 class="shield-technology__title"> Capped Composite Decking </h4>
                        <p class="para para--normal"> 0.4mm full plastic shield. Providing extra protection
                            against mould, mildew, stains and fading.*</p>
                    </li>
                    <li class="installation__list shield-technology__item">
                        <h4 class="shield-technology__title"> Capped Composite Decking </h4>
                        <p class="para para--normal"> The durable hollow core ensures strength and protects
                            these plastic decking boards from damage due to thermal expansion
                            and contraction. </p>
                    </li>
                    <li class="installation__list shield-technology__item">
                        <h4 class="shield-technology__title"> Composite Decking Core </h4>
                        <p class="para para--normal"> Manufactured with recycled wood fibre
                            and recycled grade A HDPE plastic. </p>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-6 shield-technology__column">
                <div class="d-flex align-items-center justify-content-end shield-technology__outer-image">
                    <img class="shield-technology__image"
                        src="<?php echo $theme_url;?>/assests/img/shield.png" alt="shield">
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Shield Technology end -->
<!-- contact form start -->
<section class="padding-common position-relative contact-home"
  style="background-image:url('<?php echo $theme_url;?>/assests/img/bg-contact.jpg')">
    <div class="overlay"></div>
    <div class="container position-relative contact-home__inner">
        <h2 class="heading text-white mb-4 contact-home__heading">
            Ask A Question Or Start A <span class="heading--span text-white">Free Quote</span>
        </h2>
        <div class="row contact-home__row">
            <div class="col-12 col-lg-7 contact-home__column">
                <div class="contact-home__form form-outer bg-white-transparent">
                    <form method="post">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="contact-home__form-group">
                                    <input type="text" name="firstName" class="contact-home__form-control"
                                        placeholder="First Name" require value="" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="contact-home__form-group">
                                    <input type="text" name="lastName" class="contact-home__form-control"
                                        placeholder="Last Name" require value="" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="contact-home__form-group">
                                    <input type="text" name="txtEmail" class="contact-home__form-control"
                                        placeholder="Email" require value="" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="contact-home__form-group">
                                    <input type="tel" name="txtPhone" class="contact-home__form-control"
                                        placeholder="Phone" require value="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact-home__form-group">
                                    <textarea name="txtMsg"
                                        class="contact-home__form-control contact-home__form-control--textarea"
                                        placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-4 contact-home-submit mx-auto">
                                <div class="contact-home__form-group position-relative  mb-0">
                                    <input type="submit" name="btnSubmit" class="btn btn-primary text-white
                              text-uppercase w-100 contact-home__btn" value="Submit" />
                                    <i class="fa-solid fa-arrow-right contact-home__btn-icon"></i>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-5 contact-home__column">
            <div class="d-flex flex-column justify-content-between  contact-home__address-items">
                <div class="d-flex gap-3 align-items-center bg-white-transparent text-white contact-home__list">
                    <div class="contact-home__image-outer">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="contact-home__content details">
                        <h5 class="details__heading">Phone</h5>
                        <p class="para text-white">01925 943011</p>
                    </div>
                </div>
                <div class="d-flex gap-3 align-items-center bg-white-transparent text-white contact-home__list">
                    <div class="contact-home__image-outer">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="contact-home__content details">
                        <h5 class="details__heading">Open Hours</h5>
                        <p class="para text-white">9.00am – 5.30pm, Closed On Saturday And Sunday</p>
                    </div>
                </div>
                <div class="d-flex gap-3 align-items-center bg-white-transparent text-white contact-home__list">
                    <div class="contact-home__image-outer">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="contact-home__content details">
                        <h5 class="details__heading">Email</h5>
                        <p class="para text-white">info@ultradecking.co.uk</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>
<!-- contact form end -->


<?php get_footer();?>
