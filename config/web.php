<?php

return [
    'id' => 'school-web',
    'basePath' => realpath(__DIR__ . '/../'),
    'bootstrap' => [
        'debug'
    ],
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class' => 'codemix\localeurls\UrlManager',
            'languages' => ['ru', 'en'],
            'enableDefaultLanguageUrlCode' => true
        ],
        'request' => [
            'cookieValidationKey' => 'm1kd4a7c25xs8n4b7cx3n4df0'
        ]
    ],
    'modules' => [
        'debug' => 'yii\debug\Module'
    ]
];
