<?php

namespace api\modules\v1\controllers;

use Yii;
//use backend\models\ConsumerAppNeedHelp;
use common\helpers\ArrayHelper;
use yii\rest\ActiveController;

/**
 * NeedHelpController represents the Need Help API.
 *
 * @author Aarti Pawar <aarti@pharmeasy.in>
 */
class NeedHelpStepController extends ActiveController
{
    /**
     * {@inheritdoc}
     */
    public $modelClass = '';

    /**
     * Get need help main menu to be shown in consumer app
     *
     * @return mixed
     */
    public function actionIndex() {
        return ConsumerAppNeedHelp::getMainMenu();
    }

    /**
     * Get detailed steps for each option selected
     *
     * @param  integer $id  Option ID
     * @return mixed
     */
    public function actionView($id) {
        return ConsumerAppNeedHelp::getSteps($id);
    }
}
