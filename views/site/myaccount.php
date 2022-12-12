<?php
/* @var array $orders */
?>
<!-- breadcrumb-section end -->
<!-- product tab start -->

<div class="my-account pt-80 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title text-capitalize mb-30 pb-25">my account</h3>
            </div>
            <!-- My Account Tab Menu Start -->
            <div class="col-lg-3 col-12 mb-30">
                <div class="myaccount-tab-menu nav" role="tablist">


                    <a href="#orders" data-toggle="tab"
                    ><i class="fa fa-cart-arrow-down"></i> Orders</a
                    >


                    <a href="#address-edit" data-toggle="tab"
                    ><i class="fa fa-map-marker"></i> address</a
                    >

                    <a href="#account-info" data-toggle="tab" class="active"
                    ><i class="fa fa-user"></i> Account Details</a
                    >
                </div>
            </div>
            <!-- My Account Tab Menu End -->

            <!-- My Account Tab Content Start -->
            <div class="col-lg-9 col-12 mb-30">
                <div class="tab-content" id="myaccountContent">
                    <!-- Single Tab Content Start -->

                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="orders" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Orders</h3>

                            <div class="myaccount-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Status</th>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    foreach ($orders as $order) {
                                        $product = $order->productsOrders;
                                        $price = 0;
                                        /*for ($i = 0; $i <= count($product->product); $i++) {
                                            $price += $product->product->price;
                                        }*/
                                        echo '
                                    <tr>                                      
                                        <td>'.$order->fio_kl.'</td>
                                        <td>'.$order->time_stamp.'</td>
                                        <td>'.$order->status.'</td>
                                        
                                    </tr>
                                    ';
                                    }
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->

                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->

                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                        <div class="myaccount-content">
                            <h3>Address</h3>

                            <address>
                                <p><strong><?= Yii::$app->user->identity->login ?></strong></p>
                                <p>
                                    <?= Yii::$app->user->identity->address ?>
                                </p>

                            </address>

                        </div>
                    </div>
                    <!-- Single Tab Content End -->

                    <!-- Single Tab Content Start -->
                    <div
                            class="tab-pane fade active show"
                            id="account-info"
                            role="tabpanel"
                    >
                        <div class="myaccount-content">
                            <h3>Account Details</h3>

                            <div class="account-details-form">
                                <form action="#">

                                    <img src="/web/uploads/1.jpg" width="350px" height="400px">
                                    <p>Avatar</p>
                                    <br/>

                                    <div class="row">
                                        <div class="col-lg-6 col-12 mb-30">
                                            <input
                                                    id="first-name"
                                                    type="text"
                                                    value="<?= Yii::$app->user->identity->name ?>"
                                                    disabled

                                            />
                                        </div>

                                        <div class="col-lg-6 col-12 mb-30">
                                            <input
                                                    id="first-name"
                                                    type="text"
                                                    value="<?= Yii::$app->user->identity->surname ?>"
                                                    disabled

                                            />
                                        </div>

                                        <div class="col-lg-6 col-12 mb-30">
                                            <input
                                                    id="first-name"
                                                    type="text"
                                                    value="<?= Yii::$app->user->identity->patronymic ?>"
                                                    disabled

                                            />
                                        </div>

                                        <div class="col-lg-6 col-12 mb-30">
                                            <input
                                                    id="first-name"
                                                    type="text"
                                                    value="<?= Yii::$app->user->identity->login ?>"
                                                    disabled

                                            />
                                        </div>

                                        <div class="col-lg-6 col-12 mb-30">
                                            <input
                                                    id="first-name"
                                                    type="text"
                                                    value="<?= Yii::$app->user->identity->email ?>"
                                                    disabled

                                            />
                                        </div>

                                        <div class="col-lg-6 col-12 mb-30">
                                            <input
                                                    id="first-name"
                                                    type="text"
                                                    value="<?= Yii::$app->user->identity->phone ?>"
                                                    disabled

                                            />
                                        </div>


                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Single Tab Content End -->
                </div>
            </div>
            <!-- My Account Tab Content End -->
        </div>
    </div>
</div>