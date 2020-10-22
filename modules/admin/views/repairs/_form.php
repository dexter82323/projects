<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Repairs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="repairs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_auto')->textInput() ?>

    <?= $form->field($model, 'Id_staff')->textInput() ?>

    <?= $form->field($model, 'Discription')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cost')->textInput() ?>

    <?= $form->field($model, 'Number_of_used_unit')->textInput() ?>

    <?= $form->field($model, 'Date_of_receiving')->widget(DatePicker::classname(),[

        'language' => 'ru',
        'value' => $model->Date_of_receiving,
        'dateFormat' => 'yyyy-MM-dd',
        'inline' => true,
    ]) ?>

    <?= $form->field($model, 'Date_of_end')->widget(DatePicker::classname(),[

        'language' => 'ru',
        'value' => $model->Date_of_end,
        'dateFormat' => 'yyyy-MM-dd',
        'inline' => true,
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
