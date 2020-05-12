<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OperacjeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="operacje-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'opis') ?>

    <?= $form->field($model, 'cena') ?>

    <?= $form->field($model, 'rodz') ?>

    <?= $form->field($model, 'kasjer_id') ?>

    <?php // echo $form->field($model, 'data_dodania') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
