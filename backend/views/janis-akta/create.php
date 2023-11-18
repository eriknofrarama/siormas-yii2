<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\JanisAkta $model */

$this->title = 'Create Janis Akta';
$this->params['breadcrumbs'][] = ['label' => 'Janis Aktas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="janis-akta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
