<?php

use yii\base\InvalidConfigException;
use yii\web\Application;

define('YII_DEBUG', true);
require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
$config = require(__DIR__ . '/../config/web.php');
try {
    $app = new Application($config);
} catch (InvalidConfigException $e) {
}
$app->run();
