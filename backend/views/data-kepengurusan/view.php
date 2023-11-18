<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\DataKepengurusan $model */

$this->title = $model->permohonan ? $model->permohonan->nama_ormas : '_';
$this->params['breadcrumbs'][] = ['label' => 'Data Kepengurusan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-kepengurusan-view">

    <!-- <h1><= Html::encode($this->title) ?></h1> -->
    <div class="row">
        <div class="col-md-12">
            <p>
                <?= Html::a('<i class= "fa fa-fw fa-pencil-square"></i>kelengkapan administrasi', ['kelengkapan-administrasi/create', 'p' => $model->id_sekretariat, 'i' => $model->id_permohonan, 'f' => $model->id_kepengurusan], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Update', ['update', 'id_kepengurusan' => $model->id_kepengurusan], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id_kepengurusan' => $model->id_kepengurusan], [
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
                                                // 'id_kepengurusan',
                                                // 'id_permohonan',
                                                // [
                                                //     'attribute' => 'permohonan.nama_ormas',
                                                //     'label' => 'Nama ormas',
                                                // ],
                                                // // 'id_sekretariat',
                                                // [
                                                //     'attribute' => 'sekretariat.alamat_sekretariat',
                                                //     'label' => 'Alamat Sekretariat',
                                                // ],
                                        
                                                'nama_ketua',
                                                'nik',
                                                'tanggal_awal',
                                                'tanggal_akhir',
                                            ],
                                        ]) ?>
                                    </div>
                                    <div class="col-md-4">
                                        <?= DetailView::widget([
                                            'model' => $model,
                                            'attributes' => [
                                                'nama_sekretaris',
                                                'nik1',
                                                'tanggal_awal1',
                                                'tanggal_akhir1',
                                            ],
                                        ]) ?>
                                    </div>
                                    <div class="col-md-4">
                                        <?= DetailView::widget([
                                            'model' => $model,
                                            'attributes' => [
                                                'nama_bendahara',
                                                'nik2',
                                                'tanggal_awal2',
                                                'tanggal_akhir2',

                                            ],
                                        ]) ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>