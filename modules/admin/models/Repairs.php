<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "repairs".
 *
 * @property int $Id_repair
 * @property int|null $Id_auto
 * @property int|null $Id_staff
 * @property string|null $Discription
 * @property int|null $Cost
 * @property int|null $Number_of_used_unit
 * @property string|null $Date_of_receiving
 * @property string|null $Date_of_end
 *
 * @property Auto $auto
 * @property ServiceStaff $staff
 */
class Repairs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'repairs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_auto', 'Id_staff', 'Cost', 'Number_of_used_unit'], 'integer'],
            [['Date_of_receiving', 'Date_of_end'], 'safe'],
            [['Discription'], 'string', 'max' => 100],
            [['Id_auto'], 'exist', 'skipOnError' => true, 'targetClass' => Auto::className(), 'targetAttribute' => ['Id_auto' => 'Id_auto']],
            [['Id_staff'], 'exist', 'skipOnError' => true, 'targetClass' => ServiceStaff::className(), 'targetAttribute' => ['Id_staff' => 'Id_staff']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_repair' => 'Id Ремонта',
            'Id_auto' => 'Id Auto',
            'Id_staff' => 'Id Staff',
            'Discription' => 'Описание',
            'Cost' => 'Цена',
            'Number_of_used_unit' => 'Кол-во узлов',
            'Date_of_receiving' => 'Дата поступления',
            'Date_of_end' => 'Дата починки',
        ];
    }

    /**
     * Gets query for [[Auto]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuto()
    {
        return $this->hasOne(Auto::className(), ['Id_auto' => 'Id_auto']);
    }

    /**
     * Gets query for [[Staff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasOne(ServiceStaff::className(), ['Id_staff' => 'Id_staff']);
    }
}
