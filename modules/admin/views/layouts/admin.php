<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAssetAdmin;
use yii\helpers\Url;

AppAssetAdmin::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<body class="sidebar-fixed header-fixed">
<div class="page-wrapper">
    <nav class="navbar page-header">
        <a href="#" class="btn btn-link sidebar-mobile-toggle d-md-none mr-auto">
            <i class="fa fa-bars"></i>
        </a>

        <a class="navbar-brand" href="<?= Url::to(['/admin/order']) ;?>">
            <img src="/web/admin/imgs/logo.png" alt="logo">
        </a>

        <a href="#" class="btn btn-link sidebar-toggle d-md-down-none">
            <i class="fa fa-bars"></i>
        </a>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="ml-1 d-md-down-none">Добавить</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">

                    <a href="<?= Url::to(['product/create']) ;?>" class="dropdown-item">
                        <i class="fa fa-download"></i> Товар
                    </a>

                    <a href="<?= Url::to(['product/category']) ;?>" class="dropdown-item">
                        <i class="fa fa-folder-open"></i> Категорию
                    </a>

                    <a href="<?= Url::to(['product/brand']) ;?>" class="dropdown-item">
                        <i class="fa fa-tag"></i> Бренд
                    </a>

                </div>
            </li>
        </ul>
    </nav>

    <div class="main-container">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-title">Навигация</li>

                    <li class="nav-item">
                        <a href="<?= Url::to(['/admin/order']) ;?>" class="nav-link active">
                            <i class="icon icon-speedometer"></i>Панель управления
                        </a>
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a href="#" class="nav-link nav-dropdown-toggle">
                            <i class="fa fa-mobile"></i> Товары <i class="fa fa-caret-left"></i>
                        </a>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="<?= Url::to(['product/create']) ;?>" class="nav-link">
                                    <i class="fa fa-plus-square"></i> Новый товар
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?= Url::to(['product/index']) ;?>" class="nav-link">
                                    <i class="fa fa-list-alt"></i> Список товаров
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a href="#" class="nav-link nav-dropdown-toggle">
                            <i class="fa fa-folder-open"></i> Категории <i class="fa fa-caret-left"></i>
                        </a>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="<?= Url::to(['category/create']) ;?>" class="nav-link">
                                    <i class="fa fa-plus-square"></i> Добавить категорию
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?= Url::to(['category/index']) ;?>" class="nav-link">
                                    <i class="fa fa-list-alt"></i> Список категори
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a href="#" class="nav-link nav-dropdown-toggle">
                            <i class="fa fa-tags"></i> Бренды <i class="fa fa-caret-left"></i>
                        </a>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="<?= Url::to(['brand/create']) ;?>" class="nav-link">
                                    <i class="fa fa-plus-square"></i> Добавить бренд
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?= Url::to(['brand/index']) ;?>" class="nav-link">
                                    <i class="fa fa-list-alt"></i> Список брендов
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a href="#" class="nav-link nav-dropdown-toggle">
                            <i class="fa fa-address-card"></i> Администраторы <i class="fa fa-caret-left"></i>
                        </a>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="<?= Url::to(['brand/create']) ;?>" class="nav-link">
                                    <i class="fa fa-user-plus"></i> Добавить нового
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?= Url::to(['brand/index']) ;?>" class="nav-link">
                                    <i class="fa fa-list-alt"></i> Список
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-title"></li>

                    <li class="nav-item">
                        <a href="<?= Url::to(['order/index']) ;?>" class="nav-link">
                            <i class="fa fa-shopping-cart"></i> Заказы
                        </a>
                    </li>



                    <li class="nav-title"></li>

                    <li class="nav-item">
                        <a target="_blank" href="/" class="nav-link">
                            <i class="icon icon-grid"></i> Перейти на сайт
                        </a>
                    </li>

                </ul>
            </nav>
        </div>

        <div class="content">
            <?php if( Yii::$app->session->hasFlash('success') ): ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo Yii::$app->session->getFlash('success'); ?>
                </div>
            <?php endif;?>
            <div class="container-fluid">
                <div class="row">
                    <div style="clear: both; float: none;"></div>
                    <?= $content; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>