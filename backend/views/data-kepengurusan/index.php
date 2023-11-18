<?php

use backend\models\DataKepengurusan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\DataKepengurusanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Kepengurusan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-kepengurusan-index">

    <!-- <h1><= Html::encode($this->title) ?></h1>

    <p>
        <= Html::a('Create Data Kepengurusan', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->
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

                            // 'id_kepengurusan',
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
                           
                            // 'nama_ketua',
                            [
                                'attribute' => 'nama_ketua',
                                'label' => 'Nama Ketua',
                            ],
                            // 'nik',
                            // 'nama_sekretaris',
                            [
                                'attribute' => 'nama_sekretaris',
                                'label' => 'Nama Sekretaris',
                            ],
                            // 'nik1',
                            // 'nama_bendahara',
                            [
                                'attribute' => 'nama_bendahara',
                                'label' => 'Nama Bendahara',
                            ],
                            // 'tanggal_awal',
                            //'tanggal_akhir',
                    
                            [
                                'class' => ActionColumn::className(),
                                'urlCreator' => function ($action, DataKepengurusan $model, $key, $index, $column) {
                                                        return Url::toRoute([$action, 'id_kepengurusan' => $model->id_kepengurusan]);
                                                    }
                            ],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>

</div>