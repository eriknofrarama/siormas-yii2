<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\KelengkapanAdministrasi $model */

$this->title = 'Tambah Kelengkapan Administrasi';
$this->params['breadcrumbs'][] = ['label' => 'Kelengkapan Administrasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelengkapan-administrasi-create">

    <!-- <h1><= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
