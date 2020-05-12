<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kasjerzy */

$this->title = 'Update Kasjerzy: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kasjerzies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kasjerzy-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
