<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Sekretariat $model */

$this->title = 'Sekretariat';
$this->params['breadcrumbs'][] = ['label' => 'Sekretariat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sekretariat-create">

    <!-- <h1><= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
