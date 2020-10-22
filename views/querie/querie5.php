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
<p align="center" style="font-size: 28px">Пробег автомобиля:</p>

<?php $form = ActiveForm::begin()?>
<?=$form->field($field,'field')->dropDownList($items,['style'=>'width:500px;border: 1px solid #32CD32;margin-left:200px'])->label('Выберите машину',['style'=>'color:#006400;margin-left:200px']),
$form->field($field,'field2')->dropDownList([1 => 'День',2 => 'Месяц',12=>'Год'],['style'=>'width:500px;border: 1px solid #32CD32;margin-left:200px'])->label('Период времяни',['style'=>'color:#006400;margin-left:200px']),
Html::submitButton('Отправить',array('class' => 'btn btn-success', 'style' => 'margin-left:200px'))?>
<?php ActiveForm::end() ?>


<?php if($field->load(Yii::$app->request->post())):
  ?>  

<table class="table table-striped">
 <tr>
 	<th>Id авто</th>
 <th >Марка</th>
 <th>Номер</th>
  <th>Пробег</th>
</tr>

<tr>
	<td><?php echo $querie['Id_auto'] ?></td>
	<td><?php echo $querie['Brand'] ?></td>
	<td><?php echo $querie['License'] ?></td>
	<td><?php echo $field->field2 * $querie['Mileage'].' Км' ?></td>
</tr>


</table>


<?php endif ?>




