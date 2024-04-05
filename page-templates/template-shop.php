<?php
/*
Template Name:Shop
*/
get_header();?>

<style>
.banner-top__items {
    list-style: none
}

.banner-top__text {
    color: var(--uk-header-color)
}

.banner-common {
    padding: 9rem 0;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat
}

.heading-inner {
    font-size: 2.625rem
}

.ukproducts__filters {
    background: #f7f7f8;
    border-radius: 8px
}

.ukproducts__btn {
    border-radius: 2px
}

.product-item--ukshop {
    margin-bottom: 30px
}

.cta-banner__block--contact,
.service-flow--white {
    margin: 15px 0 40px
}

.service-flow__inner--white {
    box-shadow: 0 4px 30px #0000001F;
    padding: 23px 30px;
    border-radius: 4px
}

.cta-banner__content--inner {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.9rem
}

.cta-banner__heading--title {
    font-size: 1.69rem
}

.cta-banner__btn--small {
    width: 100%;
    margin: 0
}

.cta-banner__img-outer--small {
    width: 88%;
    height: 300%;
    top: -115px
}

.category-details {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 7rem 0
}

.overlay--60 {
    opacity: .6
}

.category-description__row {
    border-radius: 8px;
    margin-bottom: 40px
}

.category-description__column {
    padding: 25px
}

.category-description__outer-img {
    height: 100%;
    border-radius: 4px;
    background-size: cover;
    background-repeat: no-repeat
}

.category-description__content {
    padding: 60px 14px;
    justify-content: center;
    height: 100%
}

.heading--green{
    color: #416218;
}

.projects {
    padding-top: 5rem;
    padding-bottom: 10.8rem;
    background: #474c50
}

.tip-row {
    padding: 20px;
    box-shadow: 0 4px 24px rgba(0, 0, 0, .08);
    border-radius: 8px;
    overflow: hidden;
    margin-top: 40px
}

.tip-content {
    padding: 25px 20px 25px 12px
}

.heading-h3 {
    font-size: 2rem;
    text-align: center
}

.installation__list--tip {
    line-height: 28px;
    margin-bottom: 10px;
    padding-left: 3.5rem
}

.installation__list--tip::before {
    transform: translateY(-50%);
    top: 50%;
    height: 37px;
    width: 37px
}



.table-content {
    padding: 1rem 0 6rem
}

.table-content__block {
    border: 4px solid #fff;
    box-shadow: 0 4px 24px 0 #00000014;
    border-radius: 6px;
    margin-top: -145px
}

.table-content__table {
    border-collapse: collapse;
    border-radius: 6px;
    overflow: hidden
}

.top-table__row {
    background: #145a78;
    color: #fff
}

.top-table__col {
    padding: 20px !important;
    border-right: 1px solid #fff;
    border-bottom: 1px solid #fff
}

.top-table__col:last-child {
    border-right: 0
}

.table-content__itam:first-child {
    border-left: 0 !important
}

.table-content__itam:last-child {
    border-right: 0 !important
}

.top-table__content {
    height: 100%;
    display: flex;
    flex-direction: column;
    gap: 15px;
    justify-content: space-between;
    flex-wrap: wrap;
    align-items: center
}

.top-table__image-outer {
    height: 126px;
    width: 126px;
    display: flex;
    border-radius: 80px;
    object-fit: cover;
    border: 3px solid #fff;
    overflow: hidden;
    flex-wrap: wrap
}

.top-table__image-outer--round {
    height: auto;
    margin: 24px 0
}

.top-table-title {
    font-size: 1.2rem;
    font-weight: 600
}

.table-content__itam {
    vertical-align: middle;
    font-size: 1rem;
    color: #2d2d2d;
    border: 1px solid #c9c9c9 !important;
    line-height: 24px
}

.table>:not(:first-child) {
    border-top: 0
}

.table-content__body {
    background: #f6faf5
}

.table-content__body tr:nth-child(odd) {
    background: #e6eef3
}

.table-check {
    color: #416218;
    font-weight: 700;
    width: 16px;
    display: inline-block;
    margin-top: 10px;
    font-size: 19px;
    transform: rotate(7deg);
    margin-right: 4px
}

@media only screen and (max-width:1199px) and (min-width:992px) {
    .product-item {
        width: 33.33%
    }
    .cta-banner__btn--small{
        width:34%;
    }
    .cta-banner__heading--title {
        line-height: normal;
    }

    .table-content__block {
        overflow-x: auto
    }

    .top-table__image-outer {
        width: 80px;
        height: 80px
    }

    .top-table__image-outer--round {
        height: auto;
        margin: 15px 0
    }

    .top-table-title {
        font-size: .85rem
    }

    .top-table__col {
        padding: 14px !important;
        min-width: 166px
    }

    .table-content__itam {
        font-size: .8rem;
        padding: 13px !important
    }
}

@media only screen and (max-width:991px) and (min-width:601px) {
    .heading-inner {
        font-size: 2rem
    }
    .banner-top__img {
        max-width: 18px
    }
    .banner-top__items {
        margin: 0 -15px;
        font-size: .7rem
    }

    .ukproducts__btn {
        flex: 0 0 16%;
        padding: .5rem .38rem !important
    }

    .ukproducts__filters {
        padding: .8rem !important;
        gap: .5rem !important
    }

    .form-select {
        font-size: .75rem
    }

    .product-item {
        width: 50%;
        padding: 0 7px
    }

    .cta-banner__heading--title {
        font-size: 1.125rem
    }

    .cta-banner__btn--small {
        width: 140px
    }

    .category-description__row {
        flex-direction: column
    }

    .category-description__column {
        width: 100%
    }

    .category-description__content {
        padding: 0 20px 20px
    }

    .category-description__outer-img {
        min-height: 300px;
        background-position:center;
    }

    .tip-row {
        flex-direction: column-reverse
    }

    .tip-column {
        width: 100%;
        margin-bottom: 20px
    }

    .tip-content {
        padding-bottom: 0
    }

    .heading-h3 {
        font-size: 1.4rem
    }

    .faq-sec_header {
        font-size: 1rem;
        padding: 1rem
    }

    .faq-sec__accodion-content,
    .top-table-title {
        font-size: .85rem
    }

    .table-content__block {
        overflow-x: auto
    }

    .top-table__image-outer {
        width: 80px;
        height: 80px
    }

    .top-table__image-outer--round {
        height: auto;
        margin: 15px 0
    }

    .top-table__col {
        padding: 14px !important;
        min-width: 166px
    }

    .table-content__itam {
        font-size: .8rem;
        padding: 13px !important
    }
}

@media only screen and (max-width:600px) {
   

    .banner-top {
        display: none
    }

    .banner-common {
        padding: 5rem 0
    }

    .banner-top__img {
        max-width: 18px
    }

    .banner-top__items {
        margin: 0 -15px;
        font-size: .72rem
    }

    .ukproducts__btn {
        flex: 0 0 22%;
        padding: .5rem .38rem !important
    }

    .ukproducts__filters {
        padding: .8rem !important;
        gap: .5rem !important;
        flex-wrap: wrap
    }

    .form-select {
        font-size: .75rem;
        width: 150px
    }

    .product-item {
        width: 100%;
        padding: 0 18px
    }

    .category-description__row,
    .cta-banner__content--inner {
        flex-direction: column
    }

    .cta-banner__heading--title {
        font-size: 1.125rem
    }

    .cta-banner__btn--small {
        width: 140px
    }

    .category-description__column {
        width: 100%
    }

    .category-description__content {
        padding: 0 0 20px
    }

    .category-description__outer-img {
        min-height: 300px
    }

    .tip-row {
        flex-direction: column-reverse
    }

    .tip-column {
        width: 100%;
        margin-bottom: 20px
    }

    .tip-content {
        padding: 15px 0 0
    }

  
    

    .table-content__block {
        overflow-x: auto
    }

    .top-table__image-outer {
        width: 80px;
        height: 80px
    }

    .top-table__image-outer--round {
        height: auto;
        margin: 15px 0
    }

    .top-table__col {
        padding: 14px !important;
        min-width: 166px
    }

    .table-content__itam {
        font-size: .8rem;
        padding: 13px !important
    }
}
</style>

<!-- banner-top start -->
<section class="banner-top">
    <div class="container banner-top__inner">
        <ul class="d-flex py-3 justify-content-between
                align-items-center banner-top__items">
            <li class="banner-top__item">
                <div class="d-flex align-item-center gap-2">
                    <img class="banner-top__img"
                        src="<?php echo get_template_directory_uri();?>/assests/image/svg/trucks.svg" alt="truck">
                    <span class="banner-top__text">
                        Fast Delivery Around The UK
                    </span>
                </div>
            </li>
            <li class="banner-top__item">
                <div class="d-flex align-item-center gap-2">
                    <img class="banner-top__img"
                        src="<?php echo get_template_directory_uri();?>/assests/image/svg/quality.svg" alt="truck">
                    <span class="banner-top__text">
                        Quality Composite Product
                    </span>
                </div>
            </li>
            <li class="banner-top__item">
                <div class="d-flex align-item-center gap-2">
                    <img class="banner-top__img"
                        src="<?php echo get_template_directory_uri();?>/assests/image/svg/google.svg" alt="truck">
                    <span class="banner-top__text">
                        Rated 4.9 Out Of 5 On Google Reviews
                    </span>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- banner-top end -->
<!-- banner-common start -->
<section class="position-relative banner-common"
    style="background-image:url('https://ultradecking.co.uk/wp-content/uploads/2023/01/Composite-Decking-In-Grey-With-Contrast-Boarder-Composite-Decking-Ideas.jpg')">
    <div class="overlay"></div>
    <div class="container banner-common__inner">
        <div class="d-flex justify-content-center align-items-center
             position-relative banner-common__blocks">
            <h1 class="text-uppercase text-white heading-inner
              banner-common__title">
                COMPOSITE DECKING
            </h1>
        </div>
    </div>
</section>
<!-- banner-common end -->
<!-- ukproducts start -->
<section class="padding-common ukproducts">
    <div class="container ukproducts__inner">
            <div class="d-flex align-items-center justify-content-center
                        gap-3 p-3 ukproducts__filters">
                <button class="btn btn-primary text-white ukproducts__btn">
                    <i class="fa-solid fa-filter"></i> Filter
                </button>
                <select class="form-select ukproducts__select">
                    <option selected>Select Color</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select ukproducts__select">
                    <option selected> Price</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select ukproducts__select">
                    <option selected>Sort by Popularity</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        <div class="product-totals py-4">
            <p class="para text-center"> Showing all 15 results </p>
        </div>
        <div class="row ukproducts__list product-items">
            <div class="col-3 product-item product-item--ukshop">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                                justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#" tabindex="0">
                            <img class="product-item__image"
                                src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Teak-Composite-Decking-Mixed-Colours-Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex position-absolute bottom-0 pb-3 pe-3 w-100 justify-content-between
                                align-items-center">
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                            <span class="product-item__review d-flex align-items-center justify-centent-end">
                                <img class="me-1"
                                    src="<?php echo get_template_directory_uri();?>/assests/image/svg/product-review.svg"
                                    alt="review"> (2)
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3" href="#" tabindex="0">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                                product-item-btn" tabindex="0">
                            View Product
                        </button>
                        <button type="button" class="btn btn-success  text-uppercase  product-item-btn" tabindex="0">
                            Free Sample
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 product-item product-item--ukshop">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                                justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#" tabindex="0">
                            <img class="product-item__image"
                                src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Teak-Composite-Decking-Mixed-Colours-Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex position-absolute bottom-0 pb-3 pe-3 w-100 justify-content-between
                                align-items-center">
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                            <span class="product-item__review d-flex align-items-center justify-centent-end">
                                <img class="me-1"
                                    src="<?php echo get_template_directory_uri();?>/assests/image/svg/product-review.svg"
                                    alt="review"> (2)
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3" href="#" tabindex="0">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                                product-item-btn" tabindex="0">
                            View Product
                        </button>
                        <button type="button" class="btn btn-success  text-uppercase  product-item-btn" tabindex="0">
                            Free Sample
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 product-item product-item--ukshop">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                                justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#" tabindex="0">
                            <img class="product-item__image"
                                src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Teak-Composite-Decking-Mixed-Colours-Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex position-absolute bottom-0 pb-3 pe-3 w-100 justify-content-between
                                align-items-center">
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                            <span class="product-item__review d-flex align-items-center justify-centent-end">
                                <img class="me-1"
                                    src="<?php echo get_template_directory_uri();?>/assests/image/svg/product-review.svg"
                                    alt="review"> (2)
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3" href="#" tabindex="0">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                                product-item-btn" tabindex="0">
                            View Product
                        </button>
                        <button type="button" class="btn btn-success  text-uppercase  product-item-btn" tabindex="0">
                            Free Sample
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 product-item product-item--ukshop">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                                justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#" tabindex="0">
                            <img class="product-item__image"
                                src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Teak-Composite-Decking-Mixed-Colours-Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex position-absolute bottom-0 pb-3 pe-3 w-100 justify-content-between
                                align-items-center">
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                            <span class="product-item__review d-flex align-items-center justify-centent-end">
                                <img class="me-1"
                                    src="<?php echo get_template_directory_uri();?>/assests/image/svg/product-review.svg"
                                    alt="review"> (2)
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3" href="#" tabindex="0">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                                product-item-btn" tabindex="0">
                            View Product
                        </button>
                        <button type="button" class="btn btn-success  text-uppercase  product-item-btn" tabindex="0">
                            Free Sample
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service-flow service-flow--white ">
        <div class="container service-flow__inner service-flow__inner--white">
            <div class="row align-items-center ">
                <div class="col-6 col-lg-3 mb-3 mb-lg-0 service-flow__item">
                    <div class="d-flex gap-3 align-items-center">
                        <figure class="service-flow__image">
                            <img src="<?php echo get_template_directory_uri();?>/assests/image/svg/free-sample-white.svg"
                                alt="free sample">
                        </figure>
                        <span class="service-flow__title"> Get 4 Free Samples</span>
                    </div>
                </div>
                <div class="col-6 col-lg-3 mb-3 mb-lg-0 service-flow__item">
                    <div class="d-flex gap-3 align-items-center">
                        <figure class="service-flow__image">
                            <img src="<?php echo get_template_directory_uri();?>/assests/image/svg/promise-white.svg"
                                alt="free sample">
                        </figure>
                        <span class="service-flow__title">Price Promise </span>
                    </div>
                </div>
                <div class="col-6 col-lg-3 mb-3 mb-lg-0 service-flow__item">
                    <div class="d-flex gap-3 align-items-center">
                        <figure class="service-flow__image">
                            <img src="<?php echo get_template_directory_uri();?>/assests/image/svg/free-delivery-white.svg"
                                alt="free sample">
                        </figure>
                        <span class="service-flow__title"> Free Delivery</span>
                    </div>
                </div>
                <div class="col-6 col-lg-3 service-flow__item">
                    <div class="d-flex gap-3 align-items-center">
                        <figure class="service-flow__image">
                            <img src="<?php echo get_template_directory_uri();?>/assests/image/svg/g-review.svg"
                                alt="free sample">
                        </figure>
                        <span class="service-flow__title">Highest Industry Review</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row ukproducts__list product-items">
            <div class="col-3 product-item product-item--ukshop">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                                    justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#" tabindex="0">
                            <img class="product-item__image"
                                src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Teak-Composite-Decking-Mixed-Colours-Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex position-absolute bottom-0 pb-3 pe-3 w-100 justify-content-between
                                    align-items-center">
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                            <span class="product-item__review d-flex align-items-center justify-centent-end">
                                <img class="me-1"
                                    src="<?php echo get_template_directory_uri();?>/assests/image/svg/product-review.svg"
                                    alt="review"> (2)
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3" href="#" tabindex="0">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                                    product-item-btn" tabindex="0">
                            View Product
                        </button>
                        <button type="button" class="btn btn-success  text-uppercase  product-item-btn" tabindex="0">
                            Free Sample
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 product-item product-item--ukshop">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                                    justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#" tabindex="0">
                            <img class="product-item__image"
                                src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Teak-Composite-Decking-Mixed-Colours-Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex position-absolute bottom-0 pb-3 pe-3 w-100 justify-content-between
                                    align-items-center">
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                            <span class="product-item__review d-flex align-items-center justify-centent-end">
                                <img class="me-1"
                                    src="<?php echo get_template_directory_uri();?>/assests/image/svg/product-review.svg"
                                    alt="review"> (2)
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3" href="#" tabindex="0">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                                    product-item-btn" tabindex="0">
                            View Product
                        </button>
                        <button type="button" class="btn btn-success  text-uppercase  product-item-btn" tabindex="0">
                            Free Sample
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 product-item product-item--ukshop">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                                    justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#" tabindex="0">
                            <img class="product-item__image"
                                src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Teak-Composite-Decking-Mixed-Colours-Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex position-absolute bottom-0 pb-3 pe-3 w-100 justify-content-between
                                    align-items-center">
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                            <span class="product-item__review d-flex align-items-center justify-centent-end">
                                <img class="me-1"
                                    src="<?php echo get_template_directory_uri();?>/assests/image/svg/product-review.svg"
                                    alt="review"> (2)
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3" href="#" tabindex="0">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                                    product-item-btn" tabindex="0">
                            View Product
                        </button>
                        <button type="button" class="btn btn-success  text-uppercase  product-item-btn" tabindex="0">
                            Free Sample
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 product-item product-item--ukshop">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                                    justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#" tabindex="0">
                            <img class="product-item__image"
                                src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Teak-Composite-Decking-Mixed-Colours-Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex position-absolute bottom-0 pb-3 pe-3 w-100 justify-content-between
                                    align-items-center">
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                            <span class="product-item__review d-flex align-items-center justify-centent-end">
                                <img class="me-1"
                                    src="<?php echo get_template_directory_uri();?>/assests/image/svg/product-review.svg"
                                    alt="review"> (2)
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3" href="#" tabindex="0">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                                    product-item-btn" tabindex="0">
                            View Product
                        </button>
                        <button type="button" class="btn btn-success  text-uppercase  product-item-btn" tabindex="0">
                            Free Sample
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 product-item product-item--ukshop">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                                    justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#" tabindex="0">
                            <img class="product-item__image"
                                src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Teak-Composite-Decking-Mixed-Colours-Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex position-absolute bottom-0 pb-3 pe-3 w-100 justify-content-between
                                    align-items-center">
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                            <span class="product-item__review d-flex align-items-center justify-centent-end">
                                <img class="me-1"
                                    src="<?php echo get_template_directory_uri();?>/assests/image/svg/product-review.svg"
                                    alt="review"> (2)
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3" href="#" tabindex="0">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                                    product-item-btn" tabindex="0">
                            View Product
                        </button>
                        <button type="button" class="btn btn-success  text-uppercase  product-item-btn" tabindex="0">
                            Free Sample
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 product-item product-item--ukshop">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                                justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#" tabindex="0">
                            <img class="product-item__image"
                                src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Teak-Composite-Decking-Mixed-Colours-Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex position-absolute bottom-0 pb-3 pe-3 w-100 justify-content-between
                                align-items-center">
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                            <span class="product-item__review d-flex align-items-center justify-centent-end">
                                <img class="me-1"
                                    src="<?php echo get_template_directory_uri();?>/assests/image/svg/product-review.svg"
                                    alt="review"> (2)
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3" href="#" tabindex="0">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                                product-item-btn" tabindex="0">
                            View Product
                        </button>
                        <button type="button" class="btn btn-success  text-uppercase  product-item-btn" tabindex="0">
                            Free Sample
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 product-item product-item--ukshop">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                                justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#" tabindex="0">
                            <img class="product-item__image"
                                src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Teak-Composite-Decking-Mixed-Colours-Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex position-absolute bottom-0 pb-3 pe-3 w-100 justify-content-between
                                align-items-center">
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                            <span class="product-item__review d-flex align-items-center justify-centent-end">
                                <img class="me-1"
                                    src="<?php echo get_template_directory_uri();?>/assests/image/svg/product-review.svg"
                                    alt="review"> (2)
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3" href="#" tabindex="0">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                                product-item-btn" tabindex="0">
                            View Product
                        </button>
                        <button type="button" class="btn btn-success  text-uppercase  product-item-btn" tabindex="0">
                            Free Sample
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 product-item product-item--ukshop">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                                justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#" tabindex="0">
                            <img class="product-item__image"
                                src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Teak-Composite-Decking-Mixed-Colours-Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex position-absolute bottom-0 pb-3 pe-3 w-100 justify-content-between
                                align-items-center">
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                            <span class="product-item__review d-flex align-items-center justify-centent-end">
                                <img class="me-1"
                                    src="<?php echo get_template_directory_uri();?>/assests/image/svg/product-review.svg"
                                    alt="review"> (2)
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3" href="#" tabindex="0">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                                product-item-btn" tabindex="0">
                            View Product
                        </button>
                        <button type="button" class="btn btn-success  text-uppercase  product-item-btn" tabindex="0">
                            Free Sample
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container position-relative cta-banner">
        <div class="row gx-0 bg-primary text-white cta-banner__block cta-banner__block--contact">
            <div class="col-7 cta-banner__column ">
                <div class="cta-banner__content cta-banner__content--inner">
                    <h2 class="heading cta-banner__heading cta-banner__heading--title">
                        Have you find what are you looking for?
                    </h2>
                    <a class="btn btn-white btn--icon text-uppercase cta-banner__btn cta-banner__btn--small " href="#">
                        Contact Us
                    </a>
                </div>
            </div>
            <div class="col-5 position-relative overflow-hidden cta-banner__column">
                <div class="cta-banner__img-outer cta-banner__img-outer--small"
                    style="background-image:url('<?php echo get_template_directory_uri();?>/assests/image/img/buyer-guide.jpg')">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row ukproducts__list product-items">
            <div class="col-3 product-item product-item--ukshop">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                                    justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#" tabindex="0">
                            <img class="product-item__image"
                                src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Teak-Composite-Decking-Mixed-Colours-Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex position-absolute bottom-0 pb-3 pe-3 w-100 justify-content-between
                                    align-items-center">
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                            <span class="product-item__review d-flex align-items-center justify-centent-end">
                                <img class="me-1"
                                    src="<?php echo get_template_directory_uri();?>/assests/image/svg/product-review.svg"
                                    alt="review"> (2)
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3" href="#" tabindex="0">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                                    product-item-btn" tabindex="0">
                            View Product
                        </button>
                        <button type="button" class="btn btn-success  text-uppercase  product-item-btn" tabindex="0">
                            Free Sample
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 product-item product-item--ukshop">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                                    justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#" tabindex="0">
                            <img class="product-item__image"
                                src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Teak-Composite-Decking-Mixed-Colours-Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex position-absolute bottom-0 pb-3 pe-3 w-100 justify-content-between
                                    align-items-center">
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                            <span class="product-item__review d-flex align-items-center justify-centent-end">
                                <img class="me-1"
                                    src="<?php echo get_template_directory_uri();?>/assests/image/svg/product-review.svg"
                                    alt="review"> (2)
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3" href="#" tabindex="0">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                                    product-item-btn" tabindex="0">
                            View Product
                        </button>
                        <button type="button" class="btn btn-success  text-uppercase  product-item-btn" tabindex="0">
                            Free Sample
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-3 product-item product-item--ukshop">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                                    justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#" tabindex="0">
                            <img class="product-item__image"
                                src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Teak-Composite-Decking-Mixed-Colours-Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex position-absolute bottom-0 pb-3 pe-3 w-100 justify-content-between
                                    align-items-center">
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                            <span class="product-item__review d-flex align-items-center justify-centent-end">
                                <img class="me-1"
                                    src="<?php echo get_template_directory_uri();?>/assests/image/svg/product-review.svg"
                                    alt="review"> (2)
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3" href="#" tabindex="0">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                                    product-item-btn" tabindex="0">
                            View Product
                        </button>
                        <button type="button" class="btn btn-success  text-uppercase  product-item-btn" tabindex="0">
                            Free Sample
                        </button>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- ukproducts end -->
<!-- category-details start -->
<section class="position-relative category-details"
    style="background-image:url('https://ultradecking.co.uk/wp-content/uploads/2024/03/Composite-Decking-In-Grey-Wood-Grain-With-Woven-Garden-Furniture-1.jpg')">
    <div class="overlay overlay--60"></div>
    <div class="container  category-details__inner">
        <div class="col-md-11 mx-auto position-relative text-center text-white category-details__contents">
            <h2 class="heading">Quality Composite Decking By Ultra Decking® </h2>
            <span class="heading--span d-block mb-4"> UK’s Decking Boards Specialist </span>
            <p class="para text-white mb-3">
                Ultra Decking boards are hi-tech composite decking products that provide an eco-friendly alternative to
                wood decking. Our range of products has been created for all types of budgets and outdoor spaces. Hence,
                we are sure that, like our many happy customers,  you will find the right composite decking board you
                need to transform your outdoor space!
            </p>
            <p class="para text-white">
                Each of our collections has been designed and developed to focus on a variety of different outdoor
                projects and ideas. So, whether you are building a classic garden decking, pool area, luxurious outdoor
                garden floor, etc., rest assured that our product range will meet your needs.
            </p>
        </div>
    </div>
</section>
<!-- category-details end -->
<!-- category-description start -->
<section class="padding-common bg-primary category-description">
    <div class="container category-description__inner">
        <div class="row bg-white text-center category-description__row">
            <div class="col-md-6 category-description__column">
                <div class="category-description__outer-img"
                    style="background-image:url('https://ultradecking.co.uk/wp-content/uploads/2022/12/Garden-Decking-Ideas-With-Hot-Tub-and-Grey-Decking.webp');">
                </div>
            </div>
            <div class="col-md-6 category-description__column">
                <div class="category-description__content d-flex flex-column gap-3">
                    <h2 class="heading">
                        <span class="heading--span"> Home Choice </span>
                        Composite Decking
                    </h2>
                    <div class="d-flex flex-column gap-3">
                        <p class="para">
                            Transform your garden project into a beautful outdoor living space with the perfect balance
                            of quality, affordability and style.
                        </p>
                        <p class="para">
                            Our Home Choice collection was designed & engineered with homeowners in mind. In other
                            words, the goal was to create the perfect mix of affordability and durability. We do not
                            compromise on the features, advantages and benefits of composite decking. As a result, our
                            home choice collection has recently been awarded by expert reviews as the most
                            cost-effective decking product on the market today.
                        </p>
                        <p class="para">
                            Our Home Choice Premier is highly rated by homeowners and landscapers. For instance, it has
                            an excellent anti-slip & scratch-resistant properties. Independent landscape professionals
                            rated our it as the best for scratch resistance in the composite decking sector.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-white flex-row-reverse  text-center category-description__row">
            <div class="col-md-6 category-description__column">
                <div class="category-description__outer-img"
                    style="background-image:url('https://ultradecking.co.uk/wp-content/uploads/2022/12/Modern-Garden-Ideas-Brown-Decking-Ideas-With-Accessories.webp');">
                </div>
            </div>
            <div class="col-md-6 category-description__column">
                <div class="category-description__content d-flex flex-column gap-3">
                    <h2 class="heading">
                        <span class="heading--span heading--green">Exclusive Natural </span>
                        Composite Decking Boards
                    </h2>
                    <div class="d-flex flex-column gap-3">
                        <p class="para">
                            The Exclusive Natural collection is an innovative first-generation with high-quality grade A
                            recycled plastics and hardwood fibres.
                        </p>
                        <p class="para">
                            This is manufactured using the latest composite production technology and techniques that
                            capture the aesthetics and beauty of real exotic timber. In addition to none of the annual
                            maintenance and drawbacks of timber or hardwood decking.
                        </p>
                        <p class="para">
                            Also, professional landscapers has rated this Exclusive Natural collection as one of the
                            most authentic composite decking board currently available.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-white text-center category-description__row">
            <div class="col-md-6 category-description__column">
                <div class="category-description__outer-img"
                    style="background-image:url('https://ultradecking.co.uk/wp-content/uploads/2022/12/Signature-Teak-Composite-Decking-With-Flower-and-Plants.webp');">
                </div>
            </div>
            <div class="col-md-6 category-description__column">
                <div class="category-description__content d-flex flex-column gap-3">
                    <h2 class="heading">
                        <span class="heading--span"> Signature </span>
                        Composite Decking Collection
                    </h2>
                    <div class="d-flex flex-column gap-3">
                        <p class="para">
                            Our Signature Collection is manufactured with a durable thin plastic layer that wraps around
                            the entire board. As a result, not only will it enhance your outdoor space, but it also
                            provides long-term colour stability and ultra-low maintenance. Most importantly, the added
                            protection from spills and stains allows you to relax more during the hot summer months.
                        </p>
                        <p class="para">
                            What do professional fitters say about it? Well, it been rated as one of the hassle-free
                            decking solutions out there. In addition, it offers the perfect mix of beautiful aesthetics
                            and durability with fade, stain and scratch-resistant properties and it comes with a 25-year
                            limited guarantee.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- category-description end -->
<!-- projects start -->
<section class="projects">
    <div class="container projects__inner">
        <h2 class="heading text-white text-center projects__header">
            Review Composite Decking Boards For
            <span class="heading--span"> Your Project </span>
        </h2>
    </div>
</section>
<!-- projects end -->
<!-- table-content Start -->
<section class="table-content  bg-secondary">
    <div class="container table-content__inner">
        <div class="table-content__block">
            <table class="table-content__table text-center"
            aria-describedby="projects__header" >
                <thead class="table-content__head top-table">
                    <tr class="top-table__row">
                        <th class="top-table__col" scope="col">
                            <div class="top-table__content">
                                <div class="top-table__image-outer top-table__image-outer--round">
                                    <img class="top-table__image top-table__image--round"
                                        src="https://ultradecking.co.uk/wp-content/uploads/2022/08/UltraDecking-Logo.jpg.webp"
                                        alt="logo" />
                                </div>
                                <div class="top-table__heading">
                                    <strong class="top-table-title"><i> Product Performance <br />  Review</i></strong>
                                </div>
                            </div>
                        </th>
                        <th class="top-table__col" scope="col">
                            <div class="top-table__content">
                                <div class="top-table__image-outer">
                                    <img class="top-table__image"
                                        src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Black-Composite-Decking-Board-Dimensions-3.6m-150mm-25mm-Reverisble-Grooved-Boards-Anti-Slip-150x150-1.jpg.webp"
                                        alt="decking" />
                                </div>
                                <div class="top-table__heading">
                                    <strong class="top-table-title"><i> Home CHOICE <br />Collection</i></strong>
                                </div>
                            </div>
                        </th>
                        <th class="top-table__col" scope="col">
                            <div class="top-table__content">
                                <div class="top-table__image-outer">
                                    <img class="top-table__image"
                                        src="https://ultradecking.co.uk/wp-content/uploads/2019/05/Grey-Composite-Decking-Board-Dimensions-3.6m-140mm-25mm-Reverisble-Deep-Emboosed-Wood-Grain-Boards-Slip-Scratch-Resistant-1.jpg.webp"
                                        alt="Grey-Composite" />
                                </div>
                                <div class="top-table__heading">
                                    <strong class="top-table-title"><i>Home PREMIER  <br />Collection</i></strong>
                                </div>
                            </div>
                        </th>
                        <th class="top-table__col" scope="col">
                            <div class="top-table__content">
                                <div class="top-table__image-outer">
                                    <img class="top-table__image"
                                        src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Composite-Decking-Board-Colour-IPE-exclusive-to-Ultra-Decking-Dimensions-3.6m-150x150-1.jpg.webp"
                                        alt="" />
                                </div>
                                <div class="top-table__heading">
                                    <strong class="top-table-title"><i> Exclusive Natural <br />Collection</i></strong>
                                </div>
                            </div>
                        </th>
                        <th class="top-table__col" scope="col">
                            <div class="top-table__content">
                                <div class="top-table__image-outer">
                                    <img class="top-table__image"
                                        src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Signature-Dual-Colour-Grey-Composite-Decking-By-Ultra-Decking.jpg.webp"
                                        alt="" />
                                </div>
                                <div class="top-table__heading">
                                    <strong class="top-table-title"><i> Signature Dual <br />
                                            Colour Collection</i></strong>
                                </div>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody class="table-content__body">
                    <tr scope="row">
                        <td class="table-content__itam p-4">Size</td>
                        <td class="table-content__itam p-4">3.6m</td>
                        <td class="table-content__itam p-4">2.4m/3.6m/4m/4.8m</td>
                        <td class="table-content__itam p-4">3.6m</td>
                        <td class="table-content__itam p-4">3.6m/4.8m</td>
                    </tr>
                    <tr scop="row">
                        <td class="table-content__itam p-4">Surface Finish</td>
                        <td class="table-content__itam p-4">Grooved</td>
                        <td class="table-content__itam p-4">Wood Grain</td>
                        <td class="table-content__itam p-4">Mixed Colour</td>
                        <td class="table-content__itam p-4">Dual Colour</td>
                    </tr>
                    <tr scop="row">
                        <td class="table-content__itam p-4">Core Design</td>
                        <td class="table-content__itam p-4">4 Square Hollow Composite Decking</td>
                        <td class="table-content__itam p-4">5 Square Hollow Composite Decking</td>
                        <td class="table-content__itam p-4">4 Hollow Grade A Plastic Composite Decking</td>
                        <td class="table-content__itam p-4">
                            6 Hollow Capped Dual Coloured Composite Decking <br />
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                        </td>
                    </tr>
                    <tr scop="row">
                        <td class="table-content__itam p-4">Life Span*</td>
                        <td class="table-content__itam p-4">10 Year Residential*</td>
                        <td class="table-content__itam p-4">15 Years Residential*</td>
                        <td class="table-content__itam p-4">Over 15 Years Residential*</td>
                        <td class="table-content__itam p-4">Over 20 Years Residential*</td>
                    </tr>
                    <tr scop="row">
                        <td class="table-content__itam p-4">Slip Resistance (Wet Conditions)</td>
                        <td class="table-content__itam p-4">
                            Low Risk (Horizontal Installation)<br />
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            Low/Medium Risk (Horizontal Installation)<br />
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            Low Risk (Install Horizontally) <br />
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            Low/Medium Risk (Install Horizontally)<br />
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                        </td>
                    </tr>
                    <tr scop="row">
                        <td class="table-content__itam p-4">Weather Resistance</td>
                        <td class="table-content__itam p-4">
                            Moderate <br />
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            High <br />
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            High From Using Grade A Plastics   <br />
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            High (Capped Layer) <br />
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                            <span class="table-check">✓</span>
                        </td>
                    </tr>
                    <tr scop="row">
                        <td class="table-content__itam p-4">Affordability</td>
                        <td class="table-content__itam p-4">
                            From £4.52 Per Metre
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            From £5.09 Per Metre
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            From £5.67 Per Metre
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span><span class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            From £6.25 Per Metre
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span>
                        </td>
                    </tr>
                    <tr scop="row">
                        <td class="table-content__itam p-4">Low Maintenance</td>
                        <td class="table-content__itam p-4">
                            Wash Every Quarter*
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            Wash Every Quarter*
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span><span class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            Wash Every Quarter*
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span><span class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            Wash Every 6 months*
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span>
                        </td>
                    </tr>
                    <tr scop="row">
                        <td class="table-content__itam p-4">Stain Resistance</td>
                        <td class="table-content__itam p-4">
                            Low (Wood Powder Surface)
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            Moderate (Improved Surface Finish)
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            Moderate (Grade A Plastics)
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            High (Capped Layer)
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span>
                        </td>
                    </tr>
                    <tr scop="row">
                        <td class="table-content__itam p-4">Scratch Resistance</td>
                        <td class="table-content__itam p-4">
                            Moderate (Sanded Finish, Easily Repaired)
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            High (Stronger Surface Finish)
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span><span class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            Moderate
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            Low (Thin Plastic Layer)
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span>
                        </td>
                    </tr>
                    <tr scop="row">
                        <td class="table-content__itam p-4">Fade Resistance</td>
                        <td class="table-content__itam p-4">
                            Low (Depending On Colour)
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            High (Improved For 2023)
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span><span class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            Mid Resistance
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            High (Minimal Colour Reduction)
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span>
                        </td>
                    </tr>
                    <tr scop="row">
                        <td class="table-content__itam p-4">Installation</td>
                        <td class="table-content__itam p-4">
                            Clips With 300mm Joist Centre
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            Clips With 300mm Joist Centre
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            Clips With Joist Centre 300mm
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span>
                        </td>
                        <td class="table-content__itam p-4">
                            Clips With Joist Centre 300mm
                            <br /><span class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span><span class="table-check">✓</span><span
                                class="table-check">✓</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</section>
<!-- table-content end -->
<!-- tips start -->
<section class="padding-common tips">
    <div class="container tips__inner">
        <div class="col-md-8 mx-auto text-center mb-3 tips__header">
            <h2 class="heading mb-3"> Tips for Composite
                <span class="heading--span"> Decking Installation</span>
            </h2>
            <p class="para">
                <a href="https://ultradecking.co.uk/guide/installing-composite-decking/">Installing composite decking
                    boards</a> in your garden is simple and quick. First of all, it’s important to remember to purchase
                all the approved decking accessories and materials required to complete your new project. For all
                decking accessories, please visit our accessories page.
            </p>
        </div>
        <div class="row align-items-center tip-row">
            <div class="col-md-6 tip-column">
                <div class="tip-content">
                    <h3 class="heading-h3 mb-3 tip__list-heading">
                        When installing your new decking, there are some key
                        <span class="heading--span">Points to Remember. </span>
                    </h3>

                    <ul class="installation__lists tip-lists">
                        <li class="installation__list installation__list--tip tip-list">
                            Expansion – All composite decking will expand due to either thermal expansion or moisture
                            absorption. It’s important you leave a 3mm gap side to side and a 6mm gap end to end.
                        </li>
                        <li class="installation__list installation__list--tip tip-list">
                            Joist Spacing – Joist centres should be spaced at 300mm for residential and 200mm for
                            commercial use.
                        </li>
                        <li class="installation__list installation__list--tip tip-list">
                            Airflow & Drainage – the decking area should not hold water and must drain water easily.
                            Increase the gradient and test during and after installation.
                        </li>
                        <li class="installation__list installation__list--tip tip-list">
                            Still unsure watch our video below.
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-6 tip-column">

                <div class="position-relative benefits__video-container benefits__video-container--tip-video">
                    <iframe class="position-absolute benefits__iframe" title="UD Projects"
                        src="https://player.vimeo.com/video/489300928?dnt=1&amp;app_id=122963"
                        ></iframe>
                    <div class="position-absolute benefits__video-play js-play">
                        <div class="benefits__play-inner"><i class="fa-solid fa-play"></i> </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- tips end -->
<!-- testimonial start -->
<section class="padding-common bg-secondary testimonial">
    <div class="container testimonial__inner">
    </div>
</section>
<!-- testimonial end -->
<!-- faq-sec  start -->
<section class="padding-common faq-sec">
    <div class="container faq-sec__inner ">
        <div class="col-md-10 mx-auto mb-5 text-center faq-sec__content">
            <h2 class="heading mb-2"> FAQ's </h2>
            <p class="para"> Common questions our customers ask us about our products range </p>
        </div>
        <div class="col-md-10 mx-auto faq-sec_toggle">
            <div class="faq-sec_accodion">
                <div class="faq-sec_header js-accodion">
                    <span class="faq-sec__title">
                        How much does it cost to fit composite decking per m2?
                    </span>
                    <span class="faq-sec__icon">
                        <i class="fa-solid fa-plus"></i>
                    </span>
                </div>
                <div class="faq-sec__accodion-content">
                    <p>Composite decking boards by Ultra Decking are usually priced between £19.99 – £26.99 per 3.6m
                        board. For an accurate quote for your square meterage, please give us a call on <a
                            href="tel:01925 943011">01925 943011</a>.</p>
                </div>
            </div>
            <div class="faq-sec_accodion">
                <div class="faq-sec_header js-accodion">
                    <span class="faq-sec__title">
                        How much does it cost to fit composite decking per m2?
                    </span>
                    <span class="faq-sec__icon">
                        <i class="fa-solid fa-plus"></i>
                    </span>
                </div>
                <div class="faq-sec__accodion-content">
                    <p>Composite decking boards by Ultra Decking are usually priced between £19.99 – £26.99 per 3.6m
                        board. For an accurate quote for your square meterage, please give us a call on <a
                            href="tel:01925 943011">01925 943011</a>.</p>
                </div>
            </div>
            <div class="faq-sec_accodion">
                <div class="faq-sec_header js-accodion">
                    <span class="faq-sec__title">
                        How much does it cost to fit composite decking per m2?
                    </span>
                    <span class="faq-sec__icon">
                        <i class="fa-solid fa-plus"></i>
                    </span>
                </div>
                <div class="faq-sec__accodion-content">
                    <p>Composite decking boards by Ultra Decking are usually priced between £19.99 – £26.99 per 3.6m
                        board. For an accurate quote for your square meterage, please give us a call on <a
                            href="tel:01925 943011">01925 943011</a>.</p>
                </div>
            </div>
            <div class="faq-sec_accodion">
                <div class="faq-sec_header js-accodion">
                    <span class="faq-sec__title">
                        How much does it cost to fit composite decking per m2?
                    </span>
                    <span class="faq-sec__icon">
                        <i class="fa-solid fa-plus"></i>
                    </span>
                </div>
                <div class="faq-sec__accodion-content">
                    <p>Composite decking boards by Ultra Decking are usually priced between £19.99 – £26.99 per 3.6m
                        board. For an accurate quote for your square meterage, please give us a call on <a
                            href="tel:01925 943011">01925 943011</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq-sec end -->
 
<?php get_footer();?>
