<?php
/*
Template Name:Guide
*/
get_header();

$theme_url=get_template_directory_uri();
?>

<style>
    .guide-sec__image {
        min-height: 220px;
        background-size: cover;
        background-position: center;
    }
    .guide-sec__link{
        border-radius: 8px;
        background: #fff;
        border:1px solid #E8EBEC;
        overflow: hidden;
    }
    .guide-sec__heading {
        font-size: 1.125rem;
        line-height: 28px;
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

<!-- banner-common start -->
<section class="position-relative banner-common"
    style="background-image:url('<?php echo $theme_url;?>/assests/img/GreyWood.jpg')">
    <div class="overlay"></div>
    <div class="container banner-common__inner">
        <div class="d-flex justify-content-center align-items-center
             position-relative banner-common__blocks">
            <h1 class="text-uppercase text-white heading-inner
              banner-common__title">
                Guide
            </h1>
        </div>
    </div>
</section>
<!-- banner-common end -->


<!-- tips start -->
<section class="padding-common tips guide-sec">
    <div class="container tips__inner">
        <div class="col-md-8 mx-auto text-center mb-3 pb-lg-3 tips__header">
            <h2 class="heading mb-3"> Composite Decking
                <span class="heading--span"> Information</span>
            </h2>
        </div>
        <div class="row align-items-center guide-sec__row">
            <div class="col-lg-3 col-md-6 tip-column">
                <div class="tip-content d-flex flex-column tip-content--guide">
                    <a class="guide-sec__link" href="#">
                        <div class="guide-sec__image"
                            style="background-image:url('<?php echo $theme_url;?>/assests/img/GreyWood.jpg');">
                        </div>
                        <div class="guide-sec__content">
                            <h4 class="guide-sec__heading p-4 text-center">
                                Ultra Decking’s Collections Of Products
                            </h4>
                        </div>
                     </a>
                 </div>
             </div>
            <div class="col-lg-3 col-md-6 tip-column">
                <div class="tip-content d-flex flex-column tip-content--guide">
                    <a class="guide-sec__link" href="#">
                        <div class="guide-sec__image"
                            style="background-image:url('<?php echo $theme_url;?>/assests/img/GreyWood.jpg');">
                        </div>
                        <div class="guide-sec__content">
                            <h4 class="guide-sec__heading p-4 text-center">
                                Ultra Decking’s Collections Of Products
                            </h4>
                        </div>
                     </a>
                    </div>
                </div>
           
            <div class="col-lg-3 col-md-6 tip-column">
                <div class="tip-content d-flex flex-column tip-content--guide">
                    <a class="guide-sec__link" href="#">
                        <div class="guide-sec__image"
                            style="background-image:url('<?php echo $theme_url;?>/assests/img/GreyWood.jpg');">
                        </div>
                        <div class="guide-sec__content">
                            <h4 class="guide-sec__heading p-4 text-center">
                                Ultra Decking’s Collections Of Products
                            </h4>
                        </div>
                    </a>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 tip-column">
                <div class="tip-content d-flex flex-column tip-content--guide">
                    <a class="guide-sec__link" href="#">
                        <div class="guide-sec__image"
                            style="background-image:url('<?php echo $theme_url;?>/assests/img/GreyWood.jpg');">
                        </div>
                        <div class="guide-sec__content">
                            <h4 class="guide-sec__heading p-4 text-center">
                                Ultra Decking’s Collections Of Products
                            </h4>
                        </div>
                    </a>
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
 
 
<?php get_footer();?>
