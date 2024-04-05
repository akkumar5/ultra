<?php /*
Template Name:Single product
*/
get_header();?>
<style>
.selectbox__select {
    flex: 1 1 auto;
    margin: 1.8rem 0 0;
    max-width: 50%;
}

.selectbox__icon {
    position: absolute;
    max-width: 53px;
    top: 50%;
    left: 8px;
    transform: translateY(-50%);
    z-index: 1;
}

.selectbox__delivery {
    width: 100%;
    border: 1px solid #E5E3E3;
    border-radius: 5px;
    padding: 1.5rem 1.5rem 1.5rem 4.5rem;
    background-color: #f4f4f4;
    font-size: 0.875rem;
    position: relative;
    cursor: pointer;
    appearance: none;
    -webkit-appearance: none;
    background-image: url(https://ultradecking.co.uk/wp-content/themes/ultra-decking/assets/img/chevron-down.png);
    background-repeat: no-repeat;
    background-position: center right 20px;
    background-size: 13px;
    color: #808080;
}

.recommended__header {
    border-top: 1px dashed #B8B8B8;
}

.product-item__regular-price {
    font-size: 20px;
    font-weight: 700;
    color: #575757;
}

.product-item-btn--recommended {
    max-width: unset;
}

/* Global */
.woo-qty {
    max-width: 155px;
    margin: 25px auto;
    overflow: hidden;
    border: 1px solid var(--uk-main);
    border-radius: 4px;
    background: #F2FBFF;
    display: flex;
}

.woo-qty__input {
    width: 40px;
    appearance: none;
    -webkit-appearance: none;
    border: 0;
    height: 33px;
    font-weight: 600;
    font-size: 1.5rem;
    color: var(--uk-main);
    cursor: pointer;
    background: #F2FBFF;
}

.woo-qty__number {
    width: 73px;
    height: 33px;
    border: 0;
    border-left: 1px solid var(--uk-main);
    border-right: 1px solid var(--uk-main);
    padding: 4px;
    font-size: 18px;
    text-align: center;
}

.installation__lists--features {
    display: flex;
    flex-wrap: wrap;
    column-gap: 80px;
    row-gap: 5px;
}

.installation__list--feature {
    width: 45%;
    line-height: 28px;
}

.pspecifications__table {
    display: flex;
    flex-wrap: wrap;
    padding-top: 14px;
}

.pspecifications__box {
    display: flex;
    justify-content: space-between;
    width: 50%;
    border: 0.5px solid #E5E3E3;
    padding: 1.3rem 3rem;
    align-items: center;
}

.pspecifications__label {
    font-weight: 600;
}

.pdf-download__content {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.pdf-download__box {
    flex: 1 1 auto;
}

.pdf-download__anchor {
    display: flex;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
    background: #F4F4F4;
    border: 1px solid #E5E3E3;
    border-radius: 5px;
    padding: 0.9rem;

}

.pdf-download__title {
    font-weight: 500;
}

.pdf-download__box--sec-features {
    flex: 1 1 49%;
}

.pdf-download__anchor--features {
    padding: 1.5rem;
    border-radius: 8px;
    background: #fff;
    border-color: #E8EBEC;
}

.sec-features__main {
    padding-top: 26px;
    justify-content: space-between;
}

.sec-features__outer {
    width: 120px;
    height: 120px;
    background: #EBF4FB;
    border-radius: 50%;
    overflow: hidden;
}

.sec-features__heading {
    flex: 1;
}

.sec-features__title {
    margin-bottom: 10px;
}

.del-options__block {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.del-options__image {
    max-width: 70px;
}

.del-options__text {
    flex: 1;
}

.delivery-info__heading {
    font-size: 1.4rem;
    color: var(--uk-heading);
}

.del-options__title {
    font-size: 1.125rem;
    color: var(--uk-heading);
}

.del-table__info {
    width: 100%;
    border-collapse: collapse;
}

.del-table__outer {
    overflow-x: auto;
    color: var(--uk-gary-para);
}

.delivery-info__left {
    padding-right: 4rem;
    border-right: 1px solid #DADADA;
}

.del-table__cell {
    text-align: left;
    padding: 1.25rem 0;
    border-bottom: 1px solid #DADADA;
    vertical-align: top;
}

.del-table__cell--head {
    font-size: 1.125rem;
    font-weight: 400;
}

.del-table__image {
    max-width: 80%;
}

@media only screen and (max-width:1199px) and (min-width:992px) {
    .pdf-download__box {
        max-width: 48%;
    }

    .pdf-download__image-outer {
        max-width: 33px;
    }

    .pdf-download__title {
        flex: 1;
    }

    .sec-features__heading p,
    .pdf-download__box {
        font-size: 94%;
    }

    .sec-features__outer {
        width: 80px;
        height: 80px;
    }

    /* .delivery-info__heading {
        font-size: 1.25rem;
    }
    .del-options__title {
         font-size: 1rem;
    } */
    .delivery-info__left {
        padding-right: 18px;
    }

    .delivery-info_row {
        font-size: 88%;
    }

    .delivery-info__heading {
        font-size: large;
    }

    .del-options__title {
        font-size: medium;
    }

    .del-options__text {
        font-size: inherit;
        line-height: normal;
    }

    .del-table__cell {
        padding: 1rem 0.5rem;
    }

    .del-table__cell--head {
        font-size: medium;
    }
}


@media only screen and (max-width:991px) {
    .product-details_summry {
        padding: 30px 0;
    }

    .installation__list--feature {
        width: 44%;
    }

    .pspecifications__box {
        padding: 1rem;
        font-size: 88%;
    }

    .pdf-download__box {
        max-width: 31%;
    }

    .pdf-download__box--sec-features {
        max-width: 48%;
    }

    .pdf-download__image-outer {
        max-width: 33px;
    }

    .pdf-download__title {
        flex: 1;
    }

    .sec-features__heading p,
    .pdf-download__box {
        font-size: 94%;
    }

    .sec-features__outer {
        width: 80px;
        height: 80px;
    }

    .del-options {
        display: none;
    }

    .delivery-info_row {
        font-size: 88%;
    }

    .delivery-info__heading {
        font-size: large;
    }

    .del-options__title {
        font-size: medium;
    }

    .del-options__text {
        font-size: inherit;
        line-height: normal;
    }

    .del-table__cell {
        padding: 1rem 0.5rem;
    }

    .del-table__cell--head {
        font-size: medium;
    }

    .benefits__video {
        padding-top: 0 !important;
    }

}

@media only screen and (max-width:767px) {
    .selectbox {
        flex-direction: column;
        align-items: stretch !important;
        margin: 20px 0 0;
    }

    .selectbox__select {
        max-width: 100%;
        margin: 0;
    }

    .selectbox__icon {
        width: 35px;
    }

    .selectbox__delivery {
        padding: 1.2rem 1.2rem 1rem 3.5rem;

    }

    .installation__list--feature,
    .pspecifications__box {
        width: 100%;
    }

    .pdf-download__box {
        max-width: 100%;
    }

    .pdf-download__image-outer {
        max-width: 33px;
    }

    .pdf-download__title {
        flex: 1;
    }

    .sec-features__heading p,
    .pdf-download__box {
        font-size: 94%;
    }

    .sec-features__outer {
        width: 80px;
        height: 80px;
    }

    .pdf-download__box--sec-features {
        max-width: max-content;
    }

    .del-options {
        display: none;
    }

    .delivery-info_row {
        font-size: 88%;
    }

    .delivery-info__heading {
        font-size: large;
    }

    .del-options__title {
        font-size: medium;
    }

    .del-options__text {
        font-size: inherit;
        line-height: normal;
    }

    .del-table__cell {
        min-width: 53px;
    }

    .del-table__cell--head {
        font-size: medium;
    }

}
</style>


<section class="position-relative banner-common"
    style="background-image:url('https://ultradecking.co.uk/wp-content/uploads/2023/01/Composite-Decking-In-Grey-With-Contrast-Boarder-Composite-Decking-Ideas.jpg')">
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

<section class="padding-common product-details">
    <div class="container product-details__inner">
        <div class="row product-details__row">
            <div class="col-lg-6 product-details__column">
                <div class="product-details__box-image pfeatured">
                    <div class="pfeatured__image-outer">
                        <img class="pfeatured__large-img"
                            src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Chocolate-Dark-Brown-Composite-Decking-Board-Ultra-Decking.jpg"
                            alt="">
                    </div>
                    <div class="product-details__dropdown d-flex align-items-center
                         justify-content-between gap-3 selectbox">
                        <div class="selectbox__select  position-relative">
                            <img class="selectbox__icon"
                                src="<?php echo get_template_directory_uri();?>/assests/image/svg/delivery-truck.svg"
                                alt="truck">
                            <select class="selectbox__delivery">
                                <optgroup label="Delivery">
                                    <option value="in-stock">In Stock</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="selectbox__select position-relative">
                            <img class="selectbox__icon"
                                src="<?php echo get_template_directory_uri();?>/assests/image/svg/return.svg"
                                alt="truck">
                            <select class="selectbox__delivery">
                                <optgroup label="Return">
                                    <option value="10-year-limited-warranty">10 -Year Limited Warranty</option>
                                    <option value="ultra-decking-boards-will-not-split">Ultra Decking boards will not
                                        split</option>
                                    <option value="ultra-decking-boards-will-not-rot">Ultra Decking boards will not rot
                                    </option>
                                    <option value="ultra-decking-boards-will-not-splinter">Ultra Decking boards will not
                                        splinter</option>
                                    <option value="will-not-suffer-structural-damage-from-termites">Will not suffer
                                        structural damage from termites</option>
                                    <option value="will-not-suffer-structural-damage-from-fugal-decay">Will not suffer
                                        structural damage from fugal decay</option>
                                    </opgroup>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 product-details__column">
                <div class="product-details_summry">
                    <h2> Title Here </h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="recommended pb-3">
    <div class="container recommended__inner">
        <div class="py-5 recommended__header">
            <h2 class="heading  text-center recommended__title">
                Recommended <span class="heading--span"> Accessories </span>
            </h2>
        </div>
        <div class="row recommended__slides js-proslider">
            <div class="col-3 recommended__product-box product-item">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                                justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#">
                            <img class="product-item__image"
                                src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Teak-Composite-Decking-Mixed-Colours-Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex flex-column position-absolute bottom-0 pb-3 pe-3">
                            <span class="product-item__offer product-item__offer--price  p-1 px-2">
                                <del class="product-item__regular-price">£26.60 <del>
                            </span>
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3 pb-0" href="#">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                        <div class="product-item__qty woo-qty">
                            <input class="minus woo-qty__input" type="button" value="-">
                            <input type="number" class="woo-qty__text woo-qty__number" value="" min="1">
                            <input class="plus woo-qty__input" type="button" value="+">
                        </div>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                                product-item-btn product-item-btn--recommended">
                            Add to Cart
                        </button>

                    </div>
                </div>
            </div>
            <div class="col-3 recommended__product-box product-item">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                                justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#">
                            <img class="product-item__image"
                                src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Teak-Composite-Decking-Mixed-Colours-Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex flex-column position-absolute bottom-0 pb-3 pe-3">
                            <span class="product-item__offer product-item__offer--price  p-1 px-2">
                                <del class="product-item__regular-price">£26.60 <del>
                            </span>
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3 pb-0" href="#">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                        <div class="product-item__qty woo-qty">
                            <input class="minus woo-qty__input" type="button" value="-">
                            <input type="number" class="woo-qty__text woo-qty__number" value="" min="1">
                            <input class="plus woo-qty__input" type="button" value="+">
                        </div>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                                product-item-btn product-item-btn--recommended">
                            Add to Cart
                        </button>

                    </div>
                </div>
            </div>
            <div class="col-3 recommended__product-box product-item">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                                justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#">
                            <img class="product-item__image"
                                src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Teak-Composite-Decking-Mixed-Colours-Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex flex-column position-absolute bottom-0 pb-3 pe-3">
                            <span class="product-item__offer product-item__offer--price  p-1 px-2">
                                <del class="product-item__regular-price">£26.60 <del>
                            </span>
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3 pb-0" href="#">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                        <div class="product-item__qty woo-qty">
                            <input class="minus woo-qty__input" type="button" value="-">
                            <input type="number" class="woo-qty__text woo-qty__number" value="" min="1">
                            <input class="plus woo-qty__input" type="button" value="+">
                        </div>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                                product-item-btn product-item-btn--recommended">
                            Add to Cart
                        </button>

                    </div>
                </div>
            </div>
            <div class="col-3 recommended__product-box product-item">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                                justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#">
                            <img class="product-item__image"
                                src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                                alt="img-slide">
                            <img class="position-absolute product-item__hover-image"
                                src="https://ultradecking.co.uk/wp-content/uploads/2019/02/Teak-Composite-Decking-Mixed-Colours-Anti-Fade-Stain-Slip.jpg"
                                alt="img-slide">
                        </a>
                        <div class="d-flex flex-column position-absolute bottom-0 pb-3 pe-3">
                            <span class="product-item__offer product-item__offer--price  p-1 px-2">
                                <del class="product-item__regular-price">£26.60 <del>
                            </span>
                            <span class="product-item__offer text-uppercase text-white bg-primary p-1 px-2">
                                12.9% OFF
                            </span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <a class="product-item__title d-block text-center p-3 pb-0" href="#">
                            Teak Capped Decking Board Mixed Colour
                        </a>
                        <div class="product-item__qty woo-qty">
                            <input class="minus woo-qty__input" type="button" value="-">
                            <input type="number" class="woo-qty__text woo-qty__number" value="" min="1">
                            <input class="plus woo-qty__input" type="button" value="+">
                        </div>
                    </div>
                    <div class="btn-group d-flex w-100 justify-content-between align-items-center gap-3" role="group">
                        <button type="button" class="btn btn-primary   text-uppercase
                                product-item-btn product-item-btn--recommended">
                            Add to Cart
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="padding-common mt-5 bg-secondary installation">
    <div class="container installation__inner">
        <div class="row align-items-center installation__row">
            <div class="col-lg-12 installation__column">
                <h2 class="heading mb-3 text-center installation__heading">
                    Key
                    <span class="heading--span"> Features </span>
                </h2>

                <ul class="installation__lists installation__lists--features">
                    <li class="installation__list installation__list--feature">
                        A reversible board providing a realistic wood look without the price
                    </li>
                    <li class="installation__list installation__list--feature">
                        100% waterproof making it the perfect choice for your bathroom
                    </li>
                    <li class="installation__list installation__list--feature">
                        This board has been specially engineered for residential use with all the benefits
                        of anti-slip properties, no cracking, splintering or rotting of the original
                        Ultra Decking line.
                    </li>
                    <li class="installation__list installation__list--feature">
                        DIY friendly, and with 1mm thick attached underlay for a quick installation
                    </li>
                    <li class="installation__list installation__list--feature">
                        Our board has 2 different sides one with the latest wide groove finish and one with
                        a modern thin groove pattern.
                    </li>
                    <li class="installation__list installation__list--feature">
                        Complete with a 12 year residential warranty, for your peace of mind
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>

<section class="padding-common product-description">
    <div class="container product-description__inner">
        <div class="col-11 mx-auto product-description__content  text-center">
            <h2 class="heading mb-4">
                Product
                <span class="heading--span"> Description </span>
            </h2>

            <p class="para mb-3">
                Ultra Decking are proud to introduce their new and improved home choice collection
                in slate grey, Our new slate grey decking board comes with a 10-year guarantee* and available
                in 2.4m/3.6m x 150mm x 25mm with reversible slip resistant grooves.
            </p>
            <p class="para mb-3">
                Rated by our customers as the smart choice when choosing a low maintenance
                decking solution that is a prefect blend of quality and affordability.
            </p>
            <p class="para mb-3">
                Our Home Choice slate grey composite decking has been design and manufactured with home owners in mind.
                This board is produced with a 4 square hollow core, reducing materials required but ensuring maximum
                strength for residential properties and a light weight option when installing.
            </p>
            <p class="para mb-3">
                Measuring from 2.4 metres or 3.6metres in length, this board is one of our popular selling products
                with its in-season colour of anthracite grey and a price that matches no other in the sector to date.
            </p>
        </div>
    </div>
</section>

<section class="padding-common bg-primary pspecifications">
    <div class="container pspecifications__inner">
        <div class="pspecifications__content text-white">
            <h2 class="heading text-center mb-4">
                Product Details and
                <span class="heading--span text-white"> Specifications </span>
            </h2>
            <div class="pspecifications__table">
                <div class="pspecifications__box">
                    <span class="pspecifications__label">
                        Length
                    </span>
                    <span class="pspecifications__value">
                        2.4m/3.6m long.
                    </span>
                </div>
                <div class="pspecifications__box">
                    <span class="pspecifications__label">
                        Surface Finish
                    </span>
                    <span class="pspecifications__value">
                        Reversible Grooved.
                    </span>
                </div>
                <div class="pspecifications__box">
                    <span class="pspecifications__label">
                        Width
                    </span>
                    <span class="pspecifications__value">
                        150mm wide.
                    </span>
                </div>
                <div class="pspecifications__box">
                    <span class="pspecifications__label">
                        Installation
                    </span>
                    <span class="pspecifications__value">
                        Grooved (requires decking clips)
                    </span>
                </div>
            </div>


        </div>
    </div>
</section>

<section class="padding-common  pdf-download">
    <div class="container pdf-download__inner">
        <div class="pdf-download__content">
            <div class="pdf-download__box">
                <a class="pdf-download__anchor" href="">
                    <span class="pdf-download__image-outer">
                        <img class="pdf-download__image"
                            src="<?php echo get_template_directory_uri();?>/assests/image/svg/pdf.svg" alt="pdf">
                    </span>
                    <span class="pdf-download__title">
                        Download Maintenance Guide
                    </span>
                </a>
            </div>
            <div class="pdf-download__box">
                <a class="pdf-download__anchor" href="">
                    <span class="pdf-download__image-outer">
                        <img class="pdf-download__image"
                            src="<?php echo get_template_directory_uri();?>/assests/image/svg/pdf.svg" alt="pdf">
                    </span>
                    <span class="pdf-download__title">
                        Download Installation Guide
                    </span>
                </a>
            </div>
            <div class="pdf-download__box">
                <a class="pdf-download__anchor" href="">
                    <span class="pdf-download__image-outer">
                        <img class="pdf-download__image"
                            src="<?php echo get_template_directory_uri();?>/assests/image/svg/pdf.svg" alt="pdf">
                    </span>
                    <span class="pdf-download__title">
                        Download Specification Guide
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="padding-common bg-secondary sec-features">
    <div class="container sec-features__inner">
        <h2 class="heading mb-3 text-center"> Features </h2>
        <div class="pdf-download__content sec-features__main">
            <div class="pdf-download__box pdf-download__box--sec-features">
                <a class="pdf-download__anchor pdf-download__anchor--features" href="">
                    <div class="sec-features__outer">
                        <img class="sec-features__image"
                            src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                            alt="features">
                    </div>
                    <div class="sec-features__heading">
                        <h3 class="sec-features__title">
                            4 Square Hollow
                        </h3>
                        <p class="para">
                            Measuring from 2.4 metres or 3.6metres in length, this board is one of our popular selling
                            products with its in-season colour
                        </p>
                    </div>
                </a>
            </div>
            <div class="pdf-download__box pdf-download__box--sec-features">
                <a class="pdf-download__anchor pdf-download__anchor--features" href="">
                    <div class="sec-features__outer">
                        <img class="sec-features__image"
                            src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                            alt="features">
                    </div>
                    <div class="sec-features__heading">
                        <h3 class="sec-features__title">
                            4 Square Hollow
                        </h3>
                        <p class="para">
                            Measuring from 2.4 metres or 3.6metres in length, this board is one of our popular selling
                            products with its in-season colour
                        </p>
                    </div>
                </a>
            </div>
            <div class="pdf-download__box pdf-download__box--sec-features">
                <a class="pdf-download__anchor pdf-download__anchor--features" href="">
                    <div class="sec-features__outer">
                        <img class="sec-features__image"
                            src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                            alt="features">
                    </div>
                    <div class="sec-features__heading">
                        <h3 class="sec-features__title">
                            4 Square Hollow
                        </h3>
                        <p class="para">
                            Measuring from 2.4 metres or 3.6metres in length, this board is one of our popular selling
                            products with its in-season colour
                        </p>
                    </div>
                </a>
            </div>
            <div class="pdf-download__box pdf-download__box--sec-features">
                <a class="pdf-download__anchor pdf-download__anchor--features" href="">
                    <div class="sec-features__outer">
                        <img class="sec-features__image"
                            src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                            alt="features">
                    </div>
                    <div class="sec-features__heading">
                        <h3 class="sec-features__title">
                            4 Square Hollow
                        </h3>
                        <p class="para">
                            Measuring from 2.4 metres or 3.6metres in length, this board is one of our popular selling
                            products with its in-season colour
                        </p>
                    </div>
                </a>
            </div>
            <div class="pdf-download__box pdf-download__box--sec-features">
                <a class="pdf-download__anchor pdf-download__anchor--features" href="">
                    <div class="sec-features__outer">
                        <img class="sec-features__image"
                            src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                            alt="features">
                    </div>
                    <div class="sec-features__heading">
                        <h3 class="sec-features__title">
                            4 Square Hollow
                        </h3>
                        <p class="para">
                            Measuring from 2.4 metres or 3.6metres in length, this board is one of our popular selling
                            products with its in-season colour
                        </p>
                    </div>
                </a>
            </div>
            <div class="pdf-download__box pdf-download__box--sec-features">
                <a class="pdf-download__anchor pdf-download__anchor--features" href="">
                    <div class="sec-features__outer">
                        <img class="sec-features__image"
                            src="<?php echo get_template_directory_uri();?>/assests/image/img/product-img1.png"
                            alt="features">
                    </div>
                    <div class="sec-features__heading">
                        <h3 class="sec-features__title">
                            4 Square Hollow
                        </h3>
                        <p class="para">
                            Measuring from 2.4 metres or 3.6metres in length, this board is one of our popular selling
                            products with its in-season colour
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="padding-common shopping">
    <div class="container">
        <div class="shopping__header">
            <h2 class="heading  text-center shopping__title">
                Keep Shopping <span class="heading--span"> by Color </span>
            </h2>
        </div>
        <div class="row shopping-products__container js-proslider pt-5">
            <div class="col-3 shopping-products__product-box product-item">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                         justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#">
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
            <div class="col-3 shopping-products__product-box product-item">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                         justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#">
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
            <div class="col-3 shopping-products__product-box product-item">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                         justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#">
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
            <div class="col-3 shopping-products__product-box product-item">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                         justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#">
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

<section class="padding-common bg-secondary delivery-info">
    <div class="container delivery-info__inner">
        <h2 class="heading mb-3 text-center">
            Delivery <span class="heading--span"> Information </span>
        </h2>
        <div class="row py-3 delivery-info_row">
            <div class="col-lg-3 delivery-info__column del-options">
                <div class="delivery-info__left">
                    <h3 class="mb-3 delivery-info__heading">
                        Delivery Options
                    </h3>
                    <div class="mb-4 del-options__box">
                        <h4 class="py-3 del-options__title">
                            Delivery 24 to 72 Hours
                        </h4>
                        <div class="row del-options__row">
                            <div class="col-12 del-options__block">
                                <img class="del-options__image"
                                    src="<?php echo get_template_directory_uri();?>/assests/image/svg/delivery-truck.svg"
                                    alt="img">
                                <p class="para para--normal del-options__text">
                                    Delivery is estimated 24 to 72 Hours.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 del-options__box">
                        <h4 class="py-3 del-options__title">
                            Delivery 3 to 10 Days
                        </h4>
                        <div class="row del-options__row">
                            <div class="col-12 del-options__block">
                                <img class="del-options__image"
                                    src="<?php echo get_template_directory_uri();?>/assests/image/svg/delivery-truck.svg"
                                    alt="img">
                                <p class="para para--normal del-options__text">
                                    Delivery is estimated 3 to 10 Days.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 del-options__box">
                        <h4 class="py-3 del-options__title">
                            Delivery 10 to 20 Days
                        </h4>
                        <div class="row del-options__row">
                            <div class="col-12 del-options__block">
                                <img class="del-options__image"
                                    src="<?php echo get_template_directory_uri();?>/assests/image/svg/delivery-truck.svg"
                                    alt="img">
                                <p class="para para--normal del-options__text">
                                    Delivery is estimated 10 to 20 Days.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="del-options__box">
                        <h4 class="py-3 del-options__title">
                            Collection
                        </h4>
                        <div class="row del-options__row">
                            <div class="col-12 del-options__block">
                                <img class="del-options__image"
                                    src="<?php echo get_template_directory_uri();?>/assests/image/svg/collection.svg"
                                    alt="img">
                                <p class="para para--normal del-options__text">
                                    Collection from our Okehampton or Andover warehouse.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 delivery-info__column del-table">
                <h3 class="mb-3 delivery-info__heading priceTable">
                    Pricing Table
                </h3>
                <div class="del-table__outer">
                    <table class="table-content__table mb-3  del-table__info" aria-describedby="priceTable">
                        <thead>
                            <tr class="del-table__head">
                                <th class="del-table__cell del-table__cell--head" scope="col" colspan="2">
                                    Type</th>
                                <th class="del-table__cell del-table__cell--head" scope="col">
                                    When ?</th>
                                <th class="del-table__cell del-table__cell--head" scope="col">
                                    Promotion offers</th>
                            </tr>
                        </thead>
                        <tbody class="del-table__body">
                            <tr class="del-table__row">
                                <td class="del-table__cell" rowspan="3">
                                    <img class="del-table__image"
                                        src="<?php echo get_template_directory_uri();?>/assests/image/svg/delivery-truck.svg"
                                        alt="img">
                                </td>
                                <td class="del-table__cell">
                                    Delivery 24 to 72 Hours
                                </td>
                                <td class="del-table__cell">
                                    Estimated 24 Hours </td>
                                <td class="del-table__cell">
                                    £99.99 </td>
                            </tr>
                            <tr class="del-table__row">
                                <td class="del-table__cell">
                                    Delivery 3 to 10 Days </td>
                                <td class="del-table__cell">
                                    Estimated 3 to 10 working days* </td>
                                <td class="del-table__cell">
                                    FREE </td>
                            </tr>
                            <tr class="del-table__row">
                                <td class="del-table__cell">
                                    Delivery 10 to 21 Days </td>
                                <td class="del-table__cell">
                                    Estimated 10 to 21 working days* </td>
                                <td class="del-table__cell">
                                    FREE </td>
                            </tr>
                            <tr class="del-table__row">
                                <td class="del-table__cell" rowspan="2">
                                    <img class="del-table__image"
                                        src="<?php echo get_template_directory_uri();?>/assests/image/svg/dropbox.svg"
                                        alt="img">
                                </td>
                                <td class="del-table__cell">
                                    Royal Mail Standard (Small Parcels) </td>
                                <td class="del-table__cell">
                                    3-5 Working Days </td>
                                <td class="del-table__cell">
                                    £8.00 </td>
                            </tr>
                            <tr class="del-table__row">
                                <td class="del-table__cell">
                                    Royal Mail Standard (Large Parcels) </td>
                                <td class="del-table__cell">
                                    3-5 Working Days </td>
                                <td class="del-table__cell">
                                    £29.95 </td>
                            </tr>

                            <tr class="del-table__row">
                                <td class="del-table__cell" rowspan="1">
                                    <img class="del-table__image"
                                        src="<?php echo get_template_directory_uri();?>/assests/image/svg/sample.svg"
                                        alt="img">
                                </td>
                                <td class="del-table__cell">
                                    Sample Packs </td>
                                <td class="del-table__cell">
                                    3-5 Working Days </td>
                                <td class="del-table__cell">
                                    FREE </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="text-center">
                        *Please allow for public holidays and weekends (non-delivery days)
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="padding-common benefits">
    <div class="container benefits__inner">
        <div class="col-12 col-lg-8 px-lg-3 d-flex flex-column align-items-center
                        justify-content-center gap-2 mb-2 mx-auto text-center benefits__header">
            <h2 class="heading mb-3 col-lg-10"> Features
                <span class="heading--span"> Video </span>
            </h2>
        </div>
        <div class="col-lg-8 pt-2 mx-auto benefits__video">
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
    </div>
</section>
<section class="padding-common bg-primary faq-sec">
    <div class="container faq-sec__inner ">
        <div class="col-md-10 mx-auto mb-5 text-center faq-sec__content">
            <h2 class="heading mb-2 text-white"> Customer <span class="heading--span text-white">Questions </span></h2>
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
                        board. For an accurate quote for your square meterage, please give us a call
                        on <a href="tel:01925 943011">01925 943011</a>.</p>
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

<section class="recommended pb-3">
    <div class="container recommended__inner">
        <div class="py-5 recommended__header">
            <h2 class="heading  text-center recommended__title">
                Products You May Also <span class="heading--span"> Require </span>
            </h2>
        </div>
        <div class="row shopping-products__container js-proslider">
            <div class="col-3 shopping-products__product-box product-item">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                         justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#">
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
            <div class="col-3 shopping-products__product-box product-item">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                         justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#">
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
            <div class="col-3 shopping-products__product-box product-item">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                         justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#">
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
            <div class="col-3 shopping-products__product-box product-item">
                <div class="product-item__card">
                    <div class="position-relative product-item__top">
                        <div class="d-flex position-absolute top-0 p-3 ps-0 w-100
                         justify-content-between align-items-center product-item__category">
                            <span class="product-item__collection p-2 px-3"><i> Signature Collection </i> </span>
                            <span class="product-item__price"> £24<span class="product-item__dots">.99 </span></span>
                        </div>
                        <a class="d-block position-relative product-item__img-cover" href="#">
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
<?php get_footer();?>