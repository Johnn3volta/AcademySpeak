<?php
/* @var $this yii\web\View */
/* @var $model common\models\ProgramsCats */
/* @var $count array */

use frontend\widgets\BreadCrumbsMicrodata;
use yii\helpers\Html;
use yii\helpers\StringHelper;

/* @var $model common\models\ProgramsCats */


?>

<section class="probootstrap-section probootstrap-section-colored">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-left section-heading probootstrap-animate">
        <?= Html::tag('h1','Направления деятельности') ?>
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
<section class="probootstrap-section">
  <div class="container">
    <div class="row">
        <?php foreach ($model as $mod): ?>
            <?php $img = $mod->getImage();
            $img->urlAlias == 'placeHolder' ? $size = '188x188' : $size = '400x400';
            $image = $img->getPath($size);
            ?>
          <div class="col-md-6">
            <div class="probootstrap-service-2 probootstrap-animate">
              <div class="image">
                <div class="image-bg">
                    <?= Html::img("$image",['alt' => $mod->name]) ?>
                </div>
              </div>
              <div class="text">
                <h3><?= Html::encode($mod->name) ?></h3>
                <p><?= StringHelper::truncate(strip_tags($mod->text), 130, '...') ?></p>
                <p>
                    <?= Html::a('Подробнее ...', [
                        'programs-cats/program',
                        'url' => $mod->url,
                    ], ['class' => 'btn btn-primary']) ?>
                  <?= Html::tag('span','Количество направлений: ' . $count[$mod->id],['class' => 'enrolled-count']) ?>
                </p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
</section>

<?= \frontend\widgets\Teachers::widget() ?>
