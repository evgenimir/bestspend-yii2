<?php
/**
 * Created by PhpStorm.
 * User: Zheka1
 * Date: 18.02.2018
 * Time: 13:26
 */

namespace app\models;

use yii\db\ActiveRecord;

class ProductCategory extends ActiveRecord
{

    public static function tableName()
    {
        return 'category_product';
    }

    public function getIdProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    public function getIdCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

}