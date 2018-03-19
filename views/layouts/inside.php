<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use \yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="shop_grid_full_width_page">
<?php $this->beginBody() ?>

<!-- mobile menu -->
<div id="mobile-menu">
    <ul>
        <li><a href="<?= Url::home() ;?>" class="home1">Главная</a>
        </li>
        <li><a href="#" onclick="return false">Категории</a>
            <ul>
                <?= \app\components\CategoryWidget::widget(['tpl' => 'category-mobile']); ?>
            </ul>
        </li>
        <li><a href="#" onclick="return false">Бренды</a>
            <ul>
                <?= \app\components\BrandWidget::widget(['tpl' => 'brand-mobile']); ?>
            </ul>
        </li>
        <li><a title="Доставка" href="<?= Url::toRoute(['site/delivery']); ?>">Доставка</a></li>
        <li><a title="О нас" href="<?= Url::toRoute(['site/about']); ?>">О нас</a></li>
        <li><a title="Контакты" href="<?= Url::toRoute(['site/contact']); ?>">Контакты</a></li>
    </ul>
</div>
<!-- end mobile menu -->
<div id="page">

    <!-- Header -->
    <header>
        <div class="header-container">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <?php if (!Yii::$app->user->isGuest): ?>
                            <div class="headerlinkmenu col-md-8 col-sm-8 col-xs-12">
                                <ul class="links">
                                    <li>
                                        <a title="Админка" href="<?= Url::to(['/admin/order']);?>"><span>Панель управления</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Админка" href="<?= Url::to(['/site/logout']);?>"><span>Выйти</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        <?php else: ?>
                            <div class="col-sm-4 col-md-4 col-xs-12">
                                <!-- Default Welcome Message -->
                                <div class="welcome-msg hidden-xs hidden-sm">Добро пожаловать на BestSpend.ru! </div>
                            </div>
                            <!-- top links -->
                            <div class="headerlinkmenu col-md-8 col-sm-8 col-xs-12"> <span class="phone  hidden-xs hidden-sm">Есть вопросы? : +7 460 444 33 20</span>
                            </div>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- header inner -->
            <div class="header-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-xs-12 jtv-logo-block">

                            <!-- Header Logo -->
                            <div class="logo">
                                <a title="e-commerce" href="<?= Url::home() ;?>">
                                    <?= Html::img("@web/images/logo.png",
                                        $options = [
                                            'alt' => 'BestSpend',
                                            'title' => 'BestSpend'
                                        ]
                                    );?>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-6 jtv-top-search">

                            <!-- Search -->

                            <div class="top-search">
                                <div id="search">
                                    <form method="get" action="<?= Url::to(['search/category']); ?>">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Поиск по всем категориям ..." name="request">
                                            <button class="btn-search" type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- End Search -->

                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3 top-cart">
                            <!-- top cart -->
                            <div class="top-cart-contain">
                                <div class="mini-cart">
                                    <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a id="getCart" href="#">
                                            <div class="cart-icon"><i class="icon-basket-loaded icons"></i></div>
                                            <div class="shoppingcart-inner hidden-xs" ><span class="cart-title">Корзина</span> </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

    <nav>
        <div class="container">
            <div class="row">
                <div class="mm-toggle-wrap">
                    <div class="mm-toggle"><i class="fa fa-align-justify"></i> </div>
                    <span class="mm-label">Меню</span> </div>
                <div class="col-md-3 col-sm-3 mega-container hidden-xs">
                    <div class="navleft-container">
                        <div class="mega-menu-title">
                            <h3><span>Меню</span></h3>
                        </div>

                        <!-- Shop by category -->
                        <div class="mega-menu-category">
                            <ul class="nav">
                                <?= \app\components\CategoryWidget::widget(['tpl' => 'sidebar-menu']); ?>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-9 col-sm-9 jtv-megamenu">
                    <div class="mtmegamenu">
                        <ul class="hidden-xs">
                            <li class="mt-root demo_custom_link_cms">
                                <div class="mt-root-item"><a href="/">
                                        <div class="title title_font"><span class="title-text">Главная</span></div>
                                    </a>
                                </div>
                            </li>
                            <?= \app\components\BrandWidget::widget(['tpl' => 'brand']); ?>
                            <li class="mt-root">
                                <div class="mt-root-item">
                                    <a href="<?= Url::to(['site/delivery']); ?>">
                                        <div class="title title_font">
                                            <span class="title-text">Доставка</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="mt-root">
                                <div class="mt-root-item">
                                    <a href="<?= Url::to(['site/about']); ?>">
                                        <div class="title title_font">
                                            <span class="title-text">О нас</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="mt-root">
                                <div class="mt-root-item">
                                    <a href="<?= Url::to(['site/contact']); ?>">
                                        <div class="title title_font">
                                            <span class="title-text">Контакты</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="inside">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <?= $content; ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-xs-12">
                    <div class="footer-logo">
                        <a href="index.html">
                            <img src="/images/footer-logo.png" alt="fotter logo">
                        </a>
                    </div>
                    <p>BestSpend.ru - интернет-магазин электроники, аксессуаров известных брендов. Только оригинальное качество.</p>
                </div>
                <div class="col-sm-12 col-md-2  col-md-offset-2 col-xs-12 collapsed-block">
                    <div class="footer-links">
                        <h5 class="links-title">Информация<a class="expander visible-xs" href="#TabBlock-4">+</a></h5>
                        <div class="tabBlock" id="TabBlock-4">
                            <ul class="list-links list-unstyled">
                                <li><a title="Доставка" href="<?= Url::toRoute(['site/delivery']); ?>">Доставка</a></li>
                                <li><a title="О нас" href="<?= Url::toRoute(['site/about']); ?>">О нас</a></li>
                                <li><a title="Контакты" href="<?= Url::toRoute(['site/contact']); ?>">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-md-offset-1 col-xs-12 collapsed-block">
                    <div class="footer-links">
                        <h5 class="links-title">Рабочее время<a class="expander visible-xs" href="#TabBlock-5">+</a></h5>
                        <div class="tabBlock" id="TabBlock-5">
                            <div class="footer-description"> <b>Понедельник-Пятница:</b> 8:30 - 17:30 <br>
                                <b>Суббота:</b> 9:00 - 15:00 <br>
                                <b>Воскресенье:</b> Закрыто </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-coppyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 coppyright"> Copyright © 2018 <a href="/"> BestSpend.ru </a>. Все права защищены. </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>

    <!-- End Footer -->
</div>

<?php
\yii\bootstrap\Modal::begin([
    'header' => '<h2>Корзина</h2>',
    'id' => 'modal-cart',
    'size' => 'modal-lg',
    'footer' => '
                <div class="col-sm-4 left-b">
                    <button type="button" class="btn btn-warning">Продолжить покупки</button>
                </div>
                <div class="col-sm-4 center-b">
                    <a href="' . \yii\helpers\Url::to(['cart/view']) . '" type="button" class="btn btn-success">Оформить заказ</a>
                </div>
                <div class="col-sm-4 right-b">
                    <button type="button" class="btn btn-danger" id="clear-cart">Очистить корзину</button>
                </div>'
]);
\yii\bootstrap\Modal::end()
?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
