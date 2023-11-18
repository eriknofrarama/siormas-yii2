<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\KelengkapanAdministrasi $model */

$this->title = $model->permohonan ? $model->permohonan->nama_ormas : '_';
$this->params['breadcrumbs'][] = ['label' => 'Kelengkapan Administrasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kelengkapan-administrasi-view">

    <!-- <h1><= Html::encode($this->title) ?></h1> -->
    <div class="row">
        <div class="col-md-12">
            <div class=" with-border">
                <p>
                    <?= Html::a('Update', ['update', 'id_administrasi' => $model->id_administrasi], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete', 'id_administrasi' => $model->id_administrasi], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-solid box-primary">
                            <div class="box-header with-border">

                                <h3 class="box-title">Kepengurusan</h3>
                            </div>

                            <form role="form">
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <?= DetailView::widget([
                                                'model' => $model,
                                                'attributes' => [
                                                    // 'id_administrasi',
                                                    // 'scan_anggaran_dasar',
                                                    // 'id_permohonan',
                                                    [
                                                        'attribute' => 'permohonan.nama_ormas',
                                                        'label' => 'Nama ormas',
                                                    ],
                                                    // 'id_sekretariat',
                                                    // [
                                                    //     'attribute' => 'sekretariat.alamat_sekretariat',
                                                    //     'label' => 'Alamat Sekretariat',
                                                    // ],
                                                    // // 'id_kepengurusan',
                                                    // [
                                                    //     'attribute' => 'kepengurusan.nama_lengkap',
                                                    //     'label' => 'Nama Pengurus',
                                                    // ],
                                                    [
                                                        'attribute' => 'scan_anggaran_dasar',
                                                        'label' => 'scan anggaran dasar',
                                                        'format' => 'html',
                                                        'filter' => false,
                                                        'value' => function ($data) {
                                                                                    return Html::img(
                                                                                        Yii::getAlias('@web') . '/images/' . $data['scan_anggaran_dasar'],
                                                                                        ['height' => '100px']
                                                                                    );
                                                                                },
                                                    ],
                                                    // 'scan_logo',
                                                    [
                                                        'attribute' => 'scan_logo',
                                                        'label' => 'scan logo',
                                                        'format' => 'html',
                                                        'filter' => false,
                                                        'value' => function ($data) {
                                                                                    return Html::img(
                                                                                        Yii::getAlias('@web') . '/images/' . $data['scan_logo'],
                                                                                        ['height' => '100px']
                                                                                    );
                                                                                },
                                                    ],
                                                    // 'scan_proker',
                                                    [
                                                        'attribute' => 'scan_proker',
                                                        'label' => 'scan proker',
                                                        'format' => 'html',
                                                        'filter' => false,
                                                        'value' => function ($data) {
                                                                                    return Html::img(
                                                                                        Yii::getAlias('@web') . '/images/' . $data['scan_proker'],
                                                                                        ['height' => '100px']
                                                                                    );
                                                                                },
                                                    ],
                                                    // 'scan_keterangan_domisili',
                                                    [
                                                        'attribute' => 'scan_keterangan_domisili',
                                                        'label' => 'scan keterangan domisili',
                                                        'format' => 'html',
                                                        'filter' => false,
                                                        'value' => function ($data) {
                                                                                    return Html::img(
                                                                                        Yii::getAlias('@web') . '/images/' . $data['scan_keterangan_domisili'],
                                                                                        ['height' => '100px']
                                                                                    );
                                                                                },
                                                    ],
                                             
                                                    // 'scan_bukti_kepemilikan',
                                                    [
                                                        'attribute' => 'scan_bukti_kepemilikan',
                                                        'label' => 'scan bukti kepemilikan',
                                                        'format' => 'html',
                                                        'filter' => false,
                                                        'value' => function ($data) {
                                                            return Html::img(
                                                                Yii::getAlias('@web') . '/images/' . $data['scan_bukti_kepemilikan'],
                                                                ['height' => '100px']
                                                            );
                                                        },
                                                    ],
                                                    // 'scan_foto_kantor',
                                                    [
                                                        'attribute' => 'scan_foto_kantor',
                                                        'label' => 'scan foto kantor',
                                                        'format' => 'html',
                                                        'filter' => false,
                                                        'value' => function ($data) {
                                                            return Html::img(
                                                                Yii::getAlias('@web') . '/images/' . $data['scan_foto_kantor'],
                                                                ['height' => '100px']
                                                            );
                                                        },
                                                    ],
                                                
                                                    // 'scan_keputusan_susunan_pengurus',
                                                    [
                                                        'attribute' => 'scan_keputusan_susunan_pengurus',
                                                        'label' => 'scan keputusan susunan pengurus',
                                                        'format' => 'html',
                                                        'filter' => false,
                                                        'value' => function ($data) {
                                                            return Html::img(
                                                                Yii::getAlias('@web') . '/images/' . $data['scan_keputusan_susunan_pengurus'],
                                                                ['height' => '100px']
                                                            );
                                                        },
                                                    ],
                                                ],
                                                ]) ?>
                                            </div>
                                            <div class="col-md-4">
                                                <?= DetailView::widget([
                                                    'model' => $model,
                                                    'attributes' => [
                                                    // 'scan_biodata_ketua',
                                                    [
                                                        'attribute' => 'scan_biodata_ketua',
                                                        'label' => 'scan biodata ketua',
                                                        'format' => 'html',
                                                        'filter' => false,
                                                        'value' => function ($data) {
                                                            return Html::img(
                                                                Yii::getAlias('@web') . '/images/' . $data['scan_biodata_ketua'],
                                                                ['height' => '100px']
                                                            );
                                                        },
                                                    ],
                                                    // 'scan_foto_ketua',
                                                    [
                                                        'attribute' => 'scan_foto_ketua',
                                                        'label' => 'scan foto ketua',
                                                        'format' => 'html',
                                                        'filter' => false,
                                                        'value' => function ($data) {
                                                            return Html::img(
                                                                Yii::getAlias('@web') . '/images/' . $data['scan_foto_ketua'],
                                                                ['height' => '100px']
                                                            );
                                                        },
                                                    ],
                                               
                                                    //'scan_ktp_ketua',
                                                    [
                                                        'attribute' => 'scan_ktp_ketua',
                                                        'label' => 'scan ktp ketua',
                                                        'format' => 'html',
                                                        'filter' => false,
                                                        'value' => function ($data) {
                                                            return Html::img(
                                                                Yii::getAlias('@web') . '/images/' . $data['scan_ktp_ketua'],
                                                                ['height' => '100px']
                                                            );
                                                        },
                                                    ],
                                                    //'scan_biodata_sekretaris',
                                                    [
                                                        'attribute' => 'scan_biodata_sekretaris',
                                                        'label' => 'scan biodata sekretaris',
                                                        'format' => 'html',
                                                        'filter' => false,
                                                        'value' => function ($data) {
                                                            return Html::img(
                                                                Yii::getAlias('@web') . '/images/' . $data['scan_biodata_sekretaris'],
                                                                ['height' => '100px']
                                                            );
                                                        },
                                                    ],
                                                
                                                    //'scan_foto_sekretaris',
                                                    [
                                                        'attribute' => 'scan_foto_sekretaris',
                                                        'label' => 'scan foto sekretaris',
                                                        'format' => 'html',
                                                        'filter' => false,
                                                        'value' => function ($data) {
                                                            return Html::img(
                                                                Yii::getAlias('@web') . '/images/' . $data['scan_foto_sekretaris'],
                                                                ['height' => '100px']
                                                            );
                                                        },
                                                    ],
                                                    // 'scan_ktp_sekretaris',
                                                    [
                                                        'attribute' => 'scan_ktp_sekretaris',
                                                        'label' => 'scan ktp sekretaris',
                                                        'format' => 'html',
                                                        'filter' => false,
                                                        'value' => function ($data) {
                                                            return Html::img(
                                                                Yii::getAlias('@web') . '/images/' . $data['scan_ktp_sekretaris'],
                                                                ['height' => '100px']
                                                            );
                                                        },
                                                    ],
                                              
                                                    // 'scan_biodata_bendahara',
                                                    [
                                                        'attribute' => 'scan_biodata_bendahara',
                                                        'label' => 'scan biodata bendahara',
                                                        'format' => 'html',
                                                        'filter' => false,
                                                        'value' => function ($data) {
                                                            return Html::img(
                                                                Yii::getAlias('@web') . '/images/' . $data['scan_biodata_bendahara'],
                                                                ['height' => '100px']
                                                            );
                                                        },
                                                    ],
                                              
                                                    // 'scan_foto_bendahara',
                                                    [
                                                        'attribute' => 'scan_foto_bendahara',
                                                        'label' => 'scan foto bendahara',
                                                        'format' => 'html',
                                                        'filter' => false,
                                                        'value' => function ($data) {
                                                            return Html::img(
                                                                Yii::getAlias('@web') . '/images/' . $data['scan_foto_bendahara'],
                                                                ['height' => '100px']
                                                            );
                                                        },
                                                    ],
                                                ],
                                                ]) ?>
                                            </div>
                                            <div class="col-md-4">
                                                <?= DetailView::widget([
                                                    'model' => $model,
                                                    'attributes' => [
                                                    //'scan_ktp_bendahara',
                                                    [
                                                        'attribute' => 'scan_ktp_bendahara',
                                                        'label' => 'scan ktp bendahara',
                                                        'format' => 'html',
                                                        'filter' => false,
                                                        'value' => function ($data) {
                                                            return Html::img(
                                                                Yii::getAlias('@web') . '/images/' . $data['scan_ktp_bendahara'],
                                                                ['height' => '100px']
                                                            );
                                                        },
                                                    ],
                                                    // 'scan_formulir_isian_data_ormas',
                                                    [
                                                        'attribute' => 'scan_formulir_isian_data_ormas',
                                                        'label' => 'scan formulir isian data ormas',
                                                        'format' => 'html',
                                                        'filter' => false,
                                                        'value' => function ($data) {
                                                            return Html::img(
                                                                Yii::getAlias('@web') . '/images/' . $data['scan_formulir_isian_data_ormas'],
                                                                ['height' => '100px']
                                                            );
                                                        },
                                                    ],
                                                    // 'scan_surat_pernyataan_permendagri',
                                                    [
                                                        'attribute' => 'scan_surat_pernyataan_permendagri',
                                                        'label' => 'scan surat pernyataan permendagri',
                                                        'format' => 'html',
                                                        'filter' => false,
                                                        'value' => function ($data) {
                                                            return Html::img(
                                                                Yii::getAlias('@web') . '/images/' . $data['scan_surat_pernyataan_permendagri'],
                                                                ['height' => '100px']
                                                            );
                                                        },
                                                    ],
                                                    //'scan_keabsahan_ormas',
                                                    [
                                                        'attribute' => 'scan_keabsahan_ormas',
                                                        'label' => 'scan keabsahan ormas',
                                                        'format' => 'html',
                                                        'filter' => false,
                                                        'value' => function ($data) {
                                                            return Html::img(
                                                                Yii::getAlias('@web') . '/images/' . $data['scan_keabsahan_ormas'],
                                                                ['height' => '100px']
                                                            );
                                                        },
                                                    ],
                                                    // 'scan_pengantar_dari_kesbangpol',
                                                    [
                                                        'attribute' => 'scan_pengantar_dari_kesbangpol',
                                                        'label' => 'scan pengantar dari kesbangpol',
                                                        'format' => 'html',
                                                        'filter' => false,
                                                        'value' => function ($data) {
                                                            return Html::img(
                                                                Yii::getAlias('@web') . '/images/' . $data['scan_pengantar_dari_kesbangpol'],
                                                                ['height' => '100px']
                                                            );
                                                        },
                                                    ],

                                                ],
                                            ]) ?>

                                        </div>