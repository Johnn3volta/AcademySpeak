<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ProgramsCats */

$this->title = 'Create Programs Cats';
$this->params['breadcrumbs'][] = ['label' => 'Programs Cats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programs-cats-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
