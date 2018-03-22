<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MembersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Roster';
// $this->params['breadcrumbs'][] = $this->title;
?>
<br><br><style>
	.navbar{
background-color: #336600 !important;
} 
</style>
<div class="members-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
    
    </p>
	<center>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
		'tableOptions' => [

        ],
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'lastName',
            'firstName',
            'telePhone',
            'email:email',
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
                    ['class' => 'yii\grid\ActionColumn',
			'header'=>'Action',
			'template' => '{view}',
			],
		],
    ]); ?>
</div>
