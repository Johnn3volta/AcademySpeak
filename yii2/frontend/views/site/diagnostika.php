<?php

use frontend\components\BreadcrumbsUtility;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

?>

<section class="probootstrap-section probootstrap-section-colored">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-left section-heading probootstrap-animate">
          <?= Html::tag('h1', 'Дифферинциальная диагностика') ?>
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
    <div class="col-sm-offset-1 col-sm-10">
      <div class="flex-container text-center">
        <div class="flex-element w8 ">
          <div class="my-content bg-info h2">
            Дифферинциальная диагностика
          </div>
          <img src="/uploads/images/arrow.png" alt="">
        </div>
        <div class="flex-element w8">
          <div class="my-content">
            Направлена на выявление причин возникновения, структуры дефекта и
            определение актуального уровня развития речи и познавательной
            деятельности
          </div>
          <img src="/uploads/images/arrow-raz.png" alt="">
        </div>
        <div class="flex-element w5 ">
          <div class="my-content bg-primary">
            <strong>Дети</strong>
          </div>
          <img src="/uploads/images/arrow.png" alt="">
        </div>
        <div class="flex-element w5 order order-first">
          <div class="my-content bg-primary">
            <strong>Взрослые</strong>
          </div>
          <img src="/uploads/images/arrow.png" alt="">
        </div>
        <div class="flex-element w5 my-content">
            Проводится с использованием игрохых, стандартизированных и
            интерактивных методик нарушений речи и позновательной деятелности
        </div>
        <div class="flex-element w5 my-content order">
            Проводится с использованием стандартизированных методик диагностики
            нарушений речи
        </div>
        <div class="flex-element order">
          <img src="/uploads/images/arrow-svod.png" alt="">
          <div class="my-content bg-info">
          Составление индивидуальной коррекционной программы развития
          </div>
        </div>
      </div>
    </div>
  </div>
</section>