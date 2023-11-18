<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Permohonan $model */

$this->title = $model->id_jenis_permohonan;
$this->params['breadcrumbs'][] = ['label' => 'Permohonans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="permohonan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_jenis_permohonan' => $model->id_jenis_permohonan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_jenis_permohonan' => $model->id_jenis_permohonan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_jenis_permohonan',
            'jenis_permohonan',
        ],
    ]) ?>

</div>
