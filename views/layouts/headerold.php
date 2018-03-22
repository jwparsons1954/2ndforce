<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<style>
	.navbar{
background-color: #336600 !important;
} 
</style>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '2nd Force Reconnaissance Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-fixed-top my-navbar',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right my-navbar'],
        'items' => [
			['label' => 'Home', 'url' => ['/site/index'], 'linkOptions' => ['style' => 'color: #ffd700;']],			
            ['label' => 'About', 'url' => ['/site/about'], 'linkOptions' => ['style' => 'color: #ffd700;']],
            ['label' => 'Contact', 'url' => ['/site/contact'], 'linkOptions' => ['style' => 'color: #ffd700;']],
			['label' => 'Reunion', 'url' => ['/site/reunion'], 'linkOptions' => ['style' => 'color: #ffd700;']],
			['label' => 'Roster', 'url' => ['/members/index'], 'linkOptions' => ['style' => 'color: #ffd700;']],
			['label' => 'Profile', 'url' => ['/site/test'], 'linkOptions' => ['style' => 'color: #ffd700;']],
			['label' => 'Admin', 'url' => ['/members/index'], 'linkOptions' => ['style' => 'color: #ffd700;']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login'], 'linkOptions' => ['style' => 'color: #ffd700;']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout ( ' ." ". Yii::$app->user->identity->firstName." ".Yii::$app->user->identity->lastName. ' )',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
			
        ],
    ]);
    NavBar::end();
    ?>