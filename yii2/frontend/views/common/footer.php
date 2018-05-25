<?php

?>

<footer class="probootstrap-footer probootstrap-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                    <h3>About The School</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro provident suscipit natus a cupiditate ab minus illum quaerat maxime inventore Ea consequatur consectetur hic provident dolor ab aliquam eveniet alias</p>
                    <h3>Social</h3>
                    <ul class="probootstrap-footer-social">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-github"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-md-push-1">
                <div class="probootstrap-footer-widget">
                    <?= \yii\helpers\Html::tag('h3','Ссылки') ?>
                  <?= \yii\widgets\Menu::widget([
                      'items' => [
                          ['label' => 'Главная', 'url' => \yii\helpers\Url::home()],
                          ['label' => 'Деятельность', 'url' => ['/programs-cats/index']],
                          ['label' => 'Прайс-лист', 'url' => ['/price-list']],
                          ['label' => 'О нас', 'url' => ['/about']],
                          ['label' => 'Контакты', 'url' => ['/contact']],
                      ]
                  ]) ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                    <?= \yii\helpers\Html::tag('h3','Контактная информация') ?>
                  <?= \yii\widgets\Menu::widget([
                      'items' => [
                          ['label' => Yii::$app->params['skype'],'url' => Yii::$app->params['skype'],'template' => '<a href="{url}"><i class="icon-skype2"></i><span>{label}</span></a>'],
                          ['label' => Yii::$app->params['adminEmail'],'url' => Yii::$app->params['adminEmail'],'template' => '<a href="{url}"><i class="icon-mail"></i><span>{label}</span></a>'],
                          ['label' => Yii::$app->params['phone'],'url' => Yii::$app->params['phone'],'template' => '<a href="{url}"><i class="icon-phone2"></i><span>{label}</span></a>'],
                      ],
                      'options' => [
                          'class' => 'probootstrap-contact-info'
                      ]
                  ]) ?>
                </div>
            </div>
        </div>
        <!-- END row -->
    </div>
    <div class="probootstrap-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-left">
                  <p><?= \yii\helpers\Html::a(Yii::$app->name,Yii::$app->homeUrl) ?> Логопедические услуги <?= (date('Y') == 2018) ? 'Copyright  &copy; ' .date('Y') : 'Copyright  &copy; 2018 - ' . date('Y') ?></p>
                </div>
                <div class="col-md-4 probootstrap-back-to-top">
                    <p><a href="#" class="js-backtotop">Вверх <i class="icon-arrow-long-up"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#callback-popup" id="popup__toggle" onclick="return false;">
  <div class="circlephone" style="transform-origin: center;"></div>
  <div class="circle-fill" style="transform-origin: center;">
  </div><div class="img-circle-phone" style="transform-origin: center;">
    <div class="img-circleblock" style="transform-origin: center;"></div>
  </div></a>

<div id="callback-popup" class="white-popup mfp-hide">
  <?= \frontend\widgets\CallBack::widget() ?>
</div>

</div>
