<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\User $modelReg */
/** @var app\models\User $modelLogin */
/** @var yii\widgets\ActiveForm $form */
?>

<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2 class="title pb-4 text-dark text-capitalize">login & register</h2>
                </div>
            </div>
            <div class="col-12">
                <ol
                        class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center"
                >
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Log in to your account
                    </li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->

<!-- login area start -->
<div class="login-register-area pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4>login</h4>
                        </a>
                        <a data-toggle="tab" href="#lg2">
                            <h4>register</h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <?php
                                    $form = ActiveForm::begin(); ?>
                                    <form action="/web/php/contact.php" method="post">
                                        <?= $form->field($modelLogin, 'login')->textInput(['maxlength' => true]) ?>

                                        <?= $form->field($modelLogin, 'password')->textInput(['maxlength' => true]) ?>
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input id="remember" type="checkbox" />
                                                <label for="remember">Remember me</label>
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                            <?= Html::submitButton('Register', ['class' => 'btn btn-dark btn--md']) ?>
                                        </div>
                                    </form>
                                    <?php ActiveForm::end(); ?>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <?php
                                    $form = ActiveForm::begin(); ?>
                                    <form action="/web/php/contact.php" method="post">
                                        <?= $form->field($modelReg, 'name')->textInput(['maxlength' => true]) ?>

                                        <?= $form->field($modelReg, 'surname')->textInput(['maxlength' => true]) ?>

                                        <?= $form->field($modelReg, 'patronymic')->textInput(['maxlength' => true]) ?>

                                        <?= $form->field($modelReg, 'login')->textInput(['maxlength' => true]) ?>

                                        <?= $form->field($modelReg, 'email')->textInput(['maxlength' => true]) ?>

                                        <?= $form->field($modelReg, 'phone')->textInput(['maxlength' => true]) ?>

                                        <?= $form->field($modelReg, 'address')->textInput(['maxlength' => true]) ?>

                                        <?= $form->field($modelReg, 'password')->passwordInput(['maxlength' => true]) ?>

                                        <?= $form->field($modelReg, 'password_repeat')->passwordInput(['maxlength' => true]) ?>

                                        <?= $form->field($modelReg, 'image')->fileInput(['maxlength' => true]) ?>

                                        <?= $form->field($modelReg, 'rules')->checkbox() ?>


                                        <div class="button-box">
                                            <?= Html::submitButton('Register', ['class' => 'btn btn-dark btn--md']) ?>
                                        </div>
                                    </form>
                                    <?php ActiveForm::end(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>