<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ProgramsCats */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Programs Cats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programs-cats-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
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
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
