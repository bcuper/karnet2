<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Doladowania */

$this->title = 'Create Doladowania';
$this->params['breadcrumbs'][] = ['label' => 'Doladowanias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doladowania-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
