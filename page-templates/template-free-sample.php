<?php
/*
Template Name:Free Form
*/
get_header();

$theme_url=get_template_directory_uri();
?>

<style>
.sample-form__collection {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: #fcfcfc;
    border: 2px dashed #e4e4e4;
    height: 328px;
    margin-bottom: 30px;
    cursor: pointer;
    text-align: center;
    position: relative;
}

.sample-form__option {
    visibility: hidden;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
}

.sample-form__collection--selected .sample-form__option {
    visibility: visible;
}

.sample-form__title {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 20px 15px;
    background-color: rgba(0, 0, 0, .35);
    font-weight: 500;
    text-align: center;
    color: #fff;
}

.sample-form__delete {
    position: absolute;
    top: 0;
    right: 0;
    background-color: red;
    padding: 5px 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    line-height: 1;
    color: #fff;
    font-size: 25px;
}

.sample-form__main {
    padding: 50px 25px;
}

.contact-home__form-control,
.contact-home__form-control::placeholder,
.contact-home__address-items {
    color: var(--uk-gary-para) !important;
    border-color: var(--uk-gary-para);
}

.contact-home__address-items--bg {
    border: 1px solid var(--uk-main);
    padding: 1.25rem;
    gap: 0;
}


@media only screen and (max-width:1399px) and (min-width:1200px) {
    .sample-form__collection{
        height:270px;
    }
}

@media only screen and (max-width:1199px) and (min-width:992px) {

    .sample-form__collection{
        height:220px;
    }
}

@media only screen and (max-width:991px) and (min-width:601px) {
    .heading--f24 {
    font-size: 1.2rem;
}
.sample-form__collection {
    height: 175px;
}
.sample-form__placeholder {
    width: auto;
}
.sample-form__title {
    font-size: 0.857rem;
    padding: 12px 6px;
}
}

@media only screen and (max-width:600px) {
    .heading--f24 {
    font-size: 1.2rem;
}
.sample-form__collection {
    height: 175px;
}
.sample-form__placeholder {
    width: auto;
}
.sample-form__title {
    font-size: 0.857rem;
    padding: 12px 6px;
}

}
</style>

<!-- tips start -->
<section class="padding-common pb-0 tips guide-sec">
    <div class="container tips__inner">
        <div class="col-md-11 mx-auto text-center mb-3 pb-lg-3 tips__header">
            <h1 class="heading-inner"> Order A
                <span class="heading--span"> Free Sample</span>
            </h1>
            <h3 class="heading heading--f24 py-3">
                In total you can select up to <strong> 4 different samples </strong>
            </h3>
            <p class="para">
                Try before you buy with our free sample service, an exciting step on the journey to discovering your
                new dream floor. <br /> Our extra-large samples make accurately colour matching easy as you can mix
                & match to complement your <br /> décor. Take the opportunity to see your chosen floor in natural
                light and feel the different textures <br /> and finishes available. Helping you find
                “the one” in no time.
            </p>
        </div>
    </div>
</section>
<!-- tips end -->
<!-- tips start -->
<section class="py-3 sample-form">
    <div class="container sample-form__inner">
        <div class="row sample-form__row">
            <div class="col-lg-6">
                <h2 class="heading mb-3">
                    Step 1: Select
                    <span class="heading--span"> Your Samples</span>
                </h2>
                <div class="row">
                    <div class="col-6">
                        <div class="sample-form__collection sample-form__collection--first">
                            <div class="sample-form__option"
                                style="background-image:url('<?php echo $theme_url;?>/assests/img/be-inspried-1.jpg')">
                                <div class="sample-form__delete">×</div>
                                <div class="sample-form__title">Chocolate Dark Brown Decking Board</div>
                            </div>
                            <img class="sample-form__placeholder"
                             src="<?php echo $theme_url;?>/assests/img/gallery.png" alt="placeholder">
                            <p class="para para--normal">+ Click Here To Add Your First Sample</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="sample-form__collection">
                            <div class="sample-form__option"
                                style="background-image:url('<?php echo $theme_url;?>/assests/img/be-inspried-1.jpg')">
                                <div class="sample-form__delete">×</div>
                                <div class="sample-form__title">Chocolate Dark Brown Decking Board</div>
                            </div>
                            <img class="sample-form__placeholder"
                             src="<?php echo $theme_url;?>/assests/img/gallery.png" alt="placeholder">
                            <p class="para para--normal">+ Click Here To Add Your First Sample</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="sample-form__collection sample-form__collection--selected">
                            <div class="sample-form__option"
                                style="background-image:url('<?php echo $theme_url;?>/assests/img/be-inspried-1.jpg')">
                                <div class="sample-form__delete">×</div>
                                <div class="sample-form__title">Chocolate Dark Brown Decking Board</div>
                            </div>
                            <img class="sample-form__placeholder"
                             src="<?php echo $theme_url;?>/assests/img/gallery.png" alt="placeholder">
                            <p class="para para--normal">+ Click Here To Add Your First Sample</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="sample-form__collection">
                            <div class="sample-form__option"
                                style="background-image:url('<?php echo $theme_url;?>/assests/img/be-inspried-1.jpg')">
                                <div class="sample-form__delete">×</div>
                                <div class="sample-form__title">Chocolate Dark Brown Decking Board</div>
                            </div>
                            <img class="sample-form__placeholder"
                             src="<?php echo $theme_url;?>/assests/img/gallery.png" alt="placeholder">
                            <p class="para para--normal">+ Click Here To Add Your First Sample</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="heading mb-3">
                    Step 2: Enter
                    <span class="heading--span"> Your Details</span>
                </h2>
                <div class="row">
                    <div class="col-12">
                        <div class="bg-secondary sample-form__main">
                            <h3 class="heading heading--f30 text-center"> Online Free Sample</h3>
                            <p class="para text-center mb-4">Where & to whom should we send your sample?</p>
                            <div class="contact-home__form form-outer">
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
                                        <div class="col-12">
                                            <div class="contact-home__form-group">
                                                <input type="text" name="streets" class="contact-home__form-control"
                                                    placeholder="Street Address" require value="" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="contact-home__form-group">
                                                <input type="text" name="city" class="contact-home__form-control"
                                                    placeholder="Town / City" require value="" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="contact-home__form-group">
                                                <input type="text" name="country" class="contact-home__form-control"
                                                    placeholder="Country" require value="" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="contact-home__form-group">
                                                <input type="text" name="postel code" class="contact-home__form-control"
                                                    placeholder="Postel Code" require value="" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="contact-home__form-group">
                                                <input type="date" name="date" class="contact-home__form-control"
                                                    placeholder="dd-mm-yyyy" require value="" />
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

                </div>
            </div>
        </div>
    </div>
</section>
<!-- tips end -->

<?php get_footer();?>
