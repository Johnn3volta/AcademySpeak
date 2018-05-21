<?php
/* @var $this yii\web\View */
/* @var $model common\models\ProgramsCats */
/* @var $count array */

use frontend\components\BreadcrumbsUtility;
use yii\helpers\Html;
use yii\helpers\StringHelper;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

/* @var $model common\models\ProgramsCats */

$this->params['breadcrumbs'][] = ['label' => 'Направления деятельности', 'url' =>Url::current()];
?>

<section class="probootstrap-section probootstrap-section-colored">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-left section-heading probootstrap-animate">
        <?= Html::tag('h1','Направления деятельности') ?>
          <?= Breadcrumbs::widget([
              'homeLink' => BreadcrumbsUtility::getHome('Главная', Yii::$app->getHomeUrl()), // получаем главную страницу с микроданными
              'links' => isset($this->params['breadcrumbs']) ? BreadcrumbsUtility::UseMicroData($this->params['breadcrumbs']) : [], // получаем остальные хлебные крошки с микроданными
              'options' => [ // назначаем контейнеру разметку BreadcrumbList
                  'class' => 'breadcrumb',
                  'itemscope itemtype' => 'https://schema.org/BreadcrumbList'
              ],
          ]) ?>
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
