<?php
namespace app\models;
use yii\db\ActiveRecord;

class RepairsForm extends ActiveRecord{
	public static function tableName(){
		return('repairs');
	}

	public function getAuto(){
		return $this->hasOne(AutoForm::className(),['Id_auto'=>'Id_auto']);
	}
	public function getService_staff(){
		return $this->hasOne(ServiceStaffForm::className(),['Id_staff'=>'Id_staff']);
	}
}