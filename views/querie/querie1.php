<?php
use yii\helpers\Html; 
use yii\widgets\LinkPager;
?>
<br>
<br>
<br>
<?php echo Html::a(' Назад ' , ['/querie/queries'], ['class' => 'btn btn-danger btn-mn  active '])?>
<br>

<p align="center" style="font-size: 28px">Данные об автопарке :</p>
 <table class="table table-striped">
 <tr>
	<th>ID</th>
	<th >Марка</th>
	<th>Вид</th>
	<th>Номер</th>
	<th>Дата получения</th>
	<th>Дата списания</th>
	<th>Пробег</th>
	<th>Вместимость</th>
	<th>Грузоподъемность</th>
</tr>
<?php foreach ($auto as $aut): ?>
<tr>
	<td><?php echo $aut['Id_auto'] ?></td>
	<td><?php echo $aut['Brand'] ?></td>
	<td><?php echo $aut->type['Type'] ?></td>
	<td><?php echo $aut['License'] ?></td>
	<td><?php echo $aut['Date_of_receiving'] ?></td>
	<td><?php echo $aut['Date_of_write-off'] ?></td>
	<td><?php echo $aut['Mileage'] ?></td>
	<td><?php echo $aut['Capacity_Cars'] ?></td>
	<td><?php echo $aut['Carrying_Truck'] ?></td>
</tr>
<?php endforeach ?>
</table>
<?= LinkPager::widget(['pagination' => $pagination]) ?>


