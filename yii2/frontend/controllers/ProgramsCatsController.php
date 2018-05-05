<?php


namespace frontend\controllers;


use common\models\ProgramsCats;

class ProgramsCatsController extends MetaController{

    public function actionIndex(){
        $description = 'Суда надо будет чтото написать';
        $model = ProgramsCats::find()->all();
        $this->setMeta('Развивающие программы', $description);

        return $this->render('programms', ['model' => $model]);

    }

    public function actionProgram($url){
        $program = ProgramsCats::findOne(['url' => $url]);

        $this->setMeta($program->title, $program->description);

        return $this->render('programa',['programm' => $program]);
   }
}