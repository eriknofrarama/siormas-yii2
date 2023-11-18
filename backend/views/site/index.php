<?php
use backend\models\DataKepengurusan;
use backend\models\DataPermohonan;
use backend\models\KelengkapanAdministrasi;
use backend\models\Sekretariat;

/** @var yii\web\View $this */

$this->title = 'Selamat Datang';
?>
<div class="site-index">

    <div class="body-content">
        <div class="row">
            <?php
            $total_ormas = DataPermohonan::find()->count();
            $total_sekretariat = Sekretariat::find()->count();
            $total_kepengurusan = DataKepengurusan::find()->count();
            $total_Administrasi = KelengkapanAdministrasi::find()->count();
            ?>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>
                            <?= $total_ormas ?>
                        </h3>
                        <p>Data Permohonan </p>
                    </div>
                    <!-- <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div> -->
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-blue">
                    <div class="inner">
                        <h3>
                            <?= $total_sekretariat ?>
                        </h3>
                        <p>Sekretariat </p>
                    </div>
                    <!-- <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div> -->
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-maroon">
                    <div class="inner">
                        <h3>
                            <?= $total_kepengurusan ?>
                        </h3>
                        <p>Data Kepengurusan </p>
                    </div>
                    <!-- <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div> -->
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>
                            <?= $total_Administrasi ?>
                        </h3>
                        <p>Kelengkapan Administrasi </p>
                    </div>
                    <!-- <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div> -->
            </div>
        </div>
        </div>
    </div>

</div>