<?php

namespace backend\controllers;

use backend\models\JanisAkta;
use backend\models\JanisAktaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JanisAktaController implements the CRUD actions for JanisAkta model.
 */
class JanisAktaController extends Controller
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
     * Lists all JanisAkta models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new JanisAktaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single JanisAkta model.
     * @param int $id_jenis_akta Id Jenis Akta
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_jenis_akta)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_jenis_akta),
        ]);
    }

    /**
     * Creates a new JanisAkta model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new JanisAkta();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_jenis_akta' => $model->id_jenis_akta]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing JanisAkta model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_jenis_akta Id Jenis Akta
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_jenis_akta)
    {
        $model = $this->findModel($id_jenis_akta);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_jenis_akta' => $model->id_jenis_akta]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing JanisAkta model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_jenis_akta Id Jenis Akta
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_jenis_akta)
    {
        $this->findModel($id_jenis_akta)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the JanisAkta model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_jenis_akta Id Jenis Akta
     * @return JanisAkta the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_jenis_akta)
    {
        if (($model = JanisAkta::findOne(['id_jenis_akta' => $id_jenis_akta])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
