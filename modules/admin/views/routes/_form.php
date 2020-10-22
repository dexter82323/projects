<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Routes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="routes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Start')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'End')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Length')->textInput() ?>

    <?= $form->field($model, 'Repeats')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
