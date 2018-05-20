<?php

/**
 * @var $form yii\bootstrap\ActiveForm
 * @var $model frontend\models\CallBack
 * @var $from_time array
 * @var $to_time array
 */

use yii\bootstrap\ActiveForm;

?>


    <h3 class="text-center">Обратный звонок</h3>
      <?php $form = ActiveForm::begin([
          'id'     => 'call-back',
      ]) ?>
      <?= $form->field($model, 'name')->textInput(['placeholder' => 'Ваше имя'])->label(false) ?>
      <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::class,['mask' => '+7 (999) 999-99-99'])->textInput(['placeholder'=>'+7 (999) 999-99-99'])->label(false) ?>
    <div class="container-fluid">
      <div class="form-group col-sm-4 col-xs-12 text-center">
        <strong>Время звонка</strong>
      </div>
      <div class="col-sm-4 col-xs-6">
          <?= $form->field($model, 'time_from')
                   ->dropDownList($from_time, ['prompt' => ' С '])
                   ->label(false) ?>
      </div>
      <div class="col-sm-4 col-xs-6">
          <?= $form->field($model, 'time_to')
                   ->dropDownList($to_time, ['prompt' => 'До'])
                   ->label(false) ?>
      </div>
    </div>
    <div class="form-group text-right">
        <?= \yii\helpers\Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
    </div>
      <?php ActiveForm::end() ?>

<?php
$callback = <<<JS

 $('#call-back').on('beforeSubmit',function() {
     var data = $(this).serialize();
     $('#callback-popup button[type=submit]').attr('disabled','disabled');
     $.ajax({
     url: '/call-back',
     type:'POST',
     data: data,
     success: function(res) {
         $('#call-back').hide();
         $('#callback-popup h3').after(res);
         setTimeout(function() {
           location.href = location.href;
         },1500)
     },
     error:function() {
        $('#call-back').hide();
        $('#callback-popup h3').after("<div class='text-center text-danger' style='padding: 25px 0; font-size:25px'>Упс ! <br>Чт-ото пошло не так.</div>");
         setTimeout(function() {
           location.href = location.href;
         },1500)
     }
     });
     return false;
 });

$('#callbackform-time_from').change(function() {
  $('#callbackform-time_to option').each(function() {
    if ( $(this).val() <= $('#callbackform-time_from').val() ){
        $(this).hide()
    }else  $(this).show()
       })
});

$('#callbackform-time_to').change(function() {
  $('#callbackform-time_from option').each(function() {
    if ( $(this).val() >= $('#callbackform-time_to').val() ){
        $(this).hide()
    }else  $(this).show()
       })
})



JS;

$this->registerJs($callback);

?>