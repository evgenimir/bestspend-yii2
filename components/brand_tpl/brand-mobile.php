<?php foreach ($brand as $item): ?>
    <li>
        <a href="<?= yii\helpers\Url::to(['brand/view', 'alias' => $item['alias']]); ?>"><?= $item['name']; ?></a>
    </li>
<?php endforeach; ?>
