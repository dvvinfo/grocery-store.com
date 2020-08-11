<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\User */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
            <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
<!--            --><?//= Html::a('Delete', ['delete', 'id' => $model->id], [
//                'class' => 'btn btn-danger',
//                'data' => [
//                    'confirm' => 'Are you sure you want to delete this item?',
//                    'method' => 'post',
//                ],
//            ]) ?>
            </div>
<div class="user-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            //'password',
            //'auth_key',
            //'avatar',
            [
                'attribute' => 'avatar',
                'value' => "/{$model->avatar}",
                'format' => ['image', ['width'=> 100]]

            ],
            'name',
        ],
    ]) ?>

</div>
        </div>
    </div>
</div>

