<?php

namespace app\modules\admin\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "auto".
 *
 * @property int $Id_auto
 * @property string|null $Brand
 * @property int|null $Type
 * @property string|null $License
 * @property string|null $Date_of_receiving
 * @property string|null $Date_of_write-off
 * @property int|null $Mileage
 * @property int|null $Capacity_Cars
 * @property int|null $Carrying_Truck
 *
 * @property Type $type
 * @property Carrying[] $carryings
 * @property Drivers[] $drivers
 * @property Repairs[] $repairs
 */
class Auto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'auto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Type', 'Mileage', 'Capacity_Cars', 'Carrying_Truck'], 'integer'],
            [['Date_of_receiving', 'Date_of_write-off'], 'safe'],
            [['Brand'], 'string', 'max' => 50],
            [['License'], 'string', 'max' => 20],
            [['Type'], 'exist', 'skipOnError' => true, 'targetClass' => Type::className(), 'targetAttribute' => ['Type' => 'Id_Type']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_auto' => 'Id авто',
            'Brand' => 'Марка',
            'Type' => 'Type',
            'License' => 'Номер',
            'Date_of_receiving' => 'Дата получения',
            'Date_of_write-off' => 'Дата списания',
            'Mileage' => 'Пробег',
            'Capacity_Cars' => 'Вместимость',
            'Carrying_Truck' => 'Грузоподъемность',
        ];
    }

    /**
     * Gets query for [[Type]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Type::className(), ['Id_Type' => 'Type']);
    }

    /**
     * Gets query for [[Carryings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarryings()
    {
        return $this->hasMany(Carrying::className(), ['Id_truck' => 'Id_auto']);
    }

    /**
     * Gets query for [[Drivers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDrivers()
    {
        return $this->hasMany(Drivers::className(), ['Id_auto' => 'Id_auto']);
    }

    /**
     * Gets query for [[Repairs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRepairs()
    {
        return $this->hasMany(Repairs::className(), ['Id_auto' => 'Id_auto']);
    }
}
