<?php
/*
Template Name:articles
*/
get_header();

$theme_url=get_template_directory_uri();
?>

<style>
.catpage a {
    color: inherit;
}

.catpage__filter {
    display: flex;
    gap: 20px;
    padding: 15px 0;
    border-top: 1px solid var(--uk-main);
    border-bottom: 1px solid var(--uk-main);
    align-items: center;
    justify-content: center;
    font-size: large;
    color: var(--uk-heading);
    font-weight: 500;
}

.catpage__items {
    display: flex;
    list-style: none;
    gap: 25px;
}

.catpage__link {
    display: block;
    color: inherit;
    padding: 5px;
}

.catpage__item--active .catpage__link,
.catpage__label {
    color: var(--uk-main);
}
.tip-content--guide{
    margin-bottom:30px;
}
.guide-sec__image {
    min-height: 220px;
    background-size: cover;
    background-position: center;
}

.guide-sec__link {
    border-radius: 8px;
    background: #fff;
    border: 1px solid #E8EBEC;
    overflow: hidden;
    box-shadow: 0 4px 24px rgba(0, 0, 0, .08);
}

.guide-sec__heading {
    font-size: 1.125rem;
    line-height: 28px;
}

@media only screen and (max-width:1399px) and (min-width:1200px) {
    .catpage__filter {
        font-size: 100%;
    }
}

@media only screen and (max-width:1199px) and (min-width:992px) {
    .heading-inner {
        font-size: 2rem;
    }
    .catpage__filter, .guide-sec__heading {
        font-size: 100%;
    }
    .catpage__items{
        gap:6px;
    }
}

@media only screen and (max-width:991px) and (min-width:601px) {
    .heading-inner {
        font-size: 2rem;
    }
    .catpage__filter, .guide-sec__heading {
        font-size: 100%;
    }
    .catpage__filter {
        align-items: start;
    }
    .catpage__label {
        padding-top: 11px;
    }
    .catpage__items {
        display: block;
        width: 64%;
        border: 1px solid #c7c7c7;
        padding: 10px 0;
        background: url(../assets/img/chevron-down.png) 98% 22px no-repeat #fcfcfc;
    }
    
    .catpage__item:not(.catpage__item--active) {
        position: absolute;
        top: -555%;
        line-height: 20px;

    }
    .catpage__items--active .catpage__item {
        position: relative;
        top: auto;
    }
    .catpage__link{
        font-size:80%;
        padding:0 10px;
        display: inline;
    }
    
}

@media only screen and (max-width:600px) {

    .heading-inner {
        font-size: 2rem;
    }
    .catpage__filter, .guide-sec__heading {
        font-size: 100%;
    }
    .catpage__filter {
        align-items: start;
    }
    .catpage__label {
        padding-top: 11px;
    }
    .catpage__items {
        display: block;
        width: 64%;
        border: 1px solid #c7c7c7;
        padding: 10px 0;
        background: url(../assets/img/chevron-down.png) 98% 22px no-repeat #fcfcfc;
    }
    
    .catpage__item:not(.catpage__item--active) {
        position: absolute;
        top: -555%;
        line-height: 20px;

    }
    .catpage__items--active .catpage__item {
        position: relative;
        top: auto;
    }
    .catpage__link{
        font-size:80%;
        padding:0 10px;
        display: inline;
    }
}
</style>

<!-- banner-common start -->
<section class="position-relative banner-common"
    style="background-image:url('<?php echo $theme_url;?>/assests/img/GreyWood.jpg')">
    <div class="overlay"></div>
    <div class="container banner-common__inner">
        <div class="d-flex justify-content-center flex-column align-items-center
             position-relative banner-common__blocks">
            <h1 class="text-uppercase text-white heading-inner
              banner-common__title">
              OUR ARTICLES
            </h1>
        </div>
    </div>
</section>
<!-- banner-common end -->

<!-- tips start -->
<section class="padding-common pb-0 tips catpage">
    <div class="container tips__inner">
        <div class="col-md-12 text-center pb-4 tips__header">
            <h1 class="heading-inner"> Ultra Decking
                <span class="heading--span"> Articles. </span>
            </h1>
        </div>
        <div class="catpage__filter">
            <span class="catpage__label"> Categories :</span>
            <ul class="catpage__items">
                <li class="catpage__item catpage__item--active">
                    <a class="catpage__link" href="#">All </a>
                </li>
                <li class="catpage__item">
                    <a class="catpage__link" href="#">Composite Fencing</a>
                </li>
                <li class="catpage__item">
                    <a class="catpage__link" href="#">Decking Ideas</a>
                </li>
                <li class="catpage__item">
                    <a class="catpage__link" href="#">How to</a>
                </li>
                <li class="catpage__item">
                    <a class="catpage__link" href="#">Installation</a>
                </li>
                <li class="catpage__item">
                    <a class="catpage__link" href="#">Learn Decking</a>
                </li>
                <li class="catpage__item">
                    <a class="catpage__link" href="#">Maintenance</a>
                </li>
                <li class="catpage__item">
                    <a class="catpage__link" href="#">Timber Decking</a>
                </li>
                </li>
            </ul>
        </div>
        <div class="catpage__posts row my-5">
           
            <div class="col-lg-3 col-md-6">
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
            <div class="col-lg-3 col-md-6">
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
            <div class="col-lg-3 col-md-6">
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
            <div class="col-lg-3 col-md-6">
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
            <div class="col-lg-3 col-md-6">
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
            <div class="col-lg-3 col-md-6">
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
            <div class="col-lg-3 col-md-6">
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
            <div class="col-lg-3 col-md-6">
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

<script>
jQuery(document).ready(function($){
    $(".catpage__items").on("click", function() {
            $(this).toggleClass("catpage__items--active");
        });
})
</script>

<?php get_footer();?>
