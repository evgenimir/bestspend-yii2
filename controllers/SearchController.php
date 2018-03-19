<?php
/**
 * Created by PhpStorm.
 * User: Zheka1
 * Date: 20.02.2018
 * Time: 15:54
 */

namespace app\controllers;
use app\models\Product;
use Yii;
use yii\data\Pagination;

class SearchController extends AppController
{

    /**
     * Search products
     *
     * @return string
     *
     * @author Miroshnichenko E.A.
     * @copyright 2018
     * @version 1.0
     */
    public function actionCategory()
    {
        $request = Yii::$app->request->get('request');
        $request = trim($request);
        $this->setMeta('Поиск: ' . $request . ' | BestSpend');
        if(!$request) {
            return $this->render('incategory');
        }

        $query = Product::find()->where(['like', 'name', $request]);

        // Pagination plugin
        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => 4,
            'forcePageParam' => false,
            'pageSizeParam' => false
        ]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('incategory',[
            'products' => $products,
            'pages' => $pages,
            'request' => $request,
        ]);
    }

}