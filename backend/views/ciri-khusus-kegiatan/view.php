<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\CiriKhususKegiatan $model */

$this->title = $model->id_ciri_khusus;
$this->params['breadcrumbs'][] = ['label' => 'Ciri Khusus Kegiatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ciri-khusus-kegiatan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_ciri_khusus' => $model->id_ciri_khusus], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_ciri_khusus' => $model->id_ciri_khusus], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_ciri_khusus',
            'ciri_khusus_kegiatan',
        ],
    ]) ?>

</div>
