<?php

    return [
        'id' => 'school-test-web',
        'basePath' => realpath (__DIR__.'/../'),
        'sourceLanguage' => 'en',
        'language' => 'ru',
        'bootstrap' => [
            'debug',
        ],
        'components' => [
            'urlManager' => [
                'enablePrettyUrl' => true,
                'showScriptName' => false,
            ],
            'request' => [
                'cookieValidationKey' => 'xvFBNRx8PX9naNFj',
            ],
        ],
        'modules' => [
            'debug' => 'yii\debug\Module',
        ],
    ];