<?php

use backend\models\Sekretariat;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\SekretariatSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Sekretariat';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- <div class="sekretariat-index">

    <h1>
        <= Html::encode($this->title) ?>
    </h1>

    <p>
        <= Html::a('Create Sekretariat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_sekretariat',
            // 'id_permohonan',
            [
                'attribute' => 'permohonan.nama_ormas',
                'label' => 'Nama ormas',
            ],
            'alamat_sekretariat:ntext',
            // 'id_provinsi',
            [
                'attribute' => 'provinsi.nama_provinsi',
                'label' => 'Provinsi',
            ],
            // 'id_kabupaten',
            [
                'attribute' => 'kabupaten.nama_kabupaten',
                'label' => 'Kabupaten',
            ],
            'kode_pos',
            //'no_telepon',
            //'no_fax',
            //'email:email',
    
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Sekretariat $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id_sekretariat' => $model->id_sekretariat]);
                    }
            ],
        ],
    ]); ?>


</div> -->

<div class="sekretariat-index">
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
                            

                            // 'id_sekretariat',
                            // 'id_permohonan',
                            [
                                'attribute' => 'permohonan.nama_ormas',
                                'label' => 'Nama ormas',
                            ],
                            // 'alamat_sekretariat:ntext',
                            [
                                'attribute' => 'alamat_sekretariat',
                                'label' => 'Alamat Sekretariat',
                            ],
                            // 'id_provinsi',
                            [
                                'attribute' => 'provinsi.nama_provinsi',
                                'label' => 'Provinsi',
                            ],
                            // 'id_kabupaten',
                            [
                                'attribute' => 'kabupaten.nama_kabupaten',
                                'label' => 'Kabupaten',
                            ],
                            // 'kode_pos',
                            [
                                'attribute' => 'kode_pos',
                                'label' => 'Kode Pos',
                            ],
                            //'no_telepon',
                            //'no_fax',
                            //'email:email',
                    
                            [
                                'class' => ActionColumn::className(),
                                'urlCreator' => function ($action, Sekretariat $model, $key, $index, $column) {
                                                    return Url::toRoute([$action, 'id_sekretariat' => $model->id_sekretariat]);
                                                }
                            ],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>