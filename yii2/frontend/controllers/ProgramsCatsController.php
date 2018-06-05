<?php


namespace frontend\controllers;


use common\models\activequery\ProgramsCatsQuery;
use common\models\ProgramsArticles;
use common\models\ProgramsCats;
use yii\helpers\Url;
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
            $this->view->params['breadcrumbs'][] = ['label' => 'Направления деятельности'];
            $count = ProgramsCatsQuery::Counts($model);

            return $this->render('programms', ['model' => $model,'count' => $count]);
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
            $this->view->params['breadcrumbs'][] = ['label' => 'Направления деятельности','url' => Url::toRoute(['programs-cats/index']) ];
            $this->view->params['breadcrumbs'][] = ['label' => $program->name];
            $articles = ProgramsArticles::find()
                                        ->where(['parent_id' => $program->id])
                                        ->select(['name', 'url'])
                                        ->all();
            $this->setMeta($program->title, $program->description );

            return $this->render('programa', compact('program', 'articles'));
        }

        throw new NotFoundHttpException('Страница не найдена');
    }
}