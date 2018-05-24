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
<style>
  .flex-container {
    display: -webkit-flex;
    display: -ms-flex;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;

  }

  .flex-container .h2 {
    font-size: 20px;
    color: black;
  }

  .flex-element {

  }

  .my-content {
    padding: 20px;
    border: 1px dotted black;
    margin: 0 1%;
    border-radius: 5px;
    font-size: 18px;
    align-items: stretch;
    flex: content;
  }

  .flex-element img {
    padding: 20px 0;
  }

  .w5 {
    width: 45%;
  }

  .w8 {
    width: 80%;
  }

  @media screen and (max-width: 425px){
    .w5 {
      width: 98%
    }
    .order {
      -webkit-order: 1;
      order: 1;
    }
    .order-first {
      margin-top: 20px;
    }
  }

</style>

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