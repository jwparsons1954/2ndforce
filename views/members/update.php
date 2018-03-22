<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Members */

$this->title = 'Update Profile';

?>
<style>
	.navbar{
background-color: #336600 !important;
} 
	.wrap {
    color: #1a1601;
}
</style>
<div class="members-update">
<br><br>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
