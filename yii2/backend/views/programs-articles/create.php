<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ProgramsArticles */

$this->title = 'Create Programs Articles';
$this->params['breadcrumbs'][] = ['label' => 'Programs Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programs-articles-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
