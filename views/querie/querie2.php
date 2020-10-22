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
<p align="center" style="font-size: 28px">Перечень водителей по указанной машине:</p>
<?php $form = ActiveForm::begin()?>
<?=$form->field($field,'field')->textInput(['style'=>'width:500px;border: 1px solid #32CD32;margin-left:200px'])->label('Введите номер машины:',['style'=>'color:#006400;margin-left:200px']),
Html::submitButton('Отправить',array('class' => 'btn btn-success', 'style' => 'margin-left:200px'))?>
<?php ActiveForm::end() ?>
<br>
<?php if($field->load(Yii::$app->request->post())):
  ?>  
<table class="table table-striped">
 <tr>
 	<th>Фио водителя</th>
 <th >Марка</th>
 <th>Номер</th>
</tr>
<?php $i=0;?>
<?php foreach ($querie as $qu): ?>
	<?php $i++?>
<tr>
	<td><?php echo $qu['Name'] ?></td>
	<td><?php echo $qu->auto['Brand'] ?></td>
	<td><?php echo $qu->auto['License'] ?></td>
</tr>
<?php endforeach ?>
</table>
<?php echo ' Кол-во водителей этой машины - '.$i;?>
<?php endif; ?>