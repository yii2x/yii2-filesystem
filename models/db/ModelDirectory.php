<?php

namespace yii2x\filesystem\models\db;

use Yii;

/**
 * This is the model class for table "model_directory".
 *
 * @property string $id
 * @property string $parentId
 * @property string $childId
 */
class ModelDirectory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'model_directory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'parentId', 'childId'], 'required'],
            [['id', 'parentId', 'childId'], 'string', 'max' => 36],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parentId' => 'Parent ID',
            'childId' => 'Child ID',
        ];
    }
}
