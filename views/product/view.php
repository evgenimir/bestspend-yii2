<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;

?>

<?php $mainImg = $product->getImage(); ?>

<!-- Main Container -->
<div class="main-container col1-layout">
    <div class="container">
        <div class="row">
            <div class="col-main">
                <div class="product-view-area">
                    <div class="product-big-image col-xs-12 col-sm-4 col-lg-4 col-md-4">
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="large-image">
                            <a href="#" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20">
                                <?= Html::img($mainImg->getUrl(),
                                    $options = [
                                        'alt' => $product['name'],
                                        'title' => $product['name'],
                                        'class' => 'zoom-img imgw2',
                                    ]
                                );?>
                            </a>
                        </div>

                        <!-- end: more-images -->

                    </div>
                    <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">
                        <div class="product-name">
                            <h1><?= $product['name']; ?></h1>
                        </div>
                        <div class="price-box">
                            <?php if ($product['old_price'] != 0): ?>
                            <p class="special-price">
                                <span class="price-label">Special Price</span>
                                <span class="price"> <?= $product['price']; ?> руб.</span>
                            </p>
                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> <?= $product['old_price']; ?></span> </p>
                            <?php else: ?>
                                <div class="regular-price">
                                    <div class="block">
                                        <div class="regular-price">
                                            <span class="price"> <?= $product['price']; ?> руб.</span>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="short-description">
                            <h2>Описание</h2>
                            <p><?= $product['content']; ?></p>
                            </div>
                        <div class="product-variation">
                            <form action="#" method="post">
                                <div class="cart-plus-minus">
                                    <label for="qty">Количество:</label>
                                    <div class="numbers-row">
                                        <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                                        <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                        <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
                                    </div>
                                </div>
                                <button data-id="<?= $product['id'];?>" class="button pro-add-to-cart add-to-cart" title="Добавить в корзину" type="button"><span><i class="fa fa-shopping-basket"></i> Добавить в корзину</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Main Container End -->

<!-- Related Product Slider -->

<?php if (!empty($sales)): ?>
<section class="upsell-product-area">
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="related-product-area">
                <div class="page-header">
                    <h2>Скидки</h2>
                </div>
                <div class="related-products-pro">
                    <div class="slider-items-products">
                        <div id="related-product-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col4 fadeInUp">
                                <?php foreach ($sales as $item): ?>
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
        </div>
    </div>
</div>
</section>
<!-- Related Product Slider End -->
<?php endif; ?>

<?php if (!empty($recommended)): ?>
<!-- Upsell Product Slider -->
<section class="upsell-product-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-header">
                    <h2>Рекомендуемые</h2>
                </div>
                <div class="slider-items-products">
                    <div id="upsell-product-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4">
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
    </div>
</section>
<!-- Upsell Product Slider End -->
<?php endif; ?>

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