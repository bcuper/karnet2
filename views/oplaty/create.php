<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Oplaty */

$this->title = 'Create Oplaty';
$this->params['breadcrumbs'][] = ['label' => 'Oplaties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oplaty-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
