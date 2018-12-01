<?php

namespace app\controllers;

use Yii;
use yii\web\{Response, Request};
use yii\filters\{AccessControl, VerbFilter};
use app\models\form\SecretKeyForm;

class AdminController extends AppController
{
    public $layout = "admin";

    /**
     * Homepage
     * @return view
     */
    public function actionIndex()
    {
        $this->layout = "default";
        $this->view->title = "Вход | Админка";

        $model = new SecretKeyForm();
        // if ( $model->load(Yii::$app->request->post() && $model->validate()) ) {
        //     Yii::$app->session->setFlash('success', 'Its done');
        // }

        $model->pass = '';
        return $this->render('index', [
            'model' => $model,
        ]);
    }

}
