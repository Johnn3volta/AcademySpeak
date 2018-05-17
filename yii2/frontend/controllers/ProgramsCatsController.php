<?php


namespace frontend\controllers;


use common\models\ProgramsArticles;
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
            $this->setMeta('Направления деятельности', $description);

            return $this->render('programms', ['model' => $model]);
        }
        throw new NotFoundHttpException('Страница не найдена');
    }

    /**
     * @param $url
     *
     * @return string
     * @throws \yii\web\NotFoundHttpException
     */
    public function actionProgram($url){
        $program = ProgramsCats::findOne(['url' => $url]);

        if($program){
            $articles = ProgramsArticles::find()
                                        ->where(['parent_id' => $program->id])
                                        ->select(['name', 'url'])
                                        ->all();
            $this->setMeta($program->title ? $program->title : '', $program->description ? $program->description : '');

            return $this->render('programa', compact('program', 'articles'));
        }

        throw new NotFoundHttpException('Страница не найдена');
    }
}