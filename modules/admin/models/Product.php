<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $category_id
 * @property int $brand_id
 * @property string $name
 * @property string $alias
 * @property string $content
 * @property double $price
 * @property double $old_price
 * @property string $page_title
 * @property string $keywords
 * @property string $description
 * @property string $img
 * @property int $hit
 * @property int $new
 * @property int $sale
 * @property int $recommended
 */
class Product extends \yii\db\ActiveRecord
{
    public $image;
    public $gallery;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['id' => 'brand_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'brand_id', 'name', 'alias'], 'required'],
            [['category_id', 'brand_id', 'hit', 'new', 'sale', 'recommended'], 'integer'],
            [['content', 'keywords', 'description'], 'string'],
            [['price', 'old_price'], 'number'],
            [['name', 'alias', 'page_title'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png, jpg'],
            [['gallery'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 4],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Категория',
            'brand_id' => 'Бренд',
            'name' => 'Наименование',
            'alias' => 'Alias',
            'content' => 'Контент',
            'price' => 'Цена',
            'old_price' => 'Старая цена',
            'page_title' => 'Title страницы',
            'keywords' => 'Ключевые слова - Keywords',
            'description' => 'Мета описание - Description',
            'image' => 'Фото',
            'gallery' => 'Галерея',
            'hit' => 'Хит',
            'new' => 'Новинка',
            'sale' => 'Распродажа',
            'recommended' => 'Рекомендуемый',
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $path = 'upload/store/' . $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path, true);
            @unlink($path);
            return true;
        } else {
            return false;
        }
    }

}
