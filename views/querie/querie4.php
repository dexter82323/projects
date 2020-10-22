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
<p align="center" style="font-size: 28px">Распределение автомобилей по маршрутам:</p>


<table class="table table-striped">
 <tr>
 <th>Фио водителя</th>
 <th >Марка</th>
 <th>Номер</th>
 <th>Номер маршрута</th>
 <th>Начальная остановка</th>
 <th>Конечная остановка</th>
</tr>

<?php foreach ($querie as $qu): ?>

<tr>
	<td><?php echo $qu['Name'] ?></td>
	<td><?php echo $qu->auto['Brand'] ?></td>
	<td><?php echo $qu->auto['License'] ?></td>
	<td><?php echo $qu->route['Id_route'] ?></td>
	<td><?php echo $qu->route['Start'] ?></td>
	<td><?php echo $qu->route['End'] ?></td>
</tr>
<?php endforeach ?>
</table>