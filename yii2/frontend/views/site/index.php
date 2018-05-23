<?php

/* @var $this yii\web\View */

use frontend\widgets\NapravleniyaDeyatelnosti;
use frontend\widgets\Teachers;
use frontend\widgets\Testimonials;
use frontend\widgets\WhyWe;

?>
<section class="flexslider">
  <ul class="slides">
    <li style="background-image: url(<?= Yii::getAlias('@myImages')?>/slides/slide_1.jpg)" class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="probootstrap-slider-text text-center">
              <h2 class="probootstrap-heading probootstrap-animate"><?= Yii::getAlias('@myImages') ?></h2>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li style="background-image: url(<?= Yii::getAlias('@myImages')?>/slides/slide_2.jpg)" class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="probootstrap-slider-text text-center">
              <h2 class="probootstrap-heading probootstrap-animate">Education is Life</h2>
            </div>
          </div>
        </div>
      </div>

    </li>
    <li style="background-image: url(<?= Yii::getAlias('@myImages')?>/slides/slide_3.jpg)" class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="probootstrap-slider-text text-center">
              <h2 class="probootstrap-heading probootstrap-animate">Helping Each of Our Students Fulfill the Potential</h2>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
</section>

<section class="probootstrap-section probootstrap-section-colored">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center section-heading probootstrap-animate">
        <h2>Школа правильной речи AcademySpeak</h2>
      </div>
    </div>
  </div>
</section>




<section class="probootstrap-section" id="probootstrap-counter">
  <div class="container">

    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
        <div class="probootstrap-counter-wrap">
          <div class="probootstrap-icon">
            <i class="icon-users2"></i>
          </div>
          <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="20203" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
            <span class="probootstrap-counter-label">Students Enrolled</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
        <div class="probootstrap-counter-wrap">
          <div class="probootstrap-icon">
            <i class="icon-user-tie"></i>
          </div>
          <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="139" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
            <span class="probootstrap-counter-label">Certified Teachers</span>
          </div>
        </div>
      </div>
      <div class="clearfix visible-sm-block visible-xs-block"></div>
      <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
        <div class="probootstrap-counter-wrap">
          <div class="probootstrap-icon">
            <i class="icon-library"></i>
          </div>
          <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="99" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
            <span class="probootstrap-counter-label">Passing to Universities</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">

        <div class="probootstrap-counter-wrap">
          <div class="probootstrap-icon">
            <i class="icon-smile2"></i>
          </div>
          <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
            <span class="probootstrap-counter-label">Parents Satisfaction</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?//= \frontend\widgets\NewsBlock::widget(); ?>

<?= NapravleniyaDeyatelnosti::widget();?>

<?= Teachers::widget();?>

<?//= Testimonials::widget();?>

<?= WhyWe::widget(); ?>





