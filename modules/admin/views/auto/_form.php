<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Auto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auto-form" style="width: 500px; margin-left:10px ">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Brand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Type')->DropDownList($items) ?>

    <?= $form->field($model, 'License')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Date_of_receiving')->widget(DatePicker::classname(),[

            'language' => 'ru',
            'value' => $model->Date_of_receiving,
            'dateFormat' => 'yyyy-MM-dd',
            'inline' => true,
    ]) ?>


    <?= $form->field($model, 'Mileage')->textInput() ?>

    <?= $form->field($model, 'Capacity_Cars')->textInput() ?>

    <?= $form->field($model, 'Carrying_Truck')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
