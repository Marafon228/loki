<?php

/** @var yii\web\View $this */

/** @var app\controllers\SiteController $blogs */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Блог';
?>

<section class="blog-section blog-list py-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">

                    <?php
                    foreach ($blogs as $blog) {
                        echo '

                    <div class="col-12 mb-30">
                        <div class="single-blog media flex-column flex-md-row">
                            <a class="blog-thumb mb-20 mb-md-0 mr-md-4 mr-xl-5 zoom-in d-block overflow-hidden">
                                <img src="/web'.$blog->image.'" alt="blog-thumb-naile" width="300px" height="250px" />
                            </a>
                            <div class="blog-post-content media-body mb-5 mb-md-0">
                                <h3 class="title mb-15">
                                    <a href="#">'.$blog->name.'</a>
                                </h3>
                                <p class="sub-title">
                                    '.$blog->time_stamp.'
                                </p>
                                <p class="text">
                                    '.$blog->description.'
                                </p>                                
                            </div>
                        </div>
                    </div>
                    
                    ';
                    }
                    ?>


                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12 offset-lg-3 col-lg-9">
                <nav class="pagination-section mt-30">
                    <ul class="pagination justify-content-center">
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
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>