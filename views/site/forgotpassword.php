<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* $this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title; */
?>
<style>
.help-block-error{
  color:#FFF !important;
}
</style>

<div class="site-login">
    <h1>Password Reset Token</h1>
<br><br>
    <p>Please fill out the following fields to reset password:</p>

<!-- <?php if (Yii::$app->session->hasFlash('success')){ ?>
    <div class="alert alert-danger">
    <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php } ?>    
<?php if (Yii::$app->session->hasFlash('error')){ ?>
    <div class="alert alert-danger">
    <?= Yii::$app->session->getFlash('error') ?>
    </div>
<?php } ?> -->   
    <?php $form = ActiveForm::begin([
        'id' => 'forgotpassword-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Reset password', ['class' => 'btn btn-primary', 'name' => 'forgotpassword-button']) ?>
            </div>
        </div>


    <?php ActiveForm::end(); ?>
 <!--   <div class="col-lg-offset-1" style="color:#999;">
        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
        To modify the username/password, please check out the code <code>app\models\User::$users</code>.
    </div> -->
</div>