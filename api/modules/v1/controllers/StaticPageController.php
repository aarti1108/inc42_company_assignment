<?php

namespace api\modules\v1\controllers;

use Yii;

/**
 * StaticPageController represents the static-pages API. It shows app related data.
 *
 * @author Aarti Pawar <aarti@pharmeasy.in>
 */
class StaticPageController extends ApiController
{
    /**
     * {@inheritdoc}
     */
    public $modelClass = 'common\models\User';

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
