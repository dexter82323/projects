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
<p align="center" style="font-size: 28px">Сведения о грузоперевозки:</p>	
<?php $form = ActiveForm::begin()?>
<?=$form->field($field,'field')->dropDownList($items,['style'=>'width:500px;border: 1px solid #32CD32;margin-left:200px'])->label('Выберите машину',['style'=>'color:#006400;margin-left:200px']),
$form->field($field, 'field2')->textInput(['style'=>'width:500px;border: 1px solid #32CD32;margin-left:200px'])->label('Первая дата',['style'=>'color:#006400;margin-left:200px']),
$form->field($field, 'field3')->textInput(['style'=>'width:500px;border: 1px solid #32CD32;margin-left:200px'])->label('Вторая дата',['style'=>'color:#006400;margin-left:200px']),
Html::submitButton('Отправить',array('class' => 'btn btn-success', 'style' => 'margin-left:200px'))?>
<?php ActiveForm::end() ?>

<?php if($field->load(Yii::$app->request->post())):
  ?> 
<table class="table table-striped">
 <tr>
 <th>Марка </th>
 <th >Номер машины</th>
 <th >Дата отправки</th>
 <th >Место отправки</th>
 <th >Место назначение</th>
</tr>
<?php foreach ($querie as $qu): ?>
<tr>
	<td><?php echo $qu->auto['Brand'] ?></td>
	<td><?php echo $qu->auto['License'] ?></td>
	<td><?php echo $qu['Date_of_Start'] ?></td>
	<td><?php echo $qu['Departure'] ?></td>
	<td><?php echo $qu['Destination'] ?></td>
</tr>
<?php endforeach ?>
</table>

    <?php endif ?>