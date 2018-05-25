<?php
/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\MyAppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

MyAppAsset::register($this);

$this->beginPage() ;
echo "<!DOCTYPE html>\n";
echo Html::beginTag('html',['lang' =>Yii::$app->language,'prefix' => 'og: http://ogp.me/ns#'])."\n";
  echo Html::beginTag('head');
      echo Html::tag('meta','',['charset' => Yii::$app->charset])."\n";
      echo Html::tag('meta','',['http-equiv' => 'X-UA-Compatible','content' => 'IE=edge'])."\n" ;
      echo Html::tag('meta','',['name' => 'viewport','content' => 'width=device-width, initial-scale=1'])."\n" ;
      echo Html::csrfMetaTags() ;
      echo Html::tag('title', Html::encode($this->title))."\n" ;
      $this->registerLinkTag(['rel' => 'shortcut icon', 'type' => 'image/x-icon', 'href' => Url::to(['/favicon.png'])]);
//      echo $this->registerLinkTag(['href' => 'https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans','rel' => 'stylesheet']) ;
      $this->head() ;
      echo "\n<!--[if lte IE9]>\n";
      echo Html::JsFile('/js/ie9/html5shiv.min.js')."\n";
      echo Html::JsFile('/js/ie9/respond.min.js')."\n";
      echo "<![endif]-->\n";
  echo Html::endTag('head');
  echo Html::beginTag('body',['class' => Yii::$app->controller->id.'-'.Yii::$app->controller->action->id]);
  $this->beginBody() ;
  echo $this->render('//common/header') ;
    echo Alert::widget() ;
    echo $content ;
  echo $this->render('//common/footer') ;
  $this->endBody() ;
  echo Html::endTag('body');
echo Html::endTag('html') ;
$this->endPage()
?>