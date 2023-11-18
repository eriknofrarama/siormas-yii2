<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\JanisAkta $model */

$this->title = 'Update Janis Akta: ' . $model->id_jenis_akta;
$this->params['breadcrumbs'][] = ['label' => 'Janis Aktas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jenis_akta, 'url' => ['view', 'id_jenis_akta' => $model->id_jenis_akta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="janis-akta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
