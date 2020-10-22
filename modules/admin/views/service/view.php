<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Service */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Таблицы', 'url' => ['/admin/default/index']];
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
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
<div class="service-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->Id_staff], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->Id_staff], [
            'class' => 'btn btn-primary',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id_staff',
            'Name',
           [
             'attribute'=>'profession.Title',
              'label'=>'Профессия'
           ],
            [
                'attribute'=>'brigadier.Name',
                'label'=>'Имя бригадира'
            ]
        ],
    ]) ?>

</div>
