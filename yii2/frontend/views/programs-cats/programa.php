<?php
/* @var $this yii\web\View
 * @var $articles common\models\ProgramsArticles
 * @var $program common\models\ProgramsCats
 */


use yii\helpers\Html;
use yii\helpers\Url;

?>
<?= Html::beginTag('section',['class' => 'probootstrap-section probootstrap-section-colored'])?>
  <?= Html::beginTag('div',['class' => 'container']) ?>
   <?= Html::beginTag('div',['class' => 'row']) ?>
    <?= Html::beginTag('div',['class' => 'col-md-12 text-left section-heading probootstrap-animate']) ?>
        <?= Html::tag('h1',$program->name) ?>
    <?= Html::endTag('div') ?>
   <?= Html::endTag('div') ?>
  <?= Html::endTag('div') ?>
<?= Html::endTag('section') ?>

<?= Html::beginTag('section', ['class' => 'probootstrap-section']) ?>
  <?= Html::beginTag('div', ['class' => 'container']) ?>
    <?= Html::beginTag('div', ['class' => 'row']) ?>
      <?php foreach ($articles as $article): ?>
       <?= Html::beginTag('div', ['class' => 'col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate']) ?>
         <?= Html::beginTag('a', ['href'  => Url::toRoute([
        '/program-article/index',
        'parent_url' => $program->url,
        'url'        => $article->url,
    ]),
                             'class' => 'probootstrap-featured-news-box',
    ]) ?>

    <?= Html::beginTag('figure', ['class' => 'probootstrap-media']) ?>
    <?= Html::img('/'.$article->getImage()->getPath('400x400'),['alt' => $article->name,'class' => 'img-responsive']) ?>
    <?= Html::endTag('figure') ?>
    <?= Html::beginTag('div', ['class' => 'probootstrap-text']) ?>
    <?= Html::tag('h3', $article->name, ['class' => 'text-center']) ?>
    <?= Html::endTag('div') ?>
    <?= Html::endTag('a') ?>
      <?= Html::endTag('div') ?>
      <?php endforeach; ?>
      <?= Html::tag('div', '', ['class' => 'clearfix visible-sm-block visible-xs-block']) ?>
    <?= Html::endTag('div') ?>
  <?= Html::endTag('div') ?>
<?= Html::endTag('section') ?>