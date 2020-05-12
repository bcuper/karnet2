<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cennik */

$this->title = 'Update Cennik: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cenniks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cennik-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
