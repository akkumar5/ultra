<?php
/*
Template Name:articles detail page
*/
get_header();

$theme_url=get_template_directory_uri();
?>

<style>
.metainfo {
    display: flex;
    list-style: none;
    padding: 25px;
    gap: 28px;
}

.metainfo__image {
    margin-right: 10px;
    color: #30a5d9;
}

.article-content {
    padding: 0 8rem;
}

.article-content h2 {
    font-size: 2rem;
    margin: 1.2rem 0 1rem;
}

.article-content h3 {
    font-size: 1.56rem;
    margin: 0 0 1rem;
}

.article-content img {
    border-radius: 10px;
    margin: 1.5rem 0;
}

.two-column__first img {
    margin: 0;
}

.sharing {
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-top: 1px solid #d4d4d4;
    border-bottom: 1px solid #d4d4d4;
    padding: 10px 15px;
    margin-top: 65px;
}

.sharing__social {
    display: flex;
    align-items: center;
    gap: 14px;
    color: #636363;
}

.icons__link {
    padding: 0.5rem;
    width: 30px;
    height: 30px;
    border: 1px solid #767676;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.pagination__content {
    padding: 60px 100px 60px 33%;
    background-color: #f6f6f6;
    align-items: center;
    gap: 22px;
}
.pagination__content--right {
    padding-right:33%;
    padding-left: 100px;
    flex-direction: row-reverse;
    background-color:#f2fbff;
    text-align:right;
}
.pagination__left-image {
    width: 50%;
    overflow: hidden;
    border-radius: 10px;
}
.pagination__image {
    height: 162px;
    object-fit: cover;
    object-position: center;
    max-width: 266px;
}
.pagination__block {
    width: 50%;
    font-size:1rem;
}
.nav__link {
    color: var(--uk-main);
    display: block;
}
.nav__icon {
    width: 40px;
    height: 40px;
    text-align: center;
    background: #eeeeee;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #b9b9b9;
    margin-right: 8px;
}
.nav__title {
    font-weight: 500;
    margin-top: 15px;
    line-height: 22px;
}
.pagination__content--right .nav__icon {
    margin-right: 0;
    margin-left: 8px;
}
@media only screen and (max-width:1399px) and (min-width:1200px) {
    .pagination__content {
        padding-left: 12%;
        padding-right: 30px;
    }
    .pagination__content--right {
        padding-right: 12%;
        padding-left: 30px;
    }
   
}

@media only screen and (max-width:1199px) and (min-width:992px) {
    .heading-inner {
        font-size: 2rem;
    }

    .article-content {
        padding: 0 6rem;
    }
    .pagination__content {
        padding-left: 12%;
        padding-right: 30px;
    }
    .pagination__content--right {
        padding-right: 12%;
        padding-left: 30px;
    }
}

@media only screen and (max-width:991px) and (min-width:601px) {
    .heading-inner {
        font-size: 2rem;
    }

    .article-content {
        padding: 0 0;
    }
    .pagination__content {
        padding-left: 30px;
        padding-right: 30px;
    }
    
    .pagination__image {
        height: 130px;
    }
    .nav__icon {
        width: 25px;
        height: 25px;
    }
    .article-content h2 {
        font-size: 1.6rem;
    }
    .two-column__first img {
        margin: 20px 0;
    }

}

@media only screen and (max-width:600px) {

    .heading-inner {
        font-size: 2rem;
    }

    .article-content {
        padding: 0 0;
    }
    .pagination__content {
        flex-direction: column;
        padding-left: 0;
        padding-right: 0;
    }
    .pagination__block, .pagination__left-image {
        font-size: 84%;
        width: 68%;
    }
    .pagination__image {
        height: 100px;
    }
    .nav__icon {
        width: 25px;
        height: 25px;
    }
    .article-content h2 {
        font-size: 1.6rem;
    }
    .two-column__first img {
        margin: 20px 0;
    }
    .metainfo {
        font-size: 72%;
        gap: 15px;
        padding: 17px 0;
    }
}
</style>

<!-- banner-common start -->
<section class="position-relative banner-common" style="background-image:url('/assests/img/GreyWood.jpg')">
    <div class="overlay"></div>
    <div class="container banner-common__inner">
        <div class="d-flex justify-content-center flex-column align-items-center
             position-relative banner-common__blocks">
            <h1 class="text-white heading-inner
              banner-common__title">
                Article Single page
            </h1>
            <ul class="banner-common__meta metainfo text-white">
                <li class="metainfo__itam">
                    <span class="metainfo__image">
                        <i class="fa-regular fa-user"></i>
                    </span>
                    <span class="metainfo__name">M. John<span>
                </li>
                <li class="metainfo__itam">
                    <span class="metainfo__image">
                        <i class="fa-solid fa-calendar-days"></i>
                    </span>
                    <span class="metainfo__name">May 31, 2021<span>
                </li>
                <li class="metainfo__itam">
                    <span class="metainfo__image">
                        <i class="fa-regular fa-folder"></i>
                    </span>
                    <span class="metainfo__name">
                        <a href="#">
                            Learn Decking
                        </a>
                    </span>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- banner-common end -->


<!-- Article Single page Start -->
<section class="padding-common article-details">
    <div class="container article-details__inner">
        <div class="article-content">
            <p class="para">
                Taking the time and effort to add waterproofing to the substructure and frame of your composite
                decking area will extend its service life. The spaces between your composite decking
                allow for easy water drainage from the surface of your decking. It allows water
                to drain, thereby keeping the decking dry. But, this may not be suitable if you want
                to do anything under the composite boards or need to keep your decking joists free
                from moisture, we do share some get ideas to keep you decking joist free of moisture in another
                article. To keep underneath your decking dry, you have to prevent water from draining through the
                spaces or onto your joists. How can you waterproof under composite decking boards?
            </p>
            <h2>
                Ways to Waterproof Under Composite Decking Boards
            </h2>
            <img src="https://ultradecking.co.uk/wp-content/uploads/2021/05/Decking-Water-Drainage-Ideas.webp"
                alt="img">
            <div class="row py-4 two-column">
                <div class="col-lg-6 two-column__first">
                    <img src="<?php echo $theme_url;?>/assests/img/Joists-With-DPC.webp" alt="name">
                </div>
                <div class="col-lg-6 two-column__second">
                    <div class="content-colunm">
                        <h3>
                            Damp Proof Course
                        </h3>
                        <p class="para">
                            Many professional decking installers and landscape gardeners that regularly purchase
                            composite
                            decking boards will place damp proof course (DPC) tape on to the top and bottom of the
                            joists.
                            Any water dripping through the decking board gaps simply bounces off the DPC tape preventing
                            any water from penetrating the joists. In addition, some professional installers go further
                            and source a colour match paint or sealant similar to the decking colour and add an extra
                            layer of water protection over the top of the DPC tape.
                        </p>
                    </div>
                    <div>
                    </div>
                </div>

            </div>
            <div class="row py-4 flex-row-reverse two-column">
                <div class="col-lg-6 two-column__first">
                    <img src="<?php echo $theme_url;?>/assests/img/Joists-With-DPC.webp" alt="name">
                </div>
                <div class="col-lg-6 two-column__second">
                    <div class="content-colunm">
                        <h3>
                            Damp Proof Course
                        </h3>
                        <p class="para">
                            Many professional decking installers and landscape gardeners that regularly purchase
                            composite
                            decking boards will place damp proof course (DPC) tape on to the top and bottom of the
                            joists.
                            Any water dripping through the decking board gaps simply bounces off the DPC tape preventing
                            any water from penetrating the joists. In addition, some professional installers go further
                            and source a colour match paint or sealant similar to the decking colour and add an extra
                            layer of water protection over the top of the DPC tape.
                        </p>
                    </div>
                </div>
            </div>

            <div class="article-content__postshare sharing">
                <div class="sharing__tag">
                </div>
                <div class="sharing__social icons">
                    <div class="icons__text">
                        Share:
                    </div>
                    <div class="icons__share">
                        <a class="icons__link" href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </div>

                    <div class="icons__share">
                        <a class="icons__link" href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </div>
                    <div class="icons__share">
                        <a class="icons__link" href="#">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Article Single page End -->
<section class="pagination">
    <div class="row pagination__inner">
        <div class="col-6 px-0 pagination__column">
            <div class="d-flex pagination__content">
                <div class="pagination__left-image">
                    <a href="#">
                        <img class="pagination__image"
                        src="https://ultradecking.co.uk/wp-content/uploads/2021/05/Decking-Water-Drainage-Ideas.webp"
                        alt="">
                    </a>
                </div>
                <div class="pagination__block nav">
                    <a class="nav__link" href="#">
                    <span class="nav__icon">
                        <i class="fa-solid fa-chevron-left"></i>
                    </span> Previous Article</a>
                    <p class="nav__title"> Does Composite Decking Expand and Contract?</p>
                </div>
            </div>
        </div>
        <div class="col-6 px-0 pagination__column">
            <div class="d-flex pagination__content
             pagination__content--right">
                <div class="pagination__left-image">
                    <a href="#">
                        <img class="pagination__image"
                         src="https://ultradecking.co.uk/wp-content/uploads/2021/05/Decking-Water-Drainage-Ideas.webp"
                          alt="">
                        </a>
                </div>
                <div class="pagination__block nav">
                    <a class="nav__link" href="#">
                        Next Article
                        <span class="nav__icon">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </a>
                    <p class="nav__title"> Does Composite Decking Expand and Contract?</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>
