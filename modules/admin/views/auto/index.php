<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;
use http\Url;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\AutoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Авто';
$this->params['breadcrumbs'][] = ['label' => 'Таблицы', 'url' => ['/admin/default/index']];;
$this->params['breadcrumbs'][] = $this->title;


?>
<?php
echo Breadcrumbs::widget([
   'itemTemplate' => "<li><i>{link}</i></li>\n",
    'homeLink' => [
        'label' => 'Главная ',
        'url' => Yii::$app->homeUrl,
    ],
'links' => $this->params['breadcrumbs'],
    'options' => ['class' => 'breadcrumb', 'style' => 'font-size:17px'],
]);
?>
<div class="auto-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить машину', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => ['class'=>'warning'],
        'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => 'NULL'],
        //'emptyCell' =>'Изменить',
        'tableOptions' => [
                'class' => 'table table-bordered table-striped table-hover',
                'style'=>'',
        ],
        'columns' => [
            [
                'attribute'=>'Id_auto',
                'value'=>'Id_auto',
                'headerOptions' => ['style' => 'background-color:#CCFFFF'],
                'filterOptions' =>['style' => 'background-color:#FFCC66'],
            ],
            [
                'attribute'=>'Brand',
                'value'=>'Brand',
                'headerOptions' => ['style' => 'background-color:#CCFFFF'],
                'filterOptions' =>['style' => 'background-color:#FFCC66'],
            ],
            [
                    'attribute'=>'typee',
                    'value'=>'type.Type',
                    'label'=>'Тип',
                    'filter' => $items,
                'headerOptions' => ['style' => 'background-color:#CCFFFF'],
                'filterOptions' =>['style' => 'background-color:#FFCC66'],
            ],
            [
                'attribute'=>'License',
                'value'=>'License',
                'headerOptions' => ['style' => 'background-color:#CCFFFF'],
                'filterOptions' =>['style' => 'background-color:#FFCC66'],
            ],
            [
                'attribute'=>'Date_of_receiving',
                'value'=>'Date_of_receiving',
                'headerOptions' => ['style' => 'background-color:#CCFFFF'],
                'filterOptions' =>['style' => 'background-color:#FFCC66'],
            ],
            [
                'attribute'=>'Mileage',
                'value'=>'Mileage',
                'headerOptions' => ['style' => 'background-color:#CCFFFF'],
                'filterOptions' =>['style' => 'background-color:#FFCC66'],
            ],
            [
                'attribute'=>'Capacity_Cars',
                'value'=>'Capacity_Cars',
                'headerOptions' => ['style' => 'background-color:#CCFFFF'],
                'filterOptions' =>['style' => 'background-color:#FFCC66'],
            ],
            [
                'attribute'=>'Carrying_Truck',
                'value'=>'Carrying_Truck',
                'headerOptions' => ['style' => 'background-color:#CCFFFF'],
                'filterOptions' =>['style' => 'background-color:#FFCC66'],
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Изменить',
                'headerOptions' => ['style' => 'background-color:#CCFFFF; color:#337ab7;'],
                'filterOptions' =>['style' => 'background-color:#FFCC66'],

            ],

        ],
    ]);



    ?>


</div>
