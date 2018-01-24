<?php

namespace yii2x\filesystem\models;

use Yii;

/**
 * This is the model class for table "model_file".
 *
 * @property string $id
 * @property integer $size
 */
class ModelFile extends \yii2x\filesystem\models\ModelDescriptor
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'model_file';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'size'], 'required'],
            [['size'], 'integer'],
            [['id'], 'string', 'max' => 36],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'size' => 'Size',
        ];
    }
}
