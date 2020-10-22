<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\modules\admin\models\Type;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Auto */

$this->title = 'Добавить машину';
$this->params['breadcrumbs'][] = ['label' => 'Таблицы', 'url' => ['/admin/default/index']];
$this->params['breadcrumbs'][] = ['label' => 'Авто', 'url' => ['index']];
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
<div class="auto-create">

    <h1 style="margin-left:10px "><?= Html::encode($this->title) ?></h1>
    <?php  $items = ArrayHelper::map(Type::find()->all(),'Id_Type', 'Type'); ?>
    <?= $this->render('_form', [
        'model' => $model,
        'items'=>$items,
    ]) ?>

</div>
