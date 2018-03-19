<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php $img = $model->getImage();?>
    <?php $images = $model->getImages();?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'category_id',
            'brand_id',
            'name',
            'alias',
            'content:html',
            'price',
            'old_price',
            'page_title',
            'keywords:ntext',
            'description:ntext',
            [
                'attribute' => 'image',
                'value' => "<img src='{$img->getUrl('x300')}'>",
                'format' => 'html',
            ],
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
        ],
    ]) ?>

</div>
