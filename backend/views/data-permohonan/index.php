<?php

use backend\models\DataPermohonan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\DataPermohonanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Permohonan';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- <div class="data-permohonan-index">

    <h1>
        <= Html::encode($this->title) ?>
    </h1>

    <p>
         <= Html::a('Create Data Permohonan', ['create'], ['class' => 'btn btn-success']) ?> -->
    <!-- </p> -->

    <!-- <php echo $this->render('_search', ['model' => $searchModel]); ?> -->

    <!-- <= GridView::widget([ -->
        <!-- 'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_permohonan',
            // 'id_jenis_permohonan',
            [
                'attribute' => 'permohonan.jenis_permohonan',
                'label' => 'Jenis Permohonan',
            ],
            'nama_ormas',
            'tempat_pendirian',
            'tanggal_pendirian',
            //'no_surat_permohonan',
            //'tanggal_surat_permohonan',
            //'scan_surat_permohonan',
            //'no_akta_notaris',
            //'tanggal_akta_notaris',
            //'nama_notaris',
            //'id_jenis_akta',
            //'scan_akta_notaris',
            //'no_npwp',
            //'scan_npwp',
            //'nama_bank',
            //'no_rekening',
            //'id_bidang_kegiatan',
            //'id_ciri_khusus',
            //'tujuan_ormas:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DataPermohonan $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id_permohonan' => $model->id_permohonan]);
                    }
            ],
        ],
    ]); ?> -->


<!-- </div> -->

<div class="data-permohonan-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
                    <!-- <div class="col-md-8"> -->
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        // 'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            [
                                'attribute' => 'permohonan.jenis_permohonan',
                                'label' => 'Jenis Permohonan',
                            ],
                            // 'nama_ormas',
                            [
                                'attribute' => 'nama_ormas',
                                'label' => 'Nama Ormas',
                            ],
                            // 'tempat_pendirian',
                            [
                                'attribute' => 'tempat_pendirian',
                                'label' => 'Tempat Pendirian',
                            ],
                            // 'tanggal_pendirian',
                            [
                                'attribute' => 'tanggal_pendirian',
                                'label' => 'Tanggal Pendirian',
                            ],
                            [
                                'class' => ActionColumn::className(),
                                'urlCreator' => function ($action, DataPermohonan $model, $key, $index, $column) {
                                        return Url::toRoute([$action, 'id_permohonan' => $model->id_permohonan]);
                                    }
                            ],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>