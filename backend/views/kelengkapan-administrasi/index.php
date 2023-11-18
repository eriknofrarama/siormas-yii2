<?php

use backend\models\KelengkapanAdministrasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\KelengkapanAdministrasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kelengkapan Administrasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelengkapan-administrasi-index">

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        // 'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            // 'id_administrasi',
                            // 'id_permohonan',
                            [
                                'attribute' => 'permohonan.nama_ormas',
                                'label' => 'Nama ormas',
                            ],
                            // 'id_sekretariat',
                            [
                                'attribute' => 'sekretariat.alamat_sekretariat',
                                'label' => 'Alamat Sekretariat',
                            ],
                            // 'id_kepengurusan',
                            // [
                            //     'attribute' => 'kepengurusan.nama_lengkap',
                            //     'label' => 'Nama Pengurus',
                            // ],
                            // 'scan_anggaran_dasar',
                            // [
                            //     'attribute' => 'scan_anggaran_dasar',
                            //     'label' => 'scan anggaran dasar',
                            //     'format' => 'html',
                            //     'filter' => false,
                            //     'value' => function ($data) {
                            //             return Html::img(
                            //                 Yii::getAlias('@web') . '/images/' . $data['scan_anggaran_dasar'],
                            //                 ['height' => '30px']
                            //             );
                            //         },
                            // ],
                            // 'scan_logo',
                            [
                                'attribute' => 'scan_logo',
                                'label' => 'scan logo',
                                'format' => 'html',
                                'filter' => false,
                                'value' => function ($data) {
                                                        return Html::img(
                                                            Yii::getAlias('@web') . '/images/' . $data['scan_logo'],
                                                            ['height' => '30px']
                                                        );
                                                    },
                            ],
                            // 'scan_proker',
                            // 'scan_keterangan_domisili',
                            //'scan_bukti_kepemilikan',
                            //'scan_foto_kantor',
                            //'scan_keputusan_susunan_pengurus',
                            //'scan_biodata_ketua',
                            //'scan_foto_ketua',
                            //'scan_ktp_ketua',
                            //'scan_biodata_sekretaris',
                            //'scan_foto_sekretaris',
                            //'scan_ktp_sekretaris',
                            //'scan_biodata_bendahara',
                            //'scan_foto_bendahara',
                            //'scan_ktp_bendahara',
                            //'scan_formulir_isian_data_ormas',
                            //'scan_surat_pernyataan_permendagri',
                            //'scan_keabsahan_ormas',
                            //'scan_pengantar_dari_kesbangpol',
                    
                            [
                                'class' => ActionColumn::className(),
                                'urlCreator' => function ($action, KelengkapanAdministrasi $model, $key, $index, $column) {
                                                        return Url::toRoute([$action, 'id_administrasi' => $model->id_administrasi]);
                                                    }
                            ],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>

</div>