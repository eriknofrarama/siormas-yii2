<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Jabatan;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use kartik\date\DatePicker;

/** @var yii\web\View $this */
/** @var backend\models\DataKepengurusan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-kepengurusan-form">

  <?php $form = ActiveForm::begin(); ?>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Sekretariat</h3>
        </div>
        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <div class="col-md-4">
                <?= $form->field($model, 'nama_ketua')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>
                <!-- <= $form->field($model, 'tanggal_awal')->textInput() ?> -->
                <?= $form->field($model, 'tanggal_awal')->widget(DatePicker::className(), [
                  'name' => 'dp_1',
                  'type' => DatePicker::TYPE_INPUT,
                  // 'value' => '23-Feb-1982',
                  'options' => ['placeholder' => '--Masa Awal Bakti--'],
                  // 'type' => DatePicker::TYPE_COMPONENT_PREPEND,
                  'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true
                  ]
                ]) ?>
                <!-- <= $form->field($model, 'tanggal_akhir')->textInput() ?> -->
                <?= $form->field($model, 'tanggal_akhir')->widget(DatePicker::className(), [
                  'name' => 'dp_1',
                  'type' => DatePicker::TYPE_INPUT,
                  // 'value' => '23-Feb-1982',
                  'options' => ['placeholder' => '--Masa Akhir Bakti--'],
                  // 'type' => DatePicker::TYPE_COMPONENT_PREPEND,
                  'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true
                  ]
                ]) ?>
              </div>
              <div class="col-md-4">
                <?= $form->field($model, 'nama_sekretaris')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'nik1')->textInput(['maxlength' => true]) ?>

                <!-- <= $form->field($model, 'tanggal_awal1')->textInput() ?> -->
                <?= $form->field($model, 'tanggal_awal1')->widget(DatePicker::className(), [
                  'name' => 'dp_1',
                  'type' => DatePicker::TYPE_INPUT,
                  // 'value' => '23-Feb-1982',
                  'options' => ['placeholder' => '--Masa Awal Bakti--'],
                  // 'type' => DatePicker::TYPE_COMPONENT_PREPEND,
                  'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true
                  ]
                ]) ?>

                <!-- <= $form->field($model, 'tanggal_akhir1')->textInput() ?> -->
                <?= $form->field($model, 'tanggal_akhir1')->widget(DatePicker::className(), [
                  'name' => 'dp_1',
                  'type' => DatePicker::TYPE_INPUT,
                  // 'value' => '23-Feb-1982',
                  'options' => ['placeholder' => '--Masa Akhir Bakti--'],
                  // 'type' => DatePicker::TYPE_COMPONENT_PREPEND,
                  'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true
                  ]
                ]) ?>
 </div>
              <div class="col-md-4">

                <?= $form->field($model, 'nama_bendahara')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'nik2')->textInput(['maxlength' => true]) ?>

                <!-- <= $form->field($model, 'tanggal_awal2')->textInput() ?> -->
                <?= $form->field($model, 'tanggal_awal2')->widget(DatePicker::className(), [
                  'name' => 'dp_1',
                  'type' => DatePicker::TYPE_INPUT,
                  // 'value' => '23-Feb-1982',
                  'options' => ['placeholder' => '--Masa Awal Bakti--'],
                  // 'type' => DatePicker::TYPE_COMPONENT_PREPEND,
                  'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true
                  ]
                ]) ?>

                <!-- <= $form->field($model, 'tanggal_akhir2')->textInput() ?> -->
                <?= $form->field($model, 'tanggal_akhir2')->widget(DatePicker::className(), [
                  'name' => 'dp_1',
                  'type' => DatePicker::TYPE_INPUT,
                  // 'value' => '23-Feb-1982',
                  'options' => ['placeholder' => '--Masa Akhir Bakti--'],
                  // 'type' => DatePicker::TYPE_COMPONENT_PREPEND,
                  'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true
                  ]
                ]) ?>

                <!-- <= $form->field($model, 'id_permohonan')->textInput() ?>

    <= $form->field($model, 'id_sekretariat')->textInput() ?> -->
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