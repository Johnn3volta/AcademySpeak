<?php


namespace frontend\controllers;


use common\models\ProgramsArticles;
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
            $this->setMeta($article->title,$article->description,$article->keywords);
            return $this->render('article',['article' => $article]);
        }else{
            throw new NotFoundHttpException('Страница не найдена');
        }
    }
}