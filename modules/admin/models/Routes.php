<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "routes".
 *
 * @property int $Id_route
 * @property string|null $Start
 * @property string|null $End
 * @property int|null $Length
 * @property int|null $Repeats
 *
 * @property Drivers[] $drivers
 */
class Routes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'routes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Length', 'Repeats'], 'integer'],
            [['Start', 'End'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_route' => 'Id маршрута',
            'Start' => 'Начальная остановка',
            'End' => 'Конечная остановка',
            'Length' => 'Длина',
            'Repeats' => 'Повторения',
        ];
    }

    /**
     * Gets query for [[Drivers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDrivers()
    {
        return $this->hasMany(Drivers::className(), ['id_route' => 'Id_route']);
    }
}
