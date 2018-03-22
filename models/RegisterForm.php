<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Members */
/* @var $form ActiveForm */
?>
<div class="SignupForm">

    <?php $form = ActiveForm::begin(); ?>

        <?// = $form->field($model, 'id') ?>
        <?= $form->field($model, 'lastName') ?>
        <?= $form->field($model, 'firstName') ?>
        <?= $form->field($model, 'telePhone') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'homeTown') ?>
        <?= $form->field($model, 'state') ?>
        <?= $form->field($model, 'years') ?>
        <?= $form->field($model, 'nextOfkin') ?>
        <?// = $form->field($model, 'password') ?>
        <?= $form->field($model, 'zipCode') ?>
        <?// = $form->field($model, 'is_active') ?>
        <?// = $form->field($model, 'is_admin') ?>
        <?// = $form->field($model, 'password_reset_expires_at') ?>
        <?= $form->field($model, 'address') ?>
        <?// = $form->field($model, 'password_reset_token') ?>
        <?// = $form->field($model, 'activation_token') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- SignupForm -->
