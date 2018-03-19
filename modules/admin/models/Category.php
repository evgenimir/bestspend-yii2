<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $alias
 * @property string $name
 * @property string $page_title
 * @property string $description
 * @property string $keywords
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'alias', 'name', 'page_title', 'description', 'keywords'], 'required'],
            [['parent_id'], 'integer'],
            [['description', 'keywords'], 'string'],
            [['alias', 'name', 'page_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '№',
            'parent_id' => 'Родительская категория',
            'alias' => 'Алиас',
            'name' => 'Название',
            'page_title' => 'Заголовок страницы - title',
            'description' => 'Описание - Description',
            'keywords' => 'Ключевые слова - Keywords',
        ];
    }
}
