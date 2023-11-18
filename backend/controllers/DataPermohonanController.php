<?php

namespace backend\controllers;

use backend\models\DataPermohonan;
use backend\models\DataPermohonanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii;
use yii\base\DynamicModel;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;

/**
 * DataPermohonanController implements the CRUD actions for DataPermohonan model.
 */
class DataPermohonanController extends Controller
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
     * Lists all DataPermohonan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DataPermohonanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DataPermohonan model.
     * @param int $id_permohonan Id Permohonan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_permohonan)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_permohonan),
        ]);
    }

    /**
     * Creates a new DataPermohonan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    // public function actionCreate()
    // {
    //     $model = new DataPermohonan();

    //     if ($this->request->isPost) {
    //         if ($model->load($this->request->post()) && $model->save()) {
    //             return $this->redirect(['view', 'id_permohonan' => $model->id_permohonan]);
    //         }
    //     } else {
    //         $model->loadDefaultValues();
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }

    public function actionCreate()
    {
        $model = new DataPermohonan();

        if ($this->request->isPost) {
            if ($model->load(Yii::$app->request->post())) {
                $gambar = UploadedFile::getInstance($model, 'scan_surat_permohonan');
                $gambar1 = UploadedFile::getInstance($model, 'scan_akta_notaris');
                $gambar2 = UploadedFile::getInstance($model, 'scan_npwp');
                if ($model->validate()) {
                    $model->save();
                    if (!empty($gambar)) {
                        $gambar->saveAs(Yii::getAlias('images/') . 'scan_surat_permohonan.' . $gambar->extension);
                        $model->scan_surat_permohonan = 'scan_surat_permohonan.' . $gambar->extension;
                        $model->save(FALSE);
                    }
                    if (!empty($gambar1)) {
                        $gambar1->saveAs(Yii::getAlias('images/') . 'scan_akta_notaris.' . $gambar1->extension);
                        $model->scan_akta_notaris = 'scan_akta_notaris.' . $gambar1->extension;
                        $model->save(FALSE);
                    }
                    if (!empty($gambar2)) {
                        $gambar2->saveAs(Yii::getAlias('images/') . 'scan_npwp.' . $gambar2->extension);
                        $model->scan_npwp = 'scan_npwp.' . $gambar2->extension;
                        $model->save(FALSE);
                    }
                }

                return $this->redirect(['index', 'id' => $model->id_permohonan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DataPermohonan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_permohonan Id Permohonan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_permohonan)
    {
        $model = $this->findModel($id_permohonan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_permohonan' => $model->id_permohonan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DataPermohonan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_permohonan Id Permohonan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_permohonan)
    {
        $this->findModel($id_permohonan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DataPermohonan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_permohonan Id Permohonan
     * @return DataPermohonan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_permohonan)
    {
        if (($model = DataPermohonan::findOne(['id_permohonan' => $id_permohonan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionFormPertahun()
    {
        $model = new DynamicModel(['bulan', 'tahun']);
        $model->addRule('bulan', 'safe');
        $model->addRule('tahun', 'safe');

        return $this->render('form-pertahun', [
            'model' => $model,
        ]);
    }

    public function actionFormPerormas()
    {
        $model = new DynamicModel(['bulan', 'tahun']);
        $model->addRule('bulan', 'safe');
        $model->addRule('tahun', 'safe');

        return $this->render('form-perormas', [
            'model' => $model,
        ]);
    }

    public function actionSearchPertahun()
    {
        $today = date('Y-m-d');
        $bulan =  Yii::$app->request->queryParams['DynamicModel']['bulan'];
        $thn =  Yii::$app->request->queryParams['DynamicModel']['tahun'];

        $srt = DataPermohonan::find()
            ->where(['MONTH(tanggal_surat_permohonan)' => $bulan, 'YEAR(tanggal_surat_permohonan)' => $thn])->orderBy(['(data_permohonan.tanggal_surat_permohonan)' => SORT_ASC,]);
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => $srt,
            'pagination' => [
                'pageSize' => 100,
            ],
        ]);
        return $this->render('search-pertahun', [
            'bulan' => $bulan,
            'today' => $today,
            'thn' => $thn,
            'dataProvider' => $dataProvider,

        ]);
    }
}
