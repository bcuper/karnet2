<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KasjerzySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kasjerzies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kasjerzy-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kasjerzy', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kasjer',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
