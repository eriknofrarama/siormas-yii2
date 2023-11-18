<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use backend\models\DataPermohonan;

/** @var yii\web\View $this */
/** @var backend\models\DataKepengurusanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-kepengurusan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="row">

        <div class="col-md-6">

            <div class="row">

                <div class="col-sm-6">
                    <!-- <= $form->field($model, 'id_permohonan') ?> -->
                    <?= $form->field($model, 'id_permohonan')->label('Nama Ormas')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map(DataPermohonan::find()->all(), 'id_permohonan', 'nama_ormas'),
                        'language' => 'en',
                        'options' => ['placeholder' => 'Pilih ..'],
                        'pluginOptions' => ['allowClear' => true],
                    ]); ?>
                </div>
                <div class="col-md-6">
                    <div class="form-group" style="padding-top: 25px">
                        <?= Html::submitButton('<i class="fa fa-fw fa-search"></i> Cari', ['class' => 'btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
                <!-- <= $form->field($model, 'id_kepengurusan') ?>

    

    <= $form->field($model, 'nama_lengkap') ?>

    <= $form->field($model, 'nik') ?>

    <= $form->field($model, 'tanggal_awal') ?> -->

                <!-- <php // echo $form->field($model, 'tanggal_akhir') ?> -->

                <!-- <php // echo $form->field($model, 'id_permohonan') ?>

                <php // echo $form->field($model, 'id_sekretariat') ?> -->

                <!-- <div class="form-group">
        <= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?> -->