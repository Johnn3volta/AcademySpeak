<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Обратная связь';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">


  <section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-left section-heading probootstrap-animate">
          <h1><?= Html::encode($this->title) ?></h1>
        </div>
      </div>
    </div>
  </section>



  <section class="probootstrap-section probootstrap-section-sm">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row probootstrap-gutter0">
            <div class="col-md-4" id="probootstrap-sidebar">
              <div class="probootstrap-sidebar-inner probootstrap-overlap probootstrap-animate">
<!--                <h3>Pages</h3>-->
<!--                <ul class="probootstrap-side-menu">-->
<!---->
<!--                  <li><a href="index.html">Home</a></li>-->
<!--                  <li><a href="courses.html">Courses</a></li>-->
<!--                  <li><a href="teachers.html">Teachers</a></li>-->
<!--                  <li><a href="events.html">Events</a></li>-->
<!--                  <li><a href="about.html">About Us</a></li>-->
<!--                  <li class="active"><a>Contact Us</a></li>-->
<!--                </ul>-->
              </div>
            </div>
            <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
              <h2>Форма обратной связи</h2>
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <div class="form-group">
                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'email') ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'subject') ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                </div>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>
              <div class="form-group">
                  <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
              </div>
                <?php ActiveForm::end(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




</div>
