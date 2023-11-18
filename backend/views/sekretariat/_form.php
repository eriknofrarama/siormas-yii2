<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Provinsi;
use backend\models\Kabupaten;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/** @var yii\web\View $this */
/** @var backend\models\Sekretariat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sekretariat-form">


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

              <div class="form-group">

                <?= $form->field($model, 'alamat_sekretariat')->textarea(['rows' => 6]) ?>


                <?= $form->field($model, 'id_provinsi')->widget(Select2::classname(), [
                  'data' => ArrayHelper::map(Provinsi::find()->all(), 'id_provinsi', 'nama_provinsi'),
                  'language' => 'en',
                  'options' => ['placeholder' => 'Pilih ..'],
                  'pluginOptions' => ['allowClear' => true],
                ]); ?>


                <?= $form->field($model, 'id_kabupaten')->widget(Select2::classname(), [
                  'data' => ArrayHelper::map(Kabupaten::find()->all(), 'id_kabupaten', 'nama_kabupaten'),
                  'language' => 'en',
                  'options' => ['placeholder' => 'Pilih ..'],
                  'pluginOptions' => ['allowClear' => true],
                ]); ?>

                <?= $form->field($model, 'kode_pos')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'no_telepon')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'no_fax')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                <!-- <= $form->field($model, 'id_permohonan')->textInput() ?> -->
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