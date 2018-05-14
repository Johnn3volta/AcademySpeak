<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\ProgramsArticlesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="programs-articles-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

<div class="row">
  <div class="col-md-6">
      <?= $form->field($model, 'name') ?>
  </div>
  <div class="col-md-6">
      <?= $form->field($model, 'seo_h1') ?>
  </div>
  <div class="col-md-6">
      <?= $form->field($model, 'url') ?>
  </div>
  <div class="col-md-3">
      <?= $form->field($model, 'parent_id') ?>
  </div>
  <div class="col-md-3">
      <?= $form->field($model, 'price') ?>
  </div>
</div>

    <div class="form-group">
        <?= Html::submitButton('Найти', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сбросить', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>
  <hr>
</div>
