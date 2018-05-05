<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\StringHelper;

/* @var $model common\models\ProgramsCats */
?>

<section class="probootstrap-section probootstrap-section-colored">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-left section-heading probootstrap-animate">
        <h1>Развивающие программы</h1>
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
                <h3><?= $mod->name ?></h3>
                <p><?= StringHelper::truncate(strip_tags($mod->text), 130, '...') ?></p>
                <p>
                    <?= Html::a('Подробнее ...', [
                        'programs-cats/program',
                        'url' => $mod->url,
                    ], ['class' => 'btn btn-primary']) ?><span
                      class="enrolled-count">Суда передадим количество программ</span>
                </p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
</section>

<section class="probootstrap-section">
  <div class="container">
    <div class="row">
      <div
          class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
        <h2>Meet Our Qualified Teachers</h2>
        <p class="lead">Sed a repudiandae impedit voluptate nam Deleniti
          dignissimos perspiciatis nostrum porro nesciunt</p>
      </div>
    </div>
    <!-- END row -->

    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-teacher text-center probootstrap-animate">
          <figure class="media">
            <img src="img/person_1.jpg"
                 alt="Free Bootstrap Template by ProBootstrap.com"
                 class="img-responsive">
          </figure>
          <div class="text">
            <h3>Chris Worth</h3>
            <p>Physical Education</p>
            <ul class="probootstrap-footer-social">
              <li class="twitter"><a href="#"><i class="icon-twitter"></i></a>
              </li>
              <li class="facebook"><a href="#"><i
                      class="icon-facebook2"></i></a></li>
              <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a>
              </li>
              <li class="google-plus"><a href="#"><i
                      class="icon-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-teacher text-center probootstrap-animate">
          <figure class="media">
            <img src="img/person_5.jpg"
                 alt="Free Bootstrap Template by ProBootstrap.com"
                 class="img-responsive">
          </figure>
          <div class="text">
            <h3>Janet Morris</h3>
            <p>English Teacher</p>
            <ul class="probootstrap-footer-social">
              <li class="twitter"><a href="#"><i class="icon-twitter"></i></a>
              </li>
              <li class="facebook"><a href="#"><i
                      class="icon-facebook2"></i></a></li>
              <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a>
              </li>
              <li class="google-plus"><a href="#"><i
                      class="icon-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="clearfix visible-sm-block visible-xs-block"></div>
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-teacher text-center probootstrap-animate">
          <figure class="media">
            <img src="img/person_6.jpg"
                 alt="Free Bootstrap Template by ProBootstrap.com"
                 class="img-responsive">
          </figure>
          <div class="text">
            <h3>Linda Reyez</h3>
            <p>Math Teacher</p>
            <ul class="probootstrap-footer-social">
              <li class="twitter"><a href="#"><i class="icon-twitter"></i></a>
              </li>
              <li class="facebook"><a href="#"><i
                      class="icon-facebook2"></i></a></li>
              <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a>
              </li>
              <li class="google-plus"><a href="#"><i
                      class="icon-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="probootstrap-teacher text-center probootstrap-animate">
          <figure class="media">
            <img src="img/person_7.jpg"
                 alt="Free Bootstrap Template by ProBootstrap.com"
                 class="img-responsive">
          </figure>
          <div class="text">
            <h3>Jessa Sy</h3>
            <p>Physics Teacher</p>
            <ul class="probootstrap-footer-social">
              <li class="twitter"><a href="#"><i class="icon-twitter"></i></a>
              </li>
              <li class="facebook"><a href="#"><i
                      class="icon-facebook2"></i></a></li>
              <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a>
              </li>
              <li class="google-plus"><a href="#"><i
                      class="icon-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
