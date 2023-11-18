<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\DataPermohonan $model */

$this->title = 'Tambah Data Permohonan';
$this->params['breadcrumbs'][] = ['label' => 'Data Permohonan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-permohonan-create">

    <!-- <h1><= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
