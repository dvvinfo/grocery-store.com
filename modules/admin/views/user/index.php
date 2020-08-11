<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <?//= Html::a('Добавить пользователя', ['create'], ['class' => 'btn btn-success']) ?>
            </div>
            <div class="box-body">
<div class="user-index">


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'username',
            //'password',
            //'auth_key',
            //'avatar',
            [  'attribute' => 'avatar',
                'value' => function($data) {
                    return "/{$data->avatar}" ;

                },
                'format' => ['image', ['width'=> 100]],
            ],
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
            </div>
        </div>
    </div
</div>

