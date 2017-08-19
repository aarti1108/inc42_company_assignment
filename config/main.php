<?php

$params = array_merge(
    require(__DIR__.'/../../common/config/params.php'),
    require(__DIR__.'/../../common/config/params-local.php')
);

return [
    'id' => 'api',
    'name' => 'yii.api',
    'basePath' => dirname(__DIR__),
    ],
    'params' => $params,
];
