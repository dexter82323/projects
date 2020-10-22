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
<p align="center" style="font-size: 28px">Состав подчиненных:</p>
<?php $form = ActiveForm::begin()?>
<?=$form->field($field,'field')->dropDownList([1 => 'Бригадиров',2 => 'Мастеров',3 => 'Директоров'],['style'=>'width:500px;border: 1px solid #32CD32;margin-left:200px'])->label('Выбор',['style'=>'color:#006400;margin-left:200px']),
Html::submitButton('Отправить',array('class' => 'btn btn-success', 'style' => 'margin-left:200px'))?>
<?php ActiveForm::end() ?>

<?php if($field->load(Yii::$app->request->post())):
  ?> 
<?php $form = ActiveForm::begin()?>
<?=$form->field($field2,'field')->dropDownList($items,['style'=>'width:500px;border: 1px solid #32CD32;margin-left:200px'])->label('Выберите сотрудника',['style'=>'color:#006400;margin-left:200px']),
Html::submitButton('Отправить',array('class' => 'btn btn-success', 'style' => 'margin-left:200px'))?>
<?php ActiveForm::end() ?>
    <?php endif ?>


<?php if($field2->load(Yii::$app->request->post())):
  ?> 
	<table class="table table-striped">
 <tr>
 <th>Имя работника </th>
</tr>
<?php foreach ($querie as $qu): ?>
<tr>
	<td><?php echo $qu['Name'] ?></td>
</tr>
<?php endforeach ?>
</table>
  <?php endif ?>