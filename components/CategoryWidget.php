<?php

namespace app\components;

use yii\base\Widget;
use app\models\Category;
use Yii;

class CategoryWidget extends Widget
{

    public $tpl;
    public $model;
    public $data; // Categories array
    public $tree; // Result of function from array to tree array
    public $menuHtml; // Ready HTML template

    public function init()
    {
        parent::init();
        if ($this->tpl === null) {
            $this->tpl = 'category';
        }
        $this->tpl .= '.php';
    }

    public function run()
    {
        if ($this->tpl == 'category.php') {
            // get cache
            $menu = Yii::$app->cache->get('side-menu');
            if ($menu) {
                return $menu;
            }
        }

        $this->data = Category::find()->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $this->menuHtml = $this->getMenuHtml($this->tree);

        if ($this->tpl == 'category.php') {
            Yii::$app->cache->set('side-menu', $this->menuHtml, 120);
        }

        return $this->menuHtml;
    }

    protected function getTree()
    {
        $tree = [];
        foreach ($this->data as $id=>&$node) {
            if (!$node['parent_id']) {
                $tree[$id] = &$node;
            } else {
                $this->data[$node['parent_id']]['childs'][$node['id']] = &$node;
            }
        }
        return $tree;

    }

    protected function getMenuHtml($tree, $tab = '')
    {
        // Empty variable for output HTML
        $str = '';
        // cycle the tree or the tree node
        foreach ($tree as $category)
        {
            $str .= $this->catToTemplate($category, $tab);
        }
        return $str;
    }

    // get each specific element of the category tree
    protected function catToTemplate($category, $tab)
    {
        // Buffers the output
        ob_start();
        include __DIR__ . '/category_tpl/' . $this->tpl;
        return ob_get_clean();
    }

}