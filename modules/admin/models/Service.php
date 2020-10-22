<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "service_staff".
 *
 * @property int $Id_staff
 * @property string|null $Name
 * @property int|null $Id_profession
 * @property int|null $Id_brigadier
 *
 * @property Repairs[] $repairs
 * @property Profession $profession
 * @property Brigadiers $brigadier
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service_staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_profession', 'Id_brigadier'], 'integer'],
            [['Name'], 'string', 'max' => 100],
            [['Id_profession'], 'exist', 'skipOnError' => true, 'targetClass' => Profession::className(), 'targetAttribute' => ['Id_profession' => 'Id_profession']],
            [['Id_brigadier'], 'exist', 'skipOnError' => true, 'targetClass' => Brigadiers::className(), 'targetAttribute' => ['Id_brigadier' => 'Id_brigadier']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_staff' => 'Id сотрудника',
            'Name' => 'Имя',
            'Id_profession' => 'Id Profession',
            'Id_brigadier' => 'Id Brigadier',
        ];
    }

    /**
     * Gets query for [[Repairs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRepairs()
    {
        return $this->hasMany(Repairs::className(), ['Id_staff' => 'Id_staff']);
    }

    /**
     * Gets query for [[Profession]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfession()
    {
        return $this->hasOne(Profession::className(), ['Id_profession' => 'Id_profession']);
    }

    /**
     * Gets query for [[Brigadier]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrigadier()
    {
        return $this->hasOne(Brigadiers::className(), ['Id_brigadier' => 'Id_brigadier']);
    }
}
