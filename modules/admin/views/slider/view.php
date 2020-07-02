<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Slider */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Слайды', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
            <div class="box-body">
                <div class="slider-index">
<div class="slider-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            //'img',
            [
                'attribute' => 'img',
                'value' => "/{$model->img}",
                'format' => ['image', ['width'=> 300]]

            ],
        ],
    ]) ?>

</div>
                </div>
            </div>
        </div>
    </div>
</div>
