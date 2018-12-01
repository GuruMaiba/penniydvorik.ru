<?php

use yii\helpers\Html;

$this->registerCssFile('@web/css/admin.css');

debug($model);
?>

<div class="positionAuth">
    <div class="auth">
        <!-- <div class="login">
            <?php if (Yii::$app->user->isGuest) : ?>
                Гость
            <?php endif; ?>
            <?php if (!Yii::$app->user->isGuest) : ?>
                <?php Yii::$app->user->identity->username ?>
            <?php endif; ?>
        </div> -->
        <img src="<?= Yii::getAlias('@web/css/img/logo.png'); ?>" alt="Пенный дворик">
        <label for="pass">Введите секретный ключ:</label>
        <input id="pass" type="password" name="pass" value="">
        <div class="signIn">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
            <path d="M1420 4910 c5 -3 -6 -12 -25 -19 -19 -7 -39 -10 -44 -6 -5 3 -13 0 -17 -6 -4 -8 -3 -9 4 -5 25 15 10 -3 -15 -20 -27 -17 -28 -17 -13 2 14 18 14 18 -5 5 -46 -34 -113 -105 -109 -116 3 -6 -3 -18 -12 -26 -12 -9 -15 -10 -10 -1 10 16 -4 16 -18 -1 -14 -17 -134 -50 -148 -41 -6 4 -8 3 -5 -3 3 -5 -19 -22 -49 -36 -31 -15 -52 -22 -49 -16 6 8 2 8 -13 0 -12 -6 -24 -17 -28 -24 -5 -7 0 -6 12 3 18 14 18 14 5 -3 -8 -10 -20 -16 -26 -13 -16 6 -70 -50 -70 -72 0 -9 -5 -17 -12 -17 -6 0 -15 -4 -20 -9 -5 -5 -2 -6 6 -1 9 5 12 3 9 -6 -3 -8 -10 -13 -16 -12 -6 2 -9 -4 -6 -12 3 -7 1 -22 -5 -32 -8 -14 -11 -15 -11 -3 -1 9 -4 7 -10 -6 -12 -29 5 -209 25 -264 8 -24 13 -50 10 -58 -2 -7 -1 -11 4 -8 5 3 12 -1 15 -10 9 -22 8 -26 -6 -18 -7 4 -8 3 -4 -5 4 -6 11 -9 16 -6 11 7 22 -24 13 -37 -4 -7 -1 -8 7 -3 9 6 12 4 8 -6 -3 -9 3 -26 14 -40 11 -13 16 -18 12 -10 -5 10 -3 12 5 7 7 -5 10 -14 7 -21 -3 -8 3 -19 12 -27 16 -12 16 -11 2 7 -14 19 -14 19 3 6 10 -8 16 -20 13 -27 -2 -7 5 -20 17 -31 22 -18 22 -18 7 2 -8 12 2 3 22 -20 21 -22 36 -45 33 -51 -2 -7 11 -25 28 -40 l32 -29 -30 35 -30 35 37 -34 c20 -19 36 -39 35 -45 -1 -6 5 -10 14 -8 9 1 24 -8 35 -20 l19 -23 -24 20 c-14 11 -21 15 -17 8 3 -7 21 -22 39 -35 26 -18 29 -19 17 -3 -15 18 -14 18 13 1 25 -17 40 -35 15 -20 -7 4 -8 3 -4 -4 4 -6 14 -8 23 -5 12 5 14 3 8 -7 -5 -8 -4 -11 3 -6 11 7 83 -23 78 -33 -2 -3 10 -7 26 -7 17 -1 35 -9 40 -18 5 -9 14 -16 21 -16 7 0 6 4 -3 10 -10 7 -11 10 -2 10 7 0 15 -7 18 -15 4 -8 10 -15 16 -15 5 0 6 6 2 13 -4 6 2 4 13 -5 22 -20 58 -25 47 -6 -5 8 -2 9 10 5 10 -4 22 -7 27 -7 6 0 7 -4 4 -10 -4 -6 27 -10 87 -10 59 0 88 4 79 9 -10 7 0 11 35 16 27 4 58 9 69 11 16 4 17 3 5 -5 -12 -9 -12 -11 -1 -11 8 0 19 6 25 14 12 15 99 39 90 25 -10 -17 9 -9 22 9 12 16 14 15 36 -8 18 -19 18 -20 2 -7 -11 9 -25 17 -30 17 -4 0 3 -8 16 -17 14 -10 29 -17 34 -15 13 4 36 -19 29 -31 -3 -5 -1 -7 5 -3 14 9 63 -14 55 -27 -3 -6 -1 -7 4 -4 6 4 33 4 59 0 43 -6 46 -8 24 -15 -14 -4 0 -5 35 -2 33 3 63 11 66 16 4 6 24 17 45 24 47 16 47 16 39 4 -3 -6 1 -7 9 -4 9 3 14 10 11 14 -7 11 24 22 37 13 6 -3 8 -2 5 4 -4 6 5 15 19 22 17 8 23 8 19 0 -9 -13 42 13 70 36 11 9 14 14 8 10 -24 -12 -13 3 15 21 26 17 27 17 12 -1 -10 -12 -1 -9 27 9 24 16 47 25 54 20 8 -5 9 -3 5 5 -5 7 -15 10 -25 6 -11 -4 -13 -3 -5 5 13 13 44 3 44 -16 0 -8 5 -14 11 -14 5 0 8 4 5 9 -4 5 3 7 15 4 11 -3 23 -12 26 -19 3 -8 13 -14 22 -14 14 0 14 2 1 10 -10 7 -1 8 30 4 25 -3 71 -1 102 4 32 5 55 5 52 0 -3 -4 2 -8 11 -8 9 0 14 4 10 9 -3 5 4 12 15 15 11 3 30 9 41 12 14 4 19 2 15 -5 -4 -6 -3 -11 2 -11 6 0 12 6 15 13 3 7 21 18 41 24 23 7 34 8 30 1 -9 -14 39 1 51 17 6 6 21 15 34 20 18 5 22 4 17 -6 -4 -8 -2 -7 6 2 15 18 62 33 51 16 -4 -7 0 -8 11 -4 10 4 25 7 34 8 14 0 13 2 -3 8 -17 7 -17 8 7 13 15 3 25 1 22 -3 -3 -5 2 -9 11 -9 9 0 14 4 11 9 -3 5 1 11 9 15 8 3 15 1 15 -4 0 -6 8 -10 18 -10 13 0 14 2 4 9 -10 6 -7 10 12 13 14 3 23 1 20 -3 -3 -5 25 -8 63 -8 52 1 61 3 38 9 -30 8 -30 8 -3 9 15 0 34 -6 43 -16 11 -11 19 -13 23 -5 5 7 31 0 77 -20 41 -17 97 -33 135 -36 l65 -7 -45 -6 -45 -6 48 -1 c33 -2 49 2 53 12 3 8 14 16 25 19 12 3 17 1 12 -5 -8 -15 16 -1 44 25 12 11 20 24 17 28 -3 5 2 22 11 39 56 108 17 443 -74 644 -17 37 -29 72 -26 76 3 5 0 12 -6 16 -8 5 -9 3 -4 -6 6 -9 4 -11 -4 -6 -7 5 -10 14 -7 21 4 11 -52 72 -99 106 -19 13 -19 13 -5 -5 15 -19 14 -19 -12 -2 -25 17 -42 36 -18 21 6 -3 10 -4 10 -1 0 3 -10 10 -21 17 -15 7 -19 8 -15 0 5 -7 1 -9 -8 -5 -9 3 -13 10 -10 15 3 5 -1 7 -8 4 -7 -3 -35 3 -62 14 -27 10 -43 20 -36 23 7 2 -4 4 -26 4 -21 0 -82 6 -134 13 -105 15 -254 9 -398 -14 -101 -17 -219 -19 -279 -5 -69 16 -154 51 -148 61 4 5 -2 6 -11 2 -12 -4 -15 -3 -10 5 5 8 1 10 -10 5 -12 -4 -15 -3 -10 5 5 8 1 10 -10 5 -12 -4 -15 -3 -10 5 5 8 1 10 -10 5 -12 -4 -15 -3 -10 5 5 8 1 10 -10 5 -13 -5 -15 -3 -9 7 5 8 4 11 -3 6 -6 -4 -23 -3 -39 0 -21 6 -24 9 -10 13 9 4 -10 6 -43 6 -33 0 -52 -3 -43 -7 17 -6 17 -7 0 -7 -10 -1 -45 -15 -78 -32 -34 -16 -58 -25 -54 -19 5 9 1 9 -16 0 -31 -16 -39 -25 -16 -17 10 4 16 3 13 -2 -13 -20 -121 -43 -210 -44 -82 0 -101 3 -143 25 -30 15 -47 31 -47 41 1 9 -2 14 -7 12 -4 -3 -13 3 -19 14 -6 12 -20 26 -31 32 -16 8 -20 8 -15 0 5 -8 0 -8 -18 0 -14 7 -23 16 -19 22 3 6 1 7 -5 3 -6 -3 -30 -2 -54 3 -49 12 -183 20 -168 11z m10 -220 c-11 -7 -3 -10 30 -10 35 0 42 3 30 11 -11 8 -8 9 15 4 17 -3 36 -13 43 -22 7 -11 12 -12 12 -4 0 7 5 9 10 6 6 -4 8 -10 5 -15 -3 -4 2 -11 11 -14 9 -4 13 -2 8 5 -9 16 25 -4 56 -33 14 -13 19 -18 11 -13 -11 7 -13 7 -7 -2 4 -7 16 -18 28 -24 15 -8 19 -8 14 0 -11 18 47 -7 62 -27 11 -15 14 -15 22 -2 8 12 10 12 16 -3 3 -9 16 -17 28 -17 17 0 19 2 6 11 -11 8 -8 9 15 3 39 -9 54 -9 88 -1 19 5 26 4 22 -3 -3 -6 3 -10 15 -10 12 0 18 5 15 10 -3 6 -5 10 -3 10 2 0 18 4 36 9 20 6 30 6 27 0 -4 -5 -2 -9 3 -9 6 0 12 6 15 13 6 16 145 63 210 72 36 5 55 2 72 -9 27 -18 60 -23 35 -5 -11 7 -6 8 20 3 52 -10 80 -22 80 -34 0 -6 5 -8 10 -5 6 3 10 1 10 -5 0 -6 8 -9 18 -6 9 3 46 -3 82 -13 46 -13 59 -20 45 -24 -11 -3 7 -4 40 -1 42 3 54 1 40 -5 -15 -7 1 -10 55 -10 56 -1 71 2 60 10 -12 8 -9 10 13 6 15 -2 30 0 33 4 3 5 10 9 15 9 6 0 7 -4 4 -10 -4 -6 8 -10 30 -10 20 0 34 4 31 9 -6 9 26 21 54 21 13 0 13 -1 0 -10 -12 -8 -11 -10 8 -10 12 0 22 4 22 9 0 5 9 11 20 14 11 3 20 1 20 -4 0 -5 12 -9 28 -8 l27 1 -25 9 c-23 8 -22 8 8 5 17 -1 32 1 32 6 0 4 8 8 18 8 14 0 15 -2 2 -10 -11 -7 5 -10 53 -10 37 0 67 4 67 9 0 13 104 -9 113 -25 5 -9 17 -12 33 -8 17 4 24 2 24 -8 0 -15 77 -56 94 -50 14 5 116 -102 111 -116 -3 -7 0 -10 5 -7 6 4 22 -19 35 -50 25 -56 34 -94 15 -65 -5 8 -10 11 -10 6 0 -5 8 -18 17 -28 11 -12 17 -37 17 -73 1 -30 7 -60 14 -67 14 -14 16 -84 2 -93 -5 -3 -10 -16 -9 -28 1 -20 2 -20 9 3 7 21 8 22 9 5 1 -11 -6 -31 -15 -43 -21 -30 -66 -29 -151 4 -159 61 -168 63 -246 64 -52 0 -97 -7 -138 -20 -33 -11 -65 -17 -71 -14 -6 4 -8 3 -5 -3 3 -5 -33 -29 -80 -54 l-86 -44 -131 0 c-142 0 -223 17 -267 56 l-24 21 25 -16 c13 -9 29 -16 35 -16 5 0 -3 8 -20 18 -30 19 -60 18 -72 -1 -3 -6 -1 -7 5 -3 25 15 10 -7 -39 -59 -28 -30 -57 -51 -64 -49 -7 3 -16 0 -21 -7 -5 -8 -3 -10 6 -4 8 5 11 4 6 -3 -4 -6 -13 -9 -20 -6 -8 3 -17 0 -22 -7 -5 -8 -3 -10 6 -4 9 5 11 4 6 -4 -4 -6 -12 -9 -17 -6 -11 7 -37 -6 -39 -20 0 -5 -9 -10 -20 -9 -10 0 -17 -3 -14 -7 8 -14 -97 -39 -160 -39 -102 1 -185 56 -217 144 -7 20 -17 36 -22 36 -4 0 -5 5 -1 12 4 7 3 8 -5 4 -6 -4 -8 -12 -5 -18 5 -7 1 -9 -9 -5 -9 3 -19 1 -23 -5 -4 -7 -3 -8 4 -4 7 4 12 5 12 2 0 -3 -10 -10 -21 -17 -16 -8 -20 -8 -15 0 4 6 -9 4 -28 -6 -20 -9 -34 -18 -32 -21 2 -2 14 1 25 8 12 6 21 8 21 6 0 -11 -63 -37 -76 -32 -8 3 -12 1 -9 -4 3 -5 -27 -20 -67 -32 -102 -32 -248 -31 -333 1 -56 22 -106 51 -60 35 11 -3 -2 8 -28 25 -27 17 -52 29 -56 27 -12 -8 -124 111 -117 122 3 6 1 14 -5 18 -8 5 -9 3 -4 -7 8 -12 6 -12 -8 0 -20 16 -23 36 -4 25 7 -4 9 -3 4 2 -5 5 -14 9 -20 9 -7 0 -12 8 -12 17 0 9 -4 20 -9 25 -5 5 -6 2 -2 -7 4 -8 0 -6 -9 5 -10 11 -31 49 -48 85 -51 107 -42 214 25 287 11 12 26 19 33 17 7 -3 16 0 21 7 5 8 3 10 -6 4 -9 -5 -11 -4 -6 4 4 6 11 9 16 6 11 -7 51 12 65 31 14 18 95 46 95 33 0 -6 21 18 48 52 26 34 66 73 90 86 23 14 42 23 42 20 0 -3 -19 -17 -43 -30 -24 -14 -50 -33 -57 -42 -14 -17 86 45 110 69 8 8 22 15 30 15 13 1 13 0 0 -9z"/>
            <path d="M3408 3563 c-17 -4 -18 -71 -18 -1224 0 -857 -3 -1233 -11 -1264 -12 -46 -74 -129 -90 -120 -5 4 -17 1 -26 -5 -16 -10 -16 -11 2 -6 19 6 19 6 1 -9 -26 -20 -121 -38 -165 -31 -54 10 -92 27 -84 39 4 6 0 8 -11 4 -11 -5 -15 -3 -10 5 5 7 2 9 -8 5 -18 -6 -58 32 -82 80 -14 29 -16 145 -16 1196 l0 1164 -57 7 c-32 4 -81 13 -109 20 -48 13 -53 12 -88 -9 -42 -25 -62 -43 -28 -26 12 6 22 9 22 7 0 -10 -81 -47 -89 -41 -5 2 -12 -2 -15 -11 -3 -9 -6 -516 -7 -1127 -1 -1138 -2 -1197 -38 -1189 -7 1 -9 -2 -6 -9 8 -12 -44 -71 -56 -63 -5 3 -17 0 -26 -6 -17 -11 -17 -11 0 -6 31 10 18 -3 -20 -20 -50 -22 -166 -22 -215 0 -39 17 -52 30 -20 20 16 -5 16 -5 -1 6 -9 6 -21 9 -26 6 -11 -7 -54 40 -77 84 -18 33 -19 83 -22 1121 l-2 1086 -43 13 c-46 14 -117 47 -117 56 0 3 6 2 13 -1 6 -4 1 3 -13 14 -14 11 -29 19 -35 17 -5 -2 -22 8 -37 22 -26 24 -29 24 -72 12 -25 -7 -46 -17 -48 -24 -3 -6 -4 -523 -3 -1150 0 -626 -3 -1128 -6 -1115 -7 23 -7 23 -8 2 -1 -12 -4 -30 -7 -40 -5 -15 -4 -15 5 -3 6 8 11 10 11 4 0 -18 -57 -92 -81 -104 -14 -8 -19 -8 -15 -1 5 7 1 9 -8 5 -9 -3 -14 -10 -11 -14 9 -15 -60 -35 -120 -35 -34 0 -80 8 -107 18 -57 22 -122 91 -137 143 -8 27 -11 405 -11 1195 l0 1157 -49 32 c-27 17 -55 39 -63 48 -7 9 5 3 27 -12 l40 -28 -35 30 c-19 17 -38 28 -42 26 -4 -3 -19 6 -33 20 -14 15 -30 26 -35 26 -5 0 -14 -26 -21 -57 -10 -43 -15 -52 -19 -35 -9 42 -1 -2891 9 -2938 5 -25 13 -54 16 -65 6 -16 5 -17 -4 -5 -6 8 -11 11 -11 5 0 -14 20 -43 20 -30 0 6 5 2 11 -8 5 -9 7 -22 3 -29 -4 -7 -3 -8 4 -4 11 6 16 -5 14 -26 -1 -3 6 -12 16 -20 15 -11 16 -11 7 2 -5 9 -2 7 7 -3 10 -11 16 -23 13 -27 -3 -4 3 -14 13 -21 15 -12 16 -12 7 1 -5 9 1 4 14 -10 13 -14 20 -19 16 -11 -5 9 1 8 19 -4 30 -20 33 -27 9 -19 -14 5 -15 4 -4 -4 8 -6 20 -8 27 -5 7 2 22 -5 33 -16 12 -12 21 -18 21 -14 0 4 5 2 12 -5 16 -16 31 -15 22 1 -4 6 2 4 13 -6 18 -16 82 -17 1026 -17 901 0 1007 2 1015 16 5 8 24 16 44 17 20 1 33 6 30 11 -3 5 2 6 12 3 11 -5 15 -3 10 5 -5 8 -2 9 9 5 9 -3 19 -1 23 5 5 7 2 8 -6 3 -9 -6 -11 -4 -6 4 5 7 14 10 21 7 7 -2 21 5 32 17 18 22 18 22 -2 7 -12 -9 -10 -5 4 8 13 13 31 32 40 41 11 12 13 12 6 1 -7 -12 -7 -13 5 -2 8 7 15 20 15 30 0 9 6 16 13 14 8 -1 11 1 8 6 -3 5 7 37 22 73 l27 64 3 393 3 392 27 -1 27 -1 -25 -9 c-16 -5 6 -6 60 -3 47 4 108 8 135 10 28 2 65 6 84 10 24 5 32 3 27 -5 -5 -7 4 -11 26 -10 28 2 29 2 8 6 -19 4 -6 10 49 24 40 10 78 16 84 12 5 -3 7 -2 4 4 -4 6 5 15 19 22 15 6 23 7 19 1 -17 -28 14 -2 87 73 45 45 73 71 62 57 l-19 -25 22 18 c12 11 19 25 17 32 -3 7 0 16 7 21 8 5 10 3 4 -6 -5 -8 -4 -11 3 -6 6 4 8 14 5 23 -5 12 -3 14 7 8 8 -5 11 -4 6 3 -9 14 25 83 37 75 6 -3 7 -1 3 5 -3 6 1 39 9 74 12 52 15 162 15 623 0 491 -2 568 -17 620 -9 33 -17 70 -17 82 -1 11 -5 19 -10 15 -5 -3 -6 2 -3 12 5 11 3 15 -5 10 -8 -5 -9 -2 -5 10 4 10 3 15 -3 11 -11 -7 -33 32 -26 44 3 5 -2 15 -12 22 -16 13 -16 13 -2 -6 14 -19 14 -19 -3 -6 -10 8 -16 20 -13 26 5 15 -65 84 -80 78 -6 -2 -17 4 -25 14 -13 17 -13 17 6 3 18 -13 19 -13 8 0 -14 19 -79 57 -69 42 5 -8 2 -10 -8 -6 -9 3 -14 9 -12 13 2 3 -6 7 -17 8 -12 0 -49 8 -82 17 -41 11 -114 16 -230 18 l-170 2 165 6 165 6 -162 2 c-144 2 -162 4 -166 20 -3 10 -6 5 -7 -13 -1 -19 -7 -2 -16 45 -7 41 -12 81 -9 87 2 7 -1 12 -8 10 -7 -1 -11 3 -10 10 2 8 -4 10 -14 6 -9 -4 -14 -2 -11 3 6 9 -92 15 -124 7z m544 -671 l23 -23 3 -515 c2 -474 1 -517 -14 -529 -9 -6 -14 -17 -10 -23 14 -23 -37 -32 -188 -32 l-156 0 0 565 0 565 153 2 152 2 -150 6 -150 6 157 0 c150 -1 159 -2 180 -24z m-1224 -2689 c-269 -2 -707 -2 -975 0 -269 1 -49 2 487 2 536 0 756 -1 488 -2z"/>
            <path d="M3309 3551 c10 -7 5 -11 -17 -16 -18 -3 -37 -3 -43 1 -7 4 -9 3 -6 -3 8 -13 -157 -78 -174 -68 -7 5 -10 4 -5 -3 4 -7 -20 -19 -64 -33 l-70 -23 2 -1161 c3 -1076 4 -1162 20 -1190 17 -30 78 -101 68 -80 -3 6 2 3 12 -7 17 -18 33 -25 24 -9 -3 4 6 6 19 3 14 -2 25 -7 25 -11 0 -3 16 -6 35 -7 19 0 35 3 35 8 0 4 5 8 11 8 5 0 7 -5 3 -11 -10 -17 37 0 55 20 9 9 30 28 46 41 l30 25 -25 -30 -25 -30 27 24 c15 13 25 27 23 31 -3 5 2 24 10 44 13 31 15 196 15 1255 0 1102 -2 1219 -16 1225 -23 9 -31 7 -15 -3z"/>
            <path d="M3375 2330 c0 -674 1 -949 2 -613 2 337 2 889 0 1226 -1 336 -2 61 -2 -613z"/>
            <path d="M915 2000 c0 -789 1 -1112 2 -717 2 394 2 1040 0 1435 -1 394 -2 71 -2 -718z"/>
            <path d="M1175 2260 c0 -641 1 -903 2 -583 2 321 2 845 0 1165 -1 321 -2 59 -2 -582z"/>
            <path d="M1227 3393 c-16 -4 -17 -64 -15 -1163 2 -637 -1 -1153 -5 -1147 -6 8 -7 5 -3 -6 3 -10 6 -21 6 -23 0 -3 3 -3 7 -1 5 2 24 -15 43 -37 19 -23 26 -34 16 -26 -12 9 -17 10 -12 3 4 -7 16 -18 28 -24 14 -8 18 -8 14 0 -5 7 -1 9 8 5 9 -3 13 -11 9 -17 -3 -6 -1 -7 5 -3 6 3 36 3 66 -2 31 -5 56 -5 56 0 0 4 7 8 15 8 9 0 29 7 45 15 38 20 40 11 3 -9 -16 -8 -22 -15 -14 -16 7 0 29 17 49 37 20 21 30 29 22 18 -12 -17 -12 -18 0 -7 8 7 15 20 15 30 0 9 5 16 12 15 8 -2 10 4 6 14 -4 9 -2 14 3 11 5 -4 8 443 6 1136 l-2 1141 -118 0 c-132 0 -204 10 -181 26 10 8 8 9 -8 4 -31 -9 -71 4 -52 16 15 9 6 10 -24 2z"/>
            <path d="M1195 2245 c0 -627 1 -885 2 -573 2 311 2 824 0 1140 -1 315 -2 60 -2 -567z"/>
            <path d="M2402 3303 c-6 -2 -10 -9 -7 -13 13 -21 -236 -68 -294 -57 -15 3 -31 3 -37 -1 -11 -8 -13 -2099 -3 -2117 4 -5 9 -22 13 -37 3 -14 18 -41 33 -60 27 -33 27 -33 2 -13 -14 11 -10 6 8 -11 22 -21 41 -30 53 -27 12 3 22 -1 26 -11 3 -9 10 -16 16 -16 5 0 6 5 3 10 -3 6 -1 10 4 10 6 0 11 -3 11 -7 0 -5 16 -8 35 -9 19 0 35 3 35 8 0 4 5 8 11 8 5 0 7 -5 3 -12 -5 -8 -2 -9 10 -5 10 4 23 7 29 7 7 0 6 5 -3 11 -12 9 -11 10 7 6 13 -3 26 0 30 5 4 7 1 8 -8 3 -16 -9 -8 -2 36 35 l30 25 -25 -30 -25 -30 27 24 c15 13 26 27 23 31 -2 3 2 24 10 46 21 59 22 2224 1 2224 -8 0 -20 2 -28 4 -7 3 -19 2 -26 -1z"/>
            </g>
            </svg>
        </div>
    </div>
</div>

<?php

// JS
$js = <<<JS
    $('.signIn').click(function() {
        if (!$(this).hasClass('load')) {
            $(this).addClass('load');
            // $.ajax({
            //     url: ''
            // });
        }
    });
JS;

$this->registerJs($js);
 ?>