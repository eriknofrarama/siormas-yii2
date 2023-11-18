<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Permohonan $model */

$this->title = 'Update Permohonan: ' . $model->id_jenis_permohonan;
$this->params['breadcrumbs'][] = ['label' => 'Permohonans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jenis_permohonan, 'url' => ['view', 'id_jenis_permohonan' => $model->id_jenis_permohonan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="permohonan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
