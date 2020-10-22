<?php
namespace app\models;
use yii\db\ActiveRecord;

class BrigadiersForm extends ActiveRecord{
	public static function tableName(){
		return('brigadiers');
	}

	public function getServiceStaff(){
		return $this->hasMany(ServiceStaffForm::className(),['Id_brigadier'=>'Id_brigadier']);
	}
	public function getMasters(){
		return $this->hasOne(MastersForm::className(),['Id_master'=>'Id_Master']);
	}
}