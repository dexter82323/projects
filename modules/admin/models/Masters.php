<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "masters".
 *
 * @property int $Id_master
 * @property string|null $Name
 * @property int|null $Id_Director
 *
 * @property Brigadiers[] $brigadiers
 * @property Director $director
 */
class Masters extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'masters';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Director'], 'integer'],
            [['Name'], 'string', 'max' => 100],
            [['Id_Director'], 'exist', 'skipOnError' => true, 'targetClass' => Director::className(), 'targetAttribute' => ['Id_Director' => 'Id_director']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_master' => 'Id мастера',
            'Name' => 'Имя',
            'Id_Director' => 'Имя директора',
        ];
    }

    /**
     * Gets query for [[Brigadiers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrigadiers()
    {
        return $this->hasMany(Brigadiers::className(), ['Id_Master' => 'Id_master']);
    }

    /**
     * Gets query for [[Director]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDirector()
    {
        return $this->hasOne(Director::className(), ['Id_director' => 'Id_Director']);
    }
}
