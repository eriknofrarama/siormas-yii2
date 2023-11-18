<?php

use backend\models\CiriKhususKegiatan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\CiriKhususKegiatanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ciri Khusus Kegiatans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ciri-khusus-kegiatan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ciri Khusus Kegiatan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ciri_khusus',
            'ciri_khusus_kegiatan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CiriKhususKegiatan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_ciri_khusus' => $model->id_ciri_khusus]);
                 }
            ],
        ],
    ]); ?>


</div>
