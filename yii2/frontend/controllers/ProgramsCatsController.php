<?php
/**
 * Created by PhpStorm.
 * User: ContentManager5
 * Date: 04.05.2018
 * Time: 15:57
 */

namespace frontend\controllers;


use common\models\ProgramsCats;
use yii\web\Controller;

class ProgramsCatsController extends Controller{

    public $title = '';

    public $description = '';

    public $keywords = '';

    public $website = 'website';

    public function actionIndex(){
        $model = ProgramsCats::find()->asArray()->all();

        return $this->render('programms', ['model' => $model]);
    }
}