<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\SearchRoutes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="routes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_route') ?>

    <?= $form->field($model, 'Start') ?>

    <?= $form->field($model, 'End') ?>

    <?= $form->field($model, 'Length') ?>

    <?= $form->field($model, 'Repeats') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
