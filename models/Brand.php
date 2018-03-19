<?php
/**
 * Created by PhpStorm.
 * User: Zheka1
 * Date: 28.02.2018
 * Time: 12:09
 */

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class Category - model of product categories
 * @package app\models
 */
class Brand extends ActiveRecord
{
    // CostaRico image plugin behaviors
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    // "brand" - name of the table in the database
    public static function tableName()
    {
        return 'brand';
    }

    /**
     * returns array of products by "brand_id" column in product table
     * @return array <p>Array with products</p>
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['brand_id' => 'id']);
    }
}