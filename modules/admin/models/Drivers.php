<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "drivers".
 *
 * @property int $Id_driver
 * @property string|null $Name
 * @property string|null $Category
 * @property int|null $Id_auto
 * @property int|null $id_route
 *
 * @property Routes $route
 * @property Auto $auto
 */
class Drivers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'drivers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_auto', 'id_route'], 'integer'],
            [['Name'], 'string', 'max' => 100],
            [['Category'], 'string', 'max' => 10],
            [['id_route'], 'exist', 'skipOnError' => true, 'targetClass' => Routes::className(), 'targetAttribute' => ['id_route' => 'Id_route']],
            [['Id_auto'], 'exist', 'skipOnError' => true, 'targetClass' => Auto::className(), 'targetAttribute' => ['Id_auto' => 'Id_auto']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_driver' => 'Id водителя',
            'Name' => 'Имя',
            'Category' => 'Категория',
            'Id_auto' => 'Id Auto',
            'id_route' => 'Номер маршрута',
        ];
    }

    /**
     * Gets query for [[Route]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoute()
    {
        return $this->hasOne(Routes::className(), ['Id_route' => 'id_route']);
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
}
