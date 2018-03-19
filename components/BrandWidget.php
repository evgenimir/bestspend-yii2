<?php

namespace app\components;

use yii\base\Widget;
use app\models\Brand;
use Yii;

class BrandWidget extends Widget
{

    public $tpl;
    public $model;
    public $data; // Brands array
    public $tree; // Result of function from array to tree array
    public $menuHtml; // Ready HTML template

    public function init()
    {
        parent::init();
        if ($this->tpl === null) {
            $this->tpl = 'brand';
        }
        $this->tpl .= '.php';
    }

    public function run()
    {
        if ($this->tpl == 'brand.php') {
            // get cache
            $menu = Yii::$app->cache->get('brand-menu');
            if ($menu) {
                return $menu;
            }
        }

        $this->data = Brand::find()->indexBy('id')->asArray()->all();
        $this->menuHtml = $this->brandToTemplate($this->data);

        if ($this->tpl == 'category.php') {
            Yii::$app->cache->set('brand-menu', $this->menuHtml, 120);
        }

        return $this->menuHtml;
    }

    protected function brandToTemplate($brand)
    {
        ob_start();
        include __DIR__ . '/brand_tpl/' . $this->tpl;
        return ob_get_clean();
    }

}
