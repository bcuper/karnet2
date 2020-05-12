<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OperacjeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Operacjes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="operacje-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Operacje', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'opis',
            'cena',
            'rodz',
            'kasjer_id',
            //'data_dodania',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
