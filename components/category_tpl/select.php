<option
        value="<?= $category['id']; ?>"
        <?php if ($category['id'] == $this->model['id']) echo 'disabled';?>
        <?php if ($category['id'] == $this->model['parent_id']) echo 'selected';?>>
    <?= $tab . $category['name']; ?>
</option>

<?php if (isset($category['childs'])): ?>
    <ul>
        <?= $this->getMenuHtml($category['childs'], $tab . '- '); ?>
    </ul>
<?php endif; ?>