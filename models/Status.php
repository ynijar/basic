<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property integer $id
 * @property string $name
 * @property integer $status_id
 *
 * @property Posts $status
 */
class Status extends \yii\db\ActiveRecord
{

    const NOT_ACTIVE_ID = 1;
    const ACTIVE_ID = 2;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 45]
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
            'status_id' => 'Status ID',
        ];
    }

//    /**
//     * @return \yii\db\ActiveQuery
//     */
//    public function getStatus()
//    {
//        return $this->hasOne(Posts::className(), ['status' => 'status_id']);
//    }
}
