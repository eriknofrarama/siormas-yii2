<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\BidangKegiatan $model */

$this->title = 'Create Bidang Kegiatan';
$this->params['breadcrumbs'][] = ['label' => 'Bidang Kegiatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bidang-kegiatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
