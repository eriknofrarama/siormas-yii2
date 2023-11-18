<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\DataPermohonan $model */

$this->title = 'Update Data: ' . $model->nama_ormas;
$this->params['breadcrumbs'][] = ['label' => 'Data Permohonans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_ormas, 'url' => ['view', 'nama_ormas' => $model->nama_ormas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-permohonan-update">

    <!-- <h1><= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
