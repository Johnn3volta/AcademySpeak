<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model common\models\ProgramsArticles */
/* @var $form yii\widgets\ActiveForm */
/* @var $parents array */
?>

<div class="programs-articles-form">

    <?php $form = ActiveForm::begin(); ?>

  <div class="row">
    <div class="col-md-4">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-4">
        <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-4">
        <?= $form->field($model, 'parent_id')
                 ->dropDownList($parents, ['prompt' => '-- Выберите родительскую категорию --']) ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'seo_h1')->textInput(['maxlength' => true]) ?>
    </div>
  </div>
    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [
            'preset' => 'standard',
            'inline' => false,
        ]),
    ]); ?>


  <div class="form-group">
      <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
  </div>

    <?php ActiveForm::end(); ?>

</div>
