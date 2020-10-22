<?php
namespace app\models;
use yii\base\Model;

class InputForm extends Model{
	public $field;
	public $field2;
	public $field3;
	public function rules(){
		return [
			[['field','field2','field3'],'required']
		];
	}
}