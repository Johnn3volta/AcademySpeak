<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ProgramsArticles */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Программы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="programs-articles-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'url:url',
            'parent_id',
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
