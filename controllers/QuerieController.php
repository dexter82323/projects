<?php

namespace app\controllers;

use yii\web\Controller;	
use Yii;
use yii\helpers\Html;
use yii\data\Pagination;
use app\models\AutoForm;
use app\models\InputForm;
use app\models\DriverForm;
use yii\helpers\ArrayHelper;
use app\models\RepairsForm;
use app\models\ServiceStaffForm;
use app\models\BrigadiersForm;
use app\models\MastersForm;
use app\models\DirectorsForm;
use app\models\TypeForm;
use app\models\CarryingForm;
use app\models\Input2Form;

Class QuerieController extends Controller{

public function actionQueries(){
	return $this->render('queries');
}

public function actionQuerie1(){
	$pag=AutoForm::find();
	$pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $pag->count(),
        ]);
	$auto=AutoForm::find()->with('type')->offset($pagination->offset)->limit($pagination->limit)->all();
	return $this->render('querie1',compact('auto','pagination'));
}

public function actionQuerie2(){
	$driver=DriverForm::find();	
	$field = new InputForm;
	if($field->load(Yii::$app->request->post())){
	$string = $field->field;
	$querie=$driver->with('auto')->rightjoin('auto','drivers.Id_auto=auto.Id_auto')->where(['auto.License'=>$string])->all();

}
	return $this->render('querie2',compact('field','driver','querie'));
    
}

public function actionQuerie3(){
	$querie=DriverForm::find()->with('auto')->orderBy('id_Auto')->all();
	return $this->render('querie3',compact('querie'));
}

public function actionQuerie4(){
	$querie=DriverForm::find()->with('route')->with('auto')->where('id_route',null)->all();
	return $this->render('querie4',compact('querie'));
}

public function actionQuerie5(){
	$field = new InputForm;
	$items = ArrayHelper::map(AutoForm::find()->all(),'Id_auto', 'Brand');
	if($field->load(Yii::$app->request->post())){
		$string =$field->field;
		$int =(int)$string;
		$querie = AutoForm::findOne($int);
	}
	return $this->render('querie5',compact('field','items','querie','int'));
}
public function actionQuerie6(){
	$field = new InputForm;
	$items = ArrayHelper::map(AutoForm::find()->all(),'Id_auto', 'Brand');
	if($field->load(Yii::$app->request->post())){
		$string = $field->field;
		$date1 = $field->field2;
		$date2 = $field->field3;
		$querie = RepairsForm::find()->with('auto')->where(['Id_auto'=>$string])->andWhere(['>=','Date_of_receiving',$date1])->andWhere(['<=','Date_of_receiving',$date2])->all();
	}
	return $this->render('querie6',compact('field','items','querie'));
}

public function actionQuerie7(){
	$field= new InputForm();
	if($field->load(Yii::$app->request->post())){
		$string = $field->field;
		if($string == 1) $querie=ServiceStaffForm::find()->with('brigadier')->where('Id_brigadier',null)->all();
		if($string == 2) $querie=BrigadiersForm::find()->with('masters')->all();
		if($string == 3) $querie=MastersForm::find()->with('director')->all();
	}
	return $this->render('querie7',compact('field','querie','string'));
}

public function actionQuerie8(){
	$field = new InputForm();
	$items = ArrayHelper::map(TypeForm::find()->all(),'Id_Type', 'Type');
	if($field->load(Yii::$app->request->post())){
		$string = $field->field;
		$querie = AutoForm::find()->with('type')->where(['Type' => $string])->all();
	}
	return $this->render('querie8',compact('field','querie','items'));
}

public function actionQuerie9(){
	$querie = TypeForm::find()->with('auto')->all();
	return $this->render('querie9',compact('querie'));
}

public function actionQuerie10(){
	$items= ArrayHelper::map(AutoForm::find()->all(),'Id_auto', 'Brand');
	$field = new InputForm();
	if($field->load(Yii::$app->request->post())){
		$string = $field->field;
		$date1 = $field->field2;
		$date2 = $field->field3;
		$querie = CarryingForm::find()->with('auto')->where(['Id_truck'=>$string])->andWhere(['>=','Date_of_start',$date1])->andWhere(['<=','Date_of_start',$date2])->all();
	}
	return $this->render('querie10',compact('querie','field','items'));
}

public function actionQuerie11(){
	$items= ArrayHelper::map(AutoForm::find()->all(),'Id_auto', 'Brand');
	$field = new InputForm();
	if($field->load(Yii::$app->request->post())){
		$string = $field->field;
		$date1 = $field->field2;
		$date2 = $field->field3;
		$querie = RepairsForm::find()->with('auto')->where(['Id_auto'=>$string])->andWhere(['>=','Date_of_receiving',$date1])->andWhere(['<=','Date_of_receiving',$date2])->all(); 
	}
	return $this->render('querie11',compact('querie','field','items'));
}

public function actionQuerie12(){
	$field = new InputForm();
	if($field->load(Yii::$app->request->post())){
		$string = $field->field;
		$date1 = $field->field2;
		$date2 = $field->field3;
		if($string ==1 ) $querie=AutoForm::find()->where(['>=','Date_of_receiving',$date1])->andWhere(['<=','Date_of_receiving',$date2])->all();
		if($string ==2 ) $querie=AutoForm::find()->where(['>=','Date_of_write-off',$date1])->andWhere(['<=','Date_of_write-off',$date2])->all();  
	}
	return $this->render('querie12',compact('querie','field','items','string'));
}

public function actionQuerie13(){
	$field = new InputForm();
	$field2 = new Input2Form();

	if($field->load(Yii::$app->request->post())){
		
		$string = $field->field;

		if($string == 1) $items	=ArrayHelper::map(BrigadiersForm::find()->all(),'Id_brigadier', 'Name');
		if($string == 2) $items=ArrayHelper::map(MastersForm::find()->all(),'Id_master', 'Name');
		if($string == 3) $items=ArrayHelper::map(DirectorsForm::find()->all(),'Id_director', 'Name');
	}
	if($field2->load(Yii::$app->request->post())){

			$string2 = $field2->field;
		 	$querie = ServiceStaffForm::find()->where(['Id_brigadier'=>$string2])->all();
		}
	return $this->render('querie13',compact('querie','field','items','string','field2','string2'));
}

public function actionQuerie14(){
	$field = new InputForm();
	$items = ArrayHelper::map(ServiceStaffForm::find()->all(),'Id_staff', 'Name');
	if($field->load(Yii::$app->request->post())){
		$string = $field->field;
		$date1 = $field->field2;
		$date2 = $field->field3;
		$querie = RepairsForm::find()->with('auto')->with('service_staff')->where(['Id_staff'=>$string])->andWhere(['>=','Date_of_receiving',$date1])->andWhere(['<=','Date_of_receiving',$date2])->all();
	}
	return $this->render('querie14',compact('querie','field','items'));
}



}