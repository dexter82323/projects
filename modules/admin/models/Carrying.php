<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "carrying".
 *
 * @property int $Id_carrying
 * @property int|null $Id_truck
 * @property string|null $Date_of_Start
 * @property string|null $Date_of_Ending
 * @property string|null $Departure
 * @property string|null $Destination
 *
 * @property Auto $truck
 */
class Carrying extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'carrying';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_truck'], 'integer'],
            [['Date_of_Start', 'Date_of_Ending'], 'safe'],
            [['Departure', 'Destination'], 'string', 'max' => 45],
            [['Id_truck'], 'exist', 'skipOnError' => true, 'targetClass' => Auto::className(), 'targetAttribute' => ['Id_truck' => 'Id_auto']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_carrying' => 'Id перевозки',
            'Id_truck' => 'Id авто',
            'Date_of_Start' => 'Начало',
            'Date_of_Ending' => 'Конец',
            'Departure' => 'Место отправки',
            'Destination' => 'Пункт назначения',
        ];
    }

    /**
     * Gets query for [[Truck]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuto()
    {
        return $this->hasOne(Auto::className(), ['Id_auto' => 'Id_truck']);
    }
}
