<?php
/**
* @var $model common\models\ProgramsCats
* @var $count array
 */

use yii\helpers\Html;
use yii\helpers\StringHelper;
?>


<section class="probootstrap-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center section-heading probootstrap-animate">
          <?= Html::tag('h2', 'Услуги') ?>
      </div>
    </div>
    <div class="row">
        <?php
        foreach ($model as $mod): ?>
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
                    <?= Html::tag('span','Количество направлений: ' .$count[$mod->id],['class' => 'enrolled-count']) ?>
                </p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
</section>



