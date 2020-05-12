<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cennik */

$this->title = 'Create Cennik';
$this->params['breadcrumbs'][] = ['label' => 'Cenniks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cennik-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
