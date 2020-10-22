<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "workshops".
 *
 * @property int $Id_workshop
 * @property string|null $Name
 *
 * @property Director[] $directors
 */
class Workshops extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'workshops';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_workshop' => 'Id цеха',
            'Name' => 'Название ',
        ];
    }

    /**
     * Gets query for [[Directors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDirectors()
    {
        return $this->hasMany(Director::className(), ['Id_workshop' => 'Id_workshop']);
    }
}
