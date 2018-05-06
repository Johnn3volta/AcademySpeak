<?php

namespace backend\controllers;

use Yii;
use common\models\ProgramsCats;
use common\models\search\ProgramsCatsSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProgramsCatsController implements the CRUD actions for ProgramsCats model.
 */
class ProgramsCatsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow'   => true,
                        'roles'   => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ProgramsCats models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProgramsCatsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProgramsCats model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id){
        $model = $this->findModel($id);
        $image = $model->getImage();

        return $this->render('view', compact('model','image'));
    }

    /**
     * Creates a new ProgramsCats model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ProgramsCats();
        $image = $model->getImage();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success','Категория успешно создана');
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', compact('model','image'));
    }

    /**
     * Updates an existing ProgramsCats model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id){
        $model = $this->findModel($id);
        $image = $model->getImage();

        if($model->load(Yii::$app->request->post()) && $model->save()){
            $model->image = UploadedFile::getInstance($model, 'image');
            if(($model->image && $model->image->error == 0)){
                $model->upload();
            }
            Yii::$app->session->setFlash('success', 'Категория успешно обновлена !');

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'image' => $image,
        ]);
    }

    /**
     * Deletes an existing ProgramsCats model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id){

        $this->findModel($id)->removeImages();
        $this->findModel($id)->delete();


        return $this->redirect(['index']);
    }

    /**
     * Finds the ProgramsCats model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ProgramsCats the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ProgramsCats::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Запрашиваемая страница не найдена');
    }
}
