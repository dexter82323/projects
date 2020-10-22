<?php
namespace app\models;
use yii\db\ActiveRecord;

class MastersForm extends ActiveRecord{
	public static function tableName(){
		return('masters');
	}

	public function getBrigadiers(){
		return $this->hasMany(BrigadiersForm::className(),['Id_brigadier'=>'Id_brigadier']);
	}
	public function getDirector(){
		return $this->hasOne(DirectorsForm::className(),['Id_director'=>'Id_Director']);
	}
}