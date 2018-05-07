<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->registerMetaTag(['name' => 'description','content' => 'Страница ошибки '],'description');
$this->registerMetaTag(['name' => 'keywords','content' => '' ],'keywords');
$this->registerMetaTag(['property' => 'og:url','content' => 'http://'.Yii::$app->request->serverName.Yii::$app->request->url]);
$this->registerMetaTag(['property' => 'og:title','content' => $this->title]);
$this->registerMetaTag(['property' => 'og:type','content' => 'website']);

$this->registerCssFile('/css/error.css');

$this->title = 'Ошибка '. $exception->statusCode;

?>
<div class="site-error">

    <div class="w3layouts-bg">
        <h1 class="header-w3ls"><?= Html::encode($this->title) ?></h1>
        <div class="agileits-content">
            <h2><?= Yii::$app->service->statusCode($exception->statusCode); ?></h2>

        </div>
        <div class="w3layouts-right">
            <div class="w3ls-text">
                <h3>Извините !</h3>
                <h4 class="w3-agileits2"> <?= nl2br(Html::encode($message)) ?>.</h4>
                <p>Перейти на <?= Html::a('Главную',[Yii::$app->homeUrl],['class' => 'btn btn-info']) ?> .<br><br> Написать нам <?= Html::a(Yii::$app->params['adminEmail'],'mailto:'.Yii::$app->params['adminEmail'],['class' => 'btn btn-info']) ?></p>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>

</div>
