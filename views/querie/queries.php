<?php
use yii\helpers\Html; 
?>
<?php $this->title='Запросы';  ?>
<br>
<br>
<br>
<?php echo Html::a(' Назад ' , ['/site/index'], ['class' => 'btn btn-danger btn-mn  active '])?>
<div style='font-size: 20px;height: 50px;padding-top: 10px;margin: -10px;text-align: center;color:black;'>Запросы: </div>
<div >
	<div class="col-sm-12">
<?php echo Html::a(' 1.Получить данные об автопарке предприятия ' , ['/querie/querie1'], ['class' => 'mybtn btn btn-primary btn-lg  btn-block  active ']) ?>
</div>
<br>
<br>
	<div class="col-sm-12">
<?php echo Html::a(' 2.Получить перечень и общее число водителей по предприятию, по указанной автомашине ' , ['/querie/querie2'], ['class' => 'mybtn btn btn-info btn-lg  btn-block  active ']) ?>
</div>
<br>
<br>
	<div class="col-sm-12">
<?php echo Html::a('3.Получить распределение водителей по автомобилям ' , ['/querie/querie3'], ['class' => 'mybtn btn btn-success btn-lg  btn-block  active ']) ?>
</div>
<br>
<br>
	<div class="col-sm-12">
<?php echo Html::a('4.Получить данные о распределении пассажирского автотранспорта по маршрутам. ' , ['/querie/querie4'], ['class' => 'mybtn btn btn-warning btn-lg  btn-block  active ']) ?>
</div>
<br>
<br>
	<div class="col-sm-12">
<?php echo Html::a('5.Получить сведения о пробеге автотранспорта определенной категории или конкретной автомашины  ' , ['/querie/querie5'], ['class' => 'mybtn btn btn-info btn-lg  btn-block  active ']) ?>
</div>
<br>
<br>
	<div class="col-sm-12">
<?php echo Html::a('6.Получить данные о числе ремонтов и их стоимости для автотранспорта определенной категории' , ['/querie/querie6'], ['class' => 'mybtn btn btn-success btn-lg  btn-block  active ']) ?>
</div>
<br>
<br>
	<div class="col-sm-12">
<?php echo Html::a('7.Получить данные о подчиненности персонала: рабочие -бригадиры - мастера - начальники участков и цехов' , ['/querie/querie7'], ['class' => 'mybtn btn btn-warning btn-lg  btn-block  active ']) ?>
</div>
<br>
<br>
	<div class="col-sm-12">
<?php echo Html::a('8.Получить сведения о наличии гаражного хозяйства в целом и по каждой категории транспорта' , ['/querie/querie8'], ['class' => 'mybtn btn btn-primary btn-lg  btn-block  active ']) ?>
</div>
<br>
<br>
	<div class="col-sm-12">
<?php echo Html::a('9.Получить данные о распределении автотранспорта на предприятии' , ['/querie/querie9'], ['class' => 'mybtn btn btn-warning btn-lg  btn-block  active ']) ?>
</div>
<br>
<br>
	<div class="col-sm-12">
<?php echo Html::a('10.Получить сведения о грузоперевозках, выполненных указанной автомашиной за обозначенный период' , ['/querie/querie10'], ['class' => 'mybtn btn btn-info btn-lg  btn-block  active ']) ?>
</div>
<br>
<br>
	<div class="col-sm-12">
<?php echo Html::a('11.Получить данные о числе использованных для ремонта указанных узлов' , ['/querie/querie11'], ['class' => 'mybtn btn btn-success btn-lg  btn-block  active ']) ?>
</div>
<br>
<br>
	<div class="col-sm-12">
<?php echo Html::a('12.Получить сведения о полученной и списанной автотехники за указанный период' , ['/querie/querie12'], ['class' => 'mybtn btn btn-primary btn-lg  btn-block  active ']) ?>
</div>
<br>
<br>
	<div class="col-sm-12">
<?php echo Html::a('13.Получить состав подчиненных указанного бригадира, мастера и пр' , ['/querie/querie13'], ['class' => 'mybtn btn btn-info btn-lg  btn-block  active ']) ?>
</div>
<br>
<br>
	<div class="col-sm-12">
<?php echo Html::a('14.Получить данные о работах, выполненных указанным специалистом' , ['/querie/querie14'], ['class' => 'mybtn btn btn-warning btn-lg  btn-block  active ']) ?>
</div>
</div>