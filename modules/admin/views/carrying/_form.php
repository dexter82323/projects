<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Carrying */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carrying-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_truck')->textInput() ?>

    <?= $form->field($model, 'Date_of_Start')->widget(DatePicker::classname(),[

        'language' => 'ru',
        'value' => $model->Date_of_Start,
        'dateFormat' => 'yyyy-MM-dd',
        'inline' => true,
    ]) ?>

    <?= $form->field($model, 'Date_of_Ending')->widget(DatePicker::classname(),[

        'language' => 'ru',
        'value' => $model->Date_of_Ending,
        'dateFormat' => 'yyyy-MM-dd',
        'inline' => true,
    ]) ?>

    <?= $form->field($model, 'Departure')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Destination')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
