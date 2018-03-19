<li>
    <a href="<?= \yii\helpers\Url::to
    (['category/view', 'id' => $category['id']]);?>"
    ><?= $category['name']; ?></a>
    <?php if (isset($category['childs'])): ?>
        <div class="wrap-popup column1">
            <div class="popup">
                <ul class="nav">
                    <?= $this->getMenuHtml($category['childs']); ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
</li>