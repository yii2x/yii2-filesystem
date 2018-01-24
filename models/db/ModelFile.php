<?php

namespace yii2x\filesystem\models\db;

use Yii;

/**
 * This is the model class for table "model_file".
 *
 * @property string $id
 * @property integer $size
 */
class ModelFile extends \yii\db\ActiveRecord
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
            [['id'], 'required'],
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
