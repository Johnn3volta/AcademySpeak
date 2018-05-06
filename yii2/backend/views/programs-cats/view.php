<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ProgramsCats */
/* @var $image common\models\ProgramsCats */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Категория программ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$image = $image->getPath('150x150')
?>
<div class="programs-cats-view">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить этот элемент ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'seo_h1',
            'title',
            'description',
            'keywords',
            'url:url',
            [
                'attribute' => 'image',
                'value' => "<img src='../$image' >",
                'format' => 'html'
            ],
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
