<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Посты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <?= Html::a('Добавить пост', ['create'], ['class' => 'btn btn-success']) ?>
            </div>
            <div class="box-body">
<div class="post-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'created_at:dateTime',
            'updated_at' ,
            'title',
            'text:ntext',
           // 'img',
            [  'attribute' => 'img',
                'value' => function($data) {
                    return "/{$data->img}" ;

                },
                'format' => ['image', ['width'=> 100]],
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
            </div>
        </div>
    </div>
</div>
