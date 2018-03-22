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
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>2nd Force Recon Co.</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
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
			['label' => 'Reunion', 'url' => ['/site/reunion'], 'linkOptions' => ['style' => 'color: #ffd700;'],'visible' => !Yii::$app->user->isGuest],
			['label' => 'Roster', 'url' => ['/members/index'], 'linkOptions' => ['style' => 'color: #ffd700;'],'visible' => !Yii::$app->user->isGuest],
			['label' => 'Profile', 'url' => ['/members/profile'], 'linkOptions' => ['style' => 'color: #ffd700;'],'visible' => !Yii::$app->user->isGuest],
			['label' => 'Admin', 'url' => ['/admin/index'], 'linkOptions' => ['style' => 'color: #ffd700;'],'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->is_admin ==1],
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


   <div class="container-fluid">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div> 


<?php require("footer.php"); ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
