<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\ContactForm */

use frontend\components\BreadcrumbsUtility;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\widgets\Breadcrumbs;


?>
<div class="site-contact">
  <section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-left section-heading probootstrap-animate">
            <?= Html::tag('h1', 'Обратная связь') ?>
            <?= Breadcrumbs::widget([
                'homeLink' => BreadcrumbsUtility::getHome('Главная', Yii::$app->getHomeUrl()),
                // получаем главную страницу с микроданными
                'links'    => isset($this->params['breadcrumbs']) ? BreadcrumbsUtility::UseMicroData($this->params['breadcrumbs']) : [],
                // получаем остальные хлебные крошки с микроданными
                'options'  => [ // назначаем контейнеру разметку BreadcrumbList
                    'class'              => 'breadcrumb',
                    'itemscope itemtype' => 'https://schema.org/BreadcrumbList',
                ],
            ]) ?>
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
<?php
$js = <<<JS
$('#contact-form').on('beforeSubmit',function() {
  alert('Работает !');
  return false;
})
JS;

$this->registerJs($js);

?>
</div>
