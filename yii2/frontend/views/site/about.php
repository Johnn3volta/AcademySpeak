<?php

/* @var $this yii\web\View */

use frontend\widgets\WhyWe;
use frontend\widgets\BreadCrumbsMicrodata;
use yii\helpers\Html;

?>
<section class="probootstrap-section probootstrap-section-colored">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-left section-heading probootstrap-animate">
          <?= Html::tag('h1', 'О нас') ?>
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
<style>

</style>
<section class="probootstrap-section main-spec">
  <div class="container">

      <?= Html::tag('h2', 'Главный специалист', ['class' => 'text-center']) ?>
    <div class="col-md-5">
      <p class="text-center">
          <?= Html::img('@myImages/img_sm_1.jpg', [
              'class' => 'img-responsive img-circle',
              'alt'   => 'Главный специалист',
          ]) ?>
      </p>
    </div>
    <div class="col-md-7 ">
        <?= Html::tag('h3', "Татьяна Анатольевна <small>Логопед-деффектолог высшей квалификационной категории</small>") ?>
      <p><strong>Образование:</strong>Минский государственный педагогический
        университет
        <span class="text-muted">Высшее</span>
        Дефектологический, олигофренопедагогика, логопедия
        <span class="text-muted">Минск, 1983 — 1988 гг</span>
        <span
            class="text-info">Высшая  квалификационная  категория с 2004г.</span>
        <strong>Стаж работы:</strong>
        30 лет
        <strong>Курсы и тренинги:</strong>
        Организация коррекционно-образовательной помощи детям с особенностями
        психофизического развития в Великобритании
        <span class="text-muted">2010 — 2010 гг. <br>Международный фонд помощи детям-инвалидам "Волюнтас"</span>
        Базовое повышение квалификации специалистов-педагогов
        психолого-медико-педагогических комиссий центров
        коррекционно-развивающего обучения и реабилитации
        <span class="text-muted">2009 — 2009 гг. <br>Государственное учреждение образования "Академия последипломного образования" г. Минск (Свидетельство № 0912479. Квалификация: специалист психолого-медико-педагогических комиссий)</span>
        Теоретические и практические основы организации работы по развитию
        коммуникативного поведения у детей с тяжелыми и множественными
        нарушениями развития
        <span class="text-muted">2008 — 2008 гг. <br>Институт повышения квалификации и переподготовки кадров Белорусского государственного университета г. Минск (Свидетельство № 0494237. Квалификация; учитель-дефектолог)</span>
        Особенности организации и методики коррекционно-развивающей работы при
        детском аутизме
        <span class="text-muted">2007 — 2007 гг. <br>Гомельский областной институт повышения квалификации (Свидетельство № 0491506 Квалификация: учитель-дефектолог)</span>
        Поддерживающая и альтернативная коммуникация для детей с тяжелыми и
        (или) множественными нарушениями развития
        <span class="text-muted">2007 — 2007 гг. <br>Институт повышения квалификации и переподготовки кадров Белорусского государственного педагогического университета г. Минск (Свидетельство № 0538501. Квалификация: учитель-дефектолог)</span>
      </p>
    </div>


  </div>
</section>

<?= WhyWe::widget(); ?>
