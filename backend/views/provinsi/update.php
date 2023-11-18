<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Provinsi $model */

$this->title = 'Update Provinsi: ' . $model->id_provinsi;
$this->params['breadcrumbs'][] = ['label' => 'Provinsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_provinsi, 'url' => ['view', 'id_provinsi' => $model->id_provinsi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="provinsi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
