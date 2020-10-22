<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\CarryingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carrying-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_carrying') ?>

    <?= $form->field($model, 'Id_truck') ?>

    <?= $form->field($model, 'Date_of_Start') ?>

    <?= $form->field($model, 'Date_of_Ending') ?>

    <?= $form->field($model, 'Departure') ?>

    <?php // echo $form->field($model, 'Destination') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
