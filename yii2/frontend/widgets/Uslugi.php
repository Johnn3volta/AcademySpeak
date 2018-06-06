<?php


namespace frontend\widgets;


use common\models\activequery\ProgramsCatsQuery;
use common\models\ProgramsCats;
use yii\base\Widget;

class Uslugi extends Widget{

    public function run(){
        $model = ProgramsCats::find()->all();
        $count = ProgramsCatsQuery::Counts($model);
        return $this->render('uslugi',compact('model','count'));
    }
}