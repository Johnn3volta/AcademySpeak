<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
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
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin(){
        if(!Yii::$app->user->isGuest){
            return $this->goHome();
        }

        $model = new LoginForm();
        if($model->load(Yii::$app->request->post()) && $model->login()){
            return $this->goBack();
        }else{
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout(){
        Yii::$app->user->logout();

        return $this->goHome();
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

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup(){
        $model = new SignupForm();
        if($model->load(Yii::$app->request->post())){
            if($user = $model->signup()){
                if(Yii::$app->getUser()->login($user)){
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset(){
        $model = new PasswordResetRequestForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()){
            if($model->sendEmail()){
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            }else{
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     *
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token){
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()){
            Yii::$app->session->setFlash('success', 'Новый пароль сохранен.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
