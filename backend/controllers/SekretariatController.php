<?php

namespace backend\controllers;

use Yii;
use backend\models\Sekretariat;
use backend\models\SekretariatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\DataPermohonan;

/**
 * SekretariatController implements the CRUD actions for Sekretariat model.
 */
class SekretariatController extends Controller
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
     * Lists all Sekretariat models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SekretariatSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Sekretariat model.
     * @param int $id_sekretariat Id Sekretariat
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_sekretariat)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_sekretariat),
        ]);
    }

    /**
     * Creates a new Sekretariat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    // public function actionCreate()
    // {
    //     $model = new Sekretariat();

    //     if ($this->request->isPost) {
    //         if ($model->load($this->request->post()) && $model->save()) {
    //             return $this->redirect(['view', 'id_sekretariat' => $model->id_sekretariat]);
    //         }
    //     } else {
    //         $model->loadDefaultValues();
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }
    public function actionCreate($p)
    {
        // var_dump($id); die();
        $model = new Sekretariat();
        $modelPerm = DataPermohonan::find()->where(['id_permohonan' => $p])->one();


        if ($model->load($this->request->post())) {

            $model->id_permohonan = $modelPerm->id_permohonan;


            $model->save(false);
            Yii::$app->session->setFlash('success', '<strong> Data Berhasil Ditambahkan </strong>');
            return $this->redirect(['index', 'id' => $model->id_sekretariat]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'modelPerm' => $modelPerm,

            ]);
        }
    }

    /**
     * Updates an existing Sekretariat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_sekretariat Id Sekretariat
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_sekretariat)
    {
        $model = $this->findModel($id_sekretariat);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_sekretariat' => $model->id_sekretariat]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Sekretariat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_sekretariat Id Sekretariat
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_sekretariat)
    {
        $this->findModel($id_sekretariat)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Sekretariat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_sekretariat Id Sekretariat
     * @return Sekretariat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_sekretariat)
    {
        if (($model = Sekretariat::findOne(['id_sekretariat' => $id_sekretariat])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
