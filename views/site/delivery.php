<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Условия доставки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

    <h1><?= Html::encode($this->title) ?></h1>

    <ul>
        <li>Стоимость услуги доставки <span class="bold">не зависит</span> от состава заказа.</li>
        <li>Доставка всего заказа осуществляется единовременно и по фиксированной цене.</li>
        <li>Стандартный интервал доставки заказов &mdash; ежедневно с <span class="bold">10:00</span> до <span class="bold">22:00</span>.</li>
    </ul>
    <p>Указание более точного интервала доставки увеличивает стоимость доставки на <span class="bold">100 р.</span></p>
    <p>Доступные варианты интервалов доставки<span class="bold">:</span></p>
    <ul>
        <li>с <span class="bold">10:00</span> до <span class="bold">15:00</span>;</li>
        <li>с <span class="bold">15:00</span> до <span class="bold">18:00</span>;</li>
        <li>с <span class="bold">18:00</span> до <span class="bold">22:00</span>.</li>
    </ul>
    <p>Доставка заказов <span class="bold">за пределы МКАД</span> осуществляется только в интервале с <span class="bold">10:00</span> до <span class="bold">22:00</span>.</p>
    <p><span class="italic"><span class="bold">Точное время</span> приезда курьера будет сообщено в день доставки до 12:00 (SMS-уведомлении и по телефону).</span></p>
    <p><em>Товары, на которые действует акция "бесплатная доставка", доставляются бесплатно <span class="bold">только</span> по Москве в пределах МКАД. Доставка по Московской области (от 40 км. до 100 км от МКАД), и <span class="bold">срочная доставка</span> день в день осуществляется <span class="bold">по тарифам</span>.</em></p>
    <p><em><span class="bold">Важно:</span> для клиентов со статусом <span class="bold">VIP</span> и <span class="bold">Супер VIP</span> действуют скидки на <span class="bold">стандартную доставку</span> <span class="bold">30%</span> и <span class="bold">50%</span> соответственно. (<a href="/info/vip-status.html">подробнее</a>)</em></p>
    <p><em><span class="bold">Важно:</span> при доставке за пределы МКАД (от 40 км. до 100 км.) потребуется предварительная оплата стоимости доставки.</em></p>
    
</div>
