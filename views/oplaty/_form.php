<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Oplaty */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oplaty-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mieszkanie')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mpk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mosir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
