<?php
/* @var $this yii\web\View
 * @var $articles common\models\ProgramsArticles
 * @var $program common\models\ProgramsCats
 */


use frontend\widgets\BreadCrumbsMicrodata;
use yii\helpers\Html;
use yii\helpers\Url;


echo Html::beginTag('section',['class' => 'probootstrap-section probootstrap-section-colored']);
  echo Html::beginTag('div',['class' => 'container']) ;
   echo Html::beginTag('div',['class' => 'row']) ;
    echo Html::beginTag('div',['class' => 'col-md-12 text-left section-heading probootstrap-animate']) ;

        echo Html::tag('h1',$program->seo_h1) ;
            echo BreadCrumbsMicrodata::widget([
                'options'            => [
                    'class' => 'breadcrumb',
                ],
                'homeLink'           => [
                    'label'    => Yii::t('yii', 'Home'),
                    'url'      => Yii::$app->homeUrl,
                    'class'    => 'home',
                    'template' => '<li>{link}</li>',
                ],
                'links'              => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'itemTemplate'       => '<li>{link}</li>',
                'activeItemTemplate' => '<li class="active">{link}</li>',
                'tag'                => 'ul',
                'encodeLabels'       => false,
            ]);
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
echo Html::tag('hr','',['class' => 'in-style']);
echo Html::beginTag('div',['class' => 'container text-container']);
echo Html::beginTag('div',['class' => 'row']);
echo Html::beginTag('div',['class' => 'col-md-5']);
echo Html::beginTag('div',['class' => 'img-wrapper hidden-xs']);
echo Html::img($program->getImage()->getPath('400x400'),['alt' => $program->name,'class' => 'img-responsive text-center']);
echo Html::endTag('div');
echo Html::endTag('div');
echo Html::beginTag('div',['class' => 'col-md-7']);
echo $program->text;
echo Html::endTag('div');
echo Html::endTag('div');
echo Html::endTag('div');
echo Html::tag('hr','',['class' => 'in-style']);

echo \frontend\widgets\Teachers::widget();
