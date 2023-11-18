<?php

namespace backend\controllers;

use backend\models\BidangKegiatan;
use backend\models\BidangKegiatanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BidangKegiatanController implements the CRUD actions for BidangKegiatan model.
 */
class BidangKegiatanController extends Controller
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
     * Lists all BidangKegiatan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BidangKegiatanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BidangKegiatan model.
     * @param int $id_bidang_kegiatan Id Bidang Kegiatan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_bidang_kegiatan)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_bidang_kegiatan),
        ]);
    }

    /**
     * Creates a new BidangKegiatan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BidangKegiatan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_bidang_kegiatan' => $model->id_bidang_kegiatan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BidangKegiatan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_bidang_kegiatan Id Bidang Kegiatan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_bidang_kegiatan)
    {
        $model = $this->findModel($id_bidang_kegiatan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_bidang_kegiatan' => $model->id_bidang_kegiatan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BidangKegiatan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_bidang_kegiatan Id Bidang Kegiatan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_bidang_kegiatan)
    {
        $this->findModel($id_bidang_kegiatan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BidangKegiatan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_bidang_kegiatan Id Bidang Kegiatan
     * @return BidangKegiatan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_bidang_kegiatan)
    {
        if (($model = BidangKegiatan::findOne(['id_bidang_kegiatan' => $id_bidang_kegiatan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
