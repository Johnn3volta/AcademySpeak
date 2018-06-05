<?php
/* @var $this yii\web\View */

/* @var $article common\models\ProgramsArticles */

use frontend\widgets\BreadCrumbsMicrodata;
use yii\widgets\Breadcrumbs;


?>

<section class="probootstrap-section probootstrap-section-colored">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-left section-heading probootstrap-animate">
          <?= \yii\helpers\Html::tag('h1', $article->name) ?>
          <?= BreadCrumbsMicrodata::widget([
              'options'            => [
                  'class' => 'breadcrumb',
              ],
              'homeLink'           => [
                  'label'    => Yii::t('yii', 'Home'),
                  'url'      => ['/site/index'],
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
          <div class="col-md-offset-2 col-md-8 probootstrap-animate"
               id="probootstrap-content">
            <dl class="dl-horizontal">
              <dt>Диагноз</dt>
              <dd><strong>Общее недоразвитие речи (ОНР)</strong> - системное нарушение, характеризующееся несформированностью
                всех сторон речи (звуковой, фонематической,
                лексико-грамматической, семантической) у детей с нормальным
                слухом и первично сохранным интеллектом. Проявления ОНР зависят
                от уровня недоразвития компонентов речевой системы и могут
                выражаться как полным отсутствием общеупотребительной речи, так
                и наличием связной речи с элементами фонетико-фонематического и
                лексико-грамматического недоразвития
              </dd>
              <dt>Коррекция ОНР </dt>
              <dd>
                <ul class="list-unstyled">
                  <li><strong>ОНР 1 уровня</strong> является развитие понимания обращенной речи, активизация самостоятельной речевой активности детей и неречевых процессов (внимания, памяти, мышления). При обучении детей с ОНР 1 уровня не ставится задача правильного фонетического оформления высказывания, но обращается внимание на грамматическую сторону речи.</li>
                  <li><strong>ОНР 2 уровня</strong> ведется работа над развитием речевой активности и понимания речи, лексико-грамматических средств языка, фразовой речи и уточнением звукопроизношения и вызыванием отсутствующих звуков.</li>
                  <li><strong>ОНР 3 уровня</strong> проводится развитие связной речи, совершенствование лексико-грамматической стороны речи, закрепление правильного звукопроизношения и фонематического восприятия. На этом этапе уделяется внимание подготовке детей к усвоению грамоты.</li>
                  <li><strong>ОНР 4 уровня</strong> служит достижение детьми возрастной нормы устной речи, необходимой для успешного школьного обучения. Для этого необходимо совершенствовать и закреплять произносительные умения, фонематические процессы, лексико-грамматическую сторону речи, развернутую фразовую речь; развивать графо-моторные навыки и первичные навыки чтения и письма.</li>
                </ul>
              </dd>
              <dt>Стоимость</dt>
              <dd>
                <ul class="list-unstyled">
                  <li>1,2 уровень - 1500 руб.</li>
                  <li>3,4 уровень - 1400 руб.</li>
                </ul>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
