<?php


namespace frontend\controllers;


use common\models\ProgramsCats;
use yii\web\NotFoundHttpException;

class ProgramsCatsController extends MetaController{

    /**


     * @return string
     * @throws NotFoundHttpException if the models cannot be found
     */
    public function actionIndex(){
        $description = 'Суда надо будет чтото написать';
        $model = ProgramsCats::find()->all();
        if($model){
            $this->setMeta('Развивающие программы', $description);

            return $this->render('programms', ['model' => $model]);
        }
        throw new NotFoundHttpException('Страница не найдена');
    }

    /**
     * Finds the ProgramsCats model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $url
     *
     * @return string
     * @throws \yii\web\NotFoundHttpException
     */
    public function actionProgram($url){
        $program = ProgramsCats::findOne(['url' => $url]);
        if($program){
            $this->setMeta($program->title ? $program->title : '', $program->description ? $program->description : '');

            return $this->render('programa', ['programm' => $program]);
        }

        throw new NotFoundHttpException('Страница не найдена');
    }
}