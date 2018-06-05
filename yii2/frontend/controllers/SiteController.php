<?php
namespace frontend\controllers;

use frontend\models\CallBackForm;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\ContactForm;
use yii\helpers\Url;

/**
 * Site controller
 */
class SiteController extends MetaController{



    /**
     * {@inheritdoc}
     */
    public function behaviors(){
        return [
            'access' => [
                'class' => AccessControl::class,
                'only'  => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow'   => true,
                        'roles'   => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow'   => true,
                        'roles'   => ['@'],
                    ],
                ],
            ],
            'verbs'  => [
                'class'   => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions(){
        return [
            'error'   => [
                'class' => 'yii\web\ErrorAction',
                'view'  => '@frontend/views/site/custom-error.php',
            ],
            'captcha' => [
                'class'           => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex(){
        $this->setMeta('Логопедические услуги в МОскве и московской области', 'Студия речи ! Логопедические услуги в Москве и московской области по доступным ценам');

        return $this->render('index');
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact(){

        $this->setMeta('Форма обратной связи | ' . Yii::$app->name, 'Контактная информация, форма обратной связи');
        $this->view->params['breadcrumbs'][] = [
            'label' => 'Обратная связь',
        ];

        $model = new ContactForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()){
            if($model->sendEmail(Yii::$app->params['adminEmail'])){
                Yii::$app->session->setFlash('success', 'Ваше сообщение успешно отправленно');
            }else{
                Yii::$app->session->setFlash('error', 'Ваше сообщение не отправленно.');
            }

            return $this->refresh();
        }else{
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout(){
        $this->view->params['breadcrumbs'][] = ['label' => 'О нас'];
        $this->setMeta('О нас','О нас');
        return $this->render('about');
    }

    public function actionPriceList(){
        $this->view->params['breadcrumbs'][] = ['label' => 'Прайс-лист'];
        $this->setMeta('Прайс-лист по окозанию логопедических услуг','Прайс-лист по окозанию логопедических услуг для детей и взрослых');
        return $this->render('price-list');
    }

    public function actionDiagnostika(){
        $this->view->params['breadcrumbs'][] = ['label' => 'Диферинциальная диагностика'];
        $this->setMeta('Диферинциальная диагностика для детей и взрослых','Диферинциальная диагностика для детей и взрослых','','article');
        return $this->render('diagnostika');
    }

    public function actionCallBack(){
        $callback = new CallBackForm();
        if(Yii::$app->request->isAjax){
            if($callback->load(Yii::$app->request->post()) && $callback->sendCallBack(Yii::$app->params['adminEmail'])){
              return "<div class='text-center text-success' style='padding: 25px 0; font-size:25px'>Ваша заявка принята !</div>";
            }else return false;
        }else return "<div class='text-center text-danger' style='padding: 25px 0; font-size:25px'>Упс ! <br>Чт-ото пошло не так. <br> Попробуйте позже .</div>";
    }
}
