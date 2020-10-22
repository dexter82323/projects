<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "type".
 *
 * @property int $Id_Type
 * @property string|null $Type
 *
 * @property Auto[] $autos
 */
class Type extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Type'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Type' => 'Id типа',
            'Type' => 'Тип',
        ];
    }

    /**
     * Gets query for [[Autos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAutos()
    {
        return $this->hasMany(Auto::className(), ['Type' => 'Id_Type']);
    }
}
