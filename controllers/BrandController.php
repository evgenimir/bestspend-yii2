<?php
/**
 * Created by PhpStorm.
 * User: Zheka1
 * Date: 28.02.2018
 * Time: 12:24
 */

namespace app\controllers;

use app\models\Brand;
use app\models\Product;
use Yii;
use yii\data\Pagination;

/**
 * Class BrandController
 * @package app\controllers
 */
class BrandController extends AppController
{
    public $layout = 'category';

    /**
     * Displays brand page - all products for a certain brand
     *
     * @return string
     *
     * @throws \yii\web\HttpException
     * @throws Pagination
     *
     * @author Miroshnichenko E.A.
     * @copyright 2018
     * @version 1.0
     */
    public function actionView()
    {
        $alias = Yii::$app->request->get('alias');
        $brand = Brand::findOne(['alias' => $alias]);
        if(empty($brand)) {
            throw new \yii\web\HttpException(404, 'Бренд не найден.');
        }
        $query = Product::find()->where(['brand_id' => $brand['id']]);

        // Pagination plugin settings
        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => 10,
            'forcePageParam' => false,
            'pageSizeParam' => false
        ]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();

        $this->setMeta(
            $brand['page_title'] . ' | BestSpend',
            $brand['keywords'],
            $brand['description']
        );

        /**
         *
         * @var $products string
         * @var $pages string
         * @var $brand string
         *
         * @return string
         */
        return $this->render('view', [
            'products' => $products,
            'pages' => $pages,
            'brand' => $brand,
        ]);
    }
}