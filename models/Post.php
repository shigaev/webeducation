<?php

namespace app\models;

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

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_title', 'post_content', 'post_status'], 'required'],
            [['post_content'], 'string'],
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
            'post_title' => 'Post Title',
            'category_id' => 'Post Category',
            'post_content' => 'Post Content',
            'post_status' => 'Post Status',
        ];
    }
}
