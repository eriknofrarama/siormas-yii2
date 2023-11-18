<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\KelengkapanAdministrasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kelengkapan-administrasi-form">

    <?php $form = ActiveForm::begin(); ?>
   <div class="row">
    <div class="col-md-12">
        <div class="box box-solid box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Kelengkapan Administrasi</h3>
            </div>
            <form role="form">
                <div class="box-body">
                    <div class="form-group">

                        <div class="col-md-4">

                            <?= $form->field($model, 'scan_anggaran_dasar')->fileInput() ?>

                            <?= $form->field($model, 'scan_logo')->fileInput() ?>

                            <?= $form->field($model, 'scan_proker')->fileInput() ?>

                            <?= $form->field($model, 'scan_keterangan_domisili')->fileInput() ?>

                            <?= $form->field($model, 'scan_bukti_kepemilikan')->fileInput() ?>

                            <?= $form->field($model, 'scan_foto_kantor')->fileInput() ?>

                            <?= $form->field($model, 'scan_keputusan_susunan_pengurus')->fileInput() ?>
                            </div>
                        <div class="col-md-4">

                            <?= $form->field($model, 'scan_biodata_ketua')->fileInput() ?>

                            <?= $form->field($model, 'scan_foto_ketua')->fileInput() ?>

                            <?= $form->field($model, 'scan_ktp_ketua')->fileInput() ?>
                        

                            <?= $form->field($model, 'scan_biodata_sekretaris')->fileInput() ?>

                            <?= $form->field($model, 'scan_foto_sekretaris')->fileInput() ?>

                            <?= $form->field($model, 'scan_ktp_sekretaris')->fileInput() ?>
                           

                            <?= $form->field($model, 'scan_biodata_bendahara')->fileInput() ?>
                            </div>
                        <div class="col-md-4">

                            <?= $form->field($model, 'scan_foto_bendahara')->fileInput() ?>

                            <?= $form->field($model, 'scan_ktp_bendahara')->fileInput() ?>

                            <?= $form->field($model, 'scan_formulir_isian_data_ormas')->fileInput() ?>

                            <?= $form->field($model, 'scan_surat_pernyataan_permendagri')->fileInput() ?>

                            <?= $form->field($model, 'scan_keabsahan_ormas')->fileInput() ?>

                            <?= $form->field($model, 'scan_pengantar_dari_kesbangpol')->fileInput() ?>

                            <!-- <= $form->field($model, 'id_permohonan')->textInput() ?>

                            <= $form->field($model, 'id_sekretariat')->textInput() ?>

                            <= $form->field($model, 'id_kepengurusan')->textInput() ?> -->
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