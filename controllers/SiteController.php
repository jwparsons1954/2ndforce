<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\User;
use app\models\ContactForm;
use app\models\ResetPasswordForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout','reunion'],
                'rules' => [
                    [
                        'actions' => ['logout','reunion'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    //'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        If (\Yii::$app->request->isPost) {
   		switch (\Yii::$app->request->post('login')) {
		      case 'submit_1':
		      
			      if ($model->load(Yii::$app->request->post()) && $model->login()) {
			            return $this->goBack();
			        }else{
			        	return $this->render('login', [
				            'model' => $model,
				        ]);
			        }	
			
		      case 'submit_2':
		      	     $user = User::findByUsername($_POST['LoginForm']['username']);
		      	     if($user){
		                $reset_password_token = Yii::$app->security->generateRandomString() . '_' . time();
		                $user->password_reset_token = $reset_password_token;
		                $user->password_reset_expires_at= date("Y-m-d H:i:s", strtotime("+30 minutes"));
		                if($user->save()){
		                    $url = USER::BASEURL.$reset_password_token;
		                    $sendMail = Yii::$app->mailer->compose('layouts/Passwordreset', ['url' => $url])
		                    ->setFrom('admin@2nd-force-recon.com')
		                    ->setTo($_POST['LoginForm']['username'])
		                    ->setSubject("Reset Your Password")
		                    ->send();
		                    if($sendMail){
		                        Yii::$app->session->setFlash('success', 'An email has neen sent to your email address with a link to reset your password');
		                    }else{
		                        Yii::$app->session->setFlash('error', 'Something went wrong, try again');
		                    }
				}else{
					Yii::$app->session->setFlash('error', 'Something went wrong, try again');
				}	
		            }else{
		                Yii::$app->session->setFlash('error', 'Sorry, that email address is not in the database');
		            }	
			
		}
	}
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
	public function actionTest()
    {
        return $this->render('test');
    }
	public function actionReunion()
    {
        return $this->render('reunion');
    }

    public function actionCheckresetpasswordkey($key){
        $user = User::findOne(['password_reset_token' => $key]);
        if($user){
            if(strtotime($user->password_reset_expires_at) < strtotime(date("Y-m-d H:i:s"))){
                Yii::$app->session->setFlash('error', 'Reset Password token expired,try again');
                $model = new LoginForm();
                return $this->render('login', [
                    'model' => $model,
                ]);
            }
         
            $user->password_reset_token = null;
            $user->password_reset_expires_at = null;
            $user->update();
            $model = new ResetPasswordForm();
            return $this->render('resetpassword',[
                'model' => $model,
                'id' => $user->id
            ]);
        }else{
            Yii::$app->session->setFlash('error', 'Invalid Password reset key');
            $model = new LoginForm();
            return $this->render('login', [
                'model' => $model,
            ]);
        }

    }
    public function actionResetpassword(){
        if (Yii::$app->request->post()) {
         //   print_r($_POST);exit;
            $user = User::findOne(['id' => $_POST['id']]);
            $user->password = md5($_POST['ResetPasswordForm']['password']);
            if($user->update()){
                Yii::$app->session->setFlash('success', 'Password changed successfully');
                $model = new ResetPasswordForm();
                return $this->render('resetpassword', [
                    'model' => $model,
                    'id' => $user->id
                ]);
            }
        }
    }
}
