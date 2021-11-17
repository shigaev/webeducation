<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $title
 * @property string $description
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    public function getPosts()
    {

        return $this->hasMany(Post::class, ['category_id' => 'id'])->where(['post_status' => 1]);

        // Связывание посредством промежуточной таблицы
        /*return $this->hasMany(Post::class, ['id' => 'post_id'])
            ->viaTable('category_post_relationships', ['category_id' => 'id']);*/
    }
}
