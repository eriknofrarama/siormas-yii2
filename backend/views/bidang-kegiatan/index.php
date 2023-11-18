<?php

use backend\models\BidangKegiatan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\BidangKegiatanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bidang Kegiatans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bidang-kegiatan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bidang Kegiatan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_bidang_kegiatan',
            'nama_kegiatan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BidangKegiatan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_bidang_kegiatan' => $model->id_bidang_kegiatan]);
                 }
            ],
        ],
    ]); ?>


</div>
