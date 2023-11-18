<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Permohonan;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use backend\models\JanisAkta;
use backend\models\BidangKegiatan;
use backend\models\CiriKhususKegiatan;
use kartik\date\DatePicker;
use kartik\file\FileInput;

/** @var yii\web\View $this */
/** @var backend\models\DataPermohonan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-permohonan-form">

  <?php $form = ActiveForm::begin(); ?>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Data Permohonan</h3>
        </div>
        <form role="form">
          <div class="box-body">
            <div class="form-group">

              <div class="col-md-6">
                <?= $form->field($model, 'id_jenis_permohonan')->widget(Select2::classname(), [
                  'data' => ArrayHelper::map(Permohonan::find()->all(), 'id_jenis_permohonan', 'jenis_permohonan'),
                  'language' => 'en',
                  'options' => ['placeholder' => 'Pilih ..'],
                  'pluginOptions' => ['allowClear' => true],
                ]); ?>
              <!-- </div>
              <div class="col-md-6"> -->
                <?= $form->field($model, 'nama_ormas')->textInput(['maxlength' => true]) ?>
              <!-- </div>
              <div class="col-md-6"> -->
                <?= $form->field($model, 'tempat_pendirian')->textInput(['maxlength' => true]) ?>
              <!-- </div>
              <div class="col-md-6"> -->
                <?= $form->field($model, 'tanggal_pendirian')->widget(DatePicker::className(), [
                  'name' => 'dp_1',
                  'type' => DatePicker::TYPE_INPUT,
                  // 'value' => '23-Feb-1982',
                  'options' => ['placeholder' => '--Tanggal Pendirian--'],
                  // 'type' => DatePicker::TYPE_COMPONENT_PREPEND,
                  'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true
                  ]
                ]) ?>
              <!-- </div>
              <div class="col-md-6"> -->
                <?= $form->field($model, 'no_surat_permohonan')->textInput(['maxlength' => true]) ?>
              <!-- </div>
              <div class="col-md-6"> -->
                <?= $form->field($model, 'tanggal_surat_permohonan')->widget(DatePicker::className(), [
                  'name' => 'dp_1',
                  'type' => DatePicker::TYPE_INPUT,
                  // 'value' => '23-Feb-1982',
                  'options' => ['placeholder' => '--Tanggal Pendirian--'],
                  // 'type' => DatePicker::TYPE_COMPONENT_PREPEND,
                  'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true
                  ]
                ]) ?>
              <!-- </div>
              <div class="col-md-6"> -->
                <?= $form->field($model, 'scan_surat_permohonan')->fileInput() ?>
              <!-- </div>
              <div class="col-md-6"> -->
                <?= $form->field($model, 'no_akta_notaris')->textInput(['maxlength' => true]) ?>
              <!-- </div>
              <div class="col-md-6"> -->
                <?= $form->field($model, 'tanggal_akta_notaris')->widget(DatePicker::className(), [
                  'name' => 'dp_1',
                  'type' => DatePicker::TYPE_INPUT,
                  // 'value' => '23-Feb-1982',
                  'options' => ['placeholder' => '--Tanggal Akta--'],
                  // 'type' => DatePicker::TYPE_COMPONENT_PREPEND,
                  'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true
                  ]
                ]) ?>
              <!-- </div>
              <div class="col-md-6"> -->
                <?= $form->field($model, 'nama_notaris')->textInput(['maxlength' => true]) ?>
              </div>
              <div class="col-md-6">
                <?= $form->field($model, 'id_jenis_akta')->widget(Select2::classname(), [
                  'data' => ArrayHelper::map(JanisAkta::find()->all(), 'id_jenis_akta', 'jenis_akta'),
                  'language' => 'en',
                  'options' => ['placeholder' => 'Pilih ..'],
                  'pluginOptions' => ['allowClear' => true],
                ]); ?>
              <!-- </div>
              <div class="col-md-6"> -->
                <?= $form->field($model, 'scan_akta_notaris')->fileInput() ?>
              <!-- </div>
              <div class="col-md-6"> -->
                <?= $form->field($model, 'no_npwp')->textInput(['maxlength' => true]) ?>
              <!-- </div>
              <div class="col-md-6"> -->
                <?= $form->field($model, 'scan_npwp')->fileInput() ?>
              <!-- </div>
              <div class="col-md-6"> -->
                <?= $form->field($model, 'nama_bank')->textInput(['maxlength' => true]) ?>
              <!-- </div>
              <div class="col-md-6"> -->
                <?= $form->field($model, 'no_rekening')->textInput(['maxlength' => true]) ?>
              <!-- </div>
              <div class="col-md-6"> -->
                <?= $form->field($model, 'id_bidang_kegiatan')->widget(Select2::classname(), [
                  'data' => ArrayHelper::map(BidangKegiatan::find()->all(), 'id_bidang_kegiatan', 'nama_kegiatan'),
                  'language' => 'en',
                  'options' => ['placeholder' => 'Pilih ..'],
                  'pluginOptions' => ['allowClear' => true],
                ]); ?>
              <!-- </div>
              <div class="col-md-6"> -->
                <?= $form->field($model, 'id_ciri_khusus')->widget(Select2::classname(), [
                  'data' => ArrayHelper::map(CiriKhususKegiatan::find()->all(), 'id_ciri_khusus', 'ciri_khusus_kegiatan'),
                  'language' => 'en',
                  'options' => ['placeholder' => 'Pilih ..'],
                  'pluginOptions' => ['allowClear' => true],
                ]); ?>
              </div>
              <div class="col-md-6">
                <?= $form->field($model, 'tujuan_ormas')->textarea(['rows' => 6]) ?>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
  </div>

  <?php ActiveForm::end(); ?>

</div>