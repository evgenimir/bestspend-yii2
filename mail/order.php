
    <table class="table table-responsive table-hover table-striped">
        <table class="table">
            <thead>
            <tr>
                <th>Фото</th>
                <th>Название</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Сумма</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($session['cart'] as $id => $item): ?>
                <tr>
                    <td><?= \yii\helpers\Html::img("$web/images/products/{$item['img']}",
                            ['alt' => $item['name'], 'height' => 50]); ?></td>
                    <td><?= $item['name']; ?></td>
                    <td><?= $item['price']; ?></td>
                    <td><?= $item['qty']; ?></td>
                    <td><?= $item['price']*$item['qty']; ?></td>
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
