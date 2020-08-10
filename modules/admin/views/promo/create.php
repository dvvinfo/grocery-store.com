<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Promo */

$this->title = 'Добавить акцию';
$this->params['breadcrumbs'][] = ['label' => 'Акции', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
<div class="promo-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
            </div>
        </div>
    </div>
</div>
