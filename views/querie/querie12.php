<?php
use yii\helpers\Html; 
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;

?>
<br>
<br>
<br>
<?php echo Html::a(' Назад ' , ['/querie/queries'], ['class' => 'btn btn-danger btn-mn  active '])?>
<br>
<p align="center" style="font-size: 28px">Полученная и списанная техника:</p>	

<?php $form = ActiveForm::begin()?>
<?=$form->field($field,'field')->dropDownList([1 => 'Полученные',2 => 'Списанные'],['style'=>'width:500px;border: 1px solid #32CD32;margin-left:200px'])->label('Выбор',['style'=>'color:#006400;margin-left:200px']),
$form->field($field, 'field2')->textInput(['style'=>'width:500px;border: 1px solid #32CD32;margin-left:200px'])->label('Первая дата',['style'=>'color:#006400;margin-left:200px']),
$form->field($field, 'field3')->textInput(['style'=>'width:500px;border: 1px solid #32CD32;margin-left:200px'])->label('Вторая дата',['style'=>'color:#006400;margin-left:200px']),
Html::submitButton('Отправить',array('class' => 'btn btn-success', 'style' => 'margin-left:200px'))?>
<?php ActiveForm::end() ?>

<?php if($field->load(Yii::$app->request->post())):
  ?> 
  <?php if ($string == 1):?>
  	<table class="table table-striped">
 <tr>
 <th>Марка </th>
 <th >Номер</th>
 <th >Дата получения</th>
</tr>
<?php foreach ($querie as $qu): ?>
<tr>
	<td><?php echo $qu['Brand'] ?></td>
	<td><?php echo $qu['License'] ?></td>
	<td><?php echo $qu['Date_of_receiving'] ?></td>
</tr>
<?php endforeach ?>
</table>
 <?php endif ?>
  <?php if ($string == 2):?>
  	<table class="table table-striped">
 <tr>
 <th>Марка </th>
 <th >Номер</th>
 <th >Дата списания</th>
</tr>
<?php foreach ($querie as $qu): ?>
<tr>
	<td><?php echo $qu['Brand'] ?></td>
	<td><?php echo $qu['License'] ?></td>
	<td><?php echo $qu['Date_of_write-off'] ?></td>
</tr>
<?php endforeach ?>
</table>
 <?php endif ?>
  <?php endif ?>