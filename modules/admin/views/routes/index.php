<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\SearchRoutes */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Маршруты';
$this->params['breadcrumbs'][] = ['label' => 'Таблицы', 'url' => ['/admin/default/index']];
$this->params['breadcrumbs'][] = $this->title;
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
<div class="routes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить маршрут', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'Id_route',
            'Start',
            'End',
            'Length',
            'Repeats',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
