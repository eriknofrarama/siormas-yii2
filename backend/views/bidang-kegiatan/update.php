<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\BidangKegiatan $model */

$this->title = 'Update Bidang Kegiatan: ' . $model->id_bidang_kegiatan;
$this->params['breadcrumbs'][] = ['label' => 'Bidang Kegiatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_bidang_kegiatan, 'url' => ['view', 'id_bidang_kegiatan' => $model->id_bidang_kegiatan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bidang-kegiatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
