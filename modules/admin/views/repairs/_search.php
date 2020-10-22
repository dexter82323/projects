<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\RepairsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="repairs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_repair') ?>

    <?= $form->field($model, 'Id_auto') ?>

    <?= $form->field($model, 'Id_staff') ?>

    <?= $form->field($model, 'Discription') ?>

    <?= $form->field($model, 'Cost') ?>

    <?php // echo $form->field($model, 'Number_of_used_unit') ?>

    <?php // echo $form->field($model, 'Date_of_receiving') ?>

    <?php // echo $form->field($model, 'Date_of_end') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
