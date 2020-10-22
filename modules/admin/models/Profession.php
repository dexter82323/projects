<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "profession".
 *
 * @property int $Id_profession
 * @property string|null $Title
 *
 * @property ServiceStaff[] $serviceStaff
 */
class Profession extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profession';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Title'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_profession' => 'Id профессии',
            'Title' => 'Название',
        ];
    }

    /**
     * Gets query for [[ServiceStaff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServiceStaff()
    {
        return $this->hasMany(ServiceStaff::className(), ['Id_profession' => 'Id_profession']);
    }
}
