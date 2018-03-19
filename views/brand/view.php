<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>

<!-- Main Container -->
<div class="main-container col1-layout">
    <div class="container">
        <div class="row">
            <div class="col-main col-sm-12 col-xs-12">
                <div class="shop-inner">
                    <div class="page-title">
                        <h2>Все товары бренда "<?= $brand['name']; ?>"</h2>
                    </div>
                    <?php if (!empty($products)): ?>
                        <div class="product-grid-area">
                            <ul class="products-grid">
                                <?php foreach ($products as $item): ?>
                                    <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
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
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="pagination-area ">
                            <?php
                            echo LinkPager::widget([
                                'pagination' => $pages,
                            ]);
                            ?>
                        </div>
                    <?php else: ?>
                        <p>Извините, товаров этого бренда пока нет</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Container End -->