<?php 
namespace app\components;
use yii\base\Widget;

class Mywidget extends Widget{
public $options; 
public $count ;
public function init(){
	parent::init();

}
public function run(){
	return "<h1 style='Font-size:35px; '> -{$this->options} $this->count машин </h1>";
 }
}

?>