<?php

namespace api\modules\v1\controllers;

use Yii;
use yii\rest\ActiveController;

/**
 * StaticPageController represents the static-pages API. It shows app related data.
 *
 * @author Aarti Pawar <aarti@pharmeasy.in>
 */
class StaticPageController extends ActiveController
{

    /**
     * Get the static page data to show on a app.
     *
     * @return array
     */
    public function actionIndex()
    {
        return "Success";
    }
}
