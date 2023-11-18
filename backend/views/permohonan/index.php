<?php

use backend\models\Permohonan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\PermohonanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Permohonans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permohonan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Permohonan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_jenis_permohonan',
            'jenis_permohonan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Permohonan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_jenis_permohonan' => $model->id_jenis_permohonan]);
                 }
            ],
        ],
    ]); ?>


</div>
