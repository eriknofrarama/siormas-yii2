<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\DataKepengurusan $model */

$this->title = $model->permohonan ? $model->permohonan->nama_ormas : '_';
$this->params['breadcrumbs'][] = ['label' => 'Data Kepengurusan', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->id_kepengurusan, 'url' => ['view', 'id_kepengurusan' => $model->id_kepengurusan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-kepengurusan-update">

    <!-- <h1><= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
