<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "brand".
 *
 * @property int $id
 * @property string $alias
 * @property string $name
 * @property string $page_title
 * @property string $keywords
 * @property string $description
 */
class Brand extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'brand';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias', 'name', 'page_title'], 'required'],
            [['keywords', 'description'], 'string'],
            [['alias', 'name', 'page_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'page_title' => 'Заголовок страницы',
            'keywords' => 'Ключевые слова',
            'description' => 'Описание',
            'alias' => 'Алиас (путь)',
        ];
    }
}
