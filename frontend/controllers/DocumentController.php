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

  public function actionLaw() {
  	$model = new GoogleDocReader();
    return $this->render('law', [
          'model' => $model,
        ]);
  }
  public function actionCookiePolicy() {
  	$model = new GoogleDocReader();
    return $this->render('cookie-policy', [
          'model' => $model,
        ]);
  }

}
