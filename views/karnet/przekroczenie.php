<h2>Nowe przekroczenie czasu</h2>
<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$form = ActiveForm::begin([
     'options' => ['class' => 'form-horizontal'],
    'method' => 'POST',
]) ?>

<?= $form->field($model, 'opis') ?>
<?= $form->field($model, 'cena') ?>
<?= $form->field($model, 'rodz')->dropDownList(['-'=>'-']) ?>
<?= $form->field($model, 'kasjer_id')->dropDownList(\yii\helpers\ArrayHelper::map($kasjerzy, 'id', 'kasjer'))->label('Kasjer')?>
<?= $form->field($model, 'data_dodania')->widget(
    'trntv\yii\datetime\DateTimeWidget',
    [
        'phpDatetimeFormat' => 'YYYY-MM-DD HH:mm',
        'momentDatetimeFormat' => 'YYYY-MM-DD HH:mm',
        'clientOptions' => [
            'date' => 'null',
            'defaultDate' => 'moment',
            'allowInputToggle' => true,
            'showClose' => true,
            'showClear' => true,
            'locale' => 'pl-PL',
            'showTodayButton' => true,
            'useCurrent' => true,
            'widgetPositioning' => [
                'horizontal' => 'auto',
                'vertical' => 'auto'
            ],

        ],
    ]
); ?>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('Zapisz', ['class' => 'btn btn-primary']) ?>
    </div>
</div>
<?php ActiveForm::end(); ?>


