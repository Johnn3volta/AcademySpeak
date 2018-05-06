<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ProgramsArticles */
/* @var $image common\models\ProgramsArticles */
/* @var $parents array */

$this->title = 'Страница обновления';
$this->params['breadcrumbs'][] = ['label' => 'Программы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="programs-articles-update">


    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'parents' => $parents,
        'image' => $image
    ]) ?>

</div>
