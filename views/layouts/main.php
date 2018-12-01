<?php

/* @var $this \yii\web\View */
/* @var $content string */

// use app\widgets\Alert;
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!--Модальные окна-->
<div class="modalBody">
    <div class="modal requestCall">
        <div class="close">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46px" height="46px" viewBox="0 0 46 46" enable-background="new 0 0 46 46" xml:space="preserve">
                <polygon points="46,4.6 41.4,0 23,18.4 4.6,0 0,4.6 18.4,23 0,41.4 4.6,46 23,27.6 41.4,46 46,41.4 27.6,23"/>
            </svg>
        </div>
        <div class="title">ЗАКАЗАТЬ ЗВОНОК</div>
        <form>
            <input type="text" name="Name" placeholder="ИМЯ" />
            <input type="phone" name="Phone" placeholder="ТЕЛЕФОН" />
            <input type="email" name="Email" placeholder="E-MAIL" />
        </form>
        <div class="button">ОТПРАВИТЬ</div>
        <div class="data">
            <div class="check">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="11px" viewBox="0 0 14 11" enable-background="new 0 0 14 11" xml:space="preserve">
                    <path d="M13.747,1.518l-1.229-1.259C12.35,0.086,12.146,0,11.905,0c-0.241,0-0.446,0.086-0.615,0.259L5.365,6.343L2.71,3.611
                        C2.541,3.438,2.336,3.352,2.095,3.352c-0.241,0-0.445,0.087-0.614,0.259L0.253,4.87C0.084,5.043,0,5.253,0,5.5
                        s0.084,0.457,0.253,0.63l3.27,3.352l1.229,1.26C4.919,10.914,5.124,11,5.365,11c0.241,0,0.446-0.086,0.615-0.259l1.228-1.26
                        l6.54-6.704C13.916,2.604,14,2.395,14,2.148S13.916,1.691,13.747,1.518L13.747,1.518z M13.747,1.518"/>
                </svg>
            </div>
            <span>Я даю своё <u>согласие</u> на обработку персональных данных.</span>
        </div>
    </div>
</div>

<!--Навигация-->
<?php
	$topArrow = true;
	include "_navBar.php";
?>
<!--endNav-->

<!--Меню-->
<div class="paddingCont bgMenu">
    <div class="menu widthCont"></div>
</div>

<?= $content ?>

<!--Подвал-->
<div class="paddingCont bgFooter">
    <div class="footer widthCont">
        <div class="arrowUp">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22px" height="14px" viewBox="0 0 22 14" enable-background="new 0 0 22 14" xml:space="preserve">
                <polygon points="0,11.352 2.566,14 11,5.297 19.434,14 22,11.352 11,0"/>
            </svg>
        </div> <!--endArrowUp-->
        <?php $topArrow = false; include "_navBar.php"; ?>
        <div class="cop">&copy; ПЕННЫЙ ДВОРИК. Все права защищены. 2018г.</div>
    </div>
</div>
<!--endFooter-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
