<?php
namespace app\models;
use yii\db\ActiveRecord;

class TypeForm extends ActiveRecord{
    public static function tableName(){
        return('type');
    }

    public function getAuto(){
        return $this->hasMany(AutoForm::className(),['Type'=>'Id_Type']);
    }


}