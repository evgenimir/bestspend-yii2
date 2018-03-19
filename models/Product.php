<?php
/**
 * Created by PhpStorm.
 * User: Zheka1
 * Date: 18.02.2018
 * Time: 13:20
 */

namespace app\models;


use yii\db\ActiveRecord;
use yii\db\Expression;

class Product extends ActiveRecord
{

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public static function tableName()
    {
        return 'product';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['id' => 'brand_id']);
    }

    public function getCategoryProduct()
    {
        return $this->hasMany(ProductCategory::className(), ['product_id' => 'id']);
    }

    public static function getHits()
    {
        return Product::find()->where(['hit' => '1'])->orderBy(new Expression('rand()'))->limit(6)->all();
    }

    public static function getSale()
    {
        return Product::find()->where(['sale' => '1'])->orderBy(new Expression('rand()'))->limit(6)->all();
    }

    public static function getNew()
    {
        return Product::find()->where(['new' => '1'])->orderBy(['id' => SORT_DESC])->limit(6)->all();
    }

    public static function getRecommended()
    {
        return Product::find()->where(['recommended' => '1'])->orderBy(['id' => SORT_DESC])->limit(6)->all();
    }

    public static function getSaleDesc()
    {
        return Product::find()->where(['sale' => '1'])->orderBy(['id' => SORT_ASC])->limit(6)->all();
    }

    public static function getBestDeals()
    {
        return Product::find()->where(['sale' => '1', 'recommended' => '1'])->orderBy(new Expression('rand()'))->limit(2)->all();
    }

    public static function getSuperSpecial()
    {
        return Product::find()->where(['sale' => '1', 'hit' => '1', 'recommended' => '1'])->orderBy(new Expression('rand()'))->limit(2)->all();
    }

}