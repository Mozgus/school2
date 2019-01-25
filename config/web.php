<?php

return [
    'id' => 'school-web',
    'basePath' => realpath(__DIR__ . '/../'),
    'language' => 'ru',
    'bootstrap' => [
        'debug'
    ],
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false
        ],
        'request'=>[
            'cookieValidationKey'=>'m1kd4a7c25xs8n4b7cx3n4df0'
        ]
    ],
    'modules' => [
        'debug' => 'yii\debug\Module'
    ]
];
