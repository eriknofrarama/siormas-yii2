<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


/** @var yii\web\View $this */
/** @var backend\models\DataPermohonan $model */

$this->title = $model->nama_ormas;
$this->params['breadcrumbs'][] = ['label' => 'Data Permohonan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-permohonan-view">

    <div class="row">
        <div class="col-md-12">
            <!-- <div class="box box-primary"> -->
                <!-- <div class="box box-success box-solid"> -->
                <div class=" with-border">
                    <p>
                    <!-- <h3 class="box-title">
                        <= $model->nama_ormas; ?>
                    </h3> -->
                    <!-- <div class="pull-left"> -->
                        <?= Html::a('<i class= "fa fa-fw fa-pencil-square"></i>sekretariat', ['sekretariat/create', 'p' => $model->id_permohonan], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Update', ['update', 'id_permohonan' => $model->id_permohonan], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id_permohonan' => $model->id_permohonan], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    <!-- </div> -->
                        </p>
                </div>
                <!-- <div class="box-body">
                    <div class="col-md-6">

                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box">
                                        <div class="box-body no-padding">
                                            <table class="table">
                                                <tbody> -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- <div class="box-body "> -->
                        <div class="box box-solid box-primary">
                            <div class="box-header with-border">

                                <h3 class="box-title">Data Ormas</h3>
                            </div>
                            <form role="form">
                                <div class="box-body">
                                    <div class="col-md-6">
                                        <?= DetailView::widget([
                                            'model' => $model,
                                            'attributes' => [
                                                // 'id_permohonan',
                                                // 'id_jenis_permohonan',
                                                [
                                                    'attribute' => 'permohonan.jenis_permohonan',
                                                    'label' => 'Jenis Permohonan    :',
                                                ],
                                                'nama_ormas',
                                                'tempat_pendirian',
                                                'tanggal_pendirian',
                                                'no_surat_permohonan',
                                                'tanggal_surat_permohonan',
                                                // 'scan_surat_permohonan',
                                                // [
                                                //     'attribute' => 'scan_surat_permohonan',
                                                //     'label' => 'file scan surat permohonan',
                                                //     'format' => 'html',
                                                //     'filter' => false,
                                                //     'value' => function ($data) {
                                                //                         return Html::img(
                                                //                             Yii::getAlias('@web') . '/images/' . $data['scan_surat_permohonan'],
                                                //                             ['height' => '100px']
                                                //                         );
                                                //                     },
                                                // ],

                                                'no_akta_notaris',
                                                'tanggal_akta_notaris',
                                                'nama_notaris',
                                                // 'id_jenis_akta',
                                                [
                                                    'attribute' => 'akta.jenis_akta',
                                                    'label' => 'Jenis akta  :',
                                                ],
                                                // 'scan_akta_notaris',
                                                // [
                                                //     'attribute' => 'scan_akta_notaris',
                                                //     'label' => 'file scan akta notaris',
                                                //     'format' => 'html',
                                                //     'filter' => false,
                                                //     'value' => function ($data) {
                                                //                         return Html::img(
                                                //                             Yii::getAlias('@web') . '/images/' . $data['scan_akta_notaris'],
                                                //                             ['height' => '100px']
                                                //                         );
                                                //                     },
                                                // ],
                                                'no_npwp',
                                                // 'scan_npwp',
                                                // [
                                                //     'attribute' => 'scan_npwp',
                                                //     'label' => 'file scan npwp',
                                                //     'format' => 'html',
                                                //     'filter' => false,
                                                //     'value' => function ($data) {
                                                //                         return Html::img(
                                                //                             Yii::getAlias('@web') . '/images/' . $data['scan_npwp'],
                                                //                             ['height' => '100px']
                                                //                         );
                                                //                     },
                                                // ],
                                                'nama_bank',
                                                'no_rekening',
                                                // 'id_bidang_kegiatan',
                                                [
                                                    'attribute' => 'kegiatan.nama_kegiatan',
                                                    'label' => 'Bidang Kegiatan :',
                                                ],
                                                // 'id_ciri_khusus',
                                                [
                                                    'attribute' => 'ciri.ciri_khusus_kegiatan',
                                                    'label' => 'Ciri Khusus Kegiatan    :',
                                                ],
                                                'tujuan_ormas:ntext',
                                            ],
                                        ]) ?>
                                    </div>
                                    <div class="col-md-6">
                                    <?= DetailView::widget([
                                            'model' => $model,
                                            'attributes' => [
                                                [
                                                    'attribute' => 'scan_surat_permohonan',
                                                    'label' => 'file scan surat permohonan  :',
                                                    'format' => 'html',
                                                    'filter' => false,
                                                    'value' => function ($data) {
                                                                        return Html::img(
                                                                            Yii::getAlias('@web') . '/images/' . $data['scan_surat_permohonan'],
                                                                            ['height' => '100px']
                                                                        );
                                                                    },
                                                ],
                                                [
                                                    'attribute' => 'scan_akta_notaris',
                                                    'label' => 'file scan akta notaris  :',
                                                    'format' => 'html',
                                                    'filter' => false,
                                                    'value' => function ($data) {
                                                                        return Html::img(
                                                                            Yii::getAlias('@web') . '/images/' . $data['scan_akta_notaris'],
                                                                            ['height' => '100px']
                                                                        );
                                                                    },
                                                ],
                                                [
                                                    'attribute' => 'scan_npwp',
                                                    'label' => 'file scan npwp  :',
                                                    'format' => 'html',
                                                    'filter' => false,
                                                    'value' => function ($data) {
                                                                        return Html::img(
                                                                            Yii::getAlias('@web') . '/images/' . $data['scan_npwp'],
                                                                            ['height' => '100px']
                                                                        );
                                                                    },
                                                ],
                                            ],
                                            ]) ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> -->
                </div>