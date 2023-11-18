<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Permohonan $model */

$this->title = 'Create Permohonan';
$this->params['breadcrumbs'][] = ['label' => 'Permohonans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permohonan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
