<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Members */


?>
<style>
	.navbar{
background-color: #336600 !important;
} 
	.wrap {
    color: #1a1601;
}
</style>
<div class="members-view">
<br><br>
    <h1><?= Html::encode($this->title) ?></h1>

 

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'lastName',
            'firstName',
            'email:email',
			'telePhone',
            'address',
            'city',
            'state',
            'zipCode',
            'years',
            'deceased',
            'obituary_link',
            'nextOfkin',
            // 'password',
            // 'password_reset_token',
            // 'password_reset_expires_at',
            // 'activation_token',
            // 'is_active',
            // 'is_admin',
        ],
    ]) ?>
    <a href="<?= Yii::$app->getUrlManager()->createUrl(['members/update'])?>"><button class="btn btn-info">Update Profile</button></a>
</div>
