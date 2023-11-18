<?php

namespace backend\controllers;

use backend\models\DataKepengurusan;
use backend\models\DataKepengurusanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\DataPermohonan;
use backend\models\Sekretariat;
use Yii;
use yii\base\DynamicModel;

/**
 * DataKepengurusanController implements the CRUD actions for DataKepengurusan model.
 */
class DataKepengurusanController extends Controller
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

    public function actionFormPerormas()
    {
        $model = new DynamicModel(['id_ormas']);
        $model->addRule('id_ormas', 'safe');

        return $this->render('form-perormas', [
            'model' => $model,
        ]);
    }

    /**
     * Lists all DataKepengurusan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DataKepengurusanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DataKepengurusan model.
     * @param int $id_kepengurusan Id Kepengurusan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_kepengurusan)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_kepengurusan),
        ]);
    }

    /**
     * Creates a new DataKepengurusan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    // public function actionCreate()
    // {
    //     $model = new DataKepengurusan();

    //     if ($this->request->isPost) {
    //         if ($model->load($this->request->post()) && $model->save()) {
    //             return $this->redirect(['view', 'id_kepengurusan' => $model->id_kepengurusan]);
    //         }
    //     } else {
    //         $model->loadDefaultValues();
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }

    public function actionCreate($p, $i)
    {
        // var_dump($id); die();
        $model = new DataKepengurusan();
        $modelKel = Sekretariat::find()->where(['id_sekretariat' => $p])->one();
        $modelPermo = DataPermohonan::find()->where(['id_permohonan' => $i])->one();


        if ($model->load($this->request->post())) {

            $model->id_sekretariat = $modelKel->id_sekretariat;
            $model->id_permohonan = $modelPermo->id_permohonan;


            $model->save(false);
            Yii::$app->session->setFlash('success', '<strong> Data Berhasil Ditambahkan </strong>');
            return $this->redirect(['index', 'id' => $model->id_kepengurusan]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'modelKel' => $modelKel,
                'modelpermo' => $modelPermo,



            ]);
        }
    }

    /**
     * Updates an existing DataKepengurusan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_kepengurusan Id Kepengurusan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_kepengurusan)
    {
        $model = $this->findModel($id_kepengurusan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_kepengurusan' => $model->id_kepengurusan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DataKepengurusan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_kepengurusan Id Kepengurusan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_kepengurusan)
    {
        $this->findModel($id_kepengurusan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DataKepengurusan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_kepengurusan Id Kepengurusan
     * @return DataKepengurusan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_kepengurusan)
    {
        if (($model = DataKepengurusan::findOne(['id_kepengurusan' => $id_kepengurusan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
