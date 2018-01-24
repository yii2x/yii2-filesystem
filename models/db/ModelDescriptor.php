<?php

namespace yii2x\filesystem\models\db;

use Yii;

/**
 * This is the model class for table "model_descriptor".
 *
 * @property string $id
 * @property string $name
 * @property string $type
 */
class ModelDescriptor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'model_descriptor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'created_by'], 'string', 'max' => 36],
            [['created_at'], 'safe'],            
            [['name'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'type' => 'Type',
        ];
    }
}
