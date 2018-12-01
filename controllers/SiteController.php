<?php

namespace app\controllers;

use Yii;
use yii\web\Response;
use yii\filters\{AccessControl, VerbFilter};

class SiteController extends AppController
{
    /**
     * Homepage.
     * @return view
     */
    public function actionIndex()
    {
        $this->setMetaTag(
            'Пенный дворик', // title
            'пенный, дворик, пиво, закуски, сидр, ликер, квас, лимонад', // keywords
            'Широкий ассортимент пивной продукции.' // description
        );
        return $this->render('index');
    }

    /**
     * Errorpage
     * @return view
     */
    public function actionError()
    {
        // шаблон исключения
        // throw new \yii\web\HttpException(404, "Такой страницы не существует!");

        // Layout page
        $this->layout = "default";
        $name = "Что-то пошло не так!";
        $message = "Мы над этим работаем!";


        $statusCode = Yii::$app->errorHandler->exception->statusCode;
        if ($statusCode == 404) {
            $name = 'Страница не найдена!';
            $message = "Мы всё обыскали, но не нашли!";
        }

        $this->setMetaTag( $name );

        return $this->render('error', compact('statusCode', 'name', 'message'));
    }

}
