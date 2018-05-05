<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ProgramsCats */

$this->title = 'Создать категорию программ';
$this->params['breadcrumbs'][] = ['label' => 'Категория программ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programs-cats-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'image' => $image
    ]) ?>

</div>
