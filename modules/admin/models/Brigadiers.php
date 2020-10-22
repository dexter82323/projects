<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "brigadiers".
 *
 * @property int $Id_brigadier
 * @property string|null $Name
 * @property int|null $Id_Master
 *
 * @property Masters $master
 * @property ServiceStaff[] $serviceStaff
 */
class Brigadiers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brigadiers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Master'], 'integer'],
            [['Name'], 'string', 'max' => 100],
            [['Id_Master'], 'exist', 'skipOnError' => true, 'targetClass' => Masters::className(), 'targetAttribute' => ['Id_Master' => 'Id_master']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_brigadier' => 'Id бригадира',
            'Name' => 'Имя',
            'Id_Master' => 'Имя мастера',
        ];
    }

    /**
     * Gets query for [[Master]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaster()
    {
        return $this->hasOne(Masters::className(), ['Id_master' => 'Id_Master']);
    }

    /**
     * Gets query for [[ServiceStaff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServiceStaff()
    {
        return $this->hasMany(ServiceStaff::className(), ['Id_brigadier' => 'Id_brigadier']);
    }
}
