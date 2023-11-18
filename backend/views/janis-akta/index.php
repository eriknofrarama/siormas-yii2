<?php

use backend\models\JanisAkta;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\JanisAktaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Janis Aktas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="janis-akta-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Janis Akta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_jenis_akta',
            'jenis_akta',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, JanisAkta $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_jenis_akta' => $model->id_jenis_akta]);
                 }
            ],
        ],
    ]); ?>


</div>
