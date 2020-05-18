<h3>Kalkulator opłat miesięcznych</h3>

<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$form = ActiveForm::begin([
    'options' => ['class' => 'form-horizontal'],
    'method' => 'POST',
]) ?>

<?= $form->field($model, 'saldo'); ?>
<?= $form->field($model, 'mieszkanie'); ?>
<?= $form->field($model, 'mpk'); ?>
<?= $form->field($model, 'czy_mpk')->checkbox(); ?>
<?= $form->field($model, 'mosir'); ?>
<?= $form->field($model, 'czy_mosir')->checkbox(); ?>
<?= $form->field($model, 'telefon'); ?>
<?= $form->field($model, 'czy_telefon')->checkbox(); ?>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('Zapisz', ['class' => 'btn btn-primary']) ?>
    </div>
</div>
<?php ActiveForm::end(); ?>

