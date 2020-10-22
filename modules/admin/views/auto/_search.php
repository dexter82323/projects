<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AutoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_auto') ?>

    <?= $form->field($model, 'Brand') ?>

    <?= $form->field($model, 'Type') ?>

    <?= $form->field($model, 'License') ?>

    <?= $form->field($model, 'Date_of_receiving') ?>

    <?php // echo $form->field($model, 'Date_of_write-off') ?>

    <?php // echo $form->field($model, 'Mileage') ?>

    <?php // echo $form->field($model, 'Capacity_Cars') ?>

    <?php // echo $form->field($model, 'Carrying_Truck') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
