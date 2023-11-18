<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Permohonan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="permohonan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenis_permohonan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
