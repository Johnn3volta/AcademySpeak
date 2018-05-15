<?php
/* @var $this \yii\web\View */
/* @var $content string */
/* @var $description string */

use common\widgets\Alert;
use frontend\assets\AppAssetIe9;
use frontend\assets\MyAppAsset;
use yii\helpers\Html;

MyAppAsset::register($this);
AppAssetIe9::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= Html::csrfMetaTags() ?>
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
  <?php $this->head() ?>
  <title><?= Html::encode($this->title) ?></title>
</head>
<body>
<?php $this->beginBody() ?>
<div class="probootstrap-search" id="probootstrap-search">
    <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
    <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
    </form>
</div>

<div class="probootstrap-page-wrapper">
    <!-- Fixed navbar -->

    <div class="probootstrap-header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
                    <span><i class="icon-location2"></i>Brooklyn, NY 10036, United States</span>
                    <span><i class="icon-phone2"></i>+1-123-456-7890</span>
                    <span><i class="icon-mail"></i>pochta@gg.mail</span>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
                    <ul>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook2"></i></a></li>
                        <li><a href="#"><i class="icon-instagram2"></i></a></li>
                        <li><a href="#"><i class="icon-youtube"></i></a></li>
                        <li><a href="#" class="probootstrap-search-icon js-probootstrap-search"><i class="icon-search"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
            <div class="navbar-header">
                <div class="btn-more js-btn-more visible-xs">
                    <a href="#"><i class="icon-dots-three-vertical "></i></a>
                </div>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              <?= Html::a(Yii::$app->name,['/site/index'],['class' => 'navbar-brand']) ?>
            </div>

            <div id="navbar-collapse" class="navbar-collapse collapse">
              <?= \yii\widgets\Menu::widget([
                  'items' => [
                      ['label' => 'Главная','url' => Yii::$app->homeUrl,'options' =>['class' => 'active']],
                      [
                          'label'    => 'Направления деятельности',
                          'url'      => ['#'],
                          'options'  => ['class' => 'dropdown'],
                          'template' => '<a href="{url}" data-toggle="dropdown" class="dropdown-toggle">{label}</a>',
                          'items' => \common\models\ProgramsCats::viewProgItems()
                      ],
//                      ['label' => 'Диагностика','url' => '#'],
                      ['label' => 'Прайс-лист','url' => '#'],
                      ['label'    => 'О компании',
                       'url'      => '#',
                       'options'  => ['class'=>'dropdown'],
                       'template' => '<a href="{url}" data-toggle="dropdown" class="dropdown-toggle">{label}</a>',
                       'items'    => [
                                                      ['label' => 'Отзывы', 'url' => '#'],
                           ['label' => 'Контакты', 'url' => ['/site/contact']],
                       ],
                      ],
                      [
                          'label'    => 'Еще ...',
                          'url'      => ['/site/about'],
                          'options'  => ['class' => 'dropdown'],
                          'template' => '<a href="{url}" data-toggle="dropdown" class="dropdown-toggle">{label}</a>',
                          'items' => [
                              ['label' => 'Новости','url' => '#'],
                              ['label' => 'Полезные статьи', 'url' => '#'],
                              ['label' => 'Фотогалерея', 'url' => '#'],
                              ['label' => 'Вопрос-Ответ', 'url' => '#'],
                          ]
                      ],
                  ],
                  'options' => [
                      'class' => 'nav navbar-nav navbar-right'
                  ],
                  'submenuTemplate' => '<ul class="dropdown-menu">{items}</ul>'
              ])?>
            </div>
        </div>
    </nav>
<!--    --><?php //_end(\common\models\ProgramsCats::viewProgItems()) ?>
    <?= Alert::widget() ?>
    <?= $content ?>

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
                        <h3>Links</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Teachers</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="probootstrap-footer-widget">
                        <h3>Contact Info</h3>
                        <ul class="probootstrap-contact-info">
                            <li><i class="icon-location2"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
                            <li><i class="icon-mail"></i><span>info@domain.com</span></li>
                            <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- END row -->

        </div>

        <div class="probootstrap-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-left">
                        <p>&copy; 2017 <a href="https://probootstrap.com/">ProBootstrap:Enlight</a>. All Rights Reserved. Designed &amp; Developed with <i class="icon icon-heart"></i> by <a href="https://probootstrap.com/">ProBootstrap.com</a></p>
                    </div>
                    <div class="col-md-4 probootstrap-back-to-top">
                        <p><a href="#" class="js-backtotop">Вверх <i class="icon-arrow-long-up"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<!-- END wrapper -->



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>