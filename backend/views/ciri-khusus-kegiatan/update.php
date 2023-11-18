<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\CiriKhususKegiatan $model */

$this->title = 'Update Ciri Khusus Kegiatan: ' . $model->id_ciri_khusus;
$this->params['breadcrumbs'][] = ['label' => 'Ciri Khusus Kegiatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ciri_khusus, 'url' => ['view', 'id_ciri_khusus' => $model->id_ciri_khusus]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ciri-khusus-kegiatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
