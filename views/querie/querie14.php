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
<p align="center" style="font-size: 28px">Данные о работах:</p>
<?php $form = ActiveForm::begin()?>
<?=$form->field($field,'field')->dropDownList($items,['style'=>'width:500px;border: 1px solid #32CD32;margin-left:200px'])->label('Выберите специалиста',['style'=>'color:#006400;margin-left:200px']),
$form->field($field, 'field2')->textInput(['style'=>'width:500px;border: 1px solid #32CD32;margin-left:200px'])->label('Первая дата',['style'=>'color:#006400;margin-left:200px']),
$form->field($field, 'field3')->textInput(['style'=>'width:500px;border: 1px solid #32CD32;margin-left:200px'])->label('Вторая дата',['style'=>'color:#006400;margin-left:200px']),
Html::submitButton('Отправить',array('class' => 'btn btn-success', 'style' => 'margin-left:200px'))?>
<?php ActiveForm::end() ?>

<?php if($field->load(Yii::$app->request->post())):
  ?> 
    <?php $i=0;?>
	<table class="table table-striped">
 <tr>
 <th>Имя работника </th>
 <th>Марка </th>
 <th>Номер </th>
 <th>Описание </th>
 <th>Цена</th>
</tr>
<?php foreach ($querie as $qu): ?>
		<?php $i++?>
<tr>
	<td><?php echo $qu->service_staff['Name'] ?></td>
	<td><?php echo $qu->auto['Brand'] ?></td>
	<td><?php echo $qu->auto['License'] ?></td>
	<td><?php echo $qu['Discription'] ?></td>
	<td><?php echo $qu['Cost'] ?></td>
</tr>
<?php endforeach ?>
</table>
<?php if($querie) echo ' Число выполненных работ  - '.$i;?>
  <?php endif ?>