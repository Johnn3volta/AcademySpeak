<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller{

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
        $this->title = 'то главная страница мать твою )';
        $this->keywords = '';
        $this->getView()->title = $this->title;
        $this->getView()->registerLinkTag(['rel' => 'canonical','href' => 'http://'.Yii::$app->request->serverName]);
        $this->getView()->registerMetaTag(['name' => 'description','content' => $this->description],'description');
        $this->getView()->registerMetaTag(['name' => 'keywords','content' => $this->keywords != '' ? $this->keywords : ''],'keywords');
        $this->getView()->registerMetaTag(['property' => 'og:url','content' => 'http://'.Yii::$app->request->serverName]);
        $this->getView()->registerMetaTag(['property' => 'og:title','content' => $this->title]);
        $this->getView()->registerMetaTag(['property' => 'og:type','content' => $this->website]);
        return $this->render('index');
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact(){
        $this->description = 'Контактная информация и форма обратной связи';
        $this->title = 'Обратная связь | '. Yii::$app->name;
        $this->keywords = '';
        $this->getView()->title = $this->title;
        $this->getView()->registerLinkTag(['rel' => 'canonical','href' => 'http://'.Yii::$app->request->serverName.Yii::$app->request->url]);
        $this->getView()->registerMetaTag(['name' => 'description','content' => $this->description],'description');
        $this->getView()->registerMetaTag(['name' => 'keywords','content' => $this->keywords != '' ? $this->keywords : ''],'keywords');
        $this->getView()->registerMetaTag(['property' => 'og:url','content' => 'http://'.Yii::$app->request->serverName.Yii::$app->request->url]);
        $this->getView()->registerMetaTag(['property' => 'og:title','content' => $this->title]);
        $this->getView()->registerMetaTag(['property' => 'og:type','content' => $this->website]);
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
