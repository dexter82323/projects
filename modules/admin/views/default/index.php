<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\web\UrlManager;
?>
<?php $this->title='Админка'; ?>
<br>
<br>
<br>
<div class="admin-default-index">
    <h1 align="center">Список таблиц</h1>
</div>
<br>
<br>
<div  style="" >
    <div class="col-sm-4" >
        
<?php echo Html::a(' Авто ' , ['/admin/auto'], ['class' => 'btn btn-primary btn-lg  btn-block  active ']) ?>
<?php echo Html::a('Типы', ['/admin/type'], ['class' => 'btn btn-primary btn-lg  btn-block  active ']) ?>
<?php echo Html::a('Грузовые перевозки', ['/admin/carrying'], ['class' => 'btn btn-primary btn-lg btn-block   active']) ?>
</div>
<div class="col-sm-4">
<?php echo Html::a('Водители', ['/admin/drivers'], ['class' => 'btn btn-success btn-lg  btn-block  active ']) ?>
<?php echo Html::a('Маршруты ', ['/admin/routes'], ['class' => 'btn btn-success btn-lg  btn-block  active ']) ?>
<?php echo Html::a('Ремонт ', ['/admin/repairs'], ['class' => 'btn btn-success btn-lg  btn-block  active ']) ?>
</div>
<div class="col-sm-4">
<?php echo Html::a('Сотрудники', ['/admin/service'], ['class' => 'btn btn-warning btn-lg btn-block   active']) ?>
<?php echo Html::a('Профессии', ['/admin/profession'], ['class' => 'btn btn-warning btn-lg btn-block   active']) ?>
<?php echo Html::a('Бригадиры', ['/admin/brigadiers'], ['class' => 'btn btn-warning btn-lg btn-block   active']) ?>
<?php echo Html::a('Мастера', ['/admin/masters'], ['class' => 'btn btn-warning btn-lg btn-block   active']) ?>
<?php echo Html::a('Директора', ['/admin/director'], ['class' => 'btn btn-warning btn-lg btn-block   active']) ?>
<?php echo Html::a('Цехи', ['/admin/workshops'], ['class' => 'btn btn-warning btn-lg btn-block   active']) ?>
</div>
</div>