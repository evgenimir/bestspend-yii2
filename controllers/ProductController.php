<?php
/**
 * Created by PhpStorm.
 * User: Zheka1
 * Date: 20.02.2018
 * Time: 11:57
 */

namespace app\controllers;
use app\models\Product;
use Yii;


class ProductController extends AppController
{

    public $layout = 'product';

    /**
     * Displays product page
     *
     * @return string
     *
     * @throws \yii\web\HttpException
     *
     * @author Miroshnichenko E.A.
     * @copyright 2018
     * @version 1.0
     */
    public function actionView()
    {
        $alias = Yii::$app->request->get('alias');

        $product = Product::findOne(['alias' => $alias]);
        if(empty($product)) {
            throw new \yii\web\HttpException(404, 'Товар не найден');
        }
        $sales = Product::getSale();
        $recommended = Product::getRecommended();
        $this->setMeta(
            $product['page_title'] . ' | BestSpend',
            $product['keywords'],
            $product['description']
        );

        return $this->render('view', [
            'product' => $product,
            'sales' => $sales,
            'recommended' => $recommended,
        ]);
    }

}