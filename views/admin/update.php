<br><br>
<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Admin */
$this->title = 'Update User: ' . $model->firstName.' '.$model->lastName;
// $this->params['breadcrumbs'][] = ['label' => 'Admins', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<style>
	.navbar{
background-color: #336600 !important;
} 
	.wrap {
    color: #1a1601;
}
</style>
<div class="admin-update">

    <h1><?= Html::encode($this->title) ?></h1>
<br>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
