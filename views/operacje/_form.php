<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Operacje */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="operacje-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'opis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cena')->textInput() ?>

    <?= $form->field($model, 'rodz')->dropDownList([ '+' => '+', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kasjer_id')->textInput() ?>

    <?= $form->field($model, 'data_dodania')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
