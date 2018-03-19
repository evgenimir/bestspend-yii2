<?php if(!empty($session['cart'])): ?>
    <table class="table table-responsive table-hover table-striped">
        <table class="table">
            <thead>
            <tr>
                <th>Фото</th>
                <th>Название</th>
                <th>Количество</th>
                <th>Цена</th>
                <th><span class="glyphicon glyphicon-search" aria-hidden="true"></span></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($session['cart'] as $id => $item): ?>
            <tr>
                <td><?= \yii\helpers\Html::img("{$item['img']}",
                    ['alt' => $item['name'], 'height' => 50]); ?></td>
                <td><?= $item['name']; ?></td>
                <td><?= $item['qty']; ?></td>
                <td><?= $item['price']; ?></td>
                <td><span data-id="<?= $id; ?>" class="glyphicon glyphicon-remove text-danget del-item" aria-hidden="true"></span></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4">Итого</td>
                <td><?= $session['cart.qty']; ?></td>
            </tr>
            <tr>
                <td colspan="4">На сумму</td>
                <td><?= $session['cart.sum']; ?></td>
            </tr>
            </tbody>
        </table>
    </table>
<?php else: ?>
    <h3>Корзина пуста</h3>
<?php endif; ?>
