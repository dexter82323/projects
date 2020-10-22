<?php
namespace app\models;
use yii\db\ActiveRecord;

class ServiceStaffForm extends ActiveRecord{
	public static function tableName(){
		return('service_staff');
	}

	public function getBrigadier(){
		return $this->hasOne(BrigadiersForm::className(),['Id_brigadier'=>'Id_brigadier']);
	}
}