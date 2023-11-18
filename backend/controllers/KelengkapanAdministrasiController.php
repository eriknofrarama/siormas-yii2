<?php

namespace backend\controllers;

use Yii;
use backend\models\KelengkapanAdministrasi;
use backend\models\KelengkapanAdministrasiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use backend\models\DataKepengurusan;
use backend\models\DataPermohonan;
use backend\models\Sekretariat;

/**
 * KelengkapanAdministrasiController implements the CRUD actions for KelengkapanAdministrasi model.
 */
class KelengkapanAdministrasiController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all KelengkapanAdministrasi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KelengkapanAdministrasiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single KelengkapanAdministrasi model.
     * @param int $id_administrasi Id Administrasi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_administrasi)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_administrasi),
        ]);
    }

    /**
     * Creates a new KelengkapanAdministrasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    // public function actionCreate()
    // {
    //     $model = new KelengkapanAdministrasi();

    //     if ($this->request->isPost) {
    //         if ($model->load($this->request->post()) && $model->save()) {
    //             return $this->redirect(['view', 'id_administrasi' => $model->id_administrasi]);
    //         }
    //     } else {
    //         $model->loadDefaultValues();
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }

    public function actionCreate($p , $i , $f)
    {
        // var_dump($p , $i , $f); die();

        $model = new KelengkapanAdministrasi();
        $modelKel = Sekretariat::find()->where(['id_sekretariat' => $p])->one();
        $modelPermo = DataPermohonan::find()->where(['id_permohonan' => $i])->one();
        $modelKep = DataKepengurusan::find()->where(['id_kepengurusan' => $f])->one();

        if ($this->request->isPost) {
        if ($model->load(Yii::$app->request->post())) {

            $model->id_sekretariat = $modelKel->id_sekretariat;
            $model->id_permohonan = $modelPermo->id_permohonan;
            $model->id_kepengurusan = $modelKep->id_kepengurusan;


            $gambar = UploadedFile::getInstance($model, 'scan_anggaran_dasar');
            $gambar4 = UploadedFile::getInstance($model, 'scan_logo');
            $gambar5 = UploadedFile::getInstance($model, 'scan_proker');
            $gambar6 = UploadedFile::getInstance($model, 'scan_keterangan_domisili');
            $gambar7 = UploadedFile::getInstance($model, 'scan_bukti_kepemilikan');
            $gambar8 = UploadedFile::getInstance($model, 'scan_foto_kantor');
            $gambar9 = UploadedFile::getInstance($model, 'scan_keputusan_susunan_pengurus');
            $gambar10 = UploadedFile::getInstance($model, 'scan_biodata_katua');
            $gambar11 = UploadedFile::getInstance($model, 'scan_foto_ketua');
            $gambar12 = UploadedFile::getInstance($model, 'scan_ktp_ketua');
            $gambar13 = UploadedFile::getInstance($model, 'scan_biodata_sekretaris');
            $gambar14 = UploadedFile::getInstance($model, 'scan_foto_sekretaris');
            $gambar15 = UploadedFile::getInstance($model, 'scan_ktp_sekretaris');
            $gambar16 = UploadedFile::getInstance($model, 'scan_biodata_bendahara');
            $gambar17 = UploadedFile::getInstance($model, 'scan_foto_bendahara');
            $gambar18 = UploadedFile::getInstance($model, 'scan_ktp_bendahara');
            $gambar19 = UploadedFile::getInstance($model, 'scan_formulir_isian_data_ormas');
            $gambar20 = UploadedFile::getInstance($model, 'scan_surat_pernyataan_permendagri');
            $gambar21 = UploadedFile::getInstance($model, 'scan_keabsahan_ormas');
            $gambar22 = UploadedFile::getInstance($model, 'scan_pengantar_dari_kesbangpol');

            if ($model->validate()) {
                $model->save();
                if (!empty($gambar)) {
                    $gambar->saveAs(Yii::getAlias('images/') . 'scan_anggaran_dasar.' . $gambar->extension);
                    $model->scan_anggaran_dasar = 'scan_anggaran_dasar.' . $gambar->extension;
                    $model->save(FALSE);
                }
                if (!empty($gambar4)) {
                    $gambar4->saveAs(Yii::getAlias('images/') . 'scan_logo.' . $gambar4->extension);
                    $model->scan_logo = 'scan_logo.' . $gambar4->extension;
                    $model->save(FALSE);
                }
                if (!empty($gambar5)) {
                    $gambar5->saveAs(Yii::getAlias('images/') . 'scan_proker.' . $gambar5->extension);
                    $model->scan_proker = 'scan_proker.' . $gambar5->extension;
                    $model->save(FALSE);
                }
                if (!empty($gambar6)) {
                    $gambar6->saveAs(Yii::getAlias('images/') . 'scan_keterangan_domisili.' . $gambar6->extension);
                    $model->scan_keterangan_domisili = 'scan_keterangan_domisili.' . $gambar6->extension;
                    $model->save(FALSE);
                }
                if (!empty($gambar7)) {
                    $gambar7->saveAs(Yii::getAlias('images/') . 'scan_bukti_kepemilikan.' . $gambar7->extension);
                    $model->scan_bukti_kepemilikan = 'scan_bukti_kepemilikan.' . $gambar7->extension;
                    $model->save(FALSE);
                }
                if (!empty($gambar8)) {
                    $gambar8->saveAs(Yii::getAlias('images/') . 'scan_foto_kantor.' . $gambar8->extension);
                    $model->scan_foto_kantor = 'scan_foto_kantor.' . $gambar8->extension;
                    $model->save(FALSE);
                }
                if (!empty($gambar9)) {
                    $gambar9->saveAs(Yii::getAlias('images/') . 'scan_keputusan_susunan_pengurus.' . $gambar9->extension);
                    $model->scan_keputusan_susunan_pengurus = 'scan_keputusan_susunan_pengurus.' . $gambar9->extension;
                    $model->save(FALSE);
                }
                if (!empty($gambar10)) {
                    $gambar10->saveAs(Yii::getAlias('images/') . 'scan_biodata_katua.' . $gambar10->extension);
                    $model->scan_biodata_katua = 'scan_biodata_katua.' . $gambar10->extension;
                    $model->save(FALSE);
                }
                if (!empty($gambar11)) {
                    $gambar11->saveAs(Yii::getAlias('images/') . 'scan_foto_ketua.' . $gambar11->extension);
                    $model->scan_foto_ketua = 'scan_foto_ketua.' . $gambar11->extension;
                    $model->save(FALSE);
                }
                if (!empty($gambar12)) {
                    $gambar12->saveAs(Yii::getAlias('images/') . 'scan_ktp_ketua.' . $gambar12->extension);
                    $model->scan_ktp_ketua = 'scan_ktp_ketua.' . $gambar12->extension;
                    $model->save(FALSE);
                }
                if (!empty($gambar13)) {
                    $gambar13->saveAs(Yii::getAlias('images/') . 'scan_biodata_sekretaris.' . $gambar13->extension);
                    $model->scan_biodata_sekretaris = 'scan_biodata_sekretaris.' . $gambar13->extension;
                    $model->save(FALSE);
                }
                if (!empty($gambar14)) {
                    $gambar14->saveAs(Yii::getAlias('images/') . 'scan_foto_sekretaris.' . $gambar14->extension);
                    $model->scan_foto_sekretaris = 'scan_foto_sekretaris.' . $gambar14->extension;
                    $model->save(FALSE);
                }
                if (!empty($gambar15)) {
                    $gambar15->saveAs(Yii::getAlias('images/') . 'scan_ktp_sekretaris.' . $gambar15->extension);
                    $model->scan_ktp_sekretaris = 'scan_ktp_sekretaris.' . $gambar15->extension;
                    $model->save(FALSE);
                }
                if (!empty($gambar16)) {
                    $gambar16->saveAs(Yii::getAlias('images/') . 'scan_biodata_bendahara.' . $gambar16->extension);
                    $model->scan_biodata_bendahara = 'scan_biodata_bendahara.' . $gambar16->extension;
                    $model->save(FALSE);
                }
                if (!empty($gambar17)) {
                    $gambar17->saveAs(Yii::getAlias('images/') . 'scan_foto_bendahara.' . $gambar17->extension);
                    $model->scan_foto_bendahara = 'scan_foto_bendahara.' . $gambar17->extension;
                    $model->save(FALSE);
                }
                if (!empty($gambar18)) {
                    $gambar18->saveAs(Yii::getAlias('images/') . 'scan_ktp_bendahara.' . $gambar18->extension);
                    $model->scan_ktp_bendahara = 'scan_ktp_bendahara.' . $gambar18->extension;
                    $model->save(FALSE);
                }
                if (!empty($gambar19)) {
                    $gambar19->saveAs(Yii::getAlias('images/') . 'scan_formulir_isian_data_ormas.' . $gambar19->extension);
                    $model->scan_formulir_isian_data_ormas = 'scan_formulir_isian_data_ormas.' . $gambar19->extension;
                    $model->save(FALSE);
                }
                if (!empty($gambar20)) {
                    $gambar20->saveAs(Yii::getAlias('images/') . 'scan_surat_pernyataan_permendagri.' . $gambar20->extension);
                    $model->scan_surat_pernyataan_permendagri = 'scan_surat_pernyataan_permendagri.' . $gambar20->extension;
                    $model->save(FALSE);
                }
                if (!empty($gambar21)) {
                    $gambar21->saveAs(Yii::getAlias('images/') . 'scan_keabsahan_ormas.' . $gambar21->extension);
                    $model->scan_keabsahan_ormas = 'scan_keabsahan_ormas.' . $gambar21->extension;
                    $model->save(FALSE);
                }
                if (!empty($gambar22)) {
                    $gambar22->saveAs(Yii::getAlias('images/') . 'scan_pengantar_dari_kesbangpol.' . $gambar22->extension);
                    $model->scan_pengantar_dari_kesbangpol = 'scan_pengantar_dari_kesbangpol.' . $gambar22->extension;
                    $model->save(FALSE);
                }
            }
            
    }
    Yii::$app->session->setFlash('success', '<strong> Data Berhasil Ditambahkan </strong>');
            return $this->redirect(['index', 'id' => $model->id_administrasi]);
        } else {
            return $this->render('create', [
                'model' => $model,
            'modelkel' => $modelKel,
            'modelpermo' => $modelPermo,
            'modelkep' => $modelKep,



            ]);
        }
    }

    /**
     * Updates an existing KelengkapanAdministrasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_administrasi Id Administrasi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_administrasi)
    {
        $model = $this->findModel($id_administrasi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_administrasi' => $model->id_administrasi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing KelengkapanAdministrasi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_administrasi Id Administrasi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_administrasi)
    {
        $this->findModel($id_administrasi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the KelengkapanAdministrasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_administrasi Id Administrasi
     * @return KelengkapanAdministrasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_administrasi)
    {
        if (($model = KelengkapanAdministrasi::findOne(['id_administrasi' => $id_administrasi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
