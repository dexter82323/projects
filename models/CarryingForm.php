<?php
namespace app\models;
use yii\db\ActiveRecord;

class CarryingForm extends ActiveRecord{
    public static function tableName(){
        return('carrying');
    }

	public function getAuto(){
		return $this->hasOne(AutoForm::className(),['Id_auto'=>'Id_truck']);
	}


}