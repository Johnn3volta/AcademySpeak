<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model common\models\ProgramsArticles */
/* @var $image common\models\ProgramsArticles */
/* @var $form yii\widgets\ActiveForm */
/* @var $parents array */

$img = $image->getPath('350x350')
?>

<div class="programs-articles-form">

    <?php $form = ActiveForm::begin(); ?>

  <div class="row">
    <div class="col-md-7">
      <div class="col-md-12">
          <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
      </div>
      <div class="col-md-12">
          <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
      </div>
      <div class="col-md-12">
          <?= $form->field($model, 'parent_id')
                   ->dropDownList($parents, ['prompt' => '-- Выберите родительскую категорию --']) ?>
      </div>
      <div class="col-md-12">
          <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
      </div>
      <div class="col-md-12">
          <?= $form->field($model, 'seo_h1')
                   ->textInput(['maxlength' => true]) ?>
      </div>
      <div class="col-md-12">
          <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
      </div>
      <div class="col-md-12">
          <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>
      </div>
    </div>
    <div class="col-md-5">

      <div class="col-md-12">
          <?= $form->field($model, 'image')->fileInput() ?>
      </div>
      <div class="col-md-12">
          <?php if(isset($image)):?>
              <?= Html::img("../$img",['style' => 'padding:30px 0'])?>
          <?php endif;?>
      </div>
    </div>
  </div>





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
