<?php
/*
Template Name:Be Inspired
*/
get_header();

$theme_url=get_template_directory_uri();
?>

<style>
    .tips a{
        color:var(--uk-main)
    }
    .guide-sec__image--gallery{
        height: 360px;
        background-size: cover;
        background-position: center;
    }
    .guide-sec__link{
        border-radius: 8px;
        background: #fff;
        border:1px solid #E8EBEC;
        overflow: hidden;
        box-shadow: 0 4px 24px rgba(0,0,0,.08);
    }
  
    .gallery-main .tip-content--guide {
        margin-bottom: 25px;
    }


    @media only screen and (max-width:1199px) and (min-width:992px) {
        .guide-sec__image--gallery {
            height: 230px;
        }
    }

    @media only screen and (max-width:991px) and (min-width:601px) {
        .tip-content--guide {
             
        }

    }

    @media only screen and (max-width:600px) {
        .tip-content--guide {
           
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
                <?php echo the_title();?>
            </h1>
        </div>
    </div>
</section>
<!-- banner-common end -->


<!-- tips start -->
<section class="padding-common pb-0 tips guide-sec">
    <div class="container tips__inner">
        <div class="col-md-11 mx-auto text-center mb-3 pb-lg-3 tips__header">
            <h2 class="heading mb-3">  Welcome To Our
                <span class="heading--span"> Customer Gallery.</span>
            </h2>
            <p class="para">
            Here We Display The Pictures From Satisfied Customers Of Their Purchased Images
             At Home Or Work. Send Us Your Photos To<br>
            <a href="mailto:info@ultradecking.co.uk">info@ultradecking.co.uk</a> With A Short Testimonial
                And If We Use It On Our Gallery We’ll Reward You With A Discount Off Your Next Purchase!
            </p>
        </div>
    </div>
</section>
<!-- tips end -->
<!-- tips start -->
<section class="gallery-main p-3 p-lg-4 guide-sec">
        <div class="row align-items-center guide-sec__row">
            <div class="col-lg-4 col-md-6 tip-column">
                <div class="tip-content d-flex flex-column tip-content--guide">
                    <a class="guide-sec__link" href="#">
                        <div class="guide-sec__image guide-sec__image--gallery"
                            style="background-image:url('<?php echo $theme_url;?>/assests/img/GreyWood.jpg');">
                        </div>
                     </a>
                 </div>
             </div>
            <div class="col-lg-4 col-md-6 tip-column">
                <div class="tip-content d-flex flex-column tip-content--guide">
                    <a class="guide-sec__link" href="#">
                        <div class="guide-sec__image guide-sec__image--gallery"
                            style="background-image:url('<?php echo $theme_url;?>/assests/img/GreyWood.jpg');">
                        </div>
                     </a>
                    </div>
                </div>
           
            <div class="col-lg-4 col-md-6 tip-column">
                <div class="tip-content d-flex flex-column tip-content--guide">
                    <a class="guide-sec__link" href="#">
                        <div class="guide-sec__image guide-sec__image--gallery"
                            style="background-image:url('<?php echo $theme_url;?>/assests/img/GreyWood.jpg');">
                        </div>
                    </a>
                 </div>
             </div>
            <div class="col-lg-4 col-md-6 tip-column">
                <div class="tip-content d-flex flex-column tip-content--guide">
                    <a class="guide-sec__link" href="#">
                        <div class="guide-sec__image guide-sec__image--gallery"
                            style="background-image:url('<?php echo $theme_url;?>/assests/img/GreyWood.jpg');">
                        </div>
                    </a>
                 </div>
             </div>
             <div class="col-lg-4 col-md-6 tip-column">
                <div class="tip-content d-flex flex-column tip-content--guide">
                    <a class="guide-sec__link" href="#">
                        <div class="guide-sec__image guide-sec__image--gallery"
                            style="background-image:url('<?php echo $theme_url;?>/assests/img/GreyWood.jpg');">
                        </div>
                     </a>
                 </div>
             </div>
            <div class="col-lg-4 col-md-6 tip-column">
                <div class="tip-content d-flex flex-column tip-content--guide">
                    <a class="guide-sec__link" href="#">
                        <div class="guide-sec__image guide-sec__image--gallery"
                            style="background-image:url('<?php echo $theme_url;?>/assests/img/GreyWood.jpg');">
                        </div>
                     </a>
                    </div>
                </div>
           
            
            
            </div>
</section>
<!-- tips end -->
 
<?php get_footer();?>
