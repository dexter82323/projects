<?php
namespace app\models;
use yii\db\ActiveRecord;

class DriverForm extends ActiveRecord{
	public static function tableName(){
		return('drivers');
	}

	public function getAuto(){
		return $this->hasOne(AutoForm::className(),['Id_auto'=>'Id_auto']);
	}
	public function getRoute(){
		return $this->hasOne(RouteForm::className(),['Id_route'=>'id_route']);
	}

}