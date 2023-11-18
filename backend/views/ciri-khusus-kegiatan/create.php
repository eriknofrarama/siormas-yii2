<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\CiriKhususKegiatan $model */

$this->title = 'Create Ciri Khusus Kegiatan';
$this->params['breadcrumbs'][] = ['label' => 'Ciri Khusus Kegiatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ciri-khusus-kegiatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
