<?php
return [
    'i18n'=>array(
                'translations' => array(
                    'app*'=>array(
                        'class' => 'yii\i18n\PhpMessageSource',
                        'basePath' => "@frontend/messages",
                        'sourceLanguage' => 'en_US',
                        'fileMap' => array(
                            'app'=>'app.php'                    
                        )
                    ),
                    'yii'=>array(
                        'class' => 'yii\i18n\PhpMessageSource',
                        'basePath' => "@frontend/messages",
                        'sourceLanguage' => 'en_US',
                        'fileMap' => array(
                            'yii'=>'yii.php'    
                        )
                    )
                )
            )
];
