<?php
/**
 * Created by PhpStorm.
 * User: 2000
 * Date: 22.09.2020
 * Time: 8:36
 */

namespace frontend\modules\search\controllers;

use frontend\modules\search\form\SearchQuery;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $SearchQuery = new SearchQuery();

        if ($SearchQuery->load(\Yii::$app->request->post()) && $SearchQuery->validate()) {

            $searchWord = $SearchQuery->query;

            if ($searchWord) {
                return $this->redirect('/' . \Yii::$app->params['mainControllers'] . '/' . $searchWord);
            }

        }

        echo 'tet';

    }
}