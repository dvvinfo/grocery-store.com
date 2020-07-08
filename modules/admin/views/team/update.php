<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Team */

$this->title = 'Редактировать : ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Команда', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
<div class="team-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
            </div>
        </div>
    </div>
</div>
