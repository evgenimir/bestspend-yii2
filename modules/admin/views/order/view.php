<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-view">

    <h1>Просмотр заказа №: <?= $model->id; ?></h1>

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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'created_at',
            'updated_at',
            'qty',
            'sum',
            [
                'attribute' => 'status',
                'value' => !$model->status ? '<span class="text-danger">Активен</span>' :
                '<span class="text-success">Завершен</span>',
                'format' => 'html',
            ],
            'name',
            'email:email',
            'phone',
            'address',
            'comment:ntext',
        ],
    ]) ?>

    <?php $items = $model->orderItems;?>
    <div class="table-responsive">
    <table class="table table-responsive table-hover table-striped">
        <table class="table">
            <thead>
            <tr>
                <th>№</th>
                <th>Название</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Сумма</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($items as $item): ?>
                <tr>
                    <td><?= $item->product_id ;?></td>
                    <td><?= $item['name']; ?></td>
                    <td><?= $item['price']; ?></td>
                    <td><?= $item['qty_item']; ?></td>
                    <td><?= $item['sum_item']; ?></td>
                    </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </table>
    </div>

</div>
