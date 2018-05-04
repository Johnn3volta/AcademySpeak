<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ProgramsArticles */
/* @var $parents array */


$this->title = 'Создать программу';
$this->params['breadcrumbs'][] = ['label' => 'Пррограммы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programs-articles-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'parents' => $parents

    ]) ?>

</div>
