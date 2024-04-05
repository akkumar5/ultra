<?php
/*
Template Name:Contact
*/
get_header();

$theme_url=get_template_directory_uri();
?>

<style>
     .contact-home__row--contact-main .contact-home__form-control,
     .contact-home__row--contact-main .contact-home__form-control::placeholder,
     .contact-home__row--contact-main .contact-home__address-items  {
            color: var(--uk-gary-para) !important;
            border-color:var(--uk-gary-para);
        }
        .contact-home__row--contact-main
        .contact-home__address-items--bg {
            border: 1px solid var(--uk-main);
            padding:1.25rem;
            gap:0;
        }

    @media only screen and (max-width:1199px) and (min-width:992px) {
        
    }

    @media only screen and (max-width:991px) and (min-width:601px) {
        
    }

    @media only screen and (max-width:600px) {
        
        
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
               GET IN TOUCH
            </h1>
            <p class="para text-white text-center py-3">
                Get In Touch With Our Team Now If You Have Any Questions About Our Composite Decking Supply.
                Our Team Is Here To Provide Help And Support With Your Composite Decking Planning And Installation.
            </p>
        </div>
    </div>
</section>
<!-- banner-common end -->
<!-- contact form start -->
<section class="padding-common position-relative contact-home">
    <div class="container position-relative contact-home__inner">
        <div class="row contact-home__row contact-home__row--contact-main">
            <div class="col-12 col-lg-7 contact-home__column">
            <h2 class="heading mb-4 text-center contact-home__heading">
                Keep In Touch  <span class="heading--span">With Us</span>
              </h2>
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
        <div class="col-12 col-lg-5 contact-home__column contact-home__column ">
            <div class="d-flex flex-column justify-content-between ps-0
             contact-home__address-items bg-secondary contact-home__address-items--bg">
                <div class="d-flex gap-3 align-items-center bg-white-transparent contact-home__list">
                    <div class="contact-home__image-outer">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="contact-home__content details">
                        <h5 class="details__heading">Phone</h5>
                        <p class="para">01925 943011</p>
                    </div>
                </div>
                <div class="d-flex gap-3 align-items-center bg-white-transparent  contact-home__list">
                    <div class="contact-home__image-outer">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="contact-home__content details">
                        <h5 class="details__heading">Address</h5>
                        <p class="para">
                            Unit 27, Rufford Court, Woolston, Warrington,
                             By Appointment Only WA1 4RF 9.00am – 5.30pm, Closed On Saturday And Sunday
                        </p>
                    </div>
                </div>
                <div class="d-flex gap-3 align-items-center bg-white-transparent contact-home__list">
                    <div class="contact-home__image-outer">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="contact-home__content details">
                        <h5 class="details__heading">Email</h5>
                        <p class="para">info@ultradecking.co.uk</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>
<!-- contact form end -->
 <!-- contact map start -->
<section class="position-relative map">
    <iframe class="map__iframe" title="Map"
        src="https://www.google.com/maps/embed?
        pb=!1m14!1m8!1m3!1d19029.31116589272!2d-2.527434!3d53.402952!
        3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b01abe3b1445f%3A0xffb96f9147fc0215!
        2s27%20Rufford%20Ct%2C%20Woolston%2C%20Warrington%20WA1%204RF%2C%20UK!
        5e0!3m2!1sen!2sus!4v1712314425367!5m2!1sen!2sus"
         width="100%" height="500"
         style="border:0;">
    </iframe>
</section>
<!-- contact map end -->
<?php get_footer();?>
