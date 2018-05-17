<?php
namespace frontend\controllers;

use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\ContactForm;
use yii\helpers\Url;

/**
 * Site controller
 */
class SiteController extends MetaController{

    public $description = '';
    public $keywords = '';
    public $title = '';
    public $website = 'website';

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
                'view' => '@frontend/views/site/custom-error.php'
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
        $this->description = 'hello friend my friend';
        $this->title = 'Главная страница';
        $this->keywords = '';
        $this->setMeta($this->title, $this->description);
        return $this->render('index');
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact(){
        $this->description = 'Контактная информация и форма обратной связи';
        $this->title = 'Обратная связь | ' . Yii::$app->name;
        $this->setMeta($this->title, $this->description);
        $this->view->params['breadcrumbs'][] = ['label' => 'Обратная связь', 'url' =>Url::current()];

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
        return $this->render('about');
    }

}
