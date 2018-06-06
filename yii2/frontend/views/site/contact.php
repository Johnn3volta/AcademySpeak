<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;


?>
<div class="site-contact">
  <section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-left section-heading probootstrap-animate">
            <?= Html::tag('h1', 'Обратная связь') ?>
            <?= \frontend\widgets\BreadCrumbsMicrodata::widget([
                'options' => [
                    'class' => 'breadcrumb',
                ],
                'homeLink' => [
                    'label' => Yii::t('yii', 'Home'),
                    'url' => Yii::$app->homeUrl,
                    'class' => 'home',
                    'template' => '<li>{link}</li>',
                ],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'itemTemplate' => '<li>{link}</li>',
                'activeItemTemplate' => '<li class="active">{link}</li>',
                'tag' => 'ul',
                'encodeLabels' => false
            ]);
            ?>
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
              <h2>Форма обратной связи</h2>
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
              <div class="form-group">
                  <?= $form->field($model, 'name')
                           ->textInput(['autofocus' => true]) ?>
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
                  <?= Html::submitButton('Отправить', [
                      'class' => 'btn btn-primary',
                      'name' => 'contact-form'
                  ]) ?>
              </div>
                <?php ActiveForm::end(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


</div>
