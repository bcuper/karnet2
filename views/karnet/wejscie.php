<h2>Nowe wejście</h2>

<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$form = ActiveForm::begin([
     'options' => ['class' => 'form-horizontal'],
    'method' => 'POST',
]) ?>

<?= $form->field($model, 'opis') ?>
<?= $form->field($model, 'cena')->dropDownList(\yii\helpers\ArrayHelper::map($cennik, 'cena', 'nazwa'), ['onChange'=>'zmianaMiejsca()'])->label('Miejsce') ?>
<?= $form->field($model, 'rodz')->dropDownList(['-'=>'-', '+'=>'+']) ?>
<?= $form->field($model, 'kasjer_id')->dropDownList(\yii\helpers\ArrayHelper::map($kasjerzy, 'id', 'kasjer'))->label('Kasjer')?>
<?= $form->field($model, 'data_dodania')->widget(
    'trntv\yii\datetime\DateTimeWidget',
    [
        'phpDatetimeFormat' => 'YYYY-MM-DD HH:mm',
        'momentDatetimeFormat' => 'YYYY-MM-DD HH:mm',
        'clientOptions' => [
            'allowInputToggle' => true,
            'showClose' => true,
            'showClear' => true,
            'locale' => 'pl-PL',
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

<script>
    function zmianaMiejsca() {
        var miejsce = $("#wejscieform-cena :selected").text();
        $('#wejscieform-opis').val('Wejście ' + miejsce);
    }
</script>