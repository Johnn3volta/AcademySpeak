<?php


namespace frontend\controllers;


use Yii;
use yii\web\Controller;

class MetaController extends Controller{

    protected function setMeta($title = null,$description = null,$keywords = null){
        $this->getView()->title = $title;
        $this->getView()->registerLinkTag(['rel' => 'canonical','href' => 'http://'.Yii::$app->request->serverName.Yii::$app->request->url]);
        $this->getView()->registerMetaTag(['name' => 'description','content' => $description],'description');
        $this->getView()->registerMetaTag(['name' => 'keywords','content' => $keywords ],'keywords');
        $this->getView()->registerMetaTag(['property' => 'og:url','content' => 'http://'.Yii::$app->request->serverName.Yii::$app->request->url]);
        $this->getView()->registerMetaTag(['property' => 'og:title','content' => $title]);
        $this->getView()->registerMetaTag(['property' => 'og:type','content' => 'website']);
    }

}