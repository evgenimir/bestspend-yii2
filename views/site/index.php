<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- Slideshow  -->
<div class="main-slider" id="home">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 banner-left hidden-xs"><img src="images/banner-left.jpg" alt="banner"></div>
            <div class="col-sm-9 col-md-9 col-lg-9 col-xs-12 jtv-slideshow">
                <div id="jtv-slideshow">
                    <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
                        <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                            <ul>
                                <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src='images/slider/slide-1.jpg' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                                    <div class="caption-inner left">
                                        <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='50'  data-y='110'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>BestSpend.ru</div>
                                        <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='50'  data-y='160'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>лучшее</div>
                                        <div class='tp-caption' data-x='72'  data-y='230'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Известные бренды по скидкам.</div>
                                    </div>
                                </li>
                                <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src='images/slider/slide-3.jpg' data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                                    <div class="caption-inner">
                                        <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='100'  data-y='160'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap; color:#fff; text-shadow:none;'>В ногу со временем</div>
                                        <div class='tp-caption' data-x='250'  data-y='230'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap; color:#f8f8f8;'>С новейшими гаджетами, подчеркивающие успешность</div>
                                    </div>
                                </li>
                            </ul>
                            <div class="tp-bannertimer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- service section -->
<div class="jtv-service-area">
    <div class="container">
        <div class="row">
            <div class="col col-md-3 col-sm-6 col-xs-12">
                <div class="block-wrapper ship">
                    <div class="text-des">
                        <div class="icon-wrapper"><i class="fa fa-paper-plane"></i></div>
                        <div class="service-wrapper">
                            <h3>Бесплатная доставка</h3>
                            <p>На сумму от 50000 руб.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-3 col-sm-6 col-xs-12 ">
                <div class="block-wrapper return">
                    <div class="text-des">
                        <div class="icon-wrapper"><i class="fa fa-rotate-right"></i></div>
                        <div class="service-wrapper">
                            <h3>100% возврат средств</h3>
                            <p>При не соответствии описания </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-3 col-sm-6 col-xs-12">
                <div class="block-wrapper support">
                    <div class="text-des">
                        <div class="icon-wrapper"><i class="fa fa-umbrella"></i></div>
                        <div class="service-wrapper">
                            <h3>Поддержка 24/7</h3>
                            <p>Звоните: 8 (490) 156 78 23</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-3 col-sm-6 col-xs-12">
                <div class="block-wrapper user">
                    <div class="text-des">
                        <div class="icon-wrapper"><i class="fa fa-tags"></i></div>
                        <div class="service-wrapper">
                            <h3>Скидки</h3>
                            <p>Скидки до 55%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- All products-->

<div class="container">
    <div class="home-tab">
        <div class="tab-title text-left">
            <h2>Лучшее</h2>
            <ul class="nav home-nav-tabs home-product-tabs">
                <li class="active"><a href="#hits" data-toggle="tab" aria-expanded="false">Хиты</a></li>

                <?php if (!empty($new)): ?>
                <li><a href="#newv" data-toggle="tab" aria-expanded="false">Новинки</a></li>
                <?php endif; ?>

                <?php if (!empty($recommended)): ?>
                <li><a href="#recommended" data-toggle="tab" aria-expanded="false">Рекомендуемые</a></li>
                <?php endif; ?>
            </ul>
        </div>
        <div id="productTabContent" class="tab-content">

            <?php if (!empty($hits)): ?>
            <div class="tab-pane active in" id="hits">
                <div class="featured-pro">
                    <div class="slider-items-products">
                        <div id="computer-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col4">
                                <?php foreach ($hits as $item): ?>
                                    <?php $mainImg = $item->getImage();?>
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <?php if($item['new'] == 1): ?>
                                                    <div class="icon-new-label new-left">New</div>
                                                <?php endif; ?>
                                                <?php if($item['sale'] == 1): ?>
                                                    <div class="icon-sale-label sale-left">Sale</div>
                                                <?php endif; ?>
                                                <div class="pr-img-area midd252">
                                                    <a class="middle252" title="<?= $item['name']; ?>" href="<?= Url::to(['product/view', 'alias' => $item['alias']]) ;?>">
                                                        <figure>
                                                            <?= Html::img($mainImg->getUrl(),
                                                                $options = [
                                                                    'alt' => $item['name'],
                                                                    'title' => $item['name'],
                                                                    'class' => 'first-img imgw2',
                                                                ]
                                                            );?>
                                                        </figure>
                                                    </a> </div>
                                                <div class="pr-info-area">
                                                    <div class="pr-button">
                                                        <div class="mt-button quick-view">
                                                            <a title="<?= $item['name']; ?>" href="<?= Url::to(['product/view', 'alias' => $item['alias']]) ;?>">
                                                                <i class="fa fa-search"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Product title here" href="single_product.html"><?= $item['name']; ?></a> </div>
                                                    <div class="item-content">
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price"><?= $item['price']; ?> руб.</span> </span> </div>
                                                        </div>
                                                        <div class="pro-action">
                                                            <button type="button" data-id="<?= $item['id'];?>" class="add-to-cart"><span> Добавить в корзину</span> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if (!empty($new)): ?>
                <div class="tab-pane fade" id="newv">
                    <div class="top-sellers-pro">
                        <div class="slider-items-products">
                            <div id="smartphone-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col4 ">
                                    <?php foreach ($new as $item): ?>
                                        <?php $mainImg = $item->getImage();?>
                                        <div class="product-item">
                                            <div class="item-inner">
                                                <div class="product-thumbnail">
                                                    <?php if($item['new'] == 1): ?>
                                                        <div class="icon-new-label new-left">New</div>
                                                    <?php endif; ?>
                                                    <?php if($item['sale'] == 1): ?>
                                                        <div class="icon-sale-label sale-left">Sale</div>
                                                    <?php endif; ?>
                                                    <div class="pr-img-area midd252">
                                                        <a class="middle252" title="<?= $item['name']; ?>" href="<?= Url::to(['product/view', 'alias' => $item['alias']]) ;?>">
                                                            <figure>
                                                                <?= Html::img($mainImg->getUrl(),
                                                                    $options = [
                                                                        'alt' => $item['name'],
                                                                        'title' => $item['name'],
                                                                        'class' => 'first-img imgw2',
                                                                    ]
                                                                );?>
                                                            </figure>
                                                        </a> </div>
                                                    <div class="pr-info-area">
                                                        <div class="pr-button">
                                                            <div class="mt-button quick-view">
                                                                <a title="<?= $item['name']; ?>" href="<?= Url::to(['product/view', 'alias' => $item['alias']]) ;?>">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Product title here" href="single_product.html"><?= $item['name']; ?></a> </div>
                                                        <div class="item-content">
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price"><?= $item['price']; ?> руб.</span> </span> </div>
                                                            </div>
                                                            <div class="pro-action">
                                                                <button type="button" data-id="<?= $item['id'];?>" class="add-to-cart"><span> Добавить в корзину</span> </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (!empty($recommended)): ?>
                <div class="tab-pane fade" id="recommended">
                    <div class="top-sellers-pro">
                        <div class="slider-items-products">
                            <div id="smartphone-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col4 ">
                                    <?php foreach ($recommended as $item): ?>
                                        <?php $mainImg = $item->getImage();?>
                                        <div class="product-item">
                                            <div class="item-inner">
                                                <div class="product-thumbnail">
                                                    <?php if($item['new'] == 1): ?>
                                                        <div class="icon-new-label new-left">New</div>
                                                    <?php endif; ?>
                                                    <?php if($item['sale'] == 1): ?>
                                                        <div class="icon-sale-label sale-left">Sale</div>
                                                    <?php endif; ?>
                                                    <div class="pr-img-area midd252">
                                                        <a class="middle252" title="<?= $item['name']; ?>" href="<?= Url::to(['product/view', 'alias' => $item['alias']]) ;?>">
                                                            <figure>
                                                                <?= Html::img($mainImg->getUrl(),
                                                                    $options = [
                                                                        'alt' => $item['name'],
                                                                        'title' => $item['name'],
                                                                        'class' => 'first-img imgw2',
                                                                    ]
                                                                );?>
                                                            </figure>
                                                        </a> </div>
                                                    <div class="pr-info-area">
                                                        <div class="pr-button">
                                                            <div class="mt-button quick-view">
                                                                <a title="<?= $item['name']; ?>" href="<?= Url::to(['product/view', 'alias' => $item['alias']]) ;?>">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"> <a title="Product title here" href="single_product.html"><?= $item['name']; ?></a> </div>
                                                        <div class="item-content">
                                                            <div class="item-price">
                                                                <div class="price-box"> <span class="regular-price"> <span class="price"><?= $item['price']; ?> руб.</span> </span> </div>
                                                            </div>
                                                            <div class="pro-action">
                                                                <button type="button" data-id="<?= $item['id'];?>" class="add-to-cart"><span> Добавить в корзину</span> </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>
<div class="inner-box" style="padding: 20px 0">
    <div class="container">
        <div class="row">
            <!-- Banner -->
            <div class="col-md-3 top-banner hidden-sm">
                <div class="jtv-banner3">
                    <div class="jtv-banner3-inner"><a href="#"><img src="images/sub1.jpg" alt="HTML template"></a>
                        <div class="hover_content">
                            <div class="hover_data">
                                <div class="title"> Распродажа </div>
                                <div class="desc-text">Скидки до 55%</div>
                                <span>Телефоны, камеры, ноутбуки</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (!empty($sale)): ?>
            <div class="col-sm-12 col-md-9 jtv-best-sale special-pro">
                <div class="jtv-best-sale-list">
                    <div class="wpb_wrapper">
                        <div class="best-title text-left">
                            <h2>Скидки</h2>
                        </div>
                    </div>
                    <div class="slider-items-products">
                        <div id="jtv-best-sale-slider" class="product-flexslider">
                            <div class="slider-items">
                                <?php foreach ($sale as $item): ?>
                                    <?php $mainImg = $item->getImage();?>
                                    <div class="product-item">
                                        <div class="item-inner">
                                            <div class="product-thumbnail">
                                                <?php if($item['new'] == 1): ?>
                                                    <div class="icon-new-label new-left">New</div>
                                                <?php endif; ?>
                                                <?php if($item['sale'] == 1): ?>
                                                    <div class="icon-sale-label sale-left">Sale</div>
                                                <?php endif; ?>
                                                <div class="pr-img-area midd200">
                                                    <a class="middle200" title="<?= $item['name']; ?>" href="<?= Url::to(['product/view', 'alias' => $item['alias']]) ;?>">
                                                        <figure>
                                                            <?= Html::img($mainImg->getUrl(),
                                                                $options = [
                                                                    'alt' => $item['name'],
                                                                    'title' => $item['name'],
                                                                    'class' => 'first-img imgw',
                                                                ]
                                                            );?>
                                                        </figure>
                                                    </a> </div>
                                                <div class="pr-info-area">
                                                    <div class="pr-button">
                                                        <div class="mt-button quick-view">
                                                            <a title="<?= $item['name']; ?>" href="<?= Url::to(['product/view', 'alias' => $item['alias']]) ;?>">
                                                                <i class="fa fa-search"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"> <a title="Product title here" href="single_product.html"><?= $item['name']; ?></a> </div>
                                                    <div class="item-content">
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price"><?= $item['price']; ?> руб.</span> </span> </div>
                                                        </div>
                                                        <div class="pro-action">
                                                            <button type="button" data-id="<?= $item['id'];?>" class="add-to-cart"><span> Добавить в корзину</span> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<section class="blog-post-wrapper"></section>
<div class="container">
    <div class="row">
        <div class="daily-deal-section">
            <!-- daily deal section-->
            <div class="col-md-7 daily-deal">
                <h3 class="deal-title">Ограниченные предложения</h3>
                <div class="title-divider"><span></span></div>
                <p>Акция продлится до 30 апреля 2018 года<br>Ограниченное количество товаров по данной акции</p>
                <div class="hot-offer-text">Распродажа <span>2018</span></div>
                <div class="box-timer"> <span class="des-hot-deal">Спешите! Последние скидки</span>
                    <div class="time" data-countdown="countdown" data-date="04-30-2018-10-20-50"></div>
                </div>
            </div>
            <?php if (!empty($salesDsc)): ?>
            <div class="col-md-5 hot-pr-img-area">
                <div id="daily-deal-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4 ">
                        <?php foreach ($salesDsc as $item): ?>
                            <?php $mainImg = $item->getImage();?>
                            <div class="pr-img-area">
                                <a title="<?= $item['name']; ?>" href="<?= Url::to(['product/view', 'alias' => $item['alias']]) ;?>">
                                    <figure>
                                        <?= Html::img($mainImg->getUrl(),
                                            $options = [
                                                'alt' => $item['name'],
                                                'title' => $item['name'],
                                                'class' => 'first-img imga',
                                            ]
                                        );?>
                                    </figure>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="banner-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <figure> <a href="#" target="_self" class="image-wrapper"><img src="images/banner-laptop.jpg" alt="banner laptop"></a></figure>
            </div>
            <div class="col-sm-6">
                <figure> <a href="#" target="_self" class="image-wrapper"><img src="images/banner-mob.jpg" alt="banner moblie"></a></figure>
            </div>
        </div>
    </div>
</div>

<section class="blog-post-wrapper"></section>

<div class="featured-products">
    <div class="container">
        <div class="row">

            <!-- Best Deals -->
            <?php if (!empty($bestDeals)): ?>
            <div class="col-sm-12 col-md-4 jtv-best-sale">
                <div class="jtv-best-sale-list">
                    <div class="wpb_wrapper">
                        <div class="best-title text-left">
                            <h2>Лучшие предложения</h2>
                        </div>
                    </div>
                    <div class="slider-items-products">
                        <div id="toprate-products-slider" class="product-flexslider">
                            <div class="slider-items">
                                <ul class="products-grid">
                                    <?php foreach ($bestDeals as $item): ?>
                                    <?php $mainImg = $item->getImage();?>
                                    <li class="item">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <a class="product-image" title="<?= $item['name']; ?>" href="<?= Url::to(['product/view', 'alias' => $item['alias']]) ;?>">
                                                    <figure>
                                                        <?= Html::img($mainImg->getUrl(),
                                                            $options = [
                                                                'alt' => $item['name'],
                                                                'title' => $item['name'],
                                                                'class' => 'imgz',
                                                            ]
                                                        );?>
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"><a title="<?= $item['name']; ?>" href="<?= Url::to(['product/view', 'alias' => $item['alias']]) ;?>"><?= $item['name'];?> </a> </div>
                                                    <div class="item-price">
                                                        <div class="price-box"> <span class="regular-price"> <span class="price"><?= $item['price'];?> руб.</span> </span> </div>
                                                    </div>
                                                    <div class="pro-action">
                                                        <button data-id="<?= $item['id'];?>" type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <!-- Banner -->
            <div class="col-md-4 top-banner hidden-sm">
                <div class="jtv-banner3">
                    <div class="jtv-banner3-inner"><a href="#"><img src="images/sub1a.jpg" alt="HTML template"></a>
                        <div class="hover_content">
                            <div class="hover_data bottom">
                                <div class="desc-text">Товары лучших брендов </div>
                                <div class="title">По скидкам</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (!empty($superSpecial)): ?>
            <div class="col-sm-12 col-md-4 jtv-best-sale">
                <div class="jtv-best-sale-list">
                    <div class="wpb_wrapper">
                        <div class="best-title text-left">
                            <h2>Супер специальные</h2>
                        </div>
                    </div>
                    <div class="slider-items-products">
                        <div id="toprate-products-slider" class="product-flexslider">
                            <div class="slider-items">
                                <ul class="products-grid">
                                    <?php foreach ($superSpecial as $item): ?>
                                        <?php $mainImg = $item->getImage();?>
                                        <li class="item">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <a class="product-image" title="<?= $item['name']; ?>" href="<?= Url::to(['product/view', 'alias' => $item['alias']]) ;?>">
                                                        <figure>
                                                            <?= Html::img($mainImg->getUrl(),
                                                                $options = [
                                                                    'alt' => $item['name'],
                                                                    'title' => $item['name'],
                                                                    'class' => 'imgz',
                                                                ]
                                                            );?>
                                                        </figure>
                                                    </a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a title="<?= $item['name']; ?>" href="<?= Url::to(['product/view', 'alias' => $item['alias']]) ;?>"><?= $item['name'];?> </a> </div>
                                                        <div class="item-price">
                                                            <div class="price-box"> <span class="regular-price"> <span class="price"><?= $item['price'];?> руб.</span> </span> </div>
                                                        </div>
                                                        <div class="pro-action">
                                                            <button data-id="<?= $item['id'];?>" type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- our clients Slider -->

<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="our-clients">
                <div class="slider-items-products">
                    <div id="our-clients-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col6">
                            <div class="item"><img src="images/brand1.png" alt="Image"></a> </div>
                            <div class="item"><img src="images/brand2.png" alt="Image"></a> </div>
                            <div class="item"><img src="images/brand3.png" alt="Image"></a> </div>
                            <div class="item"><img src="images/brand4.png" alt="Image"></a> </div>
                            <div class="item"><img src="images/brand5.png" alt="Image"></a> </div>
                            <div class="item"><img src="images/brand6.png" alt="Image"></a> </div>
                            <div class="item"><img src="images/brand7.png" alt="Image"></a> </div>
                            <div class="item"><img src="images/brand8.png" alt="Image"></a> </div>
                            <div class="item"><img src="images/brand9.png" alt="Image"></a> </div>
                            <div class="item"><img src="images/brand10.png" alt="Image"></a> </div>
                            <div class="item"><img src="images/brand11.png" alt="Image"></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>