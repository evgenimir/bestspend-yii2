<?php
/**
 * Created by PhpStorm.
 * User: Zheka1
 * Date: 18.02.2018
 * Time: 13:18
 */

namespace app\models;

use yii\db\ActiveRecord;
use paulzi\adjacencyList\AdjacencyListBehavior;

/**
 * Class Category - model of product categories
 * @package app\models
 */
class Category extends ActiveRecord
{
    // CostaRico image plugin behaviors
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ],
            [
                'class' => AdjacencyListBehavior::className(),
            ],
        ];
    }

    // "category" - name of the table in the database
    public static function tableName()
    {
        return 'category';
    }

    /**
     * returns array of products by "category_id" column in product_category table
     * @return array <p>Array with categories</p>
     */
    public function getProductCategory()
    {
        return $this->hasMany(ProductCategory::className(), ['category_id' => 'id']);
    }

    public static function getParentCategory($id)
    {
        return Category::find()->where(['parent_id' => $id])->asArray()->all();
    }
}