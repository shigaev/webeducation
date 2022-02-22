<?php

namespace app\modules\master\models;

use phpDocumentor\Reflection\File;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends Model
{
    public $image;

    public function uploadFile(UploadedFile $file)
    {
        $file->saveAs(\Yii::getAlias('@web') . 'uploads/' . $file->name);
        return $file->name;
    }
}