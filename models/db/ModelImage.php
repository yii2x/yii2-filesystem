<?php

namespace yii2x\filesystem\models\db;

use Yii;

/**
 * This is the model class for table "model_image".
 *
 * @property string $id
 * @property integer $width
 * @property integer $height
 * @property string $mime
 */
class ModelImage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'model_image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['width', 'height'], 'integer'],
            [['id'], 'string', 'max' => 36],
            [['mime'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'width' => 'Width',
            'height' => 'Height',
            'mime' => 'Mime',
        ];
    }
}
