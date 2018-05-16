<?php
use yii\helpers\Html;
use yii\widgets\Menu;

?>

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
                <?=  Html::a(Yii::$app->name,['/site/index'],['class' => 'navbar-brand']) ?>
            </div>

            <div id="navbar-collapse" class="navbar-collapse collapse">
                <?= Menu::widget([
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
