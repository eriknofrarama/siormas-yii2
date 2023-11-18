<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\JanisAkta $model */

$this->title = $model->id_jenis_akta;
$this->params['breadcrumbs'][] = ['label' => 'Janis Aktas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="janis-akta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_jenis_akta' => $model->id_jenis_akta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_jenis_akta' => $model->id_jenis_akta], [
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
            'id_jenis_akta',
            'jenis_akta',
        ],
    ]) ?>

</div>
