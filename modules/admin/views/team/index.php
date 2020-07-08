<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Команда';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <?= Html::a('Добавить в команду', ['create'], ['class' => 'btn btn-success']) ?>
            </div>
            <div class="box-body">
<div class="team-index">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'position',
            //'img',
            [  'attribute' => 'img',
                'value' => function($data) {
                    return "/{$data->img}" ;

                },
                'format' => ['image', ['width'=> 100]],
            ],
            'faceboock',
            'twitter',
            'google',
            //'vk',
            'instagram',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
            </div>
        </div>
    </div>
</div>
