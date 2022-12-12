<?php


use yii\helpers\Html;
use yii\helpers\Url;
?>


<!-- breadcrumb-section end -->
<!-- product tab start -->

<div>
    <?php if (!empty($basket)): ?>
    <form action="<?= Url::to(['basket/update']); ?>" method="post">
        <?=
        Html::hiddenInput(
            Yii::$app->request->csrfParam,
            Yii::$app->request->csrfToken
        );
        ?>

<section class="whish-list-section theme1 pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title mb-30 pb-25 text-capitalize">Корзина</h3>

                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th class="text-center" scope="col">Изображение</th>
                            <th class="text-center" scope="col">Название</th>
                            <th class="text-center" scope="col">Количество</th>
                            <th class="text-center" scope="col">Цена</th>
                            <th class="text-center" scope="col">Действие</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($basket['products'] as $id => $item): ?>
                        <tr>
                            <th class="text-center" scope="row">
                                <img src="/web<?= Html::encode($item['image']); ?>" alt="img" width="200px" height="150px"/>
                            </th>
                            <td class="text-center">
                  <span class="whish-title"
                  ><?= Html::encode($item['name']); ?></span>
                            </td>

                            <td class="text-center">
                                <div class="product-count style">
                                    <div class="count d-flex justify-content-center">
                                        <?=
                                        Html::input(
                                            'text',
                                            'count['.$id.']',
                                            $item['count'],
                                        );
                                        ?>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="whish-list-price"> <?= Html::encode($item['price']); ?> </span>
                            </td>

                            <td class="text-center">
                                <a href="<?= Url::to(['basket/clear']); ?>">
                                    <span class="trash"><i class="fas fa-trash-alt"></i> </span>
                                </a>
                            </td>

                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->
<div class="check-out-section pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">

            </div>
            <div class="col-lg-5 mt-4 mt-lg-0">
                <div class="your-order-area">
                    <div class="your-order-wrap gray-bg-4">
                        <div class="your-order-product-info">


                            <div class="your-order-bottom">

                            </div>
                            <div class="your-order-total mb-0">
                                <ul>
                                    <li class="order-total">Сумма</li>
                                    <li><?= $basket['amount']; ?> р</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="Place-order mt-25">
                        <button type="submit"
                                class="btn btn--lg btn-primary my-2 my-sm-0">
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                            Обновить корзину
                        </button>
    </form>
    <a class="btn btn--lg btn-primary my-2 my-sm-0" href="/web/site/checkout">Оформить заказ</a>

</div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
    <p>В корзине ничего нет</p>
<?php endif; ?>
</div>
