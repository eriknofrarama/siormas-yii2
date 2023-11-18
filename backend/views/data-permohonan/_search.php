<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\DataPermohonanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-permohonan-search">

<?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="row">

        <div class="col-md-6">
            
            <div class="row">

                <div class="col-sm-6">
                <?= $form->field($model, 'nama_ormas') ?>

                    
                </div>
                <div class="col-md-6">

<div class="form-group" style="padding-top: 25px">

    <?= Html::submitButton('<i class="fa fa-fw fa-search"></i> Cari', ['class' => 'btn btn-primary']) ?>
    <?= Html::a('<i class="fa fa-fw fa-plus"></i> Tambah', ['create'], ['class' => 'btn btn-success']) ?>
   
    <!-- ?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?> -->
</div>
<!-- ?php echo $this->render('_search', ['model' => $searchModel]); ?> -->
</div>
</div>
<?php ActiveForm::end(); ?>
</div>

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <!-- <= $form->field($model, 'id_permohonan') ?> -->

    <!-- <= $form->field($model, 'id_jenis_permohonan') ?> -->

    <!-- <= $form->field($model, 'nama_ormas') ?> -->

    <!-- <= $form->field($model, 'tempat_pendirian') ?> -->

    <!-- <= $form->field($model, 'tanggal_pendirian') ?> -->

    <?php // echo $form->field($model, 'no_surat_permohonan') ?>

    <?php // echo $form->field($model, 'tanggal_surat_permohonan') ?>

    <?php // echo $form->field($model, 'scan_surat_permohonan') ?>

    <?php // echo $form->field($model, 'no_akta_notaris') ?>

    <?php // echo $form->field($model, 'tanggal_akta_notaris') ?>

    <?php // echo $form->field($model, 'nama_notaris') ?>

    <?php // echo $form->field($model, 'id_jenis_akta') ?>

    <?php // echo $form->field($model, 'scan_akta_notaris') ?>

    <?php // echo $form->field($model, 'no_npwp') ?>

    <?php // echo $form->field($model, 'scan_npwp') ?>

    <?php // echo $form->field($model, 'nama_bank') ?>

    <?php // echo $form->field($model, 'no_rekening') ?>

    <?php // echo $form->field($model, 'id_bidang_kegiatan') ?>

    <?php // echo $form->field($model, 'id_ciri_khusus') ?>

    <?php // echo $form->field($model, 'tujuan_ormas') ?>

   

    <?php ActiveForm::end(); ?>

</div>
