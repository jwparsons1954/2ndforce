<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Members */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="members-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lastName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firstName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telePhone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zipCode')->textInput() ?>

    <?= $form->field($model, 'years')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deceased')->textInput() ?>

    <?= $form->field($model, 'obituary_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nextOfkin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

   <?= Html::submitButton('Update', ['class' => 'btn btn-primary', 'name' => 'update-button']) ?>

    <?php ActiveForm::end(); ?>

</div>
