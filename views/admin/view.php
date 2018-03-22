<br><br>
<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Admin */

$this->title = 'View User: ' . $model->firstName.' '.$model->lastName;
// $this->params['breadcrumbs'][] = ['label' => 'Admins', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<style>
	.navbar{
background-color: #336600 !important;
} 
	.wrap {
    color: #1a1601;
}
</style>
<div class="admin-view">

    <h1><?= Html::encode($this->title) ?></h1>
<br><br>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

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
            'is_admin',
        ],
    ]) ?>

</div>
