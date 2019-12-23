<?php

    return [
        'id' => 'school-test-web',
        'basePath' => realpath (__DIR__.'/../'),
        'bootstrap' => [
            'debug',
        ],
        'components' => [
            'urlManager' => [
                'enablePrettyUrl' => true,
                'showScriptName' => false,
                'class' => 'codemix\localeurls\UrlManager',
                'languages' => ['ru', 'en'],
                'enableDefaultLanguageUrlCode' => true,
            ],
            'request' => [
                'cookieValidationKey' => 'xvFBNRx8PX9naNFj',
            ],
        ],
        'modules' => [
            'debug' => 'yii\debug\Module',
        ],
    ];