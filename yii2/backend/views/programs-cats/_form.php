<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model common\models\ProgramsCats */
/* @var $image common\models\ProgramsCats */
/* @var $form yii\widgets\ActiveForm */

$img = $image->getPath('350x350')
?>

<div class="programs-cats-form">
<!--  --><?php //_end($image) ?>

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="row">
      <div class="col-md-7">
        <div class="col-md-12">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-12">
            <?= $form->field($model, 'seo_h1')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-12">
            <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
        </div>
          <div class="col-md-12">
              <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
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
          <?php if(isset($image)):?>
          <?= Html::img("../$img",['style' => 'padding:25px 0'])?>
          <?php endif;?>
        </div>
        <div class="col-md-12">
            <?= $form->field($model, 'image')->fileInput() ?>
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
