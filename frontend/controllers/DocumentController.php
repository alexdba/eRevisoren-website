<?php

namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\GoogleDocReader;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Document controller
 * for FAQ,policies, etc.
 */
class DocumentController extends Controller {

  /**
   * @inheritdoc
   */
  public function behaviors() {
    return [
      'access' => [
        'class' => AccessControl::className(),
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
    ];
  }

  public function actionFaq() {
  	$model = new GoogleDocReader();
    return $this->render('faq', [
          'model' => $model,
        ]);
  }
  public function actionTermsAndConditions() {
  	$model = new GoogleDocReader();
    return $this->render('terms-and-conditions', [
          'model' => $model,
        ]);
  }
  public function actionCancellationAndReturnPolicies() {
  	$model = new GoogleDocReader();
    return $this->render('cancellation-and-return-policies', [
          'model' => $model,
        ]);
  }
  public function actionPrivacyPolicy() {
  	$model = new GoogleDocReader();
    return $this->render('privacy-policy', [
          'model' => $model,
        ]);
  }
  public function actionCareers() {
  	$model = new GoogleDocReader();
    return $this->render('careers', [
          'model' => $model,
        ]);
  }
  
  public function actionSecurity() {
  	$model = new GoogleDocReader();
    return $this->render('security', [
          'model' => $model,
        ]);
  }
  
  public function actionForAccountants() {
  	$model = new GoogleDocReader();
    return $this->render('for-accountants', [
          'model' => $model,
        ]);
  }


}
