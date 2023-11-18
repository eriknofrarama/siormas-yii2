<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\JanisAkta $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="janis-akta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenis_akta')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
