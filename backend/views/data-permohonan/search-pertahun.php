<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\helpers\StringHelper;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use backend\models\Jenis;
use backend\models\LaporKejadian;
use yii\widgets\DetailView;

$tahun = date('Y');

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProtokolerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'REKAP DATA ORMAS PERTAHUN ';
$this->params['breadcrumbs'][] = $this->title;
?>

<body onload="window.print();">
    <!--<body>-->

    <?php $this->beginBody() ?>

    <style type="text/css">
        @media print {
            @page {
                size: landscape;
                margin-top: 20px;
                padding-left: 0px;
            }
        }
    </style>

    <table width="100%">
        <td>
            <div class="row">
                <div class="col-xs-12 text-left" style=" height: 80px;">
                    <table width="100%">
                        <tr style="font-size:14px; font-family:times new roman;">
                            <td width="20%"><img class="img pull-left" src="<?php echo Url::to('@web/images/logo.png') ?>" alt="logo" style="width:65px; margin-top:-25px"></td>
                            <td width="60%" align="center" style=" padding:5px; padding-bottom: 1px; ">
                                <p style="font-size:15px;"><b>PEMERINTAH KOTA PARIAMAN</b></p>
                                <p style="font-size:18px;"><b>KESATUAN BANGSA DAN POLITIK</b></p>
                                <p style="font-size:15px; margin-top:-5px;">Jl. Abdul Arief, Pauh Barat
                                    Pariaman Utara , Pariaman, Sumatera Barat</p>
                            </td>
                            <td width="20%"><img class="img pull-right" src="<?php echo Url::to('@web/images/logo.png') ?>" alt="logo" style="width:65px; margin-top:-25px"></td>
                        </tr>
                    </table>

                    <div style="margin-top:0px;border-bottom:3px solid black;"></div>
                </div>
            </div>
        </td>
    </table>

    <p>
    <h3 align="center">&nbsp; </h3>
    <p>


        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                [
                    'class' => 'yii\grid\SerialColumn',
                    'header' => 'No',
                    'headerOptions' => ['style' => 'text-align:center'],
                    'contentOptions' => ['style' => 'width:3%; text-align:right; text-align:center;'],
                ],

                [
                    'header' => 'Nama Ormas',
                    'label' => 'Nama Ormas',
                    'value' => 'nama_ormas',
                    'filterInputOptions' => [
                        'class'       => 'form-control',
                        'placeholder' => 'KK..'
                    ]
                ],
                [
                    'header' => 'Tanggal Pendirian',
                    'label' => 'Tanggal Pendirian',
                    'value' => 'tanggal_pendirian',
                    'filterInputOptions' => [
                        'class'       => 'form-control',
                        'placeholder' => 'KK..'
                    ]
                ],

                [
                    'header' => 'Tempat Pendirian',
                    'label' => 'Tempat Pendirian',
                    'value' => 'tempat_pendirian',
                    'filterInputOptions' => [
                        'class'       => 'form-control',
                        'placeholder' => 'KK..'
                    ]
                ],
                // [
                //     'header' => 'Nama Ketua',
                //     'label' => 'Nama Ketua',
                //     'value' => 'nama_ketua',
                //     'filterInputOptions' => [
                //         'class'       => 'form-control',
                //         'placeholder' => 'KK..'
                //     ]
                // ],
                [
                    'header' => 'Nomor Akta Notaris',
                    'label' => 'Nomor Akta Notaris',
                    'value' => 'no_akta_notaris',
                    'filterInputOptions' => [
                        'class'       => 'form-control',
                        'placeholder' => 'KK..'
                    ]

                ],
                [
                    'header' => 'Tujuan Ormas',
                    'label' => 'Tujuan Ormas',
                    'value' => 'tujuan_ormas',
                    'filterInputOptions' => [
                        'class'       => 'form-control',
                        'placeholder' => 'KK..'
                    ]
                ],



            ],
        ]); ?>


        <script type="text/javascript">
            $(document).ready(function() {
                window.print();
            });
        </script>

        </html>