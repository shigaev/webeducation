<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "articles_category".
 *
 * @property int $id
 * @property string $title
 */
class ArticlesCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles_category';
    }

    public function getArticles()
    {
        return $this->hasMany(Articles::class, ['category_id' => 'id']);
    }
}
