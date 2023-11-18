<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\DataKepengurusan $model */

$this->title = 'Tambah Data Kepengurusan';
$this->params['breadcrumbs'][] = ['label' => 'Data Kepengurusan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-kepengurusan-create">

    <!-- <h1><= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
