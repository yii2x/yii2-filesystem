<?php

namespace yii2x\filesystem\models;

use Yii;

/**
 * This is the model class for table "model_descriptor".
 *
 * @property string $id
 * @property string $name
 * @property string $type
 */
class Descriptor extends \yii2x\filesystem\model\db\ModelDescriptor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return yii\helpers\ArrayHelper::merge( parent::rules(), [
              [['name'], 'required'],
        ]);
    }

    public function behaviors()
    {
        return [      
            [
                'class' => \yii2x\web\db\behaviors\ModelInheritanceBehavior::className()
            ],            
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'value' => new Expression('UTC_TIMESTAMP()'),
            ],
	    [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by'
            ],                                         
        ];
    }      
}
