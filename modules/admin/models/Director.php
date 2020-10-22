<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "director".
 *
 * @property int $Id_director
 * @property string|null $Name
 * @property int|null $Id_workshop
 *
 * @property Workshops $workshop
 * @property Masters[] $masters
 */
class Director extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'director';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_workshop'], 'integer'],
            [['Name'], 'string', 'max' => 100],
            [['Id_workshop'], 'exist', 'skipOnError' => true, 'targetClass' => Workshops::className(), 'targetAttribute' => ['Id_workshop' => 'Id_workshop']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_director' => 'Id директора',
            'Name' => 'Имя',
            'Id_workshop' => 'Id цеха',
        ];
    }

    /**
     * Gets query for [[Workshop]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorkshop()
    {
        return $this->hasOne(Workshops::className(), ['Id_workshop' => 'Id_workshop']);
    }

    /**
     * Gets query for [[Masters]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMasters()
    {
        return $this->hasMany(Masters::className(), ['Id_Director' => 'Id_director']);
    }
}
