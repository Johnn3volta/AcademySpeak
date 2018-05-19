<?php

/**
 * @var $model frontend\models\CallBack
 */

use yii\bootstrap\ActiveForm;

?>

<div class="col-md-offset-2 col-md-8">
  <h2>Обратный звонок</h2>
    <?php $form = ActiveForm::begin(['id' => 'call-back']) ?>
  <div class="form-group">
      <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
  </div>
  <div class="form-group">
    <?= $form->field($model,'phone')->textInput() ?>
  </div>
</div>