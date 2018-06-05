<?php


namespace frontend\controllers;


use common\models\ProgramsArticles;
use common\models\ProgramsCats;
use yii\helpers\Url;
use yii\web\NotFoundHttpException;

class ProgramArticleController extends MetaController{

    /**
     * @param $url
     *
     * @return string
     * @throws \yii\web\NotFoundHttpException
     */
    public function actionIndex($url){
        $article = ProgramsArticles::findOne(['url' => $url]);
        if($article){
            $parents = ProgramsCats::find()->select(['name','url'])->where(['id' => $article->parent_id])->asArray()->all();
            $this->view->params['breadcrumbs'][] = ['label' => 'Направления деятельности','url' => Url::toRoute(['/programs-cats/index'])];
            $this->view->params['breadcrumbs'][] = ['label' => $parents[0]['name'],'url' => Url::toRoute(['programs-cats/program','url' => $parents[0]['url']]) ];
            $this->view->params['breadcrumbs'][] = ['label' => $article->name];
            $this->setMeta($article->title,$article->description,$article->keywords);
            return $this->render('article',['article' => $article,'parents' =>$parents]);
        }else{
            throw new NotFoundHttpException('Страница не найдена');
        }
    }
}