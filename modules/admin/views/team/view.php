<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Team */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Команда', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <?= Html::a('Редактировать ', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Удалить члена команды?',
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
<div class="team-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'position',
            //'img',
            [
                'attribute' => 'img',
                'value' => "/{$model->img}",
                'format' => ['image', ['width'=> 100]]

            ],
            'faceboock',
            'twitter',
            'google',
            'vk',
            'instagram',
        ],
    ]) ?>

</div>
            </div>
        </div>
    </div>
</div>
