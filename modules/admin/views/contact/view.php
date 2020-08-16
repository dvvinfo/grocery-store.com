<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Contact */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Контакты', 'url' => ['index']];
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
                        'confirm' => 'Удалить запись?',
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
            <div class="box-body">
<div class="contact-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'tel',
            'email:email',
            'address',
            'facebook',
            'twitter',
            'google',
            'instagram',
            'dribbble',
            //'vk',
        ],
    ]) ?>

</div>
            </div>
        </div>
    </div>
</div>
