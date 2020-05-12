<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kasjerzy */

$this->title = 'Create Kasjerzy';
$this->params['breadcrumbs'][] = ['label' => 'Kasjerzies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kasjerzy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
