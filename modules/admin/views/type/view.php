<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Type */

$this->title = $model->Id_Type;
$this->params['breadcrumbs'][] = ['label' => 'Таблицы', 'url' => ['/admin/default/index']];;
$this->params['breadcrumbs'][] = ['label' => 'Типы', 'url' => ['index']];
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
<div class="type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->Id_Type], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->Id_Type], [
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
            'Id_Type',
            'Type',
        ],
    ]) ?>

</div>
