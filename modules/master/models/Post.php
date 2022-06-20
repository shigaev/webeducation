<?php

namespace app\modules\master\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $post_title
 * @property string $post_content
 * @property int $post_status
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_status'], 'required'],
            [['post_content'], 'string'],
            [['post_title',], 'string'],
            [['post_status', 'category_id'], 'integer'],
            [['post_title'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_title' => 'Title',
            'category_id' => 'Category',
            'post_content' => 'Content',
            'post_status' => 'Status',
        ];
    }
}
