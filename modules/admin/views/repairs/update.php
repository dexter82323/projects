<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Repairs */

$this->title = 'Обновить ремонт: ' . $model->Id_repair;
$this->params['breadcrumbs'][] = ['label' => 'Таблицы', 'url' => ['/admin/default/index']];
$this->params['breadcrumbs'][] = ['label' => 'Ремонт', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_repair, 'url' => ['view', 'id' => $model->Id_repair]];
$this->params['breadcrumbs'][] = 'Обновить';
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
<div class="repairs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
