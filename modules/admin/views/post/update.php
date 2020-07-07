<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = 'Редактировать пост: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Посты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
<div class="post-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
            </div>
        </div>
    </div>
</div>
