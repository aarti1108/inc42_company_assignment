<?php

namespace api\modules\v1\controllers;

use Yii;
use yii\rest\ActiveController;

class ApiController extends ActiveController
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        // unset all the default actions
        $actions = [];
        $action['options'] = parent::actions()['options'];
        return $action;
    }

    public function afterAction($action, $result)
    {
        $result = $this->serializeData($result);
        return [
            'data' => $result
        ];
    }
}
