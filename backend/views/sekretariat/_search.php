<?php

use backend\models\DataPermohonan;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use backend\models\Permohonan;
use yii\helpers\ArrayHelper;


/** @var yii\web\View $this */
/** @var backend\models\SekretariatSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sekretariat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
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
                        <!-- <= Html::a('<i class="fa fa-fw fa-plus"></i> Tambah', ['create'], ['class' => 'btn btn-success']) ?> -->
                        <!-- ?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?> -->
                    </div>
                    <!-- ?php echo $this->render('_search', ['model' => $searchModel]); ?> -->
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
        <?php ActiveForm::end(); ?>

    </div>