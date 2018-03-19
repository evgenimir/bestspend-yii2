<?php
/**
 * Created by PhpStorm.
 * User: Zheka1
 * Date: 18.02.2018
 * Time: 19:19
 */

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use app\models\ProductCategory;
use Yii;
use yii\data\Pagination;

/**
 * Class CategoryController
 * @package app\controllers
 */
class CategoryController extends AppController
{
    // "category" layout
    // /views/layouts/category.php
    public $layout = 'category';
    public $data;

    /**
     * Displays category page - all products for a certain category
     *
     * @param $id string
     * @return string
     *
     * @throws \yii\web\HttpException
     * @throws Pagination
     *
     * @author Miroshnichenko E.A.
     * @copyright 2018
     * @version 1.0
     */
    public function actionView($id)
    {
        $parentCategory = Category::getParentCategory($id);
        // if the category exists and has children get all related categories and get their products
        if (!empty($parentCategory)) {
            $category = Category::findOne($id);
            if(empty($category)) {
                throw new \yii\web\HttpException(404, 'Категория не найдена.');
            }
            $ids = [];

            // get array with children category id's
            foreach ($parentCategory as $itemArray) {
                array_push($ids, $itemArray['id']);
            }
            $query = Product::find()->where(['category_id' => $ids]);

            // Pagination plugin
            $pages = new Pagination([
                'totalCount' => $query->count(),
                'pageSize' => 12,
                'forcePageParam' => false,
                'pageSizeParam' => false
            ]);
            $products = $query->offset($pages->offset)->limit($pages->limit)->all();

            $this->setMeta(
                $parentCategory['page_title'] . ' | BestSpend',
                $parentCategory['keywords'],
                $parentCategory['description']
            );

        } else {
            // if category hasn't children get products of category
            $category = Category::findOne($id);
            if(empty($category)) {
                throw new \yii\web\HttpException(404, 'Категория не найдена.');
            }
            $query = Product::find()->where(['category_id' => $category['id']]);

            // Pagination plugin
            $pages = new Pagination([
                'totalCount' => $query->count(),
                'pageSize' => 8,
                'forcePageParam' => false,
                'pageSizeParam' => false
            ]);

            $products = $query->offset($pages->offset)->limit($pages->limit)->all();
            // set meta tags
            $this->setMeta(
                $category['page_title'] . ' | BestSpend',
                $category['keywords'],
                $category['description']
            );
        }

        /**
         *
         * @var $products array
         * @var $pages array
         * @var $category array
         *
         * @return string
         *
         */
        return $this->render('view', [
            'products' => $products,
            'pages' => $pages,
            'category' => $category,
            'parentCategory' => $parentCategory,
        ]);
    }
}