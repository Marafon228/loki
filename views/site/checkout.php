<?php

/* @var $order */


use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>

<div class="check-out-section pt-80 pb-80">
    <div class="container">
        <?php if (!empty($basket)): ?>
        <div class="row">
            <div class="col-lg-7">
                <div class="billing-info-wrap">

                    <h3 class="title">Детали заказа</h3>
                    <?php
                    $form = ActiveForm::begin(
                        ['id' => 'checkout-form', 'class' => 'form-horizontal']
                    );
                    ?>
                    <form class="personal-information" action="assets/php/contact.php">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Имя</label>
                                    <input type="text"
                                    value="<?= Yii::$app->user->identity->name ?>"
                                    disabled
                                    />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Фамилия</label>
                                    <input type="text"
                                           value="<?= Yii::$app->user->identity->surname ?>"
                                           disabled
                                    />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Отчество</label>
                                    <input type="text"
                                           value="<?= Yii::$app->user->identity->patronymic ?>"
                                           disabled
                                    />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20px">
                                    <label>Адрес</label>
                                    <input type="text"
                                           value="<?= Yii::$app->user->identity->address ?>"
                                           disabled
                                    />
                                </div>
                            </div>





                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Телефон</label>
                                    <input type="text"
                                           value="<?= Yii::$app->user->identity->phone ?>"
                                           disabled
                                    />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Email</label>
                                    <input type="text"
                                           value="<?= Yii::$app->user->identity->email ?>"
                                           disabled
                                    />
                                </div>
                            </div>
                        </div>
                    </form>


                    <div class="additional-info-wrap">
                        <div class="additional-info">
                            <?= $form->field($order, 'description')->textarea(['rows' => 2]); ?>
                        </div>
                    </div>



                </div>
            </div>
            <div class="col-lg-5 mt-4 mt-lg-0">
                <div class="your-order-area">
                    <h3 class="title">Your order</h3>
                    <div class="your-order-wrap gray-bg-4">
                        <div class="your-order-product-info">
                            <div class="your-order-top">
                                <ul>
                                    <li>Product</li>
                                    <li>Total</li>
                                </ul>
                            </div>
                            <?php foreach ($basket['products'] as $id => $item): ?>
                            <div class="your-order-middle">
                                <ul>
                                    <li>
                                        <span class="order-middle-left"><?= Html::encode($item['name']); ?> X <?= $item['count']; ?>></span>
                                        <span class="order-price"><?= $item['price'] * $item['count']; ?> р</span>
                                    </li>
                                </ul>
                            </div>
                            <?php endforeach; ?>
                            <div class="your-order-bottom">

                            </div>
                            <div class="your-order-total">
                                <ul>
                                    <li class="order-total">Total</li>
                                    <li><?= $basket['amount']; ?> р</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="Place-order mt-25">
                        <button onclick="al()">
                            alert
                        </button>
                        <button type="button" class="btn btn--xl btn-block btn-primary" onclick="al()" >
                            <a href="<?= Url::to(['basket/clear']); ?>">
                                Заказать
                            </a>
                        </button>
                        <script>
                            function al(){
                                alert('Ваш заказ офрмлен. Ожидайте подтверждения')
                            }
                        </script>

                        <?/*= Html::submitButton('Заказать', ['class' => 'btn btn--xl btn-block btn-primary']); */?>

                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
        <?php else: ?>
            <p>У ван ничего нет в корзине</p>
        <?php endif; ?>
    </div>
</div>