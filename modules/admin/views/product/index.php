<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список товаров';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить товар', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'alias',
            [
                'attribute' => 'category_id',
                'value' => function ($data) {
                    return $data->category->name;
                }
            ],
            [
                'attribute' => 'brand_id',
                'value' => function ($data) {
                    return $data->brand->name;
                }
            ],
            //'content:ntext',
            //'price',
            //'old_price',
            //'page_title',
            //'keywords:ntext',
            //'description:ntext',
            //'img',
            [
                'attribute' => 'hit',
                'value' => function ($data) {
                    return !$data->hit ? 'Нет' : '<span class="text-success">Да</span>';
                },
                'format' => 'html',
            ],
            [
                'attribute' => 'new',
                'value' => function ($data) {
                    return !$data->new ? 'Нет' : '<span class="text-success">Да</span>';
                },
                'format' => 'html',
            ],
            [
                'attribute' => 'sale',
                'value' => function ($data) {
                    return !$data->sale ? 'Нет' : '<span class="text-success">Да</span>';
                },
                'format' => 'html',
            ],
            [
                'attribute' => 'recommended',
                'value' => function ($data) {
                    return !$data->recommended ? 'Нет' : '<span class="text-success">Да</span>';
                },
                'format' => 'html',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>