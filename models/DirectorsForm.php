<?php
namespace app\models;
use yii\db\ActiveRecord;

class DirectorsForm extends ActiveRecord{
	public static function tableName(){
		return('director');
	}

	public function getMasters(){
		return $this->hasMany(Masters::className(),['Id_Director'=>'id_director']);
	}
	
}