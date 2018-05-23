<?php

/* @var $this yii\web\View */

use frontend\components\BreadcrumbsUtility;
use frontend\widgets\WhyWe;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

?>
<section class="probootstrap-section probootstrap-section-colored">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-left section-heading probootstrap-animate">
          <?= Html::tag('h1', 'О нас') ?>
          <?= Breadcrumbs::widget([
              'homeLink' => BreadcrumbsUtility::getHome('Главная', Yii::$app->getHomeUrl()),
              // получаем главную страницу с микроданными
              'links'    => isset($this->params['breadcrumbs']) ? BreadcrumbsUtility::UseMicroData($this->params['breadcrumbs']) : [],
              // получаем остальные хлебные крошки с микроданными
              'options'  => [ // назначаем контейнеру разметку BreadcrumbList
                  'class'              => 'breadcrumb',
                  'itemscope itemtype' => 'https://schema.org/BreadcrumbList',
              ],
          ]) ?>
      </div>
    </div>
  </div>
</section>

<section class="probootstrap-section">
  <div class="container">

    <div class="col-md-6">
      <p>
        <img src="img/slider_1.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive">
      </p>
    </div>
    <div class="col-md-6 col-md-push-1">
      <h2>We are NYC based School focused on excellence.</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus optio accusantium!</p>
      <p>Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus optio accusantium!</p>
    </div>


  </div>
</section>

<?= WhyWe::widget(); ?>
