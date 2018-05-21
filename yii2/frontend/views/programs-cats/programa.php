<?php
/* @var $this yii\web\View
 * @var $articles common\models\ProgramsArticles
 * @var $program common\models\ProgramsCats
 */


use frontend\components\BreadcrumbsUtility;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;


echo Html::beginTag('section',['class' => 'probootstrap-section probootstrap-section-colored']);
  echo Html::beginTag('div',['class' => 'container']) ;
   echo Html::beginTag('div',['class' => 'row']) ;
    echo Html::beginTag('div',['class' => 'col-md-12 text-left section-heading probootstrap-animate']) ;

        echo Html::tag('h1',$program->name) ;
echo Breadcrumbs::widget([
    'homeLink' => BreadcrumbsUtility::getHome('Главная', Yii::$app->getHomeUrl()), // получаем главную страницу с микроданными
    'links' => isset($this->params['breadcrumbs']) ? BreadcrumbsUtility::UseMicroData($this->params['breadcrumbs']) : [], // получаем остальные хлебные крошки с микроданными
    'options' => [ // назначаем контейнеру разметку BreadcrumbList
        'class' => 'breadcrumb',
        'itemscope itemtype' => 'https://schema.org/BreadcrumbList'
    ],
]) ;
    echo Html::endTag('div') ;
   echo Html::endTag('div') ;
  echo Html::endTag('div') ;
echo Html::endTag('section') ;

echo Html::beginTag('section', ['class' => 'probootstrap-section']) ;
  echo Html::beginTag('div', ['class' => 'container']) ;
    echo Html::beginTag('div', ['class' => 'row']) ;
       foreach ($articles as $article): ;
       echo Html::beginTag('div', ['class' => 'col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate']) ;
         echo Html::beginTag('a', ['href'  => Url::toRoute([
        '/program-article/index',
        'parent_url' => $program->url,
        'url'        => $article->url,
    ]),
                             'class' => 'probootstrap-featured-news-box',
    ]) ;

    echo Html::beginTag('figure', ['class' => 'probootstrap-media']) ;
    echo Html::img('/'.$article->getImage()->getPath('400x400'),['alt' => $article->name,'class' => 'img-responsive']) ;
    echo Html::endTag('figure') ;
    echo Html::beginTag('div', ['class' => 'probootstrap-text']) ;
    echo Html::tag('h3', $article->name, ['class' => 'text-center']) ;
    echo Html::endTag('div') ;
    echo Html::endTag('a') ;
      echo Html::endTag('div') ;
       endforeach; ;
      echo Html::tag('div', '', ['class' => 'clearfix visible-sm-block visible-xs-block']) ;
    echo Html::endTag('div') ;
  echo Html::endTag('div') ;
echo Html::endTag('section') ;

echo \frontend\widgets\Teachers::widget();
