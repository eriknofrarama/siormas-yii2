<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\KelengkapanAdministrasi $model */

$this->title =  $model->permohonan ? $model->permohonan->nama_ormas : '_';
$this->params['breadcrumbs'][] = ['label' => 'Kelengkapan Administrasis', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->id_administrasi, 'url' => ['view', 'id_administrasi' => $model->id_administrasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kelengkapan-administrasi-update">

    <!-- <h1><= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
