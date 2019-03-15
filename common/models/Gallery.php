<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property int $guid
 * @property string $tags
 * @property string $img
 * @property string $description
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tags', 'img', 'description'], 'required'],
            [['description'], 'string'],
            [['tags', 'img'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'guid' => 'Guid',
            'tags' => 'Tags',
            'img' => 'Img',
            'description' => 'Description',
        ];
    }
}