<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Sekretariat $model */

$this->title = $model->permohonan ? $model->permohonan->nama_ormas : '_';
$this->params['breadcrumbs'][] = ['label' => 'Sekretariat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sekretariat-view">

    <!-- <h1><= Html::encode($this->title) ?></h1> -->
    <div class="row">
        <div class="col-md-12">
            <!-- <div class="box box-primary"> -->
            <!-- <div class="box box-success box-solid"> -->
            <div class=" with-border">
                <p>
                    <?= Html::a('<i class= "fa fa-fw fa-pencil-square"></i>kepengurusan', ['data-kepengurusan/create', 'i' => $model->id_permohonan, 'p' => $model->id_sekretariat], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Update', ['update', 'id_sekretariat' => $model->id_sekretariat], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete', 'id_sekretariat' => $model->id_sekretariat], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- <div class="box-body "> -->
                    <div class="box box-solid box-primary">
                        <div class="box-header with-border">

                            <h3 class="box-title">Sekretariat</h3>
                        </div>
                        <form role="form">
                            <div class="box-body">
                                <div class="col-md-6">
                                    <?= DetailView::widget([
                                        'model' => $model,
                                        'attributes' => [
                                            // 'id_sekretariat',
                                            // 'id_permohonan',
                                            [
                                                'attribute' => 'permohonan.nama_ormas',
                                                'label' => 'Nama ormas :',
                                            ],
                                            'alamat_sekretariat:ntext',
                                            // 'id_provinsi',
                                            [
                                                'attribute' => 'provinsi.nama_provinsi',
                                                'label' => 'Provinsi :',
                                            ],
                                            // 'id_kabupaten',
                                            [
                                                'attribute' => 'kabupaten.nama_kabupaten',
                                                'label' => 'Kabupaten :',
                                            ],
                                            'kode_pos',
                                            'no_telepon',
                                            'no_fax',
                                            'email:email',

                                        ],
                                    ]) ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>