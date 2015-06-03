<?php
$params = array_merge(
  require(__DIR__ . '/../../common/config/params.php'),
  require(__DIR__ . '/../../common/config/params-local.php'),
  require(__DIR__ . '/params.php'),
  require(__DIR__ . '/params-local.php'),
  require(__DIR__ . '/i18n.php')
);

return [
  'id'                  => 'app-practical-frontend',
  'basePath'            => dirname(__DIR__),
  'bootstrap'           => ['log'],
  'controllerNamespace' => 'frontend\controllers',
  'components'          => [
    'user' => [
      'identityClass'   => 'common\models\User',
      'enableAutoLogin' => true,
    ],
    'log' => [
      'traceLevel' => YII_DEBUG ? 3 : 0,
      'targets'    => [
        [
          'class'   => 'yii\log\FileTarget',
          'levels'  => ['error', 'warning', 'info'],
          'logVars' => [null],
          'except'  => [
            'yii\\db\\Command::query',
            'yii\\db\\Connection::open',
            'yii\\db\\Connection::close',
            'yii\\web\\Session::open',
          ]
        ],
      ],
    ],
    'errorHandler' => [
      'errorAction' => 'site/error',
    ]
  ],
  'language' => 'da-DK',
  'sourceLanguage' => 'en-US',
  'params' => $params,
];
