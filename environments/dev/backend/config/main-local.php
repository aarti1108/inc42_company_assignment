<?php

return [
    'modules' => [
        'debug' => 'yii\debug\Module'
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
        ],
    ]
];
