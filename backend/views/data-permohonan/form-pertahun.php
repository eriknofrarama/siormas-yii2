<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use app\models\TbDinasTerkait;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProtokolerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Bulanan';

$range = range(date('Y'), 2017);
?>
<div class="body-content">
    <div class="box-header">
        <div class="box box-solid box-info">
            <center>
                <h3> Silahkan Pilih Bulan dan Tahun Perkara</h3>
            </center>
            <div class="upah-search">
                <div class="box-body">
                    <?php $form = ActiveForm::begin([
                        'action' => ['search-pertahun'],
                        'method' => 'get', 'options' => [
                            'target' => '_blank',
                        ],
                    ]); ?>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="col-sm-2">Bulan</label>
                            <?= $form->field($model, 'bulan')->dropDownList(['1' => 'Bulan Januari', '2' => 'Bulan Februari', '3' => 'Bulan Maret', '4' => 'Bulan April', '5' => 'Bulan Mei', '6' => 'Bulan Juni', '7' => 'Bulan Juli', '8' => 'Bulan Agustus', '9' => 'Bulan September', '10' => 'Bulan Oktober', '11' => 'Bulan November', '12' => 'Bulan Desember'])->label(false) ?>
                        </div>
                        <div class="col-md-3">
                            <label class="col-sm-2">Tahun</label>
                            <?= $form->field($model, 'tahun')->dropDownList(array_combine($range, $range))->label(false); ?>
                        </div>
                        <div class="col-md-3">
                            <?= Html::submitButton('Lihat Rekap Laporan', ['class' => 'btn btn-primary']) ?>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
         
    </div>
      
</div>