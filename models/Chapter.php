<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chapter".
 *
 * @property int $id
 * @property string $title
 */
class Chapter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'chapter';
    }

    public function getCate()
    {
        return $this->hasMany(Category::class, ['chapter_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }
}
