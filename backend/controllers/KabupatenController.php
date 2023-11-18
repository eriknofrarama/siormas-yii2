<?php

namespace backend\controllers;

use backend\models\Kabupaten;
use backend\models\KabupatenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KabupatenController implements the CRUD actions for Kabupaten model.
 */
class KabupatenController extends Controller
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
     * Lists all Kabupaten models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KabupatenSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kabupaten model.
     * @param int $id_kabupaten Id Kabupaten
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_kabupaten)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_kabupaten),
        ]);
    }

    /**
     * Creates a new Kabupaten model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Kabupaten();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_kabupaten' => $model->id_kabupaten]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Kabupaten model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_kabupaten Id Kabupaten
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_kabupaten)
    {
        $model = $this->findModel($id_kabupaten);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_kabupaten' => $model->id_kabupaten]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Kabupaten model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_kabupaten Id Kabupaten
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_kabupaten)
    {
        $this->findModel($id_kabupaten)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Kabupaten model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_kabupaten Id Kabupaten
     * @return Kabupaten the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_kabupaten)
    {
        if (($model = Kabupaten::findOne(['id_kabupaten' => $id_kabupaten])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
