<?php if(!empty($brand)): ?>
    <li class="mt-root demo_custom_link_cms">
        <div class="mt-root-item">
            <a href="#">
                <div class="title title_font">
                    <span class="title-text">Бренды</span>
                </div>
            </a>
        </div>
        <ul class="menu-items col-md-3 col-sm-4 col-xs-12">
            <?php foreach ($brand as $item): ?>
            <li class="menu-item depth-1">
                <div class="title"> <a href="<?= yii\helpers\Url::to(['brand/view', 'alias' => $item['alias']]); ?>"><span><?= $item['name']; ?></span></a></div>
            </li>
            <?php endforeach; ?>
        </ul>
    </li>
<?php endif; ?>
