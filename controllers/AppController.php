<?php

namespace app\controllers;

use yii\web\Controller;

/**
 * Perent
 */
class AppController extends Controller {
    protected function setMetaTag($title = null, $keywords = null, $desc = null) {
        $this->view->title = "$title";
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>"$keywords"]);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>"$desc"]);
    }

    function debug($arr) {
        echo '<pre>' . print_r($arr, true) . '</pre>';
    }
}

?>
