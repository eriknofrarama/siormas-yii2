<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Kabupaten $model */

$this->title = 'Update Kabupaten: ' . $model->id_kabupaten;
$this->params['breadcrumbs'][] = ['label' => 'Kabupatens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kabupaten, 'url' => ['view', 'id_kabupaten' => $model->id_kabupaten]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kabupaten-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
