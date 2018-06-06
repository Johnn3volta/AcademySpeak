<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\ContactForm */

use frontend\widgets\BreadCrumbsMicrodata;
use yii\helpers\Html;


?>
<div class="site-contact">
  <section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-left section-heading probootstrap-animate">
            <?= Html::tag('h1', 'Прайс-лист') ?>
            <?= BreadCrumbsMicrodata::widget([
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
            ]); ?>
        </div>
      </div>
    </div>
  </section>
  <section class="probootstrap-section probootstrap-section-sm">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row probootstrap-gutter0">
            <div class="col-md-offset-1 col-md-10 col-xs-12 probootstrap-animate"
                 id="probootstrap-content">
              <div class="table-responsive">
                <table class="table table-bordered text-center">
<!--                  <tr>-->
<!--                    <th colspan="4" class="text-center bg-primary"> Направления работы</th>-->
<!--                  </tr>-->
                  <tr>
                    <td colspan="4" class="bg-primary">Диагностика</td>
                  </tr>
                  <tr>
                    <td colspan="3">Логопед-дефектолог <br>
                      <ul class="list-unstyled" style="margin-bottom: 0;">
                        <li>Первичная</li>
                        <li>Вторичная</li>
                      </ul>
                    </td>
                    <td class="text-info" width="15%"><br>2200 руб.<br>2000 руб.</td>
                  </tr>
                  <tr>
                    <td colspan="2" width="50%" class="bg-primary">Дети</td>
                    <td colspan="2" class="bg-primary">Взрослые</td>
                  </tr>
                  <tr>
                    <td colspan="4">Виды нарушений и <br> стоимость
                      индивидуальных занятий (30 мин)
                    </td>
                  </tr>
                  <tr class="vmiddle">
                    <td>Задержка речевого развития</td>
                    <td class="text-info" width="15%">1500 руб.</td>
                    <td>Афазия (Восстановление речи после инсультов)</td>
                    <td class="text-info">1700 руб.</td>
                  </tr>
                  <tr class="vmiddle">
                    <td>Задержка психического развития</td>
                    <td class="text-info">1500 руб.</td>
                    <td>Заикание и нарушения темпо-ритмической стороны речи</td>
                    <td class="text-info">1600 руб.</td>
                  </tr>
                  <tr class="vmiddle">
                    <td>Фонетико-фонематическое недоразвитие речи</td>
                    <td class="text-info">1400 руб.</td>
                    <td>Дизартрия</td>
                    <td class="text-info">1600 руб.</td>
                  </tr>
                  <tr class="vmiddle">
                    <td rowspan="2">Алалия</td>
                    <td class="text-info" rowspan="2">1500 руб.</td>
                    <td>Ринолалия</td>
                    <td class="text-info">1600 руб.</td>
                  </tr>
                  <tr>
                    <td>Дислалия</td>
                    <td class="text-info">1300 руб.</td>
                  </tr>
                  <tr class="vmiddle">
                    <td>Общее недоразвитие речи: <br>
                    <ul class="list-unstyled">
                      <li>1 уровень</li>
                      <li>2 уровень</li>
                      <li>3 уровень</li>
                      <li>4 уровень</li>
                    </ul>
                    </td>
                    <td class="text-info"><br>1500 руб.<br>1500 руб.<br>1400 руб.<br>1400 руб.</td>
                    <td rowspan="9">Дисфония (восстановление голоса)</td>
                    <td class="text-info" rowspan="9">1500 руб.</td>
                  </tr>
                  <tr class="vmiddle">
                    <td>Расстройства речи  при аутизме,  РАС, расстройствах эмоционально-волевой сферы</td>
                    <td class="text-info">1800 руб.</td>
                  </tr>
                  <tr class="vmiddle">
                    <td>Дизартрия <br>
                      <ul class="list-unstyled">
                        <li>тяжелая форма</li>
                        <li>стертая форма</li>
                      </ul>
                    </td>
                    <td class="text-info"><br>1500 руб.<br>1400 руб.</td>
                  </tr>
                  <tr class="vmiddle">
                    <td>Дислалия <br>
                      <ul class="list-unstyled">
                        <li>мономорфная</li>
                        <li>полиморфная</li>
                      </ul>
                    </td>
                    <td class="text-info"><br>1200 руб.<br>1300 руб.</td>
                  </tr>
                  <tr class="vmiddle">
                    <td>Ринолалия</td>
                    <td class="text-info">1500 руб.</td>
                  </tr>
                  <tr class="vmiddle">
                    <td>Дисграфия</td>
                    <td class="text-info">1400 руб.</td>
                  </tr>
                  <tr class="vmiddle">
                    <td>Дислексия</td>
                    <td class="text-info">1400 руб.</td>
                  </tr>
                  <tr class="vmiddle">
                    <td>Заикание и  нарушения темпо-ритмической стороны речи</td>
                    <td class="text-info">1600 руб.</td>
                  </tr>
                  <tr class="vmiddle">
                    <td>Комбинированные речевые расстройства</td>
                    <td class="text-info">1800</td>
                  </tr>
                  <tr >
                    <td colspan="4" class="bg-primary">Специальные курсы</td>
                  </tr>
                  <tr class="vmiddle">
                    <td colspan="3">«Говори легко!» <br> (Курс развития речи для  дошкольников)</td>
                    <td class="text-info">1200 руб.</td>
                  </tr>
                  <tr class="vmiddle">
                    <td colspan="3">«Речевой маршрут» <br> (Формирование  средств альтернативной (дополнительной) коммуникации у  неговорящих)</td>
                    <td class="text-info">1500 руб.</td>
                  </tr>
                  <tr class="vmiddle">
                    <td colspan="3">«Подготовка  к  школе» <br> (Курс-интенсив  по  подготовке к школе)</td>
                    <td class="text-info">1300 руб.</td>
                  </tr>
                  <tr class="vmiddle">
                    <td colspan="3">«Буду говорить, читать, писать  правильно!»
                      <br> (Курс-интенсив по обучению  чтению для детей  с  нарушениями речи)</td>
                    <td class="text-info">1200 руб.</td>
                  </tr>
                  <tr class="vmiddle">
                    <td colspan="3">Логоритмика</td>
                    <td class="text-info">1100 руб.</td>
                  </tr>
                  <tr>
                    <td colspan="4" class="bg-primary">Специальные предложения</td>
                  </tr>
                  <tr class="vmiddle">
                    <td colspan="3">«Логопед на дом»</td>
                    <td class="text-info">1600 руб.</td>
                  </tr>
                  <tr class="vmiddle">
                    <td colspan="3">«Логопед он-лайн» (занятия по Skype)</td>
                    <td class="text-info">1000 руб.</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


</div>
