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
<p align="center" style="font-size: 28px">Подчиненность персонала:</p>

<?php $form = ActiveForm::begin()?>
<?=$form->field($field,'field')->dropDownList([1 => 'Рабочие-бригадиры',2 => 'Бригадиры-мастера',3=>'Мастера-начальники цехов'],['style'=>'width:500px;border: 1px solid #32CD32;margin-left:200px'])->label('Подчиненность персонала',['style'=>'color:#006400;margin-left:200px']),
Html::submitButton('Отправить',array('class' => 'btn btn-success', 'style' => 'margin-left:200px'))?>
<?php ActiveForm::end() ?>


<?php if($field->load(Yii::$app->request->post())):
  ?> 
  <?php if ($string == 1):?>
  	<table class="table table-striped">
 <tr>
 <th>Имя рабочего</th>
 <th >Имя бригадира</th>

</tr>
<?php foreach ($querie as $qu): ?>
<tr>
	<td><?php echo $qu['Name'] ?></td>
	<td><?php echo $qu->brigadier['Name'] ?></td>
</tr>
<?php endforeach ?>
</table>
 <?php endif ?>
 <?php if ($string == 2):?>
  	<table class="table table-striped">
 <tr>
 <th>Имя бригадира</th>
 <th >Имя мастера</th>

</tr>
<?php foreach ($querie as $qu): ?>
<tr>
	<td><?php echo $qu['Name'] ?></td>
	<td><?php echo $qu->masters['Name'] ?></td>
</tr>
<?php endforeach ?>
</table>
 <?php endif ?>
 <?php if ($string == 3):?>
  	<table class="table table-striped">
 <tr>
 <th>Имя мастера</th>
 <th >Имя директора</th>

</tr>
<?php foreach ($querie as $qu): ?>
<tr>
	<td><?php echo $qu['Name'] ?></td>
	<td><?php echo $qu->director['Name'] ?></td>
</tr>
<?php endforeach ?>
</table>
 <?php endif ?>
 <?php endif ?>