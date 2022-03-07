<?php

namespace app\modules\master\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property int|null $category_id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $article_date
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id'], 'integer'],
            [['title', 'description', 'content'], 'required'],
            [['content'], 'string'],
            [['article_date'], 'safe'],
            [['title', 'description'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'title' => 'Title',
            'description' => 'Description',
            'content' => 'Content',
            'article_date' => 'Article Date',
        ];
    }
}
