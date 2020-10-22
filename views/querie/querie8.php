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
<p align="center" style="font-size: 28px">Категории транспорта:</p>	
<?php $form = ActiveForm::begin()?>
<?=$form->field($field,'field')->dropDownList($items,['style'=>'width:500px;border: 1px solid #32CD32;margin-left:200px'])->label('Выберите категорию машины',['style'=>'color:#006400;margin-left:200px']),
Html::submitButton('Отправить',array('class' => 'btn btn-success', 'style' => 'margin-left:200px'))?>
<?php ActiveForm::end() ?>

<?php if($field->load(Yii::$app->request->post())):
  ?> 
 	<table class="table table-striped">
 <tr>
 <th>Марка </th>
 <th >Номер машины</th>
 <th >Пробег</th>
 <th >Категория	</th>
</tr>
<?php foreach ($querie as $qu): ?>
<tr>
	<td><?php echo $qu['Brand'] ?></td>
	<td><?php echo $qu['License'] ?></td>
	<td><?php echo $qu['Mileage'] ?></td>
	<td><?php echo $qu->type['Type'] ?></td>
</tr>
<?php endforeach ?>
</table>

   <?php endif ?>