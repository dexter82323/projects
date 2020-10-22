<?php
use yii\helpers\Html; 
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
use app\components\MyWidget;
?>
<br>
<br>
<br>
<?php echo Html::a(' Назад ' , ['/querie/queries'], ['class' => 'btn btn-danger btn-mn  active '])?>
<br>
<p align="center" style="font-size: 28px">Распределение транспорта:</p>	
<br>
<br>
<div style="width: 500px; margin: 0 auto; ">
<?php foreach ($querie as $qu): ?>

	<?php echo MyWidget::widget(['options'=>$qu['Type'],'count'=>count($qu->auto)]) ?>

</ul>
<?php endforeach ?>
</div>



