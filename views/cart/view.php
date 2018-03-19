<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>

<!-- Main Container -->
<section class="main-container col1-layout">
    <div class="main container">
        <div class="col-main">
            <div class="cart">

                <div class="page-content page-order"><div class="page-title">
                        <h2>Корзина</h2>
                    </div>

                    <?php if( Yii::$app->session->hasFlash('success') ): ?>
                    <div style="margin: 30px 0;">
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <?php echo Yii::$app->session->getFlash('success'); ?>
                        </div>
                    </div>
                    <?php endif;?>

                    <?php if( Yii::$app->session->hasFlash('error') ): ?>
                    <div style="margin: 30px 0;">
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <?php echo Yii::$app->session->getFlash('error'); ?>
                        </div>
                    </div>
                    <?php endif;?>


                    <?php if(!empty($session['cart'])): ?>
                    <div class="order-detail-content">
                        <div class="table-responsive">
                            <table class="table table-bordered cart_summary">
                                <thead>
                                <tr>
                                    <th class="cart_product">Товар</th>
                                    <th>Название</th>
                                    <th>Цена</th>
                                    <th>Количество</th>
                                    <th>Общая стоимость</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($session['cart'] as $id => $item): ?>
                                <tr>
                                    <td class="cart_product">
                                        <a title="<?= $item['name']; ?>" href="<?= Url::to(['product/view', 'alias' => $item['alias']]); ?>"><?= \yii\helpers\Html::img("{$item['img']}",
                                                ['alt' => $item['name'], 'height' => 100]); ?></a>
                                    </td>
                                    <td class="cart_description">
                                        <p class="product-name"><a title="<?= $item['name']; ?>" href="<?= Url::to(['product/view', 'alias' => $item['alias']]); ?>"><?= $item['name']; ?></a></p>
                                    </td>
                                    <td class="price">
                                        <span><?= $item['price']; ?></span>
                                    </td>
                                    <td class="qty">
                                        <span><?= $item['qty']; ?></span>
                                    </td>
                                    <td class="price">
                                        <span><?= $item['qty']*$item['price'] ;?></span>
                                    </td>
                                </tr>
                                </tbody>
                                <?php endforeach; ?>
                            </table>
                            <div style="text-align: right">
                                <strong>Итого: <?= $session['cart.qty']; ?></strong></td><br>
                                <strong>На сумму: <?= $session['cart.sum']; ?> руб.</strong></td>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-6 col-md-offset-3">
                        <?php $form = ActiveForm::begin() ?>
                            <?= $form->field($order, 'name')?>
                            <?= $form->field($order, 'email')?>
                            <?= $form->field($order, 'phone')?>
                            <?= $form->field($order, 'address')?>
                            <?= $form->field($order, 'comment')?>
                            <?= Html::submitButton('Оформить заказ', ['class' => 'btn btn-success'])?>
                        <?php ActiveForm::end()?>
                        </div>
                    <?php else: ?>
                        <h3>Корзина пуста</h3>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- service section -->
<div class="jtv-service-area">
    <div class="container">
        <div class="row">
            <div class="col col-md-3 col-sm-6 col-xs-12">
                <div class="block-wrapper ship">
                    <div class="text-des">
                        <div class="icon-wrapper"><i class="fa fa-paper-plane"></i></div>
                        <div class="service-wrapper">
                            <h3>World-Wide Shipping</h3>
                            <p>On order over $99</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-3 col-sm-6 col-xs-12 ">
                <div class="block-wrapper return">
                    <div class="text-des">
                        <div class="icon-wrapper"><i class="fa fa-rotate-right"></i></div>
                        <div class="service-wrapper">
                            <h3>30 Days Return</h3>
                            <p>Moneyback guarantee </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-3 col-sm-6 col-xs-12">
                <div class="block-wrapper support">
                    <div class="text-des">
                        <div class="icon-wrapper"><i class="fa fa-umbrella"></i></div>
                        <div class="service-wrapper">
                            <h3>Support 24/7</h3>
                            <p>Call us: ( +123 ) 456 789</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-3 col-sm-6 col-xs-12">
                <div class="block-wrapper user">
                    <div class="text-des">
                        <div class="icon-wrapper"><i class="fa fa-tags"></i></div>
                        <div class="service-wrapper">
                            <h3>Member Discount</h3>
                            <p>25% on order over $199</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

