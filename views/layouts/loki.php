<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => '@web/favicon.ico']);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="" />
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/web/img/favicon.ico" />


</head>

<body>
<?php $this->beginBody() ?>


<header>
    <!-- header top start -->
    <div class="header-top theme1 bg-dark py-15">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6 order-last order-sm-first">
                    <div
                        class="d-flex justify-content-center justify-content-sm-start align-items-center"
                    >
                        <div class="social-network2">
                            <ul class="d-flex">
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"
                                    ><span class="icon-social-facebook"></span
                                        ></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank"
                                    ><span class="icon-social-twitter"></span
                                        ></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/" target="_blank"
                                    ><span class="icon-social-youtube"></span
                                        ></a>
                                </li>
                                <li class="mr-0">
                                    <a href="https://www.instagram.com/" target="_blank"
                                    ><span class="icon-social-instagram"></span
                                        ></a>
                                </li>
                            </ul>
                        </div>
                        <div class="media static-media ml-4 d-flex align-items-center">
                            <div class="media-body">
                                <div class="phone">
                                    <a href="tel:(+123)4567890" class="text-white"
                                    ><i class="icon-call-out mr-1"></i> (+123)4567890</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <nav class="navbar-top pb-2 pb-sm-0 position-relative">
                        <ul
                            class="d-flex justify-content-center justify-content-md-end align-items-center"
                        >
                            <li>
                                <a
                                    href="#"
                                    id="dropdown1"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >Настройки <i class="ion ion-ios-arrow-down"></i
                                    ></a>
                                <ul
                                    class="topnav-submenu dropdown-menu"
                                    aria-labelledby="dropdown1"
                                >
                                    <li><a href="/web/site/myaccount">Мой аккаунт</a></li>
                                    <li><a href="/web/basket">Корзина</a></li>

                                    <?php if (!Yii::$app->user->isGuest){
                                        echo '
                                        <li>'. Html::a("Выход", ['site/logout'], [
                                                'data' => [
                                                    'method' => 'post'
                                                ],
                                                ['class' => 'white text-center']
                                            ]
                                        ).' </li>
                                        
                                        ';
                                    }
                                    else{
                                        echo '<li><a href="/web/site/login">Login</a></li>';
                                    }?>

                                </ul>
                            </li>


                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- header top end -->
    <!-- header-middle satrt -->
    <div id="sticky" class="header-middle theme1 py-15 py-lg-0">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-6 col-lg-2 col-xl-2">
                    <div class="logo">
                        <a href="/"
                        ><img src="/web/logo/лого.png" alt="logo" width="85px" height="64px"
                            /></a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                    <ul class="main-menu d-flex justify-content-center">
                        <li class="position-static"><a href="/web/site/shop">Магазин</a></li>
                        <li><a href="/web/site/blog">Блог</a></li>
                        <li><a href="/web/site/contact">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header-middle end -->
</header>
<!-- header end -->


<?= $content ?>


<footer class="bg-light theme1 position-relative">
    <!-- footer bottom start -->
    <div class="footer-bottom pt-80 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4 mb-30">
                    <div class="footer-widget mx-w-400">
                        <div class="footer-logo mb-25">
                            <a href="index.html">
                                <img src="/web/img/logo/logo.png" alt="footer logo" />
                            </a>
                        </div>
                        <p class="text mb-30">
                            We are a team of professional designers and developers that create
                            high quality wordpress plugins, Html, React Template.
                        </p>

                        <div class="social-network">
                            <ul class="d-flex">
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"
                                    ><span class="icon-social-facebook"></span
                                        ></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank"
                                    ><span class="icon-social-twitter"></span
                                        ></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/" target="_blank"
                                    ><span class="icon-social-youtube"></span
                                        ></a>
                                </li>
                                <li class="mr-0">
                                    <a href="https://www.instagram.com/" target="_blank"
                                    ><span class="icon-social-instagram"></span
                                        ></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 mb-30">
                    <div class="footer-widget">
                        <div class="border-bottom cbb1 mb-25">
                            <div class="section-title">
                                <h2 class="title">Information</h2>
                            </div>
                        </div>
                        <!-- footer-menu start -->
                        <ul class="footer-menu">
                            <li><a href="about-us.html">About us</a></li>
                            <li><a href="#">payment</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                            <li><a href="#">Stores</a></li>
                        </ul>
                        <!-- footer-menu end -->
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 mb-30">
                    <div class="footer-widget">
                        <div class="border-bottom cbb1 mb-25">
                            <div class="section-title">
                                <h2 class="title">social Links</h2>
                            </div>
                        </div>
                        <!-- footer-menu start -->
                        <ul class="footer-menu">
                            <li><a href="#">New products</a></li>
                            <li><a href="#">Best sales</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="myaccount.html">My account</a></li>
                        </ul>
                        <!-- footer-menu end -->
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 mb-30">
                    <div class="footer-widget">
                        <div class="border-bottom cbb1 mb-25">
                            <div class="section-title">
                                <h2 class="title">Newsletter</h2>
                            </div>
                        </div>
                        <p class="text mb-20">
                            Subcribe to the TheFace mailing list to receive update on mnew
                            arrivals, special offers and other discount information.
                        </p>
                        <div class="nletter-form mb-35">
                            <form
                                class="form-inline position-relative"
                                action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                                target="_blank"
                                method="post"
                            >
                                <input
                                    class="form-control"
                                    type="text"
                                    placeholder="Your email address"
                                />
                                <button
                                    class="btn news-letter-btn text-capitalize"
                                    type="submit"
                                >
                                    Sign up
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer bottom end -->
    <!-- coppy-right start -->
    <div class="coppy-right bg-dark py-15">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-4 order-last order-md-first">
                    <div class="text-md-left text-center mt-3 mt-md-0">
                        <p>
                            Copyright &copy; <a href="https://hasthemes.com/">HasThemes</a>.
                            All Rights Reserved
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-8">
                    <div class="text-md-right text-center">
                        <img src="/web/img/payment/1.png" alt="img" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- coppy-right end -->
</footer>
<!-- footer end -->
<?php $this->endBody() ?>
<!-- modals start -->
<!-- first modal -->
<div
    class="modal fade theme1 style1"
    id="quick-view"
    tabindex="-1"
    role="dialog"
>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 mx-auto col-lg-5 mb-5 mb-lg-0">
                        <div class="product-sync-init mb-20">
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img
                                        src="/web/img/slider/thumb/1.jpg"
                                        alt="product-thumb"
                                    />
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img
                                        src="/web/img/slider/thumb/2.jpg"
                                        alt="product-thumb"
                                    />
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img
                                        src="/web/img/slider/thumb/3.jpg"
                                        alt="product-thumb"
                                    />
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img
                                        src="/web/img/slider/thumb/4.jpg"
                                        alt="product-thumb"
                                    />
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>

                        <div class="product-sync-nav">
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)">
                                        <img
                                            src="/web/img/slider/thumb/1.1.jpg"
                                            alt="product-thumb"
                                        /></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)">
                                        <img
                                            src="/web/img/slider/thumb/2.1.jpg"
                                            alt="product-thumb"
                                        /></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"
                                    ><img
                                            src="/web/img/slider/thumb/3.1.jpg"
                                            alt="product-thumb"
                                        /></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"
                                    ><img
                                            src="/web/img/slider/thumb/4.1.jpg"
                                            alt="product-thumb"
                                        /></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="modal-product-info">
                            <div class="product-head">
                                <h2 class="title">
                                    New Balance Running Arishi trainers in triple
                                </h2>
                                <h4 class="sub-title">Reference: demo_5</h4>
                                <div class="star-content mb-20">
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                    <span class="star-on de-selected"
                                    ><i class="fas fa-star"></i>
                  </span>
                                </div>
                            </div>
                            <div class="product-body">
                <span class="product-price text-center">
                  <span class="new-price">$29.00</span>
                </span>
                                <p>
                                    Break old records and make new goals in the New Balance®
                                    Arishi Sport v1.
                                </p>
                                <ul>
                                    <li>Predecessor: None.</li>
                                    <li>Support Type: Neutral.</li>
                                    <li>Cushioning: High energizing cushioning.</li>
                                </ul>
                            </div>
                            <div class="d-flex mt-30">
                                <div class="product-size">
                                    <h3 class="title">Dimension</h3>
                                    <select>
                                        <option value="0">40x60cm</option>
                                        <option value="1">60x90cm</option>
                                        <option value="2">80x120cm</option>
                                    </select>
                                </div>
                            </div>
                            <div class="product-footer">
                                <div
                                    class="product-count style d-flex flex-column flex-sm-row my-4"
                                >
                                    <div class="count d-flex">
                                        <input type="number" min="1" max="10" step="1" value="1" />
                                        <div class="button-group">
                                            <button class="count-btn increment">
                                                <i class="fas fa-chevron-up"></i>
                                            </button>
                                            <button class="count-btn decrement">
                                                <i class="fas fa-chevron-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-dark btn--xl mt-5 mt-sm-0">
                                            <span class="mr-2"><i class="ion-android-add"></i></span>
                                            Add to cart
                                        </button>
                                    </div>
                                </div>
                                <div class="addto-whish-list">
                                    <a href="#"><i class="icon-heart"></i> Add to wishlist</a>
                                    <a href="#"><i class="icon-shuffle"></i> Add to compare</a>
                                </div>
                                <div class="pro-social-links mt-10">
                                    <ul class="d-flex align-items-center">
                                        <li class="share">Share</li>
                                        <li>
                                            <a href="#"><i class="ion-social-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-pinterest"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- second modal -->
<div class="modal fade style2" id="compare" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="title">
                    <i class="fa fa-check"></i> Product added to compare.
                </h5>
            </div>
        </div>
    </div>
</div>
<!-- second modal -->
<div class="modal fade style3" id="add-to-cart" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center bg-dark">
                <h5 class="modal-title" id="add-to-cartCenterTitle">
                    Product successfully added to your shopping cart
                </h5>
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5 divide-right">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="/web/img/modal/1.jpg" alt="img" />
                            </div>
                            <div class="col-md-6 mb-2 mb-md-0">
                                <h4 class="product-name">
                                    New Balance Running Arishi trainers in triple
                                </h4>
                                <h5 class="price">$$29.00</h5>
                                <h6 class="color">
                                    <strong>Dimension: </strong>: <span class="dmc">40x60cm</span>
                                </h6>
                                <h6 class="quantity"><strong>Quantity:</strong>&nbsp;1</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="modal-cart-content">
                            <p class="cart-products-count">There is 1 item in your cart.</p>
                            <p><strong>Total products:</strong>&nbsp;$123.72</p>
                            <p><strong>Total shipping:</strong>&nbsp;$7.00</p>
                            <p><strong>Taxes</strong>&nbsp;$0.00</p>
                            <p><strong>Total:</strong>&nbsp;$130.72 (tax excl.)</p>
                            <div class="cart-content-btn">
                                <button
                                    type="button"
                                    class="btn btn-dark btn--md mt-4"
                                    data-dismiss="modal"
                                >
                                    Continue shopping
                                </button>
                                <button class="btn btn-dark btn--md mt-4">
                                    Proceed to checkout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modals end -->

<!-- search-box and overlay start -->
<div class="overlay">
    <div class="scale"></div>
    <form class="search-box" action="#">
        <input type="text" name="search" placeholder="Search products..." />
        <button id="close" type="submit">
            <i class="ion-ios-search-strong"></i>
        </button>
    </form>
    <button class="close"><i class="ion-android-close"></i></button>
</div>



</body>

</html>
<?php $this->endPage() ?>