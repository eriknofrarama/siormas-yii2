<?php

use yii\helpers\Html;
use backend\models\DataPermohonan;

/** @var yii\web\View $this */
/** @var backend\models\Sekretariat $model */

$this->title = $model->permohonan ? $model->permohonan->nama_ormas : '_';
$this->params['breadcrumbs'][] = ['label' => 'Sekretariat', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->permohonan ? $model->permohonan->nama_ormas : '_', 'url' => ['view', 'id_sekretariat' => $model->permohonan ? $model->permohonan->nama_ormas : '_']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sekretariat-update">

    <!-- <h1><= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
