<?php

namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\CallMeBackForm;
use frontend\models\CustomerCases;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class SiteController extends Controller {

  /**
   * @inheritdoc
   */
  public function behaviors() {
    return [
      'access' => [
        'class' => AccessControl::className(),
        'only'  => ['logout'],
        'rules' => [
          [
            'actions' => ['logout'],
            'allow'   => true,
            'roles'   => ['@'],
          ],
        ],
      ],
      'verbs' => [
        'class' => VerbFilter::className(),
        'actions' => [
          'logout' => ['post'],
        ],
      ],
    ];
  }

  /**
   * @inheritdoc
   */
  public function actions() {
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

  public function actionIndex() {
    return $this->render('index');
  }
  
  public function actionPricingPlans() {
    return $this->render('pricing-plans');
  }

  public function actionLogin() {
    $result = NULL;
    if (!\Yii::$app->user->isGuest) {
      $result = $this->goHome();
    }
    else {
      $model = new LoginForm();
      if ($model->load(Yii::$app->request->post()) && $model->login()) {
        $result = $this->goBack();
      } 
      else {
        $result = $this->render('login', [
          'model' => $model,
        ]);
      }
    }
    return $result;
  }

  public function actionLogout() {
    Yii::$app->user->logout();

    return $this->goHome();
  }

  public function actionContact() {
    $model = new ContactForm();
	//ajax request
    if( $_SERVER['REQUEST_METHOD'] == 'POST' )  {
        Yii::$app->response->format = 'json';
        
        if(($model->load(Yii::$app->request->post()))&&($model->validate())){
          if ($model->sendEmail(Yii::$app->params['contactEmail'])) {
                return [
                    'message' => 'Thank you. We will respond to you as soon as possible.',
                    'status'  => 'success'
                ];
          }
          else {
            return [
                'message' => 'There was an error sending email.',
                'status'  => 'error'
            ];
          }
        }
        else {
            return [
                'message' => 'There was an error during processing your inputs.',
                'status'  => 'error'
            ];
        }
    //otherwise show form
    }else{
        return $this->render('contact', [
          'model' => $model,
        ]);
    }
  }

  public function actionCallmeback() {
    $model = new CallMeBackForm();
	Yii::$app->response->format = 'json';
    if ($model->load(Yii::$app->request->post()) && $model->validate()) {
      if ($model->sendEmail(Yii::$app->params['contactEmail'])) {
            return [
                'message' => 'Thank you. We will respond to you as soon as possible.',
                'status'  => 'success'
            ];
      } 
      else {
        return [
            'message' => 'There was an error during request.',
            'status'  => 'error'
        ];
      }
    }
    else {
        return [
            'message' => 'There was an error during processing your inputs.',
            'status'  => 'error'
        ];
    }
  }
  
  public function actionTestimonials() {
    $model = new CustomerCases();
    return $this->render('testimonials', [
      'model' => $model,
    ]);
  }

  public function actionAbout() {
    return $this->render('about');
  }

  public function actionSignup() {
    $model = new SignupForm();
	Yii::$app->response->format = 'json';
    if ($model->load(Yii::$app->request->post()) && $model->validate()) {
      if ($model->sendEmail(Yii::$app->params['contactEmail'])) {
            return [
                'message' => 'Thank you for your interest. We will respond to you as soon as possible.',
                'status'  => 'success'
            ];
      } 
      else {
        return [
            'message' => 'There was an error during request.',
            'status'  => 'error'
        ];
      }
    }
    else {
        return [
            'message' => 'There was an error during processing your inputs.',
            'status'  => 'error'
        ];
    }

  }

  public function actionRequestPasswordReset() {
    $result = NULL;
    $model = new PasswordResetRequestForm();
    if ($model->load(Yii::$app->request->post()) && $model->validate()) {
      if ($model->sendEmail()) {
        Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');
        $result = $this->goHome();
      } 
      else {
        Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
      }
    }

    if(is_null($result)) {
      $result = $this->render('requestPasswordResetToken', [
          'model' => $model,
      ]);
    }
    return $result;
  }

  public function actionResetPassword($token) {
    $result = NULL;
    try {
      $model = new ResetPasswordForm($token);
    } 
    catch (InvalidParamException $e) {
      throw new BadRequestHttpException($e->getMessage());
    }

    if($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
      Yii::$app->getSession()->setFlash('success', 'New password was saved.');
      $result = $this->goHome();
    }

    if(is_null($result)) {
      $result = $this->render('resetPassword', [
        'model' => $model,
      ]);
    }
    return $result;
  }

}
