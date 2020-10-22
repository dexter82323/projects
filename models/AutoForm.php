<?php
namespace app\models;
use yii\db\ActiveRecord;

class AutoForm extends ActiveRecord{
	public static function tableName(){
		return('auto');
	}

	public function getType(){
		return $this->hasOne(TypeForm::className(),['Id_Type'=>'Type']);
	}
	public function getDriver(){
		return $this->hasMany(AutoForm::className(),['Id_auto'=>'Id_auto']);
	}

}