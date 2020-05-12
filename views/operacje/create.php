<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Operacje */

$this->title = 'Create Operacje';
$this->params['breadcrumbs'][] = ['label' => 'Operacjes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operacje-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
