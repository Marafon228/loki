<?php

/** @var yii\web\View $this */

/** @var app\controllers\SiteController $products */
/** @var $pages */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Главная страница';
?>

<!-- header end -->
<!-- breadcrumb-section start -->

<!-- breadcrumb-section end -->
<!-- product tab start -->
<div class="product-tab bg-white pt-80 pb-80">
    <div class="container">
        <div class="grid-nav-wraper bg-lighten2 mb-30">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                    <nav class="shop-grid-nav">
                        <ul
                                class="nav nav-pills align-items-center"
                                id="pills-tab"
                                role="tablist"
                        >
                            <li class="nav-item">
                                <a
                                        class="nav-link active"
                                        id="pills-home-tab"
                                        data-toggle="pill"
                                        href="#pills-home"
                                        role="tab"
                                        aria-controls="pills-home"
                                        aria-selected="true"
                                >
                                    <i class="fa fa-th"></i>
                                </a>
                            </li>
                            <li class="nav-item mr-0">
                                <a
                                        class="nav-link"
                                        id="pills-profile-tab"
                                        data-toggle="pill"
                                        href="#pills-profile"
                                        role="tab"
                                        aria-controls="pills-profile"
                                        aria-selected="false"
                                ><i class="fa fa-list"></i
                                    ></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--<div class="col-12 col-md-6 position-relative">
                    <div class="shop-grid-button d-flex align-items-center">
                        <span class="sort-by">Sort by:</span>
                        <button
                            class="d-flex justify-content-between"
                            type="button"
                            id="dropdownMenuButton"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            Relevance <span class="ion-android-arrow-dropdown"></span>
                        </button>
                        <div
                            class="dropdown-menu shop-grid-menu"
                            aria-labelledby="dropdownMenuButton"
                        >
                            <a class="dropdown-item" href="#">Relevance</a>
                            <a class="dropdown-item" href="#"> Name, A to Z</a>
                            <a class="dropdown-item" href="#"> Name, Z to A</a>
                            <a class="dropdown-item" href="#"> Price, low to high</a>
                            <a class="dropdown-item" href="#"> Price, high to low</a>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
        <!-- product-tab-nav end -->
        <div class="tab-content" id="pills-tabContent">
            <!-- first tab-pane -->
            <div
                    class="tab-pane fade show active"
                    id="pills-home"
                    role="tabpanel"
                    aria-labelledby="pills-home-tab"
            >
                <div class="row grid-view theme1">


                    <?php
                    foreach ($products as $product) {
                        echo '

                    <div class="col-sm-6 col-md-4 mb-30">
                        <div class="card product-card">
                            <div class="card-body">
                                <div class="product-thumbnail position-relative">

                                    <a href="#">
                                        <img
                                            class="first-img"
                                            src="/web' . $product->image . '"
                                            alt="thumbnail"
                                            width="350px" 
                                            height="450px"
                                        />
                                    </a>
                                    <!-- product links -->

                                    <!-- product links end-->
                                </div>
                                <div class="product-desc py-0 px-0">
                                    <h3 class="title">
                                        <a href="#"
                                        >' . $product->name . '</a
                                        >
                                    </h3>

                                    <div
                                        class="d-flex align-items-center justify-content-between"
                                    >
                                        <span class="product-price">' . $product->price . '</span>
                                        
                                        <form method="post"
                                          action=' . Url::to(['basket/add']) . '>      
                                            <input type="hidden" name="id" value=' . $product->id . '>
                                                ' . Html::hiddenInput(
                                                    Yii::$app->request->csrfParam,
                                                    Yii::$app->request->csrfToken
                                                ) . '
                                            <button
                                            class="pro-btn"                                            
                                            type="submit">                                           
                                                <i class="icon-basket"></i>
                                            </button>
                                        </form>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div>
';
                    }
                    ?>


                </div>
            </div>
            <!-- second tab-pane -->
            <div
                    class="tab-pane fade"
                    id="pills-profile"
                    role="tabpanel"
                    aria-labelledby="pills-profile-tab">
                <div class="row grid-view-list theme1">
                    <div class="col-12 mb-30">

                        <?php
                        foreach ($products as $product) {
                            echo '
                        <div class="card product-card">
                            <div class="card-body">
                                <div class="media flex-column flex-md-row">
                                    <div class="product-thumbnail position-relative">
                                        
                                        <a href="#">
                                            <img                                               
                                                src="/web' . $product->image . '"                                               
                                                width="300px"
                                                height="300px"
                                            />
                                        </a>
                                        <!-- product links -->
                                        <ul class="actions d-flex justify-content-center">
                                            <li>
                                                <a class="action" href="wishlist.html">
                          <span data-toggle="tooltip"
                              data-placement="bottom"
                              title="add to wishlist"
                              class="icon-heart">
                          </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    class="action"
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#compare">
                          <span
                              data-toggle="tooltip"
                              data-placement="bottom"
                              title="Add to compare"
                              class="icon-shuffle"
                          ></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    class="action"
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#quick-view"
                                                >
                          <span
                              data-toggle="tooltip"
                              data-placement="bottom"
                              title="Quick view"
                              class="icon-magnifier"
                          ></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body pl-md-4">
                                        <div class="product-desc py-0 px-0">
                                            <h3 class="title">
                                                <p>' . $product->name . '</p>
                                            </h3>
                                            <span class="product-price">' . $product->price . '</span>
                                        </div>
                                        <ul class="product-list-des">
                                            <li>
                                                ' . $product->description . '
                                            </li>                                         
                                        </ul>
                                        <div class="availability-list mb-20">
                                            <p>В наличии: <span>' . $product->count . '</span></p>
                                        </div>
                                        <form method="post"
                                          action=' . Url::to(['basket/add']) . '>      
                                            <input type="hidden" name="id" value=' . $product->id . '>
                                                ' . Html::hiddenInput(
                                    Yii::$app->request->csrfParam,
                                    Yii::$app->request->csrfToken
                                ) . '
                                            <button
                                            class="btn btn-dark btn--xl"
                                            >
                                            Добавить в корзину
                                        </button>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';
                        }
                        ?>
                        <!-- product-list End -->
                    </div>



                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <nav class="pagination-section mt-30">
                    <?=
                    \yii\widgets\LinkPager::widget([
                        'pagination' => $pages,
                    ])
                    ?>
                    <!--<ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="ion-chevron-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"
                            ><i class="ion-chevron-right"></i
                                ></a>
                        </li>
                    </ul>-->
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- product tab end -->
<!-- footer strat -->