<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="logo-c">
        <img src="/images/logo.png" alt="BestSpend" title="BestSpend">
    </div>

    <ul class="cont-ul">
        <li><i class="fa fa-map-marker"></i> Москва, ул. Самуила Маршака 20, 10811</li>
        <li><i class="fa fa-envelope"></i> info@bestspend.ru</li>
        <li><i class="fa fa-phone"></i> +7 460 444 33 20</li>
    </ul>

</div>
