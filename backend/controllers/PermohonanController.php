<?php

namespace backend\controllers;

use backend\models\Permohonan;
use backend\models\PermohonanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PermohonanController implements the CRUD actions for Permohonan model.
 */
class PermohonanController extends Controller
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
     * Lists all Permohonan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PermohonanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Permohonan model.
     * @param int $id_jenis_permohonan Id Jenis Permohonan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_jenis_permohonan)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_jenis_permohonan),
        ]);
    }

    /**
     * Creates a new Permohonan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Permohonan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_jenis_permohonan' => $model->id_jenis_permohonan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Permohonan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_jenis_permohonan Id Jenis Permohonan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_jenis_permohonan)
    {
        $model = $this->findModel($id_jenis_permohonan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_jenis_permohonan' => $model->id_jenis_permohonan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Permohonan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_jenis_permohonan Id Jenis Permohonan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_jenis_permohonan)
    {
        $this->findModel($id_jenis_permohonan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Permohonan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_jenis_permohonan Id Jenis Permohonan
     * @return Permohonan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_jenis_permohonan)
    {
        if (($model = Permohonan::findOne(['id_jenis_permohonan' => $id_jenis_permohonan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionFormPertahun()
    {
        $searchModel = new PermohonanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('form-pertahun', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionIndex()
    {
        $searchModel = new PermohonanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionCetakForm($id)
    {
        return $this->render('cetak-form', [
            'model' => $this->findModel($id),
        ]);
    }


    public function actionCetak($id)
    {

        $model = new Permohonan();

        if ($model->load($this->request->post())) {

            $model->id_jenis_permohonan = $model->id_jenis_permohonan;

            $model->save(false);
            Yii::$app->session->setFlash('success', '<strong> Data Berhasil Ditambahkan </strong>');
            return $this->redirect(['index', 'id' => $model->id_jenis_permohonan]);
        } else {
            return $this->render('cetak', [
                'model' => $model,


            ]);
        }
    }
}
