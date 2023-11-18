<?php

namespace backend\controllers;

use backend\models\CiriKhususKegiatan;
use backend\models\CiriKhususKegiatanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CiriKhususKegiatanController implements the CRUD actions for CiriKhususKegiatan model.
 */
class CiriKhususKegiatanController extends Controller
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
     * Lists all CiriKhususKegiatan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CiriKhususKegiatanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CiriKhususKegiatan model.
     * @param int $id_ciri_khusus Id Ciri Khusus
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_ciri_khusus)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_ciri_khusus),
        ]);
    }

    /**
     * Creates a new CiriKhususKegiatan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new CiriKhususKegiatan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_ciri_khusus' => $model->id_ciri_khusus]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CiriKhususKegiatan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_ciri_khusus Id Ciri Khusus
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_ciri_khusus)
    {
        $model = $this->findModel($id_ciri_khusus);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_ciri_khusus' => $model->id_ciri_khusus]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CiriKhususKegiatan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_ciri_khusus Id Ciri Khusus
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_ciri_khusus)
    {
        $this->findModel($id_ciri_khusus)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CiriKhususKegiatan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_ciri_khusus Id Ciri Khusus
     * @return CiriKhususKegiatan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_ciri_khusus)
    {
        if (($model = CiriKhususKegiatan::findOne(['id_ciri_khusus' => $id_ciri_khusus])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
